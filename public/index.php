<?php

// Load Composer's autoloader
require __DIR__.'/../vendor/autoload.php';

/**
 * Run The Application
 *
 * Once the application is bootstrapped, we handle the incoming request
 * using the application's HTTP kernel and send the response back to
 * the client's browser.
 */

// Bootstrap the application
$app = require_once __DIR__.'/../bootstrap/app.php';

// Retrieve the HTTP kernel from the application
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

// Capture the incoming request
$request = Illuminate\Http\Request::capture();

// Handle the request and generate the response
$response = $kernel->handle($request);

// Send the response back to the client's browser
$response->send();

// Terminate the request and response lifecycle
$kernel->terminate($request, $response);
