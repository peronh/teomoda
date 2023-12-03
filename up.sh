#!/bin/sh
# Database reload script

php artisan cache:clear
git pull origin master
composer install
