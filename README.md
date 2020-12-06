# Laration

[![Build Status](https://travis-ci.org/marabesi/laration.svg?branch=master)](https://travis-ci.org/marabesi/laration)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/0cf8dab7c61944988d9e2da8edae44cc)](https://packagist.org/packages/marabesi/laration)
[![BCH compliance](https://bettercodehub.com/edge/badge/marabesi/laration?branch=master)](https://bettercodehub.com/)
[![HitCount](http://hits.dwyl.io/marabesi/laration.svg)](http://hits.dwyl.io/marabesi/laration)

Simple package to see all current configurations being used by your Laravel application.

Have you ever wanted to list your environment variables without open each file in config folder? With Laration it is an easy task, just run **php artisan laration:list** and all variables will be listed.

If no argument is given to list it will display all variables at once.

# Before install

|Laravel version|Laration version|
|---------------|----------------|
|5.0| 1.0|
|5.1| 1.0|
|5.2| 1.0|
|5.3| 1.0|
|5.4| 1.0|
|5.5| 1.1|
|5.6, 5.7, 5.8| 1.3 |
|6.0| 1.4 |
|>= 7| 1.5 |

# Installation

- Require Laration with composer

```
composer require marabesi/laration
```

# Laravel <= 5.4

Add the `Marabesi\ServiceProvider::class` in the provider array (config/app.php)
 
# Laravel >= 5.5?

If yes, that's it! Laration will be add to your project by [Laravel's 5.5 Package Auto-Discovery](https://laravel.com/docs/5.5/packages#package-discovery).

# Available commands

Display only **app** variables

```
php artisan laration:list app
```

Display only **broadcasting** variables

```
php artisan laration:list broadcasting
```

Display only **cache** variables

```
php artisan laration:list cache
```

Display only **database** variables

```
php artisan laration:list database
```

Display only **filesystem** variables

```
php artisan laration:list filesystem
```

Display only **mail** variables

```
php artisan laration:list mail
```

Display only **queue** variables

```
php artisan laration:list queue
```

Display only **session** variables

```
php artisan laration:list session
```

Display only **view** variables

```
php artisan laration:list view
```
