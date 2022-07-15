<?php
    require_once('connection.php');

    if(isset($_POST['signUp'] ))
    { 
        // fetch data from
       $username = $_POST['username']; 
       $email = $_POST['email'];
       $password = $_POST['password'];
       $cpass = $_POST['cpassword'];

    //    check if username exists in the database
    $sqlusername= mysqli_query($conn,"SELECT*
    FROM account WHERE username ='$username' ");
    $checkusername=mysqli_num_rows($sqlusername);
    // check for email
    $sqlEmail= mysqli_query($conn, "SELECT * FROM account WHERE email ='$email'" );
    $checkEmail= mysqli_num_rows($sqlEmail);


    if($checkusername != 0){
        $msg="username already exist";
    }
    elseif($checkusername != 0){
        $msg="Email already in use. Please try different email adddress";
    }
    // password confirmation
    elseif($password != $cpass)
    {
        $msg ="password do not match";
    }
    }

?>