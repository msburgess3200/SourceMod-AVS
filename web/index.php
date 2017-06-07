<?php
require("inc/config.php");
include("inc/functions.php");
error_reporting(E_ALL);
session_start();
if(isset($_GET['action'])) {
	$action = $_GET['action'];
} else {
	$action = "home";
}
//if($action !== "login" && empty($_COOKIE['loggedin'])) header("Location: ./?action=login");

?>
<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php include("inc/navbar.php"); ?>
		<div class="container">
			<?php include("inc/pages.php"); ?>
		</div>
	</body>
</html>