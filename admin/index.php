<?php
session_start();
include('include/BDD.php');
?>

<?php
	if (!empty($_SESSION['pseudo'])) {
		include('accueil.php');
	}
	else {
        include('login.php');
	}
?>
