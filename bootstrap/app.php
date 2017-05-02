<?php

define('PROJECT_DIR', dirname(__DIR__)  );
define('BOOTSTRAP_DIR', PROJECT_DIR . '/bootstrap'  );

require_once PROJECT_DIR . '/vendor/autoload.php';

try {
    (new Dotenv\Dotenv(__DIR__.'/../'))->load();
} catch (Dotenv\Exception\InvalidPathException $e) {
    //
}

error_reporting(E_ALL);

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| Here we will load the environment and create the application instance
| that serves as the central piece of this framework. We'll use this
| application as an "IoC" container and router for this framework.
|
*/

$app = new Laravel\Lumen\Application(
	PROJECT_DIR
);

// $app->withFacades();

// $app->withEloquent();

/*
|--------------------------------------------------------------------------
| Register Container Bindings
|--------------------------------------------------------------------------
|
| Now we will register a few bindings in the service container. We will
| register the exception handler and the console kernel. You may add
| your own bindings here if you like or you can make another file.
|
*/

$app->singleton(
    'Illuminate\Contracts\Debug\ExceptionHandler',
    'App\Exceptions\Handler'
);

$app->singleton(
    'Illuminate\Contracts\Console\Kernel',
    'App\Console\Kernel'
);

$app->singleton('conference', 'App\Model\Conference');

/*
|--------------------------------------------------------------------------
| Register Middleware
|--------------------------------------------------------------------------
|
| Next, we will register the middleware with the application. These can
| be global middleware that run before and after each request into a
| route or middleware that'll be assigned to some specific routes.
|
*/

// $app->middleware([
//     // 'Illuminate\Cookie\Middleware\EncryptCookies',
//     // 'Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse',
//     // 'Illuminate\Session\Middleware\StartSession',
//     // 'Illuminate\View\Middleware\ShareErrorsFromSession',
//     // 'Laravel\Lumen\Http\Middleware\VerifyCsrfToken',
// ]);

// $app->routeMiddleware([

// ]);

/*
|--------------------------------------------------------------------------
| Register Service Providers
|--------------------------------------------------------------------------
|
| Here we will register all of the application's service providers which
| are used to bind services into the container. Service providers are
| totally optional, so you are not required to uncomment this line.
|
*/

// $app->register('App\Providers\AppServiceProvider');


/*
|--------------------------------------------------------------------------
| Utility Functions
|--------------------------------------------------------------------------
|
*/

require_once BOOTSTRAP_DIR . '/functions.php';

function global_exception_handler($exception) {
	error_log("Uncaught exception: " . $exception->getMessage());
}

set_exception_handler('global_exception_handler');


/*
|--------------------------------------------------------------------------
| Load The Application Routes
|--------------------------------------------------------------------------
|
| Next we will include the routes file so that they can all be added to
| the application. This will provide all of the URLs the application
| can respond to, as well as the controllers that may handle them.
|
*/

require_once PROJECT_DIR . '/app/Http/routes.php';

return $app;
