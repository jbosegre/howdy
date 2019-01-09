<?php
/**
 * Created by PhpStorm.
 * User: jbosegre
 * Date: 1/9/2019
 * Time: 10:08 AM
 */

//Require the autoload file

ini_set ("display_errors", 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();
$f3->set('DEBUG', 3);

//define a default route
$f3->route('GET /', function (){
    //echo '<h1>Howdy Dooty!</h1>';

    $view = new View;
    echo $view->render('views/home.html');
});

//Run fat Free
$f3->run();