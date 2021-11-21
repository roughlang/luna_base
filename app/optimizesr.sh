#!/bin/bash

# migrate
./vendor/bin/sail artisan migrate;
# composer
./vendor/bin/sail php composer.phar update;
# laravel
./vendor/bin/sail artisan optimize:clear;
./vendor/bin/sail artisan optimize;
./vendor/bin/sail artisan view:cache;
./vendor/bin/sail php composer.phar dump-autoload;
    

