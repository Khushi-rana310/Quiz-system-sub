#!/bin/bash
set -e

# Render injects a PORT env var your service must listen on. Default to 80 for local runs.
PORT=${PORT:-80}
sed -i "s/80/${PORT}/g" /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf

# Generate APP_KEY only if it's missing (safe to run every deploy)
if [ -z "$APP_KEY" ]; then
    echo "WARNING: APP_KEY is not set. Set it in Render's environment variables."
fi

# Cache config/routes/views for production performance
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Run any pending migrations (--force required in production)
php artisan migrate --force

# Start Apache in the foreground (keeps the container alive)
apache2-foreground
