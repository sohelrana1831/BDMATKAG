<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>BD Market 2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	

   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"  crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- css -->
    <link rel="stylesheet" href="../css/live_insert.css">

     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="logo text-center">
        <h3>Welcome To BDMATKAG Admin Panel</h3>
    </div>

<div class="button">

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">

		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../live.php">LIVE RESULTS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../history.php">History</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="live_insert.php">Add Live</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="live_edit.php">Update Live</a>
				</li>
                                <li class="nav-item">
                                    <a class="nav-link" href="history.php">Add Hostory Image</a>
				</li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Dropdown
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Another action</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
			</ul>
		</div>
	</nav>
</div>