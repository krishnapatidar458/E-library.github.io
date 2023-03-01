<!-- ========================================================================================================================== -->
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
    <link rel="stylesheet" type="text/css" href="ebook_style.css">
    <link rel="icon" href="hdimg/logo.png">
    <title>E-library</title>
</head>

<body>
    <header>
        <div class="row" id="nav">
            <div class="col-md-2" id="logo">
                <a href="index.php">
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
        </div>
    </header>
    <?php include 'index_part/signup.php';?>
    <br><br>
    <?php include 'index_part/Browse_genres.php';?>
    <br><br>
    <?php include 'index_part/Editor_choise.php';?>
    <br><br>
    <?php include 'index_part/Tranding_books.php';?>
    <br><br>
    <?php include 'index_part/popular.php';?>
    <br><br>
    
    <section class="footer" id="footer">

    <div class="row">
      
        <div class="col-md-4" id="logofoot" style="margin-top:30px;">
            <a href="index.php">
            <img src="hdimg/logo.png" alt="logo"><br> E-library</a>
        </div>

        <div class="col-md-4" id="footelement" >
            <h2>Our Collection</h2>
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
</body>
</html>

<!-- ------------------------------------------------------------------------ -->

<?php
if (isset($_SESSION['logid']) )
{
    // header('location:index_after.php');
    echo "<script>window.open('index_after.php')</script>";
    // echo "<script>alert('logout first')</script>";
}
?>