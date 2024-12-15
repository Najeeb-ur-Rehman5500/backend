<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $age = $_POST['age'];

     if ($age >= 18){
         echo "<p style='color: green;'> You are eligible to vote   
 }  else {
        echo "<p style='color: red;'> You are not eligible to vote
         
 } 
    }
    // echo to show output 

    ?>
