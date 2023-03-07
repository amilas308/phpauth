<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<!-- <link rel="stylesheet" type="text/css" href="slide navbar style.css"> -->
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./style.css">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
			<div class="signup">
				<form action="process_signup.php" method="POST" enctype="multipart/form-data">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="fullname" placeholder="full name" >
					<input type="text" name="username" placeholder="User name" >
					<input type="date" min="1960-01-01" max="2023-12-30"name="date" placeholder="2023-12-31" required="">
					<!-- <input type="text" name="username" placeholder="User name" required=""> -->
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<input type="password" name="cpswd" placeholder=" confirm Password" required="">
					<input type="submit" name="submit" value="Sign up">
				</form>
			</div>
	</div>
</body>
</html>