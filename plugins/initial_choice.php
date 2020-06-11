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
    if ($num_meals==3)
    {
        if($gender=="female")
        {
            $breakfast=($day_cal)*0.2;
            $lunch=($day_cal)*0.66;
            $dinner=($day_cal)*0.26;
        }
        elseif($gender=="male")
        {
            $breakfast=($day_cal)*0.21;
            $lunch=($day_cal)*0.32;
            $dinner=($day_cal)*0.32;
        }
        echo shell_exec(__DIR__."/recommend.py $breakfast $lunch $dinner");
    }
    elseif($num_meals==4)
    {
        if($gender=="female")
        {
            $breakfast=($day_cal)*0.15;
            $lunch=($day_cal)*0.5;
            $snacks=($day_cal)*0.15;
            $dinner=($day_cal)*0.2;   
        }
        elseif($gender=="male")
        {
            $breakfast=($day_cal)*0.16;
            $lunch=($day_cal)*0.24;
            $snacks=($day_cal)*0.24;
            $dinner=($day_cal)*0.36;
        }
        $output = shell_exec(__DIR__."/recommend.py $breakfast $lunch $dinner $snacks");
        echo $output[0];
    }
}
elseif ($selected_status=="1"){
    
}

echo shell_exec(__DIR__."/recommend.py $day_cal $user_key");
?>