<?php
require 'library/Auth.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>Blog | Tursunboyev O'rinboy</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="about.php">Biz haqimizda</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <?php if ($_COOKIE['user']): ?>
                <li class="nav-item">
                    <a class="nav-link" href="/logout.php">Chiqish(<?= Auth::getLoggedUser()['name'] ?>)</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Ro'yxatdan o'tish</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">kirish</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
<div class="container">
