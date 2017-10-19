<?php
/**
 * Created by PhpStorm.
 * User: Nas
 * Date: 10/5/2017
 * Time: 1:03 PM
 */

$servername="localhost";
$username="root";
$passwrd="";
$databasenm="student gc info system ";


$link= mysqli_connect("localhost",'root','','student gc info system');

if ($link===false) {
    die("ERROR: could not connect" . mysqli_connect_error());

}

// it will never let you open index(login) page if session is set
if (isset($_POST['confirmpassword'])) {
    $confirmemail = mysqli_real_escape_string($link, $_POST['remail']);
    $password = mysqli_real_escape_string($link, $_POST['repass']);
    $strSQL = "UPDATE student SET studentpassword='$password'WHERE email='$confirmemail'";
    if (mysqli_query($link,$strSQL)){
        header('location:home page.html');

    }
    else

        echo "<div class='alert alert - danger alert - dismissible' role='alert''>
  <button type='button' class='close'data-dismiss='alert'>
  <span aria-hidden='true'>
&times;</span><span class='sr - only'>Close</span></button>
  <strong>ERROR IN INSERTION </strong>
</div> <h1> Oops! </h1>"; mysqli_error($link);

}

?>