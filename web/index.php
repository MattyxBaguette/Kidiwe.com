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

elseif ($q == 'about-me' || $q == 'about')
    $controller = 'about-me';

if ($q == 'works')
    $controller = 'works';

elseif ($q == '404')
    $controller = 'home';

if ($q == 'work-01')
    $controller = 'work-01';

elseif ($q == 'work-02')
    $controller = 'work-02';

if ($q == 'work-03')
    $controller = 'work-03';

elseif ($q == 'work-04')
    $controller = 'work-04';

// Include controller
include '../controllers/'.$controller.'.php';