<?php
    require_once('logics/dbconnection.php');

    $queryEnrollmentstudents=mysqli_query($conn,"SELECT * FROM enrollment" );
    $countAllstudents=mysqli_num_rows($queryEnrollmentstudents);

    $queryEnrolledFemale=mysqli_query($conn,"SELECT * FROM enrollment WHERE gender='Female'" );
    $countAllFemale=mysqli_num_rows($queryEnrolledFemale);

    
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
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-header bg-dark text-white text-center" style="height: 50px; text-align: center;" >
                        <span class="align-middle" >Top Content</span>
                    </div>
                </div>
            </div>
        
    
    <div class="row">
        <div class="col-lg-3 ">
            <div class="card-header bg-dark text-white text-center"style="height: 50px;" >
                <span class="align-middle">Students</span>
            </div>
            <div class="card-body   ">
                <span><i class="fa fa-group fa-3x"></i></span>
                <span class="float-end badge bg-dark rounded-pill"><?php echo $countAllFemale?></span>
            </div>
            <div class="card-footer shadow-none p-3 mb-5 bg-light rounded"></div>
        </div>
        <div class="col-lg-3">
            
            <div class="card-header bg-dark text-white text-center " style="height: 50px;">
                <span class="align-middle">Available Courses</span>
            </div>
            
            <div class="card-body">
                <span><i class="fa fa-folder-open fa-3x"></i></span>
                <span class="float-end">00</span>
            </div>
            <div class="card-footer shadow-none p-3 mb-5 bg-light rounded "></div>
            
        </div>
        <div class="col-lg-3">
            <div class="card-header bg-dark text-white text-center " style="height: 50px;">
                <span class="align-middle">Campuses</span>
            </div>
            <div class="card-body">
                <span><i class="fa fa-graduation-cap fa-3x"></i></span>
                <span class="float-end">00</span>
            </div>
            <div class="card-footer shadow-none p-3 mb-5 bg-light rounded"></div>
        </div>
        <div class="col-lg-3">
            <div class="card-header bg-dark text-white text-center" style="height: 50px;">
                <span class="align-middle">Users</span>
            </div>
            <div class="card-body">
                <span><i class="fa fa-user fa-3x"></i></span>
                <span class="float-end">00</span>
            </div>
            <div class="card-footer shadow-none p-3 mb-5 bg-light rounded"></div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card-header bg-dark text-white text-center"style="height: 50px;">
                <span class="align-middle">Student Analysis</span>
                </div>
                <div class="card-body">
                    <span><i class="fa fa-line-chart fa-4x" ></i></span>
                </div>
                <div class="card-footer shadow-none p-3 mb-5 bg-light rounded"></div>
                
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