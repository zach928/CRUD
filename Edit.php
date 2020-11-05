<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Records</title>
  <style>
  body{
      display: block;
    text-align: start;
    margin-left: 8px;
    font-style: oblique;
    font-color: red;
    text-color: cyan;
    color: #4206f8d6;
    }
    form{
    
    
    }
    button{

    margin-right: 107px;
    }
  </style>
</head>
<body>
<h2 style="margin-left:400px;">UPDATE YOUR DATA
<div>
<div class="name1"> <label value="<?php echo $data['firstname']; ?>"></label></div>
</div>
</h2><hr>
<?php
include("config.php");
{if (isset($_GET['update_id'])) 
 $id = $_GET['update_id'];
}
$sql= "select * from company WHERE s_no='$id'"; // fetch data from database
$result = mysqli_query($conn, $sql);
{
  echo "";
}
$data = mysqli_fetch_array($result);
{
?>
<form action="update.php" id="editmodal" style="margin-left: 400px;" method="POST" >
    <div>
    <label for="s_no">S no</label><br>
    <input type="text" name="s_no" id="s_no" value="<?php echo $data['s_no']; ?>" >
    </div>
    <div>
    <label for="firstname">Update your Firstname</label><br>
    <input type="text" name="firstname" id="firstname" value="<?php echo $data['firstname']; ?>">
    </div>
    <div>
    <label for="lastname">Update yourlastname</label><br>
    <input type="text" name="lastname" id="lastname" value="<?php echo $data['lastname']; ?>">
    <div>
    <label for="employeeid">Update your EmployeeID</label><br>
    <input type="text" name="employeeid" id="employeeid" value="<?php echo $data['employeeid']; ?>">
    </div>
    <div>    
    <label for="email">Update your email</label><br>
    <input type="text" name="email" id="email" value="<?php echo $data['email']; ?>">
    </div>
    <button type="submit" action="update.php">Update</button>
    </form>
<?php
}
?>
</body>
</html>
