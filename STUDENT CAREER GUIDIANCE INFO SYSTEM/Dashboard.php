
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Starter Template for Bootstrap</title>

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
            <a class="navbar-brand" href="#">SCGIS</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>

<div class="container">

    <div class="starter-template" style="background-color: lightgreen;color: white;margin: 4%;">

        <?php
        // Initialize the session
        session_start();

        echo '<h1>Hi !</h1> ' . $_SESSION["loginusername"]

        ?>
        <p class="lead"> welcome to SCGIS. This is your dashboard you can carry out any of the<br>
            following instructions  to guide
        you<br> in you search to perfect career in the nearest future </p>

</div>

    <div style="background-color:deepskyblue;margin:2%;" align="center" >

        <div class="table-responsive" style="padding: 10%">
        	<table class="table table-hover">
        		<thead>
        			<tr>
        				<th><h3 align="center">Choose your category </h3></th>
        			</tr>
        		</thead>
        		<tbody>
        			<tr>
        				<td> <p>
                                <a class="btn btn-primary btn-lg" href="junior%20category.html">Junior secondary student</a>
                            </p></td>
                        <td>
                            <p>
                                <a class="btn btn-primary btn-lg" href="senior%20category.html"> senior secondary student</a>
                            </p
                        </td>
        			</tr>
        		</tbody>
        	</table>
        </div>



<!-- /.container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</div>
</div></body>
</html>
