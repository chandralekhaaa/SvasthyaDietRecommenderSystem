<?php
// Start the session
session_start();
?>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="index_style.css">
	<title>Svasthya</title>

</head>
<body>

	<div class="container-fluid">
		<div class="row" id="hm_navbar">
			<h5>
			<p>
			Hello,
			<?php
			    echo $_SESSION['r_username'];
			?>	

			</p></h5>
			<div class="col-12">
			<ul class="nav justify-content-end" >
			  <li class="nav-item">
			    <a class="nav-link active" href="logout.php">Logout</a>
			  </li>	
			  <li class="nav-item">
			    <a class="nav-link active" href="db_display.php">Profile</a>
			  </li>			  
			</ul>
			</div>
		</div>
			<div class="row" >
			<div class="col-12 jumbotron jumbotron-fluid" id="hm_c_display_bar">
			  <div class="container">
			    <h5 class="display-4">Your ideal calorie intake per day is <p> <?php echo $_SESSION['cal_intake']?></p></h5>
			    <p id="hm_c_intake _display"></p>
			  </div>
			</div>
		</div>
		<div class="row" >
			
		</div>

			
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>