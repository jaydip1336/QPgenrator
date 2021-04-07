<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
include 'navbar.php'; ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>
                <p>New Paper</p>
              </div>
              <div class="icon">
                <i class="fas fa-plus"></i>
              </div>
              <a href="new_paper.php" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Edit Questions</p>
              </div>
              <div class="icon">
                <i class="fas fa-edit"></i>
              </div>
              <a href="edit_paper.php" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>
                <p>Number of User</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="#" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>
                <p>Numbers of Paper</p>
              </div>
              <div class="icon">
                <i class="fas fa-list-ol"></i>
              </div>
              <a href="#" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>

        <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">User Details</h5>
                    <div class="card-tools">
                    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["name"]); ?></b>. Welcome to our site.</h1>
                    <p>
                        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
                        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
                    </p>   
                    </div>
                </div>
            </div>
        </div>
<? include 'footer.php';?>
<!-- jQuery -->
