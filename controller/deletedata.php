<?php 

if(isset($_POST['deletebtn']))
{
  include 'config.php';
    $eid = $_POST['eid'];
    
    

    $sql = "DELETE FROM employee WHERE eid = {$eid}";
    $result = mysqli_query($conn,$sql) or die("Query Unsuccessful");

    header("Location: http://localhost/jay/controller/view.php");

    mysqli_close($conn);

}



?>