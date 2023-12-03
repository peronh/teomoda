#!/bin/sh
# Database reload script

git pull origin master -n
composer install /home/modadpco/public_html/teomoda.com
