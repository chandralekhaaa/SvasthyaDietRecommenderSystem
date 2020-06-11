<?php
include("../includes/dbconfig.php");

$day_cal = $_SESSION['cal_intake'];
$user_key = $_SESSION['username_id'];

$ref= "profiledb/";
$getdata=$database->getReference($ref)->getChild($user_key)->getValue();
$selected_status = $getdata['selected_items'];
$gender = $getdata['p_gender'];
$num_meals = $getdata['p_nm'];

// echo $selected_status;

if ($selected_status=="0"){

}
elseif ($selected_status=="1"){
    
}

echo shell_exec(__DIR__."/recommend.py $day_cal $user_key");
?>