<?php
include 'connection.php';
if(isset($_POST["user_id"]))  
 {  
      $query = "SELECT * FROM admin_add_course WHERE id = '".$_POST["user_id"]."'";  
      $result = mysqli_query($con, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  

?>