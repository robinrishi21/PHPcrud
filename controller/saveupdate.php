<?php
  $eid = $_POST['eid'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $birth = $_POST['birth'];
  $gen = $_POST['gen'];
  $des = $_POST['des'];
  $sal = $_POST['sal'];
  $hob = $_POST['hob'];
  $status = $_POST['status'];

  // $conn = mysqli_connect("localhost","root","","jmt") or die("Connection failed");
  include 'config.php';
  $sql = "UPDATE employee SET fname = '{$fname}',lname = '{$lname}',birth = '{$birth}',gen = '{$gen}',des = '{$des}',sal = '{$sal}',hob = '{$hob}',status = '{$status}' WHERE eid = '{$eid}' ";

  $result = mysqli_query($conn,$sql) or die("Query Unsuccessful");


  header("Location: http://localhost/jay/controller/view.php");

  mysqli_close($conn);




?>