#!/bin/sh
# Database reload script

php artisan cache:clear
rm -rf vendor composer.lock
composer install
