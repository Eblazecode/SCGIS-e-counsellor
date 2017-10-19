<?php
/**
 * Created by PhpStorm.
 * User: Nas
 * Date: 9/22/2017
 * Time: 2:50 PM
 */
require_once 'CONFIG.php';


if (isset($_POST['viewresult'])) {


    if (isset($_POST['qst1'])) {
        $question1=$_POST['qst1'];

        /* question 1*/

        if($question1 == "B")
        {
            $corquest1=3;

        }
        else {
            $corquest1 =0;
        }
}

    if (isset($_POST['qst2'])) {
        $question2=$_POST['qst2'];
        /* question 2*/

        if( $question2== "A"){
            $corquest2=3;

        }
        else {
            $corquest2 =0;
        }
    }

    if (isset($_POST['qst3'])) {
        $question3=$_POST['qst3'];


        /* question 3*/

        if( $question3== "C"){
            $corquest3=3;

        }
        else {
            $corquest3 =0;
        }
    }

    if (isset($_POST['qst4'])) {
        $question4=$_POST['qst4'];


        /* question 4*/

        if( $question4== "B"){
            $corquest4=3;

        }
        else {
            $corquest4 =0;
        }
    }

    if (isset($_POST['qst5'])) {
        $question5=$_POST['qst5'];

        /* question 5*/

        if( $question5 == "A"){
            $corquest5=3;

        }
        else {
            $corquest5 =0;
        }

    }
    if (isset($_POST['qst6'])) {
        $question6=$_POST['qst6'];
        /* question 6*/



        if( $question6=="C"){
            $corquest6=3;

        }
        else {
            $corquest6 =0;
        }

    }

    $totalscore =$corquest1+$corquest2+$corquest3+$corquest4+$corquest5+$corquest6;
    $message="CONGRATULATIONS! YOU SCORED ";
    echo $message;

    echo $totalscore;
}
else{
    echo " OOPS SOMETHING WENT WRONG! ";
}


?>