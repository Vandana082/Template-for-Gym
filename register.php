<!DOCTYPE html>
<?php
    session_start();
?>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet"  href="css/styles.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form method="post" action="signup.php">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="txt" placeholder="User name" required="" autocomplete="off">
					<input type="email" name="email" placeholder="Email" required="" autocomplete="off">
					<input type="password" name="pswd" placeholder="Password" required="" autocomplete="off">
					<button name="submit">Sign up</button>
				</form>
			</div> 

			

			<div class="login">
				<form method="post" action="login.php">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="name" placeholder="Email or Username" required="" autocomplete="off">
					<input type="password" name="pswd" placeholder="Password" required="" autocomplete="off">
					<button name="submit">Login</button>
				</form>
			</div>
	</div>
	
</body>
</html>