<?php
// 1. database connection
require_once('logics/dbconnection.php');
$sqlfetchsubcribedStudent= mysqli_query( $conn, 
"SELECT * FROM subscribers WHERE no='" .$_GET['id']."'");
while($fetchStudent=mysqli_fetch_array( $sqlfetchsubcribedStudent))
{
    
    $email= $fetchStudent['email'];   
    $subscribedon=$fetchStudent['created-at'];
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
                    <div class=col-lg-12>
                        <div class="card">
                            <div class="card-header bg-dark text-white">
                                <a href="subscribe.php"><span class="float-start"><i class="fa fa-arrow-circle-left" style="font-size:40px"></i></span></a>
                                <h4 class="card-title text-center" >Subscriber information</h4>
                            </div>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item">Email:   <span  class="float-end badge bg-primary"><?php echo "$email"?></span></li>
                                    <li class="list-group-item">Subscribed on:   <span  class="float-end badge bg-secondary"><?php echo "$subscribedon"?></span> </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>                        
            </div>
        </div>


<!-- <script src="jquery.min.js"></script> -->
   <?php require('includes/scripts.php')?>

</body>subcribed