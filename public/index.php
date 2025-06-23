<?php

require_once dirname(__DIR__).'/vendor/autoload.php';

define('BASE_PATH', dirname(__DIR__));

use Somecode\Framework\Http\Kernel;
use Somecode\Framework\Http\Request;

$request = Request::createFromGlobals();

$kernel = new Kernel;
$response = $kernel->handle($request);

$response->send();

// {domain}/about.php
// {domain}/home.php
