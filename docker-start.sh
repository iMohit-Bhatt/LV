#!/bin/bash

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

# Parse command line arguments
NO_CACHE=false
while [[ "$#" -gt 0 ]]; do
    case $1 in
        --no-cache) NO_CACHE=true ;;
        *) echo "Unknown parameter: $1"; exit 1 ;;
    esac
    shift
done

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
if [ "$NO_CACHE" = true ]; then
    echo -e "${YELLOW}Building without cache...${NC}"
    docker-compose build --no-cache
    docker-compose up -d
else
    docker-compose up -d --build
fi

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

# Run database seeding
echo -e "${YELLOW}Seeding database with default data...${NC}"
docker-compose exec app php artisan db:seed

# Clear caches
echo -e "${YELLOW}Clearing application caches...${NC}"
docker-compose exec app php artisan cache:clear
docker-compose exec app php artisan config:clear
docker-compose exec app php artisan view:clear

echo -e "${GREEN}Laravel application is now running at http://localhost:8080${NC}"
echo -e "${GREEN}You can access:${NC}"
echo -e "${GREEN}- Login: http://localhost:8080/login${NC}"
echo -e "${GREEN}- Register: http://localhost:8080/register${NC}"
echo -e "${GREEN}- Dashboard: http://localhost:8080/dashboard${NC}" 