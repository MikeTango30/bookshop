#!/bin/bash

if [ ! -f "src/.env" ]; then
    if [ -f "src/.env.example" ]; then
      echo "Creating .env file..."
        cp "src/.env.example" src/.env
        sed -i "s/localhost/localhost:8080/g" src/.env
        sed -i "s/DB_HOST=127.0.0.1/DB_HOST=laravel_mysql/g" src/.env
        sed -i "s/DB_USERNAME=root/DB_USERNAME=admin/g" src/.env
        sed -i "s/DB_PASSWORD=/DB_PASSWORD=secret/g" src/.env
    else
        echo >&2 "No .env.example file..."
        exit 1
    fi
fi

# Start server
echo "Starting docker containers..."
docker-compose -f tools/docker-compose.yml up -d

# Install dependencies
if [ ! -d src/vendor ]; then
  echo "Executing composer install..."
  docker-compose -f tools/docker-compose.yml exec laravel_php composer install
fi

# Generate App Key
echo "Generating App Key..."
docker-compose -f tools/docker-compose.yml exec php php /var/www/artisan key:generate

echo "Now open in browser http://127.0.0.1:8080"