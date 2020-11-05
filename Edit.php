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
    table{
    border-color: cadetblue;
    background-color: burlywood;
    color: black;
    }
  </style>
</head>
<body>
<h2 style="text-align:center;">Editing DATA
</h2><hr>
<div>
<form method = "post" action = "<?php $_PHP_SELF ?>">
<table>
<tr>
<td>Sno.</td>
<td>Firstname</td>
<td>Lastname</td>
<td>Emloyee ID</td>
<td>Email</td>
<td>Update</td>
</tr>
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
<tr>
<td><input type="text" value="<?php echo $data['s_no']; ?>"></td>
<td><input type="text" id="firstname" value="<?php echo $data['firstname']; ?>"></td>
<td><input type="text" id="lastname" value="<?php echo $data['lastname']; ?>"></td>
<td><input type="text" id="employeeid" value="<?php echo $data['employeeid'];?>"></td>
<td><input type="text" id="email" value="<?php echo $data['email']; ?>"></td>
<td><a href="update.php?id=<?php echo $data['s_no']; ?>" target="_blank">Update</a></td>
</tr>
<?php
}
?>
</table>
</form>
</div>
</body>
</html>