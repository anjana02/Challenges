<?php include('functions.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
</head>
<body>
	<div class=" main_div">
		<style>
			.main_div{
				width: 20%;
				margin: 0 auto;
				padding: 20px;
				border: 1px solid #13468a;
				background-color: #ffffff;
				border-radius: 5px;
				margin-top: 20px;
			}
			.btn{
				width: 20%;
				margin: 0 auto;
				padding: 20px;
				border: 1px solid #B0C4DE;
				background-color: #3c30e4;
				border-radius: 5px;
				margin-top: 20px;
			}
			.btn:hover{
				background-color: #ddd;
				color: rgb(246, 243, 243);
			}
			.btn a{
				text-decoration: none;
				color: rgb(255, 251, 251);
			}
			.header{
				padding: 20px;
				background-color: #ffffff;
				margin-top: 20px;
			}
			.input-group{
				margin: 10px 0px 10px 0px;
			}
			.input-group label{
				display: block;
				text-align: left;
				margin: 3px;
			}
			.input-group input{
				height: 30px;
				width: 93%;
				padding: 5px 10px;
				font-size: 16px;
				border-radius: 5px;
				border: 1px solid gray;
			}
			.btn{
				padding: 10px;
				font-size: 15px;
				color: white;
				background: #5F9EA0;
				border: none;
				border-radius: 5px;
			}
			.error{
				width: 92%; 
				margin: 0px auto; 
				padding: 10px; 
				border: 1px solid #a94442; 
				color: #a94442; 
				background: #f2dede; 
				border-radius: 5px; 
				text-align: left;
			}
		</style>
		<div class="header">
			<h2>Login</h2>
		<form method = "post" action="login.php">
			<?php include('errors.php'); ?>
			<div class="input-group">
				<label>Username</label>
				<input type="text" name="username" >
			</div>
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="password">
			</div>
			<div class="input-group">
				<button type="submit" class="btn" name="login_user">Login</button>
			</div>
			<p>
				Not yet a member? <a href="register.php">Sign up</a>
			</p>
		</form>
	</div>
</body>
</html>
