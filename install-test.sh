#!/bin/bash

composer create-project --prefer-dist laravel/laravel test-project "5.5.*" -vv
cd test-project &&
    composer require marabesi/laration -vv &&
    php artisan laration:list app