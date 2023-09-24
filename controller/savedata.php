<?php 
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
       $sql = "INSERT INTO employee(fname,lname,birth,gen,des,sal,hob,status) VALUES('{$fname}','{$lname}','{$birth}','{$gen}','{$des}','{$sal}','{$hob}','{$status}')";
       $result = mysqli_query($conn,$sql) or die("Query Unsuccessful");
     
     
       header("Location: http://localhost/jay/controller/view.php");
     
       mysqli_close($conn);
        






        ?>