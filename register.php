<?php
// Include config file
require_once "config.php";
$showAlert = false; 
$showError = false; 
$exists=false;
    
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    // Include file which makes the
    // Database Connection.
    // include 'dbconnect.php';   
    $name = $_POST["name"]; 
    $email = $_POST["email"]; 
    $password = $_POST["password"]; 
    $confirm_password = $_POST["confirm_password"];

    if(empty(trim($_POST["email"])) || empty(trim($_POST["name"])) || empty(trim($_POST["password"])))
    {
      $showError = "all fild are reqaird"; 
    }            
    $sql = "Select * from users where email='$email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result); 
    if($num == 0) {
        if(($password == $confirm_password) && $exists==false) {
    
            $hash = md5($password);
                
            // Password Hashing is used here. 
            $sql = "INSERT INTO `users` ( `name`,`email`, 
                `password`) VALUES ('$name','$email', 
                '$hash')";
    
            $result = mysqli_query($conn, $sql);
    
            if ($result) {
                $showAlert = true; 
            }
        } 
        else { 
            $showError = "Passwords do not match"; 
        }      
    } 
    
   if($num>0) 
   {
      $exists="email is arledy exist...."; 
   } 
    
}    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>QP Generator - Register</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>QP</b>Generator</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Join with us</p>
      <!-- <div class="input-group mb-3">   -->
      <!-- <div> -->
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      
       <div class="input-group mb-3"> 
      <?php
    
    if($showAlert) {
    
        echo ' <d class="alert alert-success 
            alert-dismissible fade show" role="alert">
    
            <strong>Success!</strong> Your account is 
            now created and you can login. 
            <button type="button" class="close"
                data-dismiss="alert" aria-label="Close"> 
                <span aria-hidden="true">×</span> 
            </button> 
        </d> '; 
    }
    
    if($showError) {
    
        echo ' <d class="alert alert-danger 
            alert-dismissible fade show" role="alert"> 
        <strong>Error!</strong> '. $showError.'
    
       <button type="button" class="close" 
            data-dismiss="alert aria-label="Close">
            <span aria-hidden="true">×</span> 
       </button> 
     </d> '; 
   }
        
    if($exists) {
        echo ' <d class="alert alert-danger 
            alert-dismissible fade show" role="alert">
    
        <strong>Error!</strong> '. $exists.'
        <button type="button" class="close" 
            data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">×</span> 
        </button>
       </d> '; 
     }
   
?>
      </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Enter Your Name" name="name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Enter Your Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Enter Your Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password" name="confirm_password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <a href="login.php" class="text-center">Already Register?</a>
    </div>
    <!-- /.form-box -->
  </div>
</div>
<!-- /.register-box -->
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
