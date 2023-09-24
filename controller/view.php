<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View</title>
  <link rel="stylesheet" href="style.css">
 
  </head>
</head>
<body>
  <div id="main-content">
  <h1 align="center" class="head">THIS IS VIEW PAGE</h1>

  <?php
      //  $conn = mysqli_connect("localhost","root","","jmt") or die("Connection failed");
       include 'config.php';
       $sql = "SELECT * FROM employee";
       $result = mysqli_query($conn,$sql) or die("Query Unsuccessful");

       if(mysqli_num_rows($result)>0)
       {


    ?>
  <table cellpadding="7px">
        <thead>
        <th>Eid</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>D.O.B</th>
        <th>Gender</th>
        <th>Designation</th>
        <th>Salary</th>
        <th>Hobbies</th>
        <th>Status</th>
        </thead>
        <tbody>
            <?php 
            while($row = mysqli_fetch_assoc($result))
            {
            ?>
            <tr>
                <td><?php echo $row['eid'] ?></td>
                <td><?php echo $row['fname'] ?></td>
                <td><?php echo $row['lname'] ?></td>
                <td><?php echo $row['birth'] ?></td>
                <td><?php echo $row['gen'] ?></td>
                <td><?php echo $row['des'] ?></td>
                <td><?php echo $row['sal'] ?></td>
                <td><?php echo $row['hob'] ?></td>
                <td><?php echo $row['status'] ?></td>
                
            </tr>
            <?php } ?>
          
          
          </tbody>
      </table>
      <?php }
      else {
          echo "<h2>NO RECORD FOUND</h2>";
      } 
      mysqli_close($conn);  
      ?>
            
      

            </div>

            <!-- <button id="home">Home</button> -->

            <script src="index.js"></script>
</body>
</html>