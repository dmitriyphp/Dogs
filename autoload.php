<?php

spl_autoload_register(function ($class)
{
    $path = dirname(__FILE__) . '/classes/' . ucfirst($class) . '.php';
    if (file_exists($path)) {
        require_once $path;
    }
});