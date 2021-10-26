<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "innocentia";
error_reporting(0);
$conn = mysqli_connect("localhost", "root", "", "innocentia");
if (isset($_POST['submit'])) {

    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $date = $_POST['date'];
    $age = $_POST['age'];
    $pizza = $_POST['Pizza'];
    $Pasta = $_POST['Pasta'];
    $Pap_and_wors = $_POST['Pap_and_wors'];
    $Chicken_stir_fry = $_POST['Chicken_stir_fry'];
    $Beef_stir_fry = $_POST['Beef_stir_fry'];
    $Other = $_POST['Other'];
    $eatOut = $_POST['eatOut'];
    $watchMovies = $_POST['watchMovies'];
    $watchTV = $_POST['watchTV'];
    $listenRadio = $_POST['listenRadio'];
    $ErrorMessage[] = "";
    $Count = 0;


//validating age
    if ($age < 5 || $age > 120) {
       $Count++;
       $ErrorMessage="Age should be between 5 and 120";
    }
    $query = "insert into surveytable values('$surname','$name','$contact','$date','$age','$Pizza','$Pasta','$Pap_and_wors','$Chicken_stir_fry','$Beef_stir_fry','$Other','$eatOut','$watchMovies','$watchTV','$listenRadio')";

    $run = mysqli_query($conn, $query) or die(mysqli_error($conn));

    if ($run && $count=0) {

        echo '<script type="text/javascript">alert("Survey Completed Succesfully");window.location=\'index.php\';</script>';
    } else {
        echo "Survey not submitted"; 
        echo $ErrorMessage;
    }
}

     
    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */

    