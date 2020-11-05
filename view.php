<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Records</title>
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
    table{
    border-color: cadetblue;
    background-color: burlywood;
    color: black;
    }
    </style>
</head>
<body >
<h2 style="margin-left:400px;">INSERT YOUR DATA</h2><hr>

    <form action="controller.php" id="ID" style="margin-left: 400px;" method="POST" >
    <div>
    <label for="firstname">Firstname</label><br>
    <input type="text" name="firstname" id="firstname"><br>
    </div>
    <div>
    <label for="lastname">lastname</label><br>
    <input type="text" name="lastname" id="lastname"><br>
    <div>
    <label for="employeeid">EmployeeID</label><br>
    <input type="text" name="employeeid" id="employeeid"><br>
    </div>
    <div>    
    <label for="email">email</label><br>
    <input type="text" name="email" id="email"><br>
    </div>
    <button type="submit">Submit</button>
    </form>
<h2>INSERTED DATA</h2>

<table border=2px solid;
      cellpadding=5; 
      cellspacing=3;>
  <tr>
    <td>SNo.</td>
    <td>Fistname</td>
    <td>Lastname</td>
    <td>Employee ID</td>
    <td>Email</td>
    <td>Delete</td>
    <td>Edit</td>
  </tr>

<?php

include "config.php"; // Using database connection file here

$sql= "select * from company"; // fetch data from database
if($result = mysqli_query($conn, $sql)){
echo "";
}
if(mysqli_num_rows($result) > 0)
while($data = mysqli_fetch_array($result))
{
?>

  <tr>
    <td><?php echo $data['s_no']; ?></td>
    <td><?php echo $data['firstname']; ?></td>
    <td><?php echo $data['lastname']; ?></td>    
    <td><?php echo $data['employeeid']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><a href="delete.php?delete_id=<?php echo $data['s_no']; ?>" target="_self">Delete</a></td>
    <td><a href="edit.php?id=<?php echo $data['s_no']; ?>" target="_parent">Edit</a></td>
  </tr>	
<?php
}
?>
</table>
</body>
</html>