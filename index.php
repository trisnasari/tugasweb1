<?php
include "koneksi.php";
session_start();
$login = $_SESSION['login'];
if ($login == "admin") {
	header("location:admin/home.php");
} elseif ($login == "user") {
	header("locatiom:admin/login.php");
} else {
	header("location:/login.php");
}
?>