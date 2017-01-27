<?php
session_start();

if (!isset($_SESSION['userSession'])) {
	header("Location: index.php");
} else if (isset($_SESSION['userSession'])!="") {
	header("Location: profiluser.php");
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['userSession']);
	header("Location: index.php");
}
elseif (isset($_GET['logout-admin'])) {
	session_destroy();
	unset($_SESSION['adminSession']);
	header("Location: admin.php");
}
