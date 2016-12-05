# Laration
Simple package to see all current configurations being used by your Laravel application. 

Have you ever wanted to list your environment variables without open each file in config folder? With Laration it is a easy task, just run **php artisan laration:list** and all variables will be listed.

![config list](https://s14.postimg.org/nqwnap9vl/Screen_Shot_2016_10_29_at_12_34_56.png)

If no argument is given to list it will display all variables at once.

# Installation

- Inside your composer.json add the following dependency

```
{
	"marabesi/laration": "^1.0"
}
```

- Update yor project

```
composer update
```

- Add Laration class to your available commands, open the file **app/Console/Kernel.php** and add the following line on ```$commands``` array

``` php
protected $commands = [
    // Commands\Inspire::class,
    \Marabesi\Laration::class, // Add this line
];
```

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
