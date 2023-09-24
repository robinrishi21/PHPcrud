<?php 
  include 'deletedata.php';
?>
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
  <h1 align="center">Welcome to delete page</h1>
  


<div id="main-content">
    <h2 class="h2">Delete Record</h2>
    <form class="post-form" action="deletedata.php" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" id="eid" name="eid" />
        </div>
        <input class="btn btn-danger" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
  
<!-- Include Bootstrap and JavaScript dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>