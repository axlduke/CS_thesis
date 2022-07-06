<?php 
	include 'auth/db.php';
	session_start();

	// remove all session variables
	unset($_SESSION['user_id']);

	// destroy session
	session_destroy();

	header('location: login.php');
?>