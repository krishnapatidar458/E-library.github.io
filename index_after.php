<?php
session_start();
if (isset($_SESSION['logid']))
{
    // echo "<script>alert('login successful')</script>";
}
else
{
    header('location:index.php');
}
?>
    <!-- ================================================================================================================================ -->
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Oswald:wght@600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="after_login/after_style.css">
        <link rel="icon" href="hdimg/logo.png">
        <title>E-library</title>
    </head>

    <body>
        <header>
            <div class="row" id="nav">
                <div class="col-md-2" id="logo">
                    <a href="index_after.php">
                        <img src="hdimg/logo.png" alt="logo">
                    </a>
                </div>
                <div class="col-md-2" id="dropdown">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" id="but">DISCOVER
                        <span class="caret"></span>
                    </button>
                        <ul class="dropdown-menu">
                            <h3>Genres</h3>
                            <li><a href="#editbooks">EDITOR CHOISE</a></li>
                            <li><a href="#trendbook">TRANDING BOOKS</a></li>
                            <li><a href="#popularbook">POPULAR CLASSICS</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6" id="search">
                    <input type="text" placeholder="Search by title or auther" id="align-search" class="form-control">
                    <button class="btn btn-primary" id="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
                <div class="col-md-2" id="logout">
                    <a href="after_login/logout.php">logout</a>
                </div>
            </div>
        </header>
        <?php include 'after_login/Editor_after.php';?>
        <br><br>
        <?php include 'index_part/Tranding_books.php';?>
        <br><br>
        <?php include 'after_login/popular_after.php';?>
        <br><br>

        <section class="footer" id="footer">

            <div class="row">

                <div class="col-md-4" id="logofoot" style="margin-top:30px;">
                    <a href="index_after.php">
                        <img src="hdimg/logo.png" alt="logo"><br> E-library</a>
                </div>

                <div class="col-md-4" id="footelement">
                    <h3>Our Collection</h3>
                    <li><a href="#editbooks">EDITOR CHOISE</a></li>
                    <li><a href="#trendbook">TRANDING BOOKS</a></li>
                    <li><a href="#popularbook">POPULAR CLASSICS</a></li>
                </div>

                <div class="col-md-4">
                    <h2>Contect Information</h2>
                    <span>Contect no :- +91 9691613062</span><br>
                    <span>Email :- elibrary2k22@gmail.com</span><br>
                    <span>Address:- Jeeran,Neemuch,Madhya Pradesh,458336</span>
                </div>

            </div><br>
            <hr>
            <div class="credit"><i class="fa fa-copyright" aria-hidden="true"> Copyright @ 2022 E-library | All rights reserved </i></div>

        </section>
        <!-- -------------------------------------------------------------- -->
    </body>
    </html>