## Hit-Logger(Log Http Request and Response)

A Laravel 5 package for logging http request and response. Usually we find ourself in a situation that our testing team or an API user is claming that they had sent a request and got an unexpected response. This package gives us the opportunity to look back what really was the request to our laravel application and what was actual the response from our application. This makes our life lot easir. 

This pakcage provides a `Middleware` that can be used wherever you need(e.g. all the request and response, only a single route's requests and responses, only API requests and responses, only web requests and responses etc). 

Built this package being highly inspired by [spatie/laravel-http-logger](https://github.com/spatie/laravel-http-logger) which is a nice package to log only the requests. 

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

