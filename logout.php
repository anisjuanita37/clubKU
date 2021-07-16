<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>KUPTM Club</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="css/font-awesome.min.css" rel="stylesheet">		
		<!-- Custom CSS -->
		<link href="css/style.css" rel="stylesheet">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
	</head>
	
	<body>
	
		<div class="wrapper">
		<?php include "banner.php"; ?> <!-- Banner -->
			
						<!-- main content -->
			<div class="main-content bottom-0">
				<div class="container">
					<div class="banner pad">
						<h1><span>KUPTM CLUB SYSTEM</span></h1>
						<p><strong>You can check your club information here.</strong></p>
					</div>
				</div>
                <?php

session_start();
if(empty($_SESSION['sEmail'])):
   header('Location:login.html');
endif;

$servername="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$dbName="clubregistration"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

session_destroy();

echo '<meta http-equiv="refresh" content="2;url=login.html">';
echo '<progress max=100><strong>Progress: 60% done.</strong></progress><br>';
echo '<span class="itext">Logging out please wait!....</span>';
?>


</body>
</html>

