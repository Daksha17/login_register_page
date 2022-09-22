<?php
    $con=new mysqli('localhost','root','','tech');

    if(!$con){
        // echo "Connected succesfully";
         die(mysqli_error($con));

    }
    // else{
    //      die(mysqli_error($con));
    //  }

?>