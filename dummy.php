
<?php
$server="localhost";
    $username="root";
    $password="";
    $database="zalego";
    
    $conn=mysqli_connect($server,$username,$password,$database);

    $sql = mysqli_query($conn,"SELECT * FROM enrollment");
    while ($fetchrecords = mysqli_fetch_array($sql)){
        echo $fetchrecords['fullname'].'   '.  $fetchrecords['phonenumber'].'   '. $fetchrecords ['email'].'<br>';
    }
    ?>