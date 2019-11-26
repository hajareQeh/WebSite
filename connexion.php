<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Login</title>
   <link rel="stylesheet" href="connexionstyle.css">
</head>
<body>
	<?php include "head.php"; ?>
		<div class="login">
			<div class="login-screen">
			<div class="app-title">
				<h1>Login</h1>
			</div>
			
			<div class="login-form">
			<form method="post" action="compte.php" >
				<div class="control-group">
					<input type="text" name="login"  placeholder="login" />
				</div>
				<div class="control-group">
				<input type="password" name="mdp"  placeholder="password" />
				</div>
				<input type="submit" value="login" class="btn" />
				<a class="login-link" href="#">Lost your password?</a>
			</form>
				</div>
			
			
		</div>
	
	</div>
	<?php include "pied.html"; ?>
</body>
 
</html>
