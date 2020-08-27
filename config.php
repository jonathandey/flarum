<?php return array (
  'debug' => false,
  'database' => 
  array (
    'driver' => 'mysql',
    'host' => env('DB_HOST'),
    'port' => 3306,
    'database' => env('DB_DATABASE'),
    'username' => env('DB_USERNAME'),
    'password' => env('DB_PASSWORD'),
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix' => '',
    'strict' => false,
    'engine' => 'InnoDB',
    'prefix_indexes' => true,
  ),
  'url' => env('APP_URL'),
  'paths' => 
  array (
    'api' => 'api',
    'admin' => 'admin',
  ),
);
