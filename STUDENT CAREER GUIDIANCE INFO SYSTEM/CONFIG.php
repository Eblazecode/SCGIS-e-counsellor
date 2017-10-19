<?php
/**
 * Created by PhpStorm.
 * User: Nas
 * Date: 8/7/2017
 * Time: 5:36 PM
 */

$servername="localhost";
$username="root";
$passwrd="";
$databasenm="student gc info system ";

$link= mysqli_connect("localhost",'root','','student gc info system');

if ($link===false){
    die("ERROR: could not connect".mysqli_connect_error());

}
?>