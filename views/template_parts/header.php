<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php 
        if (isset($title))
            echo $title;
    ?></title>
    <meta name="description" content="<?php 
        if (isset($description))
            echo $description;
    ?>"> 
    <link rel="stylesheet" href="style.css">
    <link href="fonts/Roboto-Black.ttf" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/scripts.js"></script>
</head>
<body>
    <header>
        <div class="header-up">
            <img src="img/logo.png" alt="" srcset="">
            <a href="/home">
                <h1>Самосвал.ру - магазин стройматериалов</h1>
            </a>
            <img src="img/logo.png" alt="" srcset="" id="logo2">
        </div>
        <div class="header_down_wrapper" id="header_down_wrapper-relative">
            <nav class="header-down">
                <ul>
                    <li>
                        <a href="/blog">статьи</a>
                    </li>
                    <li>
                        <a href="/home">главная</a>
                    </li>
                    <li>
                        <a href="/catalog">каталог</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>