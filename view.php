<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Records</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body >
<div class="container">
<h2>INSERT YOUR DATA</h2><hr>

<form action="controller.php" id="ID"  method="POST" class="was-validated">
    <div class="form-group">
    <label for="firstname">Firstname</label><br>
    <div class="row"><div class="col-4"><input type="text" class="form-control"  id="firstname" name="firstname"required ></div><br>
    </div> </div>
    <div class="form-group">
    <label for="lastname">lastname</label><br>
    <div class="row"><div class="col-4"><input type="text" class="form-control" name="lastname"required id="lastname"></div></div><br>
    <div class="form-group">
    <label for="employeeid">EmployeeID</label><br>
    <div class="row"><div class="col-4"><input type="text" class="form-control" name="employeeid"required id="employeeid"></div></div><br>
    </div>
    <div class="form-group">    
    <label for="email">email</label><br>
    <div class="row"><div class="col-4"><input type="text" class="form-control" name="email"required id="email"></div></div><br>
    </div>
    <div class="btn-grp">
    <button class="btn btn-primary" type="submit">Submit</button></div>
    </form>
<h2>EMPLOYEE DATA</h2>

<table class="table table-hover table-bordered">
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
    <td style="text-align: center;"><a class="fas fa-trash" style='font-size:22px;color:red' role="button" href="delete.php?delete_id=<?php echo $data['s_no']; ?>" target="_self"></a></td>
    <div>
    <td style="text-align: center;"><a class="fas fa-edit" style="font-size:22px;color:#3333cc" role="button" href="edit.php?update_id=<?php echo $data['s_no']; ?>" target="_self"></a></td>
  </tr>	
<?php
}
?>
</table>
</div>
</body>
</html>