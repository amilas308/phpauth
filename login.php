<?php
	$is_invalid = false;
	if($_SERVER["REQUEST_METHOD"] === "POST"){
		$mysqli = require __DIR__ . '/database.php';
		$sql = sprintf("SELECT * FROM `employee` WHERE email= '%s'", $conn->real_escape_string($_POST['email']));
		$result = $conn->query($sql);
		$user = $result->fetch_assoc();
		// var_dump($user);
		if($user){
			session_start();
			session_regenerate_id();
			$_SESSION['user_id'] = $user['id'];
			$_SESSION['name'] = $user['Full_name'];
			header("Location: /series/index2.php");
			exit();
			// if(password_verify($_POST['pswd'], $user['Password'])){
				// var_dump($user);
				// echo "Login Successfull";
				// die("Login Successful");
				// $dashboard = require __DIR__. "/index2.php";
		// header("Location: index2.php");
				
		} else{
			// echo "I am not working";
		}
		} else{
			// echo "I am very insane";
		}
		$is_invalid = true;
		// exit;
	// }
	



?>
<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<!-- <link rel="stylesheet" type="text/css" href="slide navbar style.css"> -->
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./style.css">
</head>
<body>
	<div class="main">  	
        <!-- <div class="signup"></div> -->
		<input type="checkbox" id="chk" aria-hidden="true">
			<div class="login">
				<form method="POST">	
					 <label for="chk" aria-hidden="true">Login</label>
					  <?php if ($is_invalid): ?>
						<em style="color: red; margin-left: 3rem; font-size: .8rem;">The email or password is incorrect</em>
					<?php endif; ?>
					<input type="email" name="email" placeholder="Email" value="<?= htmlspecialchars($_POST['email'] ?? "") ?>" required="">
					<input type="password" name="pswd" placeholder="Password">
					<input type="submit" name="submit" value="Login">
				</form>
			</div>
	</div>
</body>
</html>
