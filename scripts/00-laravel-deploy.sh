#!/usr/bin/env bash
echo "Running composer"
composer install --no-dev --working-dir=/var/www/html

echo "Generating application key..."
php artisan key:generate --force

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Caching views..."
php artisan view:cache

echo "Running migrations..."
php artisan migrate --force

echo "Creating storage link..."
php artisan storage:link || echo "Storage link already exists"

echo "Optimizing for production..."
php artisan optimize

echo "Setting proper permissions..."
chown -R nginx:nginx /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

echo "Laravel deployment completed successfully!"