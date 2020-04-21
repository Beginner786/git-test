<?php
session_start();

if(isset($_SESSION['usr_id'])) {
	session_destroy();
	unset($_SESSION['usr_id']);
	unset($_SESSION['usr_name']);
		echo '<script>window.location.replace("main.php");</script>';
} else {
		echo '<script>window.location.replace("main.php");</script>';
}
?>