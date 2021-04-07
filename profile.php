<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
include 'navbar.php'; ?><link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"><section class="content">
      <!-- Content Wrapper. Contains page content -->
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
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="dist/img/user4-128x128.jpg"
                       alt="User profile picture">
                </div><form>

                <h3 class="profile-username text-center"><?php echo htmlspecialchars($_SESSION["name"]); ?></h3>

                <p class="text-muted text-center">QP User</p>

                <ul class="list-group list-group-unbordered mb-4">
                  <li class="list-group-item">
                    <b>Name</b> <a class="float-right"><input type="text" class="form-control" placeholder="<?php echo htmlspecialchars($_SESSION["name"]); ?>" name="name" vleue="<?php echo htmlspecialchars($_SESSION["name"]); ?>"></a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right"><input type="email" class="form-control" placeholder="<?php echo htmlspecialchars($_SESSION["email"]); ?>" name="email" velue="<?php echo htmlspecialchars($_SESSION["email"]); ?>"></a>
                  </li>
                  <li class="list-group-item">
                    <b>password</b>  
                    <a class="float-right"> <input type="password" class="form-control" placeholder="<?php echo htmlspecialchars($_SESSION["password"]); ?>" name="password" velue="<?php echo htmlspecialchars($_SESSION["password"]); ?>"></a>
                  </li> 
                </ul>
                
                <button type="submit" class="btn btn-primary btn-block"><b>Edit</b></button></from>
                <a href="logout.php" class="btn btn-primary btn-block"><b>logout</b></a>
              </div>
            </div>
    </section>
  </div>