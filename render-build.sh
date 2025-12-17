#!/bin/bash

# Install dependencies
composer install --no-dev --optimize-autoloader --no-interaction

# Generate app key if not exists
if [ -z "$APP_KEY" ]; then
  php artisan key:generate --force
fi

# Cache configuration
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Run migrations (skip if using seed data for demo)
php artisan migrate --force

# Create storage link
php artisan storage:link

# Set permissions (Render runs as root, so this is usually fine)
chmod -R 755 storage bootstrap/cache