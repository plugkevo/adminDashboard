<?php
$message ="";
    require_once('logics/dbconnection.php');
    $querystudent=mysqli_query($conn,"SELECT * FROM subscribers WHERE no= '".$_GET['id']."' ");
    while($fetchsubscribedstudent = mysqli_fetch_array($querystudent))
    {
        $id=$fetchsubscribedstudent['no'];
        $email = $fetchsubscribedstudent['email'];
        $subscribedon = $fetchsubscribedstudent['created-at'];
        
        
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
                            <a href="subscribe.php"><span class="float-start"><i class="fa fa-arrow-circle-left" style="font-size:40px"></i></span></a>
                            <h4>Edit Subscriber </h4>
                            <span><?php echo $message ?></span>
                        
                        </div>
                    </div>

                </div>
            </div>
                <div class="card-body ">
                    <form action="edit-enrollment.php?id=<?php echo $id ?>" method="POST">
                            <div class="row">
                                
                                <div class="col-lg-6">
                                    <label for="phonenumber" class="form-label"><b>Email</b></label>
                                    <input type="text" name="email" value="<?php echo "$email"?>" class="form-control" placeholder="+2547.....">
                                </div>
                                <div class="col-lg-6">
                                    <label for="email" class="form-label"><b>Subscribed on</b></label>
                                    <input type="text" name="suscribedon" value="<?php echo "$subscribedon"?>"  class="form-control" placeholder="please enter your email">
                                </div>
                               
                            </div>
                       
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