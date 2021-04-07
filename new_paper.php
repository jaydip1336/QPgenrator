<?php
// Include config file
require_once "config.php";
session_start();
$_SESSION["data"]="";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!empty($_POST["Question_paper_name"]))
    {
  $Question_paper_name = $_POST["Question_paper_name"];
  // echo "</br>paper name:".$Question_paper_name; 
  // echo "</br>User id".$_SESSION["user_id"]; 
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    $rS='';
    for ($i = 0; $i < 7; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
    for ($i = 0; $i < 7; $i++) {
      $in = rand(0, strlen($characters) - 1);
      $rS .= $characters[$in];
  }     
  $id=$_SESSION["user_id"];
  $sql = "INSERT INTO `Question_papers` ( `user_id`,`Question_paper_name`, 
  `Question_paper_id`,Question_paper_password) VALUES ('$id','$Question_paper_name', 
  '$randomString','$rS')";
  $result = mysqli_query($conn, $sql);
  if($result){
    $sql = "CREATE TABLE $randomString (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      Question VARCHAR(255),
      A VARCHAR(255),
      B VARCHAR(255),
      C VARCHAR(255),
      D VARCHAR(255),
      user_id INT(6)
      )";
      $re = mysqli_query($conn, $sql);
    if($re){  
    $data="<table><tr><th>paper name:</th><th>  ".$Question_paper_name."</th></tr><tr><th>User id:</th> <th>  ".$_SESSION["user_id"]."</th></tr><tr><th>paper id: </th> <th>".$randomString."</th></tr><tr><th>paper password:</th><th> ".$rS."</th></tr></table>";
    $_SESSION["data"] = $data;
  }
}
}
} 
?>
<?php include 'navbar.php'; ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="dist/img/user4-128x128.jpg"
                       alt="User profile picture">
                </div>
                <div class="card-body">
                  <p class="login-box-msg">Create new paper</p>
                  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                  <div>  
                    <div class="alert alert-success"><?php echo $_SESSION["data"];?><div></div></div></div>
                    <div class="input-group mb-3">  <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Question paper name" name="Question_paper_name">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-plus"></span>
                        </div>
                      </div>
 
                    </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Create</button>
          </div>
       
          </div>
      </form>
  </div>
</div>
