


<?php
/**
 * Created by PhpStorm.
 * User: Nas
 * Date: 8/4/2017
 * Time: 3:31 PM
 */


 require_once 'CONFIG.php';

$stdname = $_POST['stdname'];
$stdsurname= $_POST['stdsurname'];
$username=$_POST['username'];
$age = $_POST['age'];
$school = $_POST['school'];
$semail  = $_POST['semail'];
$sphone = $_POST['sphone'];
$state = $_POST['state'];
$mostpref = $_POST['mostprefsubject'];
$spref = $_POST['leastprefsub'];
$stdpass=$_POST['stdpass'];
$confirmpasswd=$_POST['confstdpass'];




 ob_start();
session_start();
if( isset($_SESSION['user'])!="" ){
    header("Location:home page.php");
}
if (isset($_POST['submit_details']))
{

    $sql = "INSERT INTO student
(studentname, surname,username,school, age, email, state, studentpassword,confirmpasswd, `phone num`, `most pref sub`, `least pref sub`)
 VALUES ('$stdname','$stdsurname','$username','$school',
 '$age','$semail','$state','$stdpass','$confirmpasswd','$sphone','$mostpref','$spref')";
    if (mysqli_query($link, $sql)) {

  $successmesg= "congratulations  you are welcome to your career e-counsellor<br>
                  ensure you make do of our resources and fill appropraitely any field when asked ";


    }
}
else {
    echo "connection not successful" . mysqli_get_host_info($link);

    }
mysqli_close($link);

 ?>
<!DOCTYPE html>
<html>
<head>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <title> confirm</title>

</head>
<body style="background-color: black;">

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

        <!--/.nav-collapse -->
    </div>
    </div>
  <div style="margin: 10%; background-color: aquamarine; color: seagreen" align="center">
     <div class="jumbotron">
     	<div class="container">
     		<h1> hi! <?php
                echo $stdname; ?> </h1>
     		<p> <?php echo $successmesg; ?> </p>
     		<p>
     			<a class="btn btn-primary btn-lg" href="home%20page.html">login to continue</a>
     		</p>
     	</div>
     </div>
  </div>
</body>
</html>