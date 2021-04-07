<?php
session_start();
$result="";
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
include 'navbar.php'; 
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">

<?
$Question_paper_id=$_SESSION["Question_paper_id"];
$user_id=$_SESSION["user_id"];
$conn=mysqli_connect("localhost", "root", "","project") or
    die("Could not connect: " . mysql_error());
// mysql_select_db("project");

$result = mysqli_query($conn,"SELECT Question,A,B,C,D FROM $Question_paper_id WHERE user_id=$user_id");

// mysqli_free_result($result);
while ($row = mysqli_fetch_array($result)) {
    printf("Question: %s  A: %s B: %s C: %s D: %s", $row[0], $row[1], $row[2], $row[3], $row[4]);  
    echo $row[0].$row[0].$row[1].$row[2].$row[3].$row[4];
}
?>             
