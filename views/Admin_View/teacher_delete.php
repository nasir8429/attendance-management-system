<?php
include "connection.php";  
$id=$_GET['id'];
$sql = "DELETE FROM admin_add_teacher WHERE id=$id";
						$result = $con->query($sql);
						if($result){
					                
						header('location:Teachers.php');	
							
						}
?>