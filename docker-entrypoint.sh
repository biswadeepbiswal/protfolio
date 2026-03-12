#!/bin/bash
set -e

# Generate app key if not set
if [ -z "$APP_KEY" ]; then
    php artisan key:generate --force
fi

# Run migrations
php artisan migrate --force

# Seed data on first deploy (only if about_settings table is empty)
php artisan db:seed --class=ResumeSeeder --force 2>/dev/null || true

# Create storage link
php artisan storage:link --force 2>/dev/null || true

# Cache config for production
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Start Apache
apache2-foreground
