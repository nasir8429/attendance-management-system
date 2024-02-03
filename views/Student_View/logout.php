<?php

	session_start(); 
	session_unset($_SESSION['session_id']);
	session_destroy();
	header("Location:index.php");

?>