#!/bin/bash

composer create-project --prefer-dist laravel/laravel test-project-5-4 "5.4.*" -vv
cd test-project-5-4 &&
    composer require marabesi/laration:1.0 -vv &&
    php artisan laration:list app &&
    cd .. &&
    rm -rf test-project-5-4 &&

composer create-project --prefer-dist laravel/laravel test-project-5-5 "5.5.*" -vv
cd test-project-5-5 &&
    composer require marabesi/laration:1.1 -vv &&
    php artisan laration:list app &&
    cd .. &&
    rm -rf test-project-5-5 &&

composer create-project --prefer-dist laravel/laravel test-project-5-6 "5.6.*" -vv
cd test-project-5-6 &&
    composer require marabesi/laration:1.2 -vv &&
    php artisan laration:list app &&
    cd .. &&
    rm -rf test-project-5-6
