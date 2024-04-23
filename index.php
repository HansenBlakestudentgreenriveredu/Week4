<?php

// 328/Week4/index.php
// This is the controller

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once ('vendor/autoload.php');

// Instantiate the F3 Base class
$f3 = Base::instance();

// Define a default route
$f3->route('GET /', function($f3) {
    echo '<h1>Pets</h1>';

    // Add data to hive
    $f3->set('name', 'Blake');
    $f3->set('movie', 'Grinch');
    $f3->set('car', 'Lexus');

    // Render a view page
    $view = new Template();
    echo $view->render('views/index.html');
});

// Run fat-free
$f3->run();