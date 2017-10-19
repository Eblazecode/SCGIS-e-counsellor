<?php
/**
 * Created by PhpStorm.
 * User: Nas
 * Date: 10/4/2017
 * Time: 5:40 PM
 */



$servername="localhost";
$username="root";
$passwrd="";
$databasenm="student gc info system ";


$link= mysqli_connect("localhost",'root','','student gc info system');

if ($link===false) {
    die("ERROR: could not connect" . mysqli_connect_error());

}

if (isset($_POST['forgotsubmit'])) {
// it will never let you open index(login) page if session is set

    $forgotemail = mysqli_real_escape_string($link, $_POST['useremailforgot']);
    $forgotusername = mysqli_real_escape_string($link, $_POST['useremailforgot']);
    $strSQL = mysqli_query($link, "SELECT studentname FROM student WHERE email='" . $forgotemail . "'" );
    $Resultshown = mysqli_fetch_array($strSQL);
    $message = $Results['studentname'];

}

?>

<!DOCTYPE html>
<html lang='en'>
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
    <script src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js'></script>
    <script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
    <![endif]-->
</head>
<body>
<div class="alert alert-success" align="center" style="margin: 10%">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

    <?php
    if(count($Resultshown)>=1)
    {

        header('location:correct password.html');
    }
    else
    {
        echo "<div class='alert alert - danger alert - dismissible' role='alert''>
  <button type='button' class='close'data-dismiss='alert'>
  <span aria-hidden='true'>
&times;</span><span class='sr - only'>Close</span></button>
<h1> Oops! </h1>
  <strong>PLS SIGN UP NO RECORD FOUND </strong>
  <a href='sign-up%20page.html'><button>SIGN UP</button></a>
</div> ";

    }

    ?>

</div>
</body>
</html>


