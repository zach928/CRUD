<?php
include "config.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $id = $_POST["s_no"];
      $sql = "UPDATE `company` SET `firstname` = '$_POST[firstname]', `lastname` = '$_POST[lastname]',`employeeid` = '$_POST[employeeid]' , `email` = '$_POST[email]' WHERE s_no=$id";
      if($result = mysqli_query($conn, $sql))
        {
        header ("location:/CRUD/view.php");
        }  
}
?>