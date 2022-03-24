<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
	form { margin: 0px 10px; }

h2 {
  margin-top: 2px;
  margin-bottom: 2px;
}

.container { max-width: 360px; }

.divider {
  text-align: center;
  margin-top: 20px;
  margin-bottom: 5px;
}

.divider hr {
  margin: 7px 0px;
  width: 35%;
}

.left { float: left; }

.right { float: right; }

</style>
    <div class="container">
		<div class="row">
			<div class="panel panel-primary">
				<div class="panel-body">
					<form method="POST" action="register.php" role="form">
						<?php echo display_error(); ?>
						<div class="form-group">
							<h2>Register</h2>
						</div>
						<div class="form-group">
							<label class="control-label" for="signupName">Your name</label>
							<input id="signupName" type="text" maxlength="50" class="form-control" value="<?php echo $username; ?>">
						</div>
						<div class="form-group">
							<label class="control-label" for="signupEmail">Email</label>
							<input id="signupEmail" input type="email" name="email" maxlength="50" class="form-control " value="<?php echo $email; ?>">
						</div>
						<div class="form-group">
							<label class="control-label" for="signupPassword">Password</label>
							<input id="signupPassword" type="password" name="password_1" maxlength="25" class="form-control" placeholder="at least 6 characters" length="40">
						</div>
						<div class="form-group">
							<label class="control-label" for="signupPasswordagain">Password again</label>
							<input id="signupPasswordagain" type="password" name="password_2" maxlength="25" class="form-control">
						</div>
						<div class="form-group">
							<button id="signupSubmit" type="submit" name="register_btn" class="btn btn-info btn-block">Register</button>
						</div>						
						<hr>
						<p>
							Already a member? <a href="login.php">Sign in</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
