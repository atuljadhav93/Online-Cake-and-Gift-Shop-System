<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Login</h1>
			</div>

<div class="login-form">
		<div class="control-group">
				<form action="login.php" method="post">
				<input type="text" class="login-field" name="uname" placeholder="username" id="login-name">
				<label class="login-field-icon fui-user" for="login-name"></label>
				 </div>

				<div class="control-group">
				<input type="password" class="login-field" name="pswd" placeholder="password" id="login-pass">
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>

				<input type="Submit" name="sub" value="Login" class="btn btn-primary btn-large btn-block">
				<a class="login-link" href="../index.php">Back to home</a>
				</form>
			</div>
		</div>
	</div>
</body>
</body>
</html>
