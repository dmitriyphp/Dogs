<?php

require_once dirname(__FILE__) . '/autoload.php';

if (sizeof($argv) < 3) {
    echo 'Wrong input values';
    exit;
}

$dog_type = ucfirst($argv[1]);
$action   = $argv[2];

if ( ! class_exists($dog_type)) {
    echo 'There is no such dog';
    exit;
}

if ( ! method_exists($dog_type, $action)) {
    echo 'There is no such action';
    exit;
}

$dog = new $dog_type();
echo $dog->$action();