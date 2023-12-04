#!/bin/sh
# Database reload script

php artisan cache:clear
composer install
