<?php
/**
 * Created by PhpStorm.
 * User: Nas
 * Date: 9/18/2017
 * Time: 12:02 PM
 *
 */


 ob_start();
 session_start();
 require_once 'CONFIG.php';

 // if session is not set this will redirect to login page
 if( !isset($_SESSION['user']) ) {
     header("Location: login.php");
 }
  exit;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> SCGIS home</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
        body {
            padding-top: 50px;
        }

        .starter-template {
            padding: 40px 15px;
            text-align: center;
        }
    </style>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Student Career Guidiance Information System</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#contact">news</a></li>
                <li><a href="#contact">Articles</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->

<!-- Carousel
    ================================================== -->


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox" style="background-color: black;">
        <div class="item active">
            <img class="first-slide" src="blk%20std%20career.jpg" style="width:1400px;"  align="center" alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1 style="font-size: 70px;"> Begin your future today </h1>
                    <p><code> welcome to your counsellor </code> </p>
                    <p><a class="btn btn-lg btn-primary" href="sign-up%20page.html" role="button">Sign up today</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="second-slide" src="bk%20grad.jpg" style="width:1500px;" alt="Second slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1 style="font-size: 70px;">Dreams can come true </h1>
                    <p> fix the confusion get direction  </p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="third-slide" src="std%20think.jpg" style="width: 1500px;" alt="Third slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1 style="font-size: 100px;"> stay confident </h1>
                    <p> Don't fall into any error</p>
                    <p><a class="btn btn-lg btn-primary" href="sign-up%20page.html" role="button">sign up</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div> <br> <br> <br> <br>
<!-- /.carousel -->


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <a href="login.php"><button type="submit" class="btn btn-default" > login </button></a>
    </div>
</div>


<div align="center" style="background-color: lightslategrey;margin: 5%;padding: 5%;">
    <form action="login.php" method="POST" role="form" style="width:50%;">
        <fieldset>
            <legend>login </legend>

            <div class="form-group" align="center">
                <label for="stdemail"> username</label>
                <input type="text" class="form-control" name="" id="stdemail" placeholder="e.g name@gmail.com">
                <label for="stdpass"> password </label>
                <input type="password" class="form-control" name="" id="stdpass" placeholder="">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button><br>
            <a href="sign-up%20page.html" style="color: #ffffff">New user ? Register now!</a> </fieldset>
    </form> </div>
<br><br>

<!...image card!>
<div class="row row-margin-bottom">
    <div class="col-md-5 no-padding lib-item" data-category="view">
        <div class="lib-panel">
            <div class="row box-shadow">
                <div class="col-md-6">
                    <img class="lib-img-show" src="std%20think.jpg" style="height: 70%;width: 90%;">
                </div>
                <div class="col-md-6">
                    <div class="lib-row lib-header">
                        <b>Check out the latest career with your interest</b>
                        <div class="lib-header-seperator"></div>
                    </div>
                    <div class="lib-row lib-desc">
                        <p> counsellor have a way of making your future secured by<br>
                            knowing you skills set to enable proper placement </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-1"></div>
    <div class="col-md-5 no-padding lib-item" data-category="ui">
        <div class="lib-panel">
            <div class="row box-shadow">
                <div class="col-md-6">
                    <img class="lib-img" src="careeer%20confused.jpg" style="width:90%;height: 70%;">
                </div>
                <div class="col-md-6">
                    <div class="lib-row lib-header">
                        <b>Get you dream job started today</b>
                        <div class="lib-header-seperator"></div>
                    </div>
                    <div class="lib-row lib-desc">
                        <p> Do you know career confusion can be so straining,and tiry for you to make <br>
                            siscover best choices to makes you ares of interest by allowing yourself dream big <br>
                            <a href="#">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<! image card 2...!>
<div class="row row-margin-bottom">
    <div class="col-md-5 no-padding lib-item" data-category="view">
        <div class="lib-panel">
            <div class="row box-shadow">
                <div class="col-md-6">
                    <img class="lib-img-show" src="students-success-guide.jpg" style="height: 70%;width: 90%;">
                </div>
                <div class="col-md-6">
                    <div class="lib-row lib-header">
                        <b>counsellor here to support you</b>
                        <div class="lib-header-seperator"></div>
                    </div>
                    <div class="lib-row lib-desc">
                        <p> counsellor have a way of making your future secured by<br>
                            knowing you skills set to enable proper placement </p>

                    </div>
                </div>
            </div>
        </div>
    </div>




    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="..." alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="..." alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="..." alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>






</body>
<div class="panel panel-default" align="center">
    <div class="panel-body">
        <a href="#">Home</a>
    </div>
    <div class="panel-footer">
        <a href="#">About us</a>
    </div>
    <div class="panel-footer">
        <a href="#">privacy</a>
    </div>
    <div class="panel-footer">
        <a href="#">C 2017</a>
    </div>
</div>
</body>
<!-- /.container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>





