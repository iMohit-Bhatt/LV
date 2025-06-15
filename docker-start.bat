@echo off
setlocal enabledelayedexpansion

:: Colors for output
set "RED=[91m"
set "GREEN=[92m"
set "YELLOW=[93m"
set "NC=[0m"

:: Parse command line arguments
set "NO_CACHE=false"
if "%1"=="--no-cache" set "NO_CACHE=true"

:: Check prerequisites
echo %YELLOW%Checking prerequisites...%NC%

:: Check Docker
where docker >nul 2>nul
if %ERRORLEVEL% neq 0 (
    echo %RED%Error: Docker is not installed.%NC%
    echo Please install Docker from https://docs.docker.com/get-docker/
    exit /b 1
)

:: Check Docker Compose
where docker-compose >nul 2>nul
if %ERRORLEVEL% neq 0 (
    echo %RED%Error: Docker Compose is not installed.%NC%
    echo Please install Docker Compose from https://docs.docker.com/compose/install/
    exit /b 1
)

:: Check if .env file exists
if not exist .env (
    echo %YELLOW%Warning: .env file not found. Creating from .env.example...%NC%
    if exist .env.example (
        copy .env.example .env
        echo %GREEN%Created .env file from .env.example%NC%
    ) else (
        echo %RED%Error: Neither .env nor .env.example found.%NC%
        exit /b 1
    )
)

:: Create necessary directories
echo %YELLOW%Creating necessary directories...%NC%
if not exist docker\nginx mkdir docker\nginx
if not exist docker\mysql mkdir docker\mysql

:: Clean up MySQL socket file if it exists
if exist "docker\mysql\mysql.sock" (
    echo %YELLOW%Cleaning up MySQL socket file...%NC%
    del /f "docker\mysql\mysql.sock"
)

:: Check if nginx configuration exists
if not exist "docker\nginx\app.conf" (
    echo %RED%Error: Nginx configuration file not found at docker\nginx\app.conf%NC%
    exit /b 1
)

:: Build and start the containers
echo %YELLOW%Building and starting containers...%NC%
if "%NO_CACHE%"=="true" (
    echo %YELLOW%Building without cache...%NC%
    docker-compose build --no-cache
    docker-compose up -d
) else (
    docker-compose up -d --build
)

:: Wait for MySQL to be ready
echo %YELLOW%Waiting for MySQL to be ready...%NC%
timeout /t 10 /nobreak >nul

:: Install composer dependencies
echo %YELLOW%Installing composer dependencies...%NC%
docker-compose exec app composer install

:: Set proper permissions (using chmod for Windows compatibility)
echo %YELLOW%Setting proper permissions...%NC%
docker-compose exec app chmod -R 775 storage bootstrap/cache

:: Install Breeze if not already installed
if not exist "resources\views\auth" (
    echo %YELLOW%Installing Laravel Breeze...%NC%
    docker-compose exec app composer require laravel/breeze --dev
    docker-compose exec app php artisan breeze:install blade
)

:: Install and build frontend assets
echo %YELLOW%Installing and building frontend assets...%NC%
docker-compose exec app npm install
docker-compose exec app npm run build

:: Run migrations
echo %YELLOW%Running database migrations...%NC%
docker-compose exec app php artisan migrate

:: Generate application key if not set
findstr /C:"APP_KEY=base64:" .env >nul
if %ERRORLEVEL% neq 0 (
    echo %YELLOW%Generating application key...%NC%
    docker-compose exec app php artisan key:generate
)

:: Clear Laravel caches
echo %YELLOW%Clearing Laravel caches...%NC%
docker-compose exec app php artisan config:clear
docker-compose exec app php artisan cache:clear
docker-compose exec app php artisan view:clear
docker-compose exec app php artisan route:clear

echo %GREEN%Laravel application is now running at http://localhost:8000%NC%
echo %GREEN%You can access:%NC%
echo %GREEN%- Login: http://localhost:8000/login%NC%
echo %GREEN%- Register: http://localhost:8000/register%NC%
echo %GREEN%- Dashboard: http://localhost:8000/dashboard%NC%

endlocal 