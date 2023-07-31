<?php
require 'config/database.php';

?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width , initial-Scale = 1.0">
    <title> Dar Al Salam</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
</head>

<body>
    <section class="header">
        <nav>
            <a href="index.php"> <img src="Images/logo1.jpeg"></a>
            <div class="nav-links" id="navlinks">
                <i class="fa fa-times" onclick="hidemenu()"></i>
                <ul>
                    <li>
                        <a href="index.php">HOME</a>
                    </li>
                    <li>
                        <a href="about.php">ABOUT</a>
                    </li>
                    <li>
                        <a href="designs.php">DESIGNS</a>
                    </li>
                    <li>
                        <a href="portfolio.php">PORTFOLIO</a>
                    </li>
                    <li>
                        <a href="contact.php">CONTACT</a>
                    </li>

                    <button class="btnLogin-popup">Login</button>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showmenu()"></i>
        </nav>
        <div class="wrapper">
            <span class="icon-close">
                <ion-icon name="close"></ion-icon>
            </span>