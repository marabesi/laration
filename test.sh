#!/bin/bash

echo "!!!SETTING UP LARATION 1.0 WITH LARAVEL 5.4!!!"

composer create-project --prefer-dist -q laravel/laravel test-project-5-4 "5.4.*"
cd test-project-5-4 &&
    composer require marabesi/laration:1.0 -vv &&
    cp ../app.php config/app.php &&
    php artisan laration:list app &&
    cd .. &&
    rm -rf test-project-5-4

if [ -d "test-project-5-4" ]; then
    echo "ERROR ::: test-project-5-4 folder exists."
    exit 1
fi

echo "!!!SUCCESS!!!"
echo "!!!LARAVEL 5.4!!!"
echo "!!!SUCCESS!!!"

echo "!!!SETTING UP LARATION 1.1 WITH LARAVEL 5.5!!!"

composer create-project --prefer-dist -q laravel/laravel test-project-5-5 "5.5.*"
cd test-project-5-5 &&
    composer require marabesi/laration:1.1 -vv &&
    php artisan laration:list app &&
    cd .. &&
    rm -rf test-project-5-5

if [ -d "test-project-5-5" ]; then
    echo "ERROR ::: test-project-5-5 folder exists."
    exit 1
fi

echo "!!!SUCCESS!!!"
echo "!!!LARAVEL 5.5!!!"
echo "!!!SUCCESS!!!"

echo "!!!SETTING UP LARATION 1.2 WITH LARAVEL 5.6!!!"

composer create-project --prefer-dist -q laravel/laravel test-project-5-6 "5.6.*"
cd test-project-5-6 &&
    composer require marabesi/laration:1.2 -vv &&
    php artisan laration:list app &&
    cd .. &&
    rm -rf test-project-5-6

if [ -d "test-project-5-6" ]; then
    echo "ERROR ::: test-project-5-6 folder exists."
    exit 1
fi

echo "!!!SUCCESS!!!"
echo "!!!LARAVEL 5.6!!!"
echo "!!!SUCCESS!!!"

echo "!!!SETTING UP LARATION 1.2 WITH LARAVEL 5.7!!!"

composer create-project --prefer-dist -q laravel/laravel test-project-5-7 "5.7.*"
cd test-project-5-7 &&
    composer require marabesi/laration:1.2 -vv &&
    php artisan laration:list app &&
    cd .. &&
    rm -rf test-project-5-7

if [ -d "test-project-5-7" ]; then
    echo "ERROR ::: test-project-5-7 folder exists."
    exit 1
fi

echo "!!!SUCCESS!!!"
echo "!!!LARAVEL 5.7!!!"
echo "!!!SUCCESS!!!"

echo "!!!SETTING UP LARATION 1.4 WITH LARAVEL 6.0!!!"

composer create-project --prefer-dist -q laravel/laravel test-project-6-0 "6.0.*"
cd test-project-6-0 &&
    composer require marabesi/laration:1.4 -vv &&
    php artisan laration:list app &&
    cd .. &&
    rm -rf test-project-6-0

if [ -d "test-project-6-0" ]; then
    echo "ERROR ::: test-project-6-0 folder exists."
    exit 1
fi

echo "!!!SUCCESS!!!"
echo "!!!LARAVEL 6.0!!!"
echo "!!!SUCCESS!!!"

echo "!!!SETTING UP LARATION 1.5 WITH LARAVEL 7.0!!!"

composer create-project --prefer-dist -q laravel/laravel test-project-7-0 "7.0.*"
cd test-project-7-0 &&
    composer require marabesi/laration:1.5 -vv &&
    php artisan laration:list app &&
    cd .. &&
    rm -rf test-project-7-0

if [ -d "test-project-7-0" ]; then
    echo "ERROR ::: test-project-7-0 folder exists."
    exit 1
fi

echo "!!!SUCCESS!!!"
echo "!!!LARAVEL 7.0!!!"
echo "!!!SUCCESS!!!"

echo "!!!SETTING UP LARATION 1.5 WITH LARAVEL 8.0!!!"

composer create-project --prefer-dist -q laravel/laravel test-project-8-0 "8.0.*"
cd test-project-8-0 &&
    composer require marabesi/laration:1.5 -vv &&
    php artisan laration:list app &&
    cd .. &&
    rm -rf test-project-8-0

if [ -d "test-project-8-0" ]; then
    echo "ERROR ::: test-project-8-0 folder exists."
    exit 1
fi

echo "!!!SUCCESS!!!"
echo "!!!LARAVEL 8.0!!!"
echo "!!!SUCCESS!!!"