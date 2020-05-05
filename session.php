<?php
	session_start();
	if (empty($_SESSION['id']) || empty($_SESSION['Type']) || empty($_SESSION['name']) || empty($_SESSION['email']))
	{
		header('Location: login.html');	
	}
?>
