<?php
// Start the session
session_start();
//include("../plugins/initial_choice.php");
?>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
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
		
	    <div class="row col-12" style="margin:0 auto; width:100%;">		
			<?php 
				$array=explode(',',$_SESSION['derived_items']);
				if(sizeof($array)==6)
				{

			?>
				<!-- <ul>
					<li><p>Breakfast : <?php //echo $array[0];?></p></li>
					<li><p>Lunch     :<?php //echo $array[1];?></p></li>
					<li><p>Dinner    :<?php //echo $array[2];?></p></li>
				</ul> -->

			<div class="card" style="width: 18rem; margin: 5px;">
				<img class="card-img-top" src="https://sukhis.com/wp-content/uploads/2019/09/Indian-Breakfast.jpg" alt="Card image cap">
				<div class="card-body">
					<p class="card-text"> <?php echo "Breakfast : ",$array[0];?></p>
				</div>
			</div>
			<div class="card" style="width: 18rem;  margin: 5px;">
				<img class="card-img-top" src="https://www.unlockfood.ca/EatRightOntario/media/Website-images-resized/Eating-well-with-Diabetes-South-Indian-and-Sri-Lankan-diets-resized.jpg" alt="Card image cap">
				<div class="card-body">
					<p class="card-text"> <?php echo "Lunch : ",$array[1];?></p>
				</div>
			</div>
			<div class="card" style="width: 18rem;  margin: 5px;">
				<img class="card-img-top" src="https://s3.amazonaws.com/secretsaucefiles/photos/images/000/114/746/large/home-panel-11-1.jpg?1485396250" alt="Card image cap">
				<div class="card-body">
					<p class="card-text"> <?php echo "Dinner : ",$array[2];?></p>
				</div>
			</div>

			<?php
			}
			elseif(sizeof($array)==7)
			{
			?>
			<!-- <ul>
				<li><p>Breakfast :<?php //echo $array[0];?></p></li>
				<li><p>Lunch     :<?php //echo $array[1];?></p></li>
				<li><p>Dinner    :<?php //echo $array[2];?></p></li>
				<li><p>Snacks    :<?php //echo $array[6];?></p></li> 

			</ul> -->

			<div class="card" style="width: 18rem;  margin: 5px;">
				<img class="card-img-top" src="https://sukhis.com/wp-content/uploads/2019/09/Indian-Breakfast.jpg" alt="Card image cap">
				<div class="card-body">
					<p class="card-text"> <?php echo "Breakfast : ",$array[0];?></p>
				</div>
			</div>
			<div class="card" style="width: 18rem;  margin: 5px;">
				<img class="card-img-top" src="https://www.unlockfood.ca/EatRightOntario/media/Website-images-resized/Eating-well-with-Diabetes-South-Indian-and-Sri-Lankan-diets-resized.jpg" alt="Card image cap">
				<div class="card-body">
					<p class="card-text"> <?php echo "Lunch : ",$array[1];?></p>
				</div>
			</div>
			<div class="card" style="width: 18rem;  margin: 5px;">
				<img class="card-img-top" src="https://s3.amazonaws.com/secretsaucefiles/photos/images/000/114/746/large/home-panel-11-1.jpg?1485396250" alt="Card image cap">
				<div class="card-body">
					<p class="card-text"> <?php echo "Dinner : ",$array[2];?></p>
				</div>
			</div>
			<div class="card" style="width: 18rem;  margin: 5px;">
				<img class="card-img-top" src="https://genylifestyles.com/wp-content/uploads/2020/03/snacks-banner-blog.jpg" alt="Card image cap">
				<div class="card-body">
					<p class="card-text"> <?php echo "Snacks : ",$array[6];?></p>
				</div>
			</div>
			
			<?php
			}
			?>
		</div>

		<?php
				echo "cosine_sim_factors :"."<br>".$array[3]."<br>".$array[4]."<br>".$array[5];
			?>
		<br><br>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

