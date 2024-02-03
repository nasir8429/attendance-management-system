<?php
include 'connection.php';
if(isset($_POST["user_id"]))  
 {  
      $query = "SELECT * FROM teacher_send_message WHERE id = '".$_POST["user_id"]."'";  
      $result = mysqli_query($con, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  

?>