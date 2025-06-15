#!/bin/bash

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

# Function to check if a command exists
command_exists() {
    command -v "$1" >/dev/null 2>&1
}

# Check prerequisites
echo -e "${YELLOW}Checking prerequisites...${NC}"

# Check Docker
if ! command_exists docker; then
    echo -e "${RED}Error: Docker is not installed.${NC}"
    echo "Please install Docker from https://docs.docker.com/get-docker/"
    exit 1
fi

# Check Docker Compose
if ! command_exists docker-compose; then
    echo -e "${RED}Error: Docker Compose is not installed.${NC}"
    echo "Please install Docker Compose from https://docs.docker.com/compose/install/"
    exit 1
fi

# Check if .env file exists
if [ ! -f .env ]; then
    echo -e "${YELLOW}Warning: .env file not found. Creating from .env.example...${NC}"
    if [ -f .env.example ]; then
        cp .env.example .env
        echo -e "${GREEN}Created .env file from .env.example${NC}"
    else
        echo -e "${RED}Error: Neither .env nor .env.example found.${NC}"
        exit 1
    fi
fi

# Create necessary directories
echo -e "${YELLOW}Creating necessary directories...${NC}"
mkdir -p docker/nginx
mkdir -p docker/mysql

# Clean up MySQL socket file if it exists
if [ -S "docker/mysql/mysql.sock" ]; then
    echo -e "${YELLOW}Cleaning up MySQL socket file...${NC}"
    rm -f docker/mysql/mysql.sock
fi

# Check if nginx configuration exists
if [ ! -f docker/nginx/app.conf ]; then
    echo -e "${RED}Error: Nginx configuration file not found at docker/nginx/app.conf${NC}"
    exit 1
fi

# Build and start the containers
echo -e "${YELLOW}Building and starting containers...${NC}"
docker-compose up -d --build

# Wait for MySQL to be ready
echo -e "${YELLOW}Waiting for MySQL to be ready...${NC}"
sleep 10

# Set proper permissions (using chmod for Windows compatibility)
echo -e "${YELLOW}Setting proper permissions...${NC}"
docker-compose exec app chmod -R 775 storage bootstrap/cache

# Install Breeze if not already installed
if [ ! -d "resources/views/auth" ]; then
    echo -e "${YELLOW}Installing Laravel Breeze...${NC}"
    docker-compose exec app composer require laravel/breeze --dev
    docker-compose exec app php artisan breeze:install blade
fi

# Run migrations
echo -e "${YELLOW}Running database migrations...${NC}"
docker-compose exec app php artisan migrate

# Generate application key if not set
if ! grep -q "^APP_KEY=base64:" .env; then
    echo -e "${YELLOW}Generating application key...${NC}"
    docker-compose exec app php artisan key:generate
fi

echo -e "${GREEN}Laravel application is now running at http://localhost:8000${NC}"
echo -e "${GREEN}You can access:${NC}"
echo -e "${GREEN}- Login: http://localhost:8000/login${NC}"
echo -e "${GREEN}- Register: http://localhost:8000/register${NC}"
echo -e "${GREEN}- Dashboard: http://localhost:8000/dashboard${NC}" 