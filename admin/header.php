  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset-uft-8">
  <meta name="viewport" content="witdh-device-witdh, initial-scale-l">
  <link rel="stylesheet" type="text/css" href="/ASMD3/Css/demo.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/ASMD3/Css/admin.css">
<?php
session_start();

if (!empty($_SESSION['customer'])) {
	
}else{
	header('Location: login.php');
	die;
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/ASMD3/admin/Css/admin.css">
	<title></title>
</head>
<body>
<div class="header">
	<h1>ADMINISTRATOR PAGE</h1>
</div>
 <div class="container">
  <div class="table table-hover">
		<div class="topnav">
			<a href="add.php">Add Product</a>
			<a href="index.php">Product Management</a>
			<a href="add.php">Log Out</a>
		</div>
	</div>
</div>
</body>
</html>