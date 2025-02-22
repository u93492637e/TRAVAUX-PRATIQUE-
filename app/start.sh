#!/usr/bin/env bash

composer install --no-dev --optimize-autoloader


php artisant migrate --force



php-fpm -D && nginx -g 'daemon off;"

chmod +x start.sh
