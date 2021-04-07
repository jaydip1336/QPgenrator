<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
include 'navbar.php'; ?>
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
          <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="dist/img/user4-128x128.jpg"
                       alt="User profile picture">
                </div><form>
                <div class="card-body">
              <div class="card-body box-profile">                        
                                        
              <p class="login-box-msg">Create new paper</p>
      <form action="index.html" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Qustion paper name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-plus"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Qustion paper id">
        <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-eye"></span>
        </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Qustion paper password">
        <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-lock"></span>
        </div>
        </div>
        </div>
        <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="NO of Qustion">
        <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-eye"></span>
        </div>
        </div>
    </div><div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Total Marks">
        <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-eye"></span>
        </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Time In Hours">
        <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-eye"></span>
        </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="instructions">
        <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-eye"></span>
        </div>
        </div>
    </div>               
                   

                    <button type="submit" class="btn btn-primary btn-block"><b>Create paper</b></button></from>
              </div>
            </div>
    </section>
  </div>
