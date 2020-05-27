<?php
	$user_gender;
	$user_age = 0;
	$user_height = 0;
	$user_weight = 0;
	$user_bodyfat;
	$user_sed_level;
	$user_meal_num=0;
	$user_diet_type;
	
?>
<!DOCTYPE html>
<html>
<head>
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
					<form>
					Gender<br> 
					<select name="p_gender" >
						<option></option>
						<option>Male</option>
						<option>Female</option>
					</select><br><br>

					<label for="p_age">Age</label><br>
					<input type=text id="p_age" name="p_age"/><br><br>

					<label for="p_height">Height (in cm)</label><br>
					<input type="text" id="p_height" name="p_height"><br><br>

					<label for="p_weight">Weight (in kg)</label><br>
					<input type="text" id="p_weight" name="p_weight"><br><br>

					Body fat level <br> 
					<select name="p_bfl">
						<option></option>
						<option> Low</option>
						<option> Medium</option>
						<option> High</option>
					</select><br><br>

					Sedentary level  <br>
					<select name="p_sl">
						<option></option>
						<option> Sedentary</option>
						<option> Lightly Active</option>
						<option> Moderately Active</option>
						<option> Very Active</option>
						<option> Extremely Active</option>
					</select><br><br>

					Number of meals  <br>
					<select name="p_nm">
						<option></option>
						<option> 3</option>
						<option> 4</option>
						<option> 5</option>
					</select><br><br>

					Diet type  <br>
					<select name="p_dt">
						<option></option>
						<option> Vegan</option>
						<option> Vegetarian</option>
						<option> Non-Vegetarian</option>
					</select><br><br>

					<input type="submit" name="p_btn" value="Submit" class="btn btn-lg"><br><br><br>

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

