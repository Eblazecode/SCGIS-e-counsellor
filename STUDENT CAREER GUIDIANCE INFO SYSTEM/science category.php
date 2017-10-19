
<?php
/**
 * Created by PhpStorm.
 * User: Nas
 * Date: 9/26/2017
 * Time: 3:36 PM
**/


$servername="localhost";
$username="root";
$passwrd="";
$databasenm="student gc info system ";


$link= mysqli_connect("localhost",'root','','student gc info system');

$sciusername = $_POST['username'];
$mostprefsub = $_POST['most'];
$moreprefsub = $_POST['more'];
$prefsub = $_POST['prefd'];
$leasprefsub = $_POST['least'];


$selectedsubject= array($mostprefsub,$moreprefsub,$prefsub,$leasprefsub);
$medicalcourse= array();
if (isset($_POST['submit_science'])) {

    $strSQL = mysqli_query($link, "SELECT `mostpref subject`,`morepref subject`,`pref subject`,`leastpref subject` FROM senior_student
 ");
    $Results = mysqli_fetch_array($strSQL);
    $math = $Results['mostpref subject'];
    $English = $Results['morepref subject'];
    $physics = $Results['pref subject'];
    $chemistry = $Results['leastpref subject'];
  ;
    if (count($Results) >= 1) {

        if (($mostprefsub == $math )&& ($moreprefsub == $English) && ($prefsub == $physics)
            &&($leasprefsub == $chemistry))
        {
            echo "MEDICNE STUDENT";

        } else echo "you didnt choose maths";
    } else
        echo "problem";

}
else "connec probs"


?>