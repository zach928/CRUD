<?php
include("config.php");
// Inserting the data
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
}
      $sql =  "INSERT INTO `company` ( `firstname`, `lastname`, `employeeid`, `email`)VALUES ( '$_POST[firstname]', '$_POST[lastname]', '$_POST[employeeid]', '$_POST[email]');"; 
      $result = mysqli_query($conn, $sql);
      if($result){
        header("location:/CRUD/view.php");
        }
      else{
          echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
      }
?>