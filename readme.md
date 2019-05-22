## Hit-Logger(Log Http Request and Response)
A Laravel 5 package for logging http request and response. Built this package being highly encouraged by 
[spatie/laravel-http-logger](https://github.com/spatie/laravel-http-logger). 

### Installation:
Run the following command in your terminal while you are in the root directory of your project: 

```
composer require alimranahmed/hit-logger
```

If you want to change the default behavour of the package you can publish and change the config file. Run the 
following command to publish the config file:

```
php artisan vendor:publish --provider="AlImranAhmed\HitLogger\HitLoggerServiceProvider" --tag="config" 
```

### Usage
This package has a middleware that can be used to log request and response. Register the middleware in your 
`app/Http/Karnel.php` file as below: 

```php 
protected $middleware = [
    // ...
    
    \AlImranAhmed\HitLogger\Middlewares\HitLogger::class,
];
```

### License
The MIT License (MIT)

