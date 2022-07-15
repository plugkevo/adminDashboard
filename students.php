
<?php
     require_once('logics/dbconnection.php');
    
    

    $sql = mysqli_query($conn,"SELECT * FROM enrollment");
    // while ($fetchrecords = mysqli_fetch_array($sql)){
    //     echo $fetchrecords['']
    // }

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
    <!-- code for main content -->
   
    <div class="main-content">
        <div class="kev">
        <div class="row">
        <div class="col-lg-12 ">
            <div class="card-header bg-dark text-white text-center"style="height: 50px;" >
                <span class="align-middle">Students</span>
                
            </div>
            
        </div>
        </div>
    </div>
        <div class="container-fluid">
            <table class="table table-striped table-hover table-responsive"  >
                <thead>
                    <tr>
                        <th scope="col">no.</th>
                        <th scope="col">Fullname</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Course</th>
                        <th scope="col">Enrolled on</th>
                        <th scope="col">Action</th>

      
                    </tr>
                </thead>
                <tbody>
                     <?php while($fetchEnrollmentRecord = mysqli_fetch_array($sql)){ ?>
                        <tr>
                        
                        <td><?php echo $fetchEnrollmentRecord['no']  ?></td>
                        <td> <?php echo $fetchEnrollmentRecord['fullname']  ?></td>
                        <td> <?php echo $fetchEnrollmentRecord['phonenumber']  ?></td>
                        <td> <?php echo $fetchEnrollmentRecord['email']  ?> </td>
                        <td> <?php echo $fetchEnrollmentRecord['gender']  ?> </td>
                        <td> <?php echo $fetchEnrollmentRecord['course']  ?> </td>
                        <td> <?php echo $fetchEnrollmentRecord['created_at']  ?> </td>
                        <td>
                            <a href="edit-enrollment.php?id=<?php echo $fetchEnrollmentRecord['no']?>" class="btn btn-primary btn-sm">
                            <i class="fa fa-edit"></i>
                            </a>
                            <a href="view-enrollment.php?id=<?php echo $fetchEnrollmentRecord['no']?>" class="btn btn-info btn-sm">
                            <i class="fa fa-eye"></i> 
                            </a>
                            <a href="delete-enrollment.php?id=<?php echo $fetchEnrollmentRecord['no']?>" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i> 
                                
                            </a>
                        </td>
      

                    </tr>
                   
                     <?php  }?>
                </tbody>
            </table>   
        
    
    
        </div>
    </div>
 
  <!--scripts file (js) -->
  <?php
    require_once('includes/scripts.php')
?>
</body>
</html>