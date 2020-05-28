<?php 
include("../includes/dbconfig.php");
if(isset($_POST['calculate_cal']))
{
	$gender=$_POST['p_gender'];
	$age=$_POST['p_age'];
	$height=$_POST['p_height'];
	$weight=$_POST['p_weight'];
	$fat=$_POST['p_bfl'];
	$sedlevel=$_POST['p_sl'];
	$nom=$_POST['p_nm'];
	$diet=$_POST['p_dt'];
	$data=[
             'p_gender'=>$gender,
             'p_age'=>$age,
             'p_height'=>$height,
             'p_weight'=>$weight,
             'p_bfl'=>$fat,
             'p_sl'=>$sedlevel,
             'p_nm'=>$nom,
             'p_dt'=>$diet
	      ];
	$ref= "profiledb/";
	$postdata=$database->getReference($ref)->push($data);

	if($postdata)
		{
			$_SESSION['status']="Data inserted successfully";
	        header("Location:calorie_calculator.php");
	    }
	else
	{
		$_SESSION['status']="Something went wrong";
	    header("Location:profile.php");
	}
}
?>