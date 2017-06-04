<?php
	 if(!isset($_SESSION)) 
    { 
        session_start(); 
		if(!isset($_SESSION['idUsuario']) || (trim($_SESSION['idUsuario']) == ''))
		{
			header("location: index.php");
			exit();
		} 
    } 
?>