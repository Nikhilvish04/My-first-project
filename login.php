<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4 form-div login">
				<form action="login.php" method="post">
					<h3 class="text-center">Register</h3>

					<?php if(count($errors) > 0): ?>
					<div class="alert alert-danger">
						<?php foreach($errors as $error): ?>
						<li><?php echo $error; ?></li>
						<?php endforeach; ?>			
					</div>
					<?php endif; ?>

					<div class="form-group">
						<label for="username">Username or Email</label>
						<input type="text" name="username" values="<?php echo $username; ?>" class="form-control form-control-1g">
					</div>


					
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control form-control-1g">
					</div>


					<div class="form-group">
						<button type="submit" name="login-btn" class="btn btn-primary btn-block btn-lg">Login In</button>
					</div>

					<p class="text-center">Not yet a Member? <a href="signup.php">Sign Up</a></p>

				</form>
			</div>
		</div>
	</div>
</body>
</html>