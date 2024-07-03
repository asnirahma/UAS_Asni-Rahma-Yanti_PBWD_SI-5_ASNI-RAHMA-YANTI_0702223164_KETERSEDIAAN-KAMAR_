<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Tentukan apakah aplikasi dalam mode pemeliharaan...
if (file_exists($maintenance = __DIR__ . '/../storage/framework/maintenance.php')) {
  require $maintenance;
}

// Daftarkan autoloader Composer...
require __DIR__ . '/../vendor/autoload.php';

// Bootstrap Laravel dan tangani permintaan...
$app = require_once __DIR__ . '/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
  $request = Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
