<?php

if (!file_exists(__DIR__.'/../app/data/install.lock')) {
    header("Location: install/install.php");
    exit();
}

if ((strpos($_SERVER['REQUEST_URI'], '/admin') !== 0) && file_exists(__DIR__.'/../app/data/upgrade.lock')) {
    $time = file_get_contents(__DIR__.'/../app/data/upgrade.lock');
    date_default_timezone_set('Asia/Shanghai');
    $currentTime = time();
    if ($currentTime <= (int) $time) {
        header('Content-Type: text/html; charset=utf-8');
        echo file_get_contents(__DIR__.'/../app/Resources/TwigBundle/views/Exception/upgrade-info.html');
        exit();
    }
}

if ((strpos($_SERVER['REQUEST_URI'], '/api') === 0) || (strpos($_SERVER['REQUEST_URI'], '/app.php/api') === 0)) {
    define('API_ENV', 'prod');
    include __DIR__.'/../api/index.php';
    exit();
}

use Symfony\Component\HttpFoundation\Request;

fix_gpc_magic();

$loader = require_once __DIR__.'/../app/autoload.php';
require_once __DIR__.'/../app/bootstrap.php.cache';

$kernel = new AppKernel('prod', false);
$kernel->loadClassCache();
$request = Request::createFromGlobals();
$kernel->setRequest($request);
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);

function fix_gpc_magic()
{
    if (get_magic_quotes_gpc()) {
        array_walk($_GET, '_fix_gpc_magic');
        array_walk($_POST, '_fix_gpc_magic');
        array_walk($_COOKIE, '_fix_gpc_magic');
        array_walk($_REQUEST, '_fix_gpc_magic');
        array_walk($_FILES, '_fix_gpc_magic_files');
    }
}

function _fix_gpc_magic(&$item)
{
    if (is_array($item)) {
        array_walk($item, '_fix_gpc_magic');
    } else {
        $item = stripslashes($item);
    }
}

function _fix_gpc_magic_files(&$item, $key)
{
    if ($key != 'tmp_name') {
        if (is_array($item)) {
            array_walk($item, '_fix_gpc_magic_files');
        } else {
            $item = stripslashes($item);
        }
    }
}
