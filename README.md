# Tracer

## Installation

```sh
composer require rokr/tracer
```

First do the composer install then add the following class to your config/app.php service providers list.
```sh
Rokr\Tracer\TracerServiceProvider::class,
```

Publish the config file
```sh
php artisan vendor:publish
```
A tracer.php file will be created in your app/config directory.

## Basic Usage

In app/config tracer.php file, if trace is set to true you see the paths of all the blade files that are loaded into your templates. To remove the paths simply set trace to false. If your views are located at another directory you can set the correct path here.
