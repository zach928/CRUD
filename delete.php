<?php
include "config.php";
// deleting the records from database 
if(isset($_GET['delete_id']))
{ $id = $_GET['delete_id'];

   $sql= "DELETE FROM company WHERE s_no='$id'";
   if ($result = mysqli_query($conn, $sql))
    {
     echo "Record Deleted Successfully";
     header("location:/Crud/view.php");
   }
   
}
?>