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
$f3->route('GET /', function() {
    echo '<h1>Pets</h1>';

    // Render a view page
    $view = new Template();
    echo $view->render('views/home.html');
});

// Run fat-free
$f3->run();