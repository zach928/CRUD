<?php
include "config.php";
{if($_SERVER['REQUEST_METHOD'] == 'POST')

        $id = $_POST["s_no"];
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $employeeid = $_POST["employeeid"];
        $email = $_POST["email"];
}
$sql = "UPDATE `company` SET `firstname` = '$firstname', `lastname` = '$lastname' ,
`employeeid` = '$employeeid' , `email` = '$email' WHERE s_no=$id";
print_r($sql);
    if($result = mysqli_query($conn, $sql));
      {
        header ("location:/CRUD/view.php");
        
      }  
      ?>
