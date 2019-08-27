<?php

/**
 * Routing
 */

define ('URL','http://localhost:8888/Kidiwe.com/web');

// Get 'q' param
$q = empty($_GET['q']) ? '' : $_GET['q'];

// Define controller
$controller = '404';

if ($q == '')
    $controller = 'home';

elseif ($q == 'about-us' || $q == 'about')
    $controller = 'about-us';

if ($q == '404')
    $controller = 'home';

// Include controller
include '../controllers/'.$controller.'.php';