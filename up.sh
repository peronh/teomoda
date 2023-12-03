#!/bin/sh
# Database reload script

git pull origin master -n
composer.phar install -n
