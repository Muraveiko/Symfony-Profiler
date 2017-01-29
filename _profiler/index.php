<?php
/**
 */

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;
use Composer\Autoload\ClassLoader;

/** @var ClassLoader $loader */
$loader = require dirname(dirname(dirname(dirname(__FILE__)))).'/autoload.php';

Debug::enable();

require __DIR__.'/AppKernel.php';

$kernel = new AppKernel('dev', true);
$kernel->loadClassCache();
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);



