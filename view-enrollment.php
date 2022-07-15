<?php
// database conection
require_once('logics/dbconnection.php');
$sqlfetchstudent = mysqli_query($conn,
"SELECT * FROM enrollment WHERE no='".$_GET['id']."' ");
while($fetchstudent= mysqli_fetch_array($sqlfetchstudent)){
    $fullname =$fetchstudent['fullname'];
    $phone =$fetchstudent['phonenumber'];
    $email =$fetchstudent['email'];
    $gender =$fetchstudent['gender'];
    $course =$fetchstudent['course'];
    $createdat =$fetchstudent['created_at'];
    
}
?>
<!DOCTYPE html>
<html lang="en">
    <!-- header file -->
<?php
    require_once('includes/headers.php')
?>
<body>
    <!--navbar file-->
    <?php
    require_once('includes/navbar.php')
?>
    <!-- sidebar file -->
    <?php
    require_once('includes/sidebar.php')
?>
    <!-- code for main content -->
    <div class="main-content">
        
    </div>
    <div class="main-content pt-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <h4 class="card-title">Personal Information</h4>
                        </div>    
                        <div class="card-body">
                        <ul class="list-group">
                           <li class="list-group-item">Fullname: <span class="float-right badge badge-primary"><?php echo $fullname?></span></li>
                            <li class="list-group-item">Phone: <span class="float-right badge badge-primary"><?php echo $phone?></span></li>
                            <li class="list-group-item">Email: <span class="float-right badge badge-primary"><?php echo $email?> </span></li>                    
                        </ul>  
                        </div>    
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <h4 class="card-title">Other Information</h4>
                        </div>    
                        <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">Gender: <span class="float-end badge badge-primary"><?php echo $gender?></span></li>
                            <li class="list-group-item">Course: <span class="float-end badge badge-primary"><?php echo $course?></span></li>
                            <li class="list-group-item">Enrolled on: <span class="float-end badge badge-primary"><?php echo $createdat?></span></li>                   
                        </ul>  
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
 
<!-- scripts file -->
<?php
    require_once('includes/scripts.php')
?>
</body>
</html>