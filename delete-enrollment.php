<?php
    // database conection
    require_once('logics/dbconnection.php');

    $sqlDeletestudent = mysqli_query($conn, "DELETE FROM enrollment WHERE no='".$_GET['id']."'");
    if($sqlDeletestudent){
        echo "user deleted successfully";
        header('location:students.php');
    }
    else{
        echo "Error occured. Please try again!";
        
    }


?>