<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	include('conn.php');

	$username=$_POST['username'];
	$password=$_POST['password'];

	$cus=pg_fetch_assoc(pg_query($conn, "SELECT * FROM customer WHERE username='$username' and password='$password'"));
	if ($cus) {
		$_SESSION['customer']=$cus['username'];
		header('location:index.php');
		die;
	}else{
		echo "Warning: Incorrect login information";
	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset-uft-8">
	<meta name="viewport" content="witdh-device-witdh, initial-scale-l">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title></title>
</head>
<body>
	<style type="text/css">
		html, body{
	       font-family: 'Raleway';
	       width: 100%;
	       height: 100%;
	       font-size: 16px;
	       font-weight: bold;
        }
        .bg{
	        background: url('https://assets-staging.audionetwork.com/usr/common/Background%20music%20header_745px.jpg');
	        background-size: cover;
	        width: 100%;
	        height: 100%;

        }
        .row-container{
	        border: 1px solid #ed6dcb;
	        border-radius: 20px;
	        margin-top: 20vh;
	        padding:30px;
        }
        .lable, .form-check-label, h1{
	        color: #f0f7f5;
	        text-shadow: 2px 2px 10px black;
        }
	</style>
<div class="container-fluid bg">
	<div class="row justify-content-center">
		<div class="col-md-3 col-sm-6 col-xs-12 row-container">
			<form method="POST" action="index.php">
				<h1 style="text-align: center;">Login</h1>
				<div class="form-group">
					<label for="username">Username: </label>
					<input type="username" class="form-control" id="username" placeholder="Enter username" name="username">
				</div>
				<div class="form-group">
					<label for="pass">Password:</label>
                    <input type="password" class="form-control" id="pass" placeholder="Enter password" name="password">
				</div>
				<div class="form-group form-check">
					<label class="form-check-label">
                      <input class="form-check-input" type="checkbox" name="remember"> Remember me
                    </label>
				</div>
				<button type="submit" class="btn btn-success btn-block">Login</button>
				
			</form>
    </div>
</div>
</body>
</html>
