<?php
     require_once('logics/dbconnection.php');

     if(isset($_POST['submitButton'])){
        //fetch data
        $fullname=$_POST['fullname'];
        $phonenumber=$_POST['phonenumber'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];
        $course=$_POST['course'];
    
        //submit data from
        $insertData=mysqli_query($conn,"INSERT INTO enrollment(fullname,phonenumber,email,gender,course) 
        VALUES('$fullname','$phonenumber','$email','$gender','$course')");
        
        }

     ?>
<!DOCTYPE html>
<html lang="en">
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
         <div class="main-content">    
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card-header bg-dark text-white text-center"style="height: 50px;" >
                    <span class="align-middle"> Add Students</span>
                    <a href="students.php"><span class="float-start"><button class="btn btn-danger">Back</button></span></a>
                    
                </div>
            </div>
        </div>
    </div>


    <!-- code for main content -->
    <div class="container shadow pt-5">
        	<!-- form start -->
        <form action="addstudent.php" method="POST">
            <div class="row">
                <div class="col-lg-6">
                    <label for="fullname" class="form-label"><b>Full name</b></label>
                    <input type="text" name="fullname" class="form-control" placeholder="Enter your full name">
                </div>
                <div class="col-lg-6">
                    <label for="phonenumber" class="form-label"><b>Phone Number</b></label>
                    <input type="text" name="phonenumber" class="form-control" placeholder="+2547.....">
                </div>
                <div class="col-lg-6">
                    <label for="email" class="form-label"><b>Email Address</b></label>
                    <input type="text" name="email" class="form-control" placeholder="please enter your email">
                </div>
                <div class="col-lg-6">
                    <label for="gender" class="form-label"><b>What's your gender</b></label>
                    <select class="form-select" name="gender" aria-label="Default select example">
                        <option selected>--select your gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
    
                        </select>
                </div>
            </div>
            <br>
            
            <br>
                <div class="col-lg-6">
                    <label for="course" class="form-label"><b>What's your preferred course?</b></label>
                    <select class="form-select" name="course"  aria-label="Default select example">
                        <option selected>--select your preffered course</option>
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
            <button class="btn btn-primary" type="submit" name="submitButton">Submit</button>  
        </form>
                      
    </div>






    <!--scripts file (js) -->
    <?php
        require_once('includes/scripts.php')
    ?>
    
</body>
</html>