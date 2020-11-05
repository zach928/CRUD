<?php
include "config.php";
if(isset($_GET['id']))
{ $id = $_GET['id'];}
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
        $id = $_POST["id"];
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $employeeid = $_POST["employeeid"];
        $email = $_POST["email"];
}
{$sql = "UPDATE `company` SET `firstname` = '$firstname', `lastname` = '$lastname' ,
`employeeid` = '$employeeid' , `email` = '$email' WHERE s_no='$id'";
print_r($sql);
    if($result = mysqli_query($conn, $sql));
      {
        echo "Record Updated Successfully";
      }
        if(mysqli_num_rows($result) > 0)
      {
        header ("location:/Crud/update.php");
      }
      
    }
      ?>


<!-- if ($_SERVER['REQUEST_METHOD'] == 'POST'){ 
  // Update the record
        $id = $_POST["s_no"];
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $employeeid = $_POST["employeeid"];
        $email = $_POST["email"];
        // Sql query to be executed
      $sql = "UPDATE `company` SET `firstname` = '$firstname', `lastname` = '$lastname' ,
      `employeeid` = '$employeeid' , `email` = '$email' WHERE `s_no` ='$id'";
      if($result = mysqli_query($conn, $sql));
      {
        echo "Record Updated Successfully";
      }
      if(mysqli_num_rows($result) > 0)
      {
        header ("location:/Crud/update.php");
      }
    }

?>-->