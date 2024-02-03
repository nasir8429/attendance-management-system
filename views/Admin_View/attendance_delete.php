<?php
include "connection.php";  
$id=$_GET['id'];
$sql = "DELETE FROM student_attendance WHERE id=$id";
						$result = $con->query($sql);
						if($result){
					                
						header('location:Attendance.php');	
							
						}
?>