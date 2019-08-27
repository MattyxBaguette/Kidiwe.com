<?php
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$highlighted = parse_url($actual_link);

$pathArray = explode('/', $highlighted['path']);
$currentPage = $pathArray[count($pathArray)-1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= !empty($title) ? $title : '' ?></title>
    <link rel="icon" href="./assets/images/logo-min.svg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,200i,400,600i|Rakkas&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= URL ?>/assets/style.css">
</head>
<body>

<header>
        <nav class="container navbar navbar-expand-sm fixed-top">
            <a class="navbar-brand" href="<?= URL ?>"><img src="./assets/images/logo-min.svg">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#learning-expedition" >La Learning Expedition</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#platform">Notre Plateforme</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-us">Qui sommes-nous ?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mailto:contact@kidiwe.fr">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= URL ?>/login">Se connecter</a>
                    </li>
                </ul>
            </div>
<!--                    <li><a class="--><?//= $currentPage == 'projects' ? 'highlighted' : '' ?><!--" href="#learning-expedition">La Learning Expedition</a></li>-->
<!--                    <li><a class="--><?//= $currentPage == 'watch' ? 'highlighted' : '' ?><!--" href="#platform">Notre Plateforme</a></li>-->
<!--                    <li><a class="--><?//= $currentPage == 'watch' ? 'highlighted' : '' ?><!--" href="#about-us">Qui sommes-nous ?</a></li>-->
<!--                    <li><a href="mailto:contact@kidiwe.fr">Contact</a></li>-->
<!--                    <li><a class="login --><?//= $currentPage == 'watch' ? 'highlighted' : '' ?><!--" href="--><?//= URL ?><!--/login">Se connecter</a></li>-->
        </nav>
</header>
