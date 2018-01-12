# Laration

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/0cf8dab7c61944988d9e2da8edae44cc)](https://www.codacy.com/app/matheus-marabesi/laration?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=marabesi/laration&amp;utm_campaign=Badge_Grade)
[![Latest Stable Version](https://poser.pugx.org/marabesi/laration/v/stable)](https://packagist.org/packages/marabesi/laration)
[![Total Downloads](https://poser.pugx.org/marabesi/laration/downloads)](https://packagist.org/packages/marabesi/laration)
[![Latest Unstable Version](https://poser.pugx.org/marabesi/laration/v/unstable)](https://packagist.org/packages/marabesi/laration)
[![License](https://poser.pugx.org/marabesi/laration/license)](https://packagist.org/packages/marabesi/laration)
[![composer.lock](https://poser.pugx.org/marabesi/laration/composerlock)](https://packagist.org/packages/marabesi/laration)
[![BCH compliance](https://bettercodehub.com/edge/badge/marabesi/laration?branch=master)](https://bettercodehub.com/)

Simple package to see all current configurations being used by your Laravel application.

Have you ever wanted to list your environment variables without open each file in config folder? With Laration it is an easy task, just run **php artisan laration:list** and all variables will be listed.

![config list](https://s14.postimg.org/nqwnap9vl/Screen_Shot_2016_10_29_at_12_34_56.png)

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

# Installation

- Require Laration with composer

```
composer require marabesi/laration
```
 
### Are you using Laravel 5.5?

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
