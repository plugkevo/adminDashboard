<?php
     require_once('logics/dbconnection.php');
    
    

    $sql = mysqli_query($conn,"SELECT * FROM contactus");
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
                <span class="align-middle">CONTACT US</span>
                
            </div>
            
        </div>
        </div>
    </div>
        <div class="container-fluid">
            <table class="table table-striped table-hover table-responsive"  >
                <thead>
                    <tr>
                        <th scope="col">no.</th>
                        <th scope="col">Firstname</th>
                        <th scope="col">lastname</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phonenumber</th>
                        <th scope="col">Message</th>
                        <th scope="col">Enrolled on</th>
                        

      
                    </tr>
                </thead>
                <tbody>
                     <?php while($fetchcontactRecord = mysqli_fetch_array($sql)){ ?>
                        <tr>
                        
                        <td><?php echo $fetchcontactRecord['no']  ?></td>
                        <td> <?php echo $fetchcontactRecord['firstname']  ?></td>
                        <td> <?php echo $fetchcontactRecord['lastname']  ?></td>
                        <td> <?php echo $fetchcontactRecord['email']  ?> </td>
                        <td> <?php echo $fetchcontactRecord['phonenumber']  ?> </td>
                        <td> <?php echo $fetchcontactRecord['message']  ?> </td>
                        <td> <?php echo $fetchcontactRecord['created_at']  ?> </td>
                        
      

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