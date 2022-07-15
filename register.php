<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
<link rel="stylesheet" href="register.css">
<link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
</head>
<body>
    <nav>
        <div class="header" style="text-align: center;">
            <span>Zalego|Admin Register</span>
            

        </div>
    </nav>
    <div class="sub-header" style="text-align: center;">
        <img src="images/images.jpg" alt="zalego" height="50" width="50" class="rounded-circle">
    </div>
    <div class="container shadow">
        <form action="" method="post"> 
        <div class="row">   
            <div class="col-lg-12">   
                <label for="username" class="form-label">username:</label>
                <br>
                <input type="text" class="form-control" name="username" >
            </div>
            <div class="col-lg-12">
                <br>
                <label for="email" class="form-label">Email:</label>
                <br>
             <input type="text" class="form-control" name="email" >
            </div>
                <br>
            <div>
                <label for="password" class="form-label" >password:</label>
                <br>
                <input type="text" class="form-control" name="password">
            </div>
                <br>
            <div>
                <label for="confirm password" class="form-label">confirm password:</label>
                <br>
                <input type="text" class="form-control" name="cpassword">
            </div>
                <br>
            <div>
                <br>
                <button class="btn btn-primary" name="signUp">submit</button>
            </div>
            <span>Have  account? sign in <a href="login.php">here</a></span>
        </div>    
        </form>


    </div>





    <script src="jquery.min.js"></script>
    <script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
</body>
</html>