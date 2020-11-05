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
      text-align: right;
    margin-right: 400px;
    }
    button{

    margin-right: 107px;
    }
  </style>
</head>
<body>
<h2 style="text-align:center;">Editing DATA
</h2><hr>
<?php
include("config.php");
{if (isset($_GET['id'])) 
 $id = $_GET['id'];
 print_r($id);
}
$sql= "select * from company WHERE s_no='$id'"; // fetch data from database
$result = mysqli_query($conn, $sql);
print_r($sql);

{
  echo "";
}
$data = mysqli_fetch_array($result);
print_r($data);
{
?>
<form action="update.php"  method="POST">
<div>
    <label for="firstname">Firstname</label>
    <input type="text" name="firstname" id="firstname" value="<?php echo $data['firstname']; ?>">
    </div>
    <div>
    <label for="lastname">lastname</label>
    <input type="text" name="lastname" id="lastname" value="<?php echo $data['lastname']; ?>">
    <div>
    <label for="employeeid">EmployeeID</label>
    <input type="text" name="employeeid" id="employeeid" value="<?php echo $data['employeeid']; ?>">
    </div>
    <div>    
    <label for="email">email</label>
    <input type="text" name="email" id="email" value="<?php echo $data['email']; ?>">
    </div><br>
    <button type="submit">Update</button>
</form>
<?php
}
?>
</body>
</html>
