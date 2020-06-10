<!DOCTYPE html>
<?php session_start();?>
<html>
<head>
	<a href="home.php">Home</a>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<title>Svasthya Profile</title>
</head>
<body>
	<div class="container-fluid">

		<div class="row" id="main">
			<div class="col"></div>
			<div class="col rounded" id="form_wrapper">
				<div class="row jumbotron jumbotron-fluid" id="form_header">
					<h1 class="display-4">Profile</h1>
				</div>
				<div class="row" id="form_content">
					<form action="profile_backend.php" method=POST>
                    <ul>
						<li><p>Usename          : <?php echo $_SESSION['r_username']?></p></li>
						<li><p>Gender           : <?php echo $_SESSION['p_gender']?></p></li>
						<li><p>Age              : <?php echo $_SESSION['p_age']?></p></li>
						<li><p>Height           : <?php echo $_SESSION['p_height']?></p></li>
						<li><p>Weight           : <?php echo $_SESSION['p_weight']?></p></li>
						<li><p>Body Fatlevel    : <?php echo $_SESSION['p_bfl']?></p></li>
						<li><p>Sedentary level  : <?php echo $_SESSION['p_sl']?></p></li>
						<li><p>Number of meals  : <?php echo $_SESSION['p_nm']?></p></li>
						<li><p>Diet type        : <?php echo $_SESSION['p_dt']?></p></li>
				    </ul>


					</form>
				
				</div>
			</div>
			<div class="col"></div>
		</div>
		<br><br>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
