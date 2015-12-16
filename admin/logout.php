<?php 
	session_start();
	$_SESSION = array();
	session_destroy();
	unset($_SESSION);
	header("Refresh:0; url=../");
?>