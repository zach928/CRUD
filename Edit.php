<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<div class="container">
<?php
include("config.php");
if (isset($_GET['update_id'])) 
{
      $id = $_GET['update_id'];
      $sql= "select * from company WHERE s_no='$id'"; // fetch data from database
      $result = mysqli_query($conn, $sql);
      $data = mysqli_fetch_array($result);
}
?>
<h2>UPDATE YOUR DATA 
<div><table>
<td><?php echo $data['firstname']; ?></td>
<td><?php echo $data['lastname']; ?></td>
</table></div></h2><hr>
<form action="update.php" id="editmodal" style="margin-left: 400px;" method="POST" class="was-validated" >
    <div class="form-group">
    <label for="s_no">S no</label><br>
    <input type="text" name="s_no" id="s_no" value="<?php echo $data['s_no']; ?>" >
    </div>
    <div class="form-group">
    <label for="firstname">Update your Firstname</label><br>
    <input type="text" name="firstname" id="firstname" value="<?php echo $data['firstname']; ?>">
    </div>
    <div class="form-group">
    <label for="lastname">Update your Lastname</label><br>
    <input type="text" name="lastname" id="lastname" value="<?php echo $data['lastname']; ?>">
    <div class="form-group">
    <label for="employeeid">Update your EmployeeID</label><br>
    <input type="text" name="employeeid" id="employeeid" value="<?php echo $data['employeeid']; ?>">
    </div>
    <div class="form-group">    
    <label for="email">Update your Email</label><br>
    <input type="text" name="email" id="email" value="<?php echo $data['email']; ?>">
    </div>
    <button class="btn btn-primary" type="submit" action="update.php">Update</button>
    </form>
    </div>
</body>
</html>
