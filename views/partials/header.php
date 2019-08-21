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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,200i,400,600i|Rakkas&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= URL ?>/assets/style.css">
</head>
<body>

<header>
    <div class="custom-padding">
        <nav>
            <ol>
                <div class="logo">
                    <a href="<?= URL ?>"><img src="./assets/images/logo-min.svg"></a>
                </div>
                <div class="menu">
                    <li><a class="<?= $currentPage == 'projects' ? 'highlighted' : '' ?>" href="#learning-expedition">La Learning Expedition</a></li>
                    <li><a class="<?= $currentPage == 'watch' ? 'highlighted' : '' ?>" href="<?= URL ?>/about-me">Notre Plateforme</a></li>
                    <li><a class="<?= $currentPage == 'watch' ? 'highlighted' : '' ?>" href="<?= URL ?>/about-me">Qui sommes-nous ?</a></li>
                    <li><a href="mailto:contact@kidiwe.fr">Contact</a></li>
                    <li><a class="login <?= $currentPage == 'watch' ? 'highlighted' : '' ?>" href="<?= URL ?>/about-me">Se connecter</a></li>
                </div>
            </ol>
        </nav>
    </div>
</header>

<div class="container">