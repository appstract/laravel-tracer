# Tracer

## Installation

```sh
composer require rokr/tracer
```

First do the composer install then add the following class to your config/app.php service providers list.
```sh
Rokr\Tracer\TracerServiceProvider::class,
```

Finally publish the config file
```sh
php artisan vendor:publish
```

## Basic Usage

In your .env file, if APP_DEBUG is set to 'true' you see the paths of all the blade files that are loaded into your templates. To remove the paths simply set APP_DEBUG to false.
