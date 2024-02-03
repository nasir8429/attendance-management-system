<?php 
    $host="localhost"; 
 	$user="root";
    $pass="";
    $db_name="management";  


   $con=new mysqli($host,$user,$pass,$db_name);
   if ($con->connect_error) {
   	die("ERROR: ".$con->connect_error);
   }

 ?>