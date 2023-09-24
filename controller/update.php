<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
</head>
<body>
  <h1 align="center">This is Update Page</h1>
  
   <div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label class="abc">Id</label>
            <input type="text" name="eid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>
    

    <?php
    if(isset($_POST['showbtn']))
    {
        
        // $conn = mysqli_connect("localhost","root","","jmt") or die("Connection failed");
        include 'config.php';
        $eid = $_POST['eid'];
        $sql = "SELECT * FROM employee WHERE eid = {$eid}";
        $result = mysqli_query($conn,$sql) or die("Query Unsuccessful");
 
        if(mysqli_num_rows($result)>0)
        {
         while($row = mysqli_fetch_assoc($result))
         {
    ?>


<form id="employeeForm" method="post" action="saveupdate.php">
       
       <div class="form-row">
         <div class="form-group col-md-6">
           <label for="firstName">First Name</label>
           <input type="hidden" name="eid"  value="<?php echo $row['eid']; ?>" />
           <input
             type="text"
             class="form-control"
             id="firstName"
             name="fname"
             value="<?php echo $row['fname']; ?>"
             required
           />
         </div>
         <div class="form-group col-md-6">
           <label for="lastName">Last Name</label>
           <input
             type="text"
             class="form-control"
             id="lastName"
             name="lname"
             value="<?php echo $row['lname']; ?>"
             required
           />
         </div>
       </div>
       <div class="form-row">
         <div class="form-group col-md-6">
           <label for="birthdate">Birthdate</label>
           <input
             type="date"
             class="form-control"
             id="birthdate"
             name="birth"
             required
           />
         </div>
         <div class="form-group col-md-6">
           <label>Gender</label>
           <div class="form-check">
             <input
               class="form-check-input"
               type="radio"
               name="gen"
               id="male"
               value="Male"
               required
             />
             <label class="form-check-label" for="male">Male</label>
           </div>
           <div class="form-check">
             <input
               class="form-check-input"
               type="radio"
               name="gen"
               id="female"
               value="Female"
               required
             />
             <label class="form-check-label" for="female">Female</label>
           </div>
         </div>
       </div>
       <div class="form-row">
         <div class="form-group col-md-6">
           <label for="designation">Designation</label>
           <input
             type="text"
             class="form-control"
             id="designation"
             name="des"
             value="<?php echo $row['des']; ?>"
             required
           />
         </div>
         <div class="form-group col-md-6">
           <label for="salary">Salary</label>
           <input
             type="number"
             class="form-control"
             id="salary"
             name="sal"
             value="<?php echo $row['sal']; ?>"
             required
           />
         </div>
       </div>
       <div class="form-row">
         <div class="form-group col-md-6">
           <label for="hobbies">Hobbies</label>
           <select
             multiple
             class="form-control"
             id="hobbies"
             name="hob"
             required
           >
             <option value="Reading">Reading</option>
             <option value="Sports">Sports</option>
             <option value="Music">Music</option>
             <option value="Traveling">Traveling</option>
             <!-- Add more hobbies options as needed -->
           </select>
         </div>
         <div class="form-group col-md-6">
           <label for="status">Status</label>
           <select class="form-control" id="status" name="status" required>
             <option value="Experienced">Experienced</option>
             <option value="Fresher">Fresher</option>
           </select>
         </div>
       </div>
       <div class="form-group">
         <!-- <button type="button" class="btn btn-primary" id="saveBtn" name="save">
           Save
         </button> -->
         <!-- <input type="button" value="Save" name="save"> -->
         <input class="btn btn-primary" type="submit" value="Save"  />
         <!-- <input class="btn btn-info" type="button" value="View" name="view" id="view" /> -->
         <!-- <input class="update" type="button" value="Update" name="update" id="update" /> -->
        
         <!-- <button type="button" class="btn btn-info" id="viewBtn">View</button> -->
         <!-- <button type="button" class="btn btn-danger" id="deleteBtn">
           Delete
         </button> -->
       </div>
     </form>
    <?php
         }
        }
    }
    ?>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</body>

</html>