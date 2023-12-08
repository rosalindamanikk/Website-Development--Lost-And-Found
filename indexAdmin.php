<?php
include_once 'navbarAdmin.php';
include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>
<section>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laporkan Saja!</title>
    <link rel="stylesheet" href="css/hover.css">
</head>
<body>
<section class="home-section">
<!-- Isi -->
</section>
</body>
</html>