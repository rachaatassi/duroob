<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Douroub</title>
    <meta name="description" content="This website is designed for self-improvement purposes, allowing you to structure your planned habits and find motivation within yourself.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="./app/public/js/script.js" defer></script>
    <link rel="stylesheet" href="./app/public/css/style.css">
   <link rel="stylesheet" href="./app/public/css/habit.css">
    <link rel="shortcut icon" href="./app/public/src/icons/logo.png" type="image/x-icon">

</head>

<body>
    <header>
        <img src="./app/public/src/icons/logo.png" alt="the logo of e site the word duroob">
        <nav>
            <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#ourTeam">About&nbsp;us</a></li>
                <li><a href="#path">What&nbsp;is&nbsp;PATH?</a></li>
                <li><a href="#components">BALANCE&nbsp;Componants</a></li>
                <li><a href="#">S.T.N</a></li>
                <li><a href="#">HABIT&nbsp;Builder</a></li>
                <li><a href="#">Monthly&nbsp;BOARD</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact&nbsp;us</a></li>

            </ul>

            <div id="btns">
                <?php 
               
               if ($_SESSION&&$_SESSION["user"]){
                    
             
                ?>
                 <button><a href="/index.php?controller=user&action=signout">SIGN&nbsp;OUT</a></button>
             
                <?php    } 
                else {
                    ?>
                    <button><a href="./app/core/views/user/signin.php">SIGN&nbsp;IN</a></button>
        
                    <button><a href="./app/core/views/user/signup.php">SIGN&nbsp;UP</a></button>
<?php
                }
                ?>
            </div>
        </nav>

    </header>
    <main>