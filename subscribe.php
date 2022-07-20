
<?php
     require_once('logics/dbconnection.php');
    
    

    $sql = mysqli_query($conn,"SELECT * FROM subscribers");
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
                <span class="align-middle">Subscribers</span>
                <span class="float-start"><a href="index.php"><i class="fa fa-arrow-circle-left" style="font-size:40px"></i>
                </a></span>
            </div>
            
        </div>
        </div>
    </div>
        <div class="container-fluid">
            <table class="table table-striped table-hover table-responsive"  >
                <thead>
                    <tr>
                        <th scope="col">no.</th>
                        <th scope="col">Email</th>
                        <th scope="col">subscribed on</th>
                             
                    </tr>
                </thead>
                <tbody>
                     <?php while($fetchsubscribeRecord = mysqli_fetch_array($sql)){ ?>
                        <tr>
                        
                        <td><?php echo $fetchsubscribeRecord['no']  ?></td>
                        <td> <?php echo $fetchsubscribeRecord['email']  ?></td>
                        <td> <?php echo $fetchsubscribeRecord['created-at']  ?></td>
                        
                        <td>
                            <a href="edit-subscribe.php?id=<?php echo $fetchsubscribeRecord['no']?>" class="btn btn-primary btn-sm">
                            <i class="fa fa-edit"></i>
                            </a>
                            <a href="view-subscribe.php?id=<?php echo $fetchsubscribeRecord['no']?>" class="btn btn-info btn-sm">
                            <i class="fa fa-eye"></i> 
                            </a>
                            <a href="delete-subscribe.php?id=<?php echo $fetchsubscribeRecord['no']?>" class="btn btn-danger btn-sm">
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