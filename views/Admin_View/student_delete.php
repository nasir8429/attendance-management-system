<?php
include "connection.php";  
$id=$_GET['id'];
$sql = "DELETE FROM admin_add_student WHERE id=$id";
						$result = $con->query($sql);
						if($result){
					                
						header('location:Student.php');	
							
						}
?>