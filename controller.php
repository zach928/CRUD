<?php
include("config.php");
// Inserting the data
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
}
          $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'] ;
          $employeeid = $_POST['employeeid'] ;
          $email = $_POST['email'] ;
        
$sql =  "INSERT INTO `company` ( `firstname`, `lastname`, `employeeid`, `email`)VALUES ( '$firstname', '$lastname', '$employeeid', '$email');"; 
      $result = mysqli_query($conn, $sql);
      print_r($result);
 
    if($result){
        header("location:/Crud/view.php");
        }
      else{
          echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
      }
?>