<?php
// 1. database connection
require_once('logics/dbconnection.php');
$sqlfetchEnrolledStudent= mysqli_query( $conn, 
"SELECT * FROM enrollment WHERE no='" .$_GET['id']."'");
while($fetchStudent=mysqli_fetch_array( $sqlfetchEnrolledStudent))
{
    $fullname=$fetchStudent['fullname'];
    $email= $fetchStudent['email'];
    $phonenumber=$fetchStudent['phonenumber'];
    $gender=$fetchStudent['gender'];
    $courses= $fetchStudent['course'];
    $enrolledon=$fetchStudent['entered_on'];
}
?>

    

<!DOCTYPE html>
<html lang="en">
    <!-- header connection -->
<?php require_once( 'includes/headers.php') ?>

<body>

    
    <!-- all our code. written -->
    
    <!-- class container with the header -->
    <?php require_once( 'includes/navbar.php') ?>
      
        <div class="sidebar">
           <!-- navbar -->

        <?php require_once( 'includes/sidebar.php') ?>
        </div>
        <div class="main-content">
                <div class="container-fluid">    
                    <div class="row">
                        <div class=col-lg-6>
                        <div class="card">
                            <div class="card-header bg-success text-white">
                                <h4 class="card-title" >Personal information</h4>
                            </div>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item">Fullname:   <span  class="float-end badge bg-primary"><?php echo"$fullname"?></span></li>
                                    <li class="list-group-item">Email:   <span  class="float-end badge bg-secondary"><?php echo"$email"?></span> </li>
                                    <li class="list-group-item">Phonenumber:   <span class="float-end badge bg-danger"> <?php echo"$phonenumber"?></span></li>
                                </ul>
                            </div>
                            
                       </div>
                       
                        </div>
                        <div class=col-lg-6>
                        <div class="card">
                            <div class="card-header bg-success text-white">
                                <h4 class="card-title" >Other information</h4>
                            </div>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item">Gender:   <span  class="float-end badge bg-primary"><?php echo"$gender"?></span></li>
                                    <li class="list-group-item">courses:   <span  class="float-end badge bg-secondary"><?php echo"$courses"?></span> </li>
                                    <li class="list-group-item">Enrolled on:   <span class="float-end badge bg-danger"> <?php echo"$enrolledon"?></span></li>
                                </ul>
                            </div>
                            
                       </div>
                       
                        </div>
                    </div>                        
                </div>
        </div>


<!-- <script src="jquery.min.js"></script> -->
   <?php require('includes/scripts.php')?>

</body>
</html>