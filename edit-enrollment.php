<?php
$message ="";
    require_once('logics/dbconnection.php');
    $querystudent=mysqli_query($conn,"SELECT * FROM enrollment WHERE no= '".$_GET['id']."' ");
    while($fetchstudent = mysqli_fetch_array($querystudent))
    {
        $id=$fetchstudent['no'];
        $fullname = $fetchstudent['fullname'];
        $phonenumber = $fetchstudent['phonenumber'];
        $email = $fetchstudent['email'];
        $gender = $fetchstudent['gender'];
        $course = $fetchstudent['course'];
        
    }
    // updating records
    require_once('logics/process-update.php')
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-center text-white">
                            <h4>Edit Student <?php echo "$fullname"?></h4>
                            <span><?php echo $message ?></span>
                        
                        </div>
                    </div>

                </div>
            </div>
                <div class="card-body ">
                    <form action="edit-enrollment.php?id=<?php echo $id ?>" method="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="fullname" class="form-label"><b>Full name</b></label>
                                    <input type="text" name="fullname"  value="<?php echo "$fullname"?>" class="form-control" placeholder="Enter your full name">
                                </div>
                                <div class="col-lg-6">
                                    <label for="phonenumber" class="form-label"><b>Phone Number</b></label>
                                    <input type="text" name="phonenumber" value="<?php echo "$phonenumber"?>" class="form-control" placeholder="+2547.....">
                                </div>
                                <div class="col-lg-6">
                                    <label for="email" class="form-label"><b>Email Address</b></label>
                                    <input type="text" name="email" value="<?php echo "$email"?>"  class="form-control" placeholder="please enter your email">
                                </div>
                                <div class="col-lg-6">
                                    <label for="gender" class="form-label"><b>What's your gender</b></label>
                                    <select class="form-select" name="gender"  aria-label="Default select example">
                                        <option selected><?php echo "$gender"?></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
        
                                    </select>
                                </div>
                            </div>
                        <br>
                        <p>In order to complete your registration to the bootcamp, you are required to select one course yoy will be undertaking. Please NOTE that this will be your learning track during the w-weeeks immersion</p>
                        <br>
                        <div class="col-lg-6">
                            <label for="course" class="form-label"><b>What's your preferred course?</b></label>
                            <select class="form-select" name="course"  aria-label="Default select example">
                                <option selected><?php echo "$course"?></option>
                                <option value="Web Design">Web Design</option>
                                <option value="Data Analysis">Data Analysis</option>
                                <option value="Cyber security">Cyber security</option>
                            </select>
                        </div>
                        <br>
                        
                        <!-- <div class = "form-check">  
                            <input class = "form-check-input"   type = "checkbox" id = "checkbox1" name="option1" value="good" >  
                            <label class="form-check-label"><b>Agreeing terms and conditions</b></label>  
                        </div> -->
                        <div class="row pt-2">
                            <div class="col-lg-6">
                            <button class="btn btn-primary" type="submit" name="updateRecords">Update Records</button>  
                            </div>
                        </div>  
                        
                       
                    </form>    
                </div>

        </div>
    </div>
 
<!-- scripts file -->
<?php
    require_once('includes/scripts.php')
?>
</body>
</html>