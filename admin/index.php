<?php
	require_once("../database/configer.php");
	session_start();
	$error = "";

	if (isset($_POST['login'])) {
		extract($_POST);
		$validation = TRUE;

		if(!$username){
           $validation = FALSE;
           $mass = "Enter username";
       }

		if ($validation) {
			$sql = "SELECT * FROM `admin` WHERE username = '$username' && password = '$password'";
			$execute = $conn->query($sql);
			$count = mysqli_num_rows($execute);
		}

		if ($count == 1) {
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			header("location:live_edit.php");
		}else {
			 $error = 'Invalid Login Credentials';
		}

	}

	?>
<!DOCTYPE html>
<head>
<title>Login Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
</head>
<body class="signup-body">
		<div class="agile-signup">
			<div class="content2">
				<div class="grids-heading gallery-heading signup-heading">
					<h2>Login</h2>
				</div>
				<form action="." method="post">
					<?php if ($error): ?>
					<div class="error">
						<h2  class="btn btn-danger" style="color: red;">Invalid Login Credentials </h2>
					</div>
					<?php endif; ?>
					<input required type="text" name="username"  placeholder="username">
					<input required type="password" name="password" placeholder="password" >
					<input type="submit" class="register" value="Login" name="login">
				</form>
			</div>

			<!-- footer -->
			<div class="copyright">
				<p>© <?php echo date("Y"); ?> Form . All Rights Reserved . Design by <a href="http://webtechsoft.com/">Webtechsoft</a></p>
			</div>
			<!-- //footer -->

		</div>
	<script src="js/proton.js"></script>
</body>
</html>
