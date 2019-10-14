<?php
	logout();
	function logout(){				
		session_start();
		unset($_SESSION['admin']);
		session_destroy();
		header("location: index.php");
	}
?>