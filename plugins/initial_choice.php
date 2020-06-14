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
        #$database->getReference($ref)->getChild($user_key)->update(array('breakfast_cal' => $breakfast));
        $output = shell_exec(__DIR__."/recommend.py $breakfast $lunch $dinner");
        $extras = ["[","]","'"];
        $edit1 = str_replace($extras,"",$output);
        $food_items = explode(';',$edit1);
        #echo $food_items[0];

        $breakfast_items = explode(',',$food_items[0]);
        $lunch_items = explode(',',$food_items[1]);
        $dinner_items = explode(',',$food_items[2]);
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
        #$database->getReference($ref)->getChild($user_key)->update(array('breakfast_cal' => $breakfast));
        $output = shell_exec(__DIR__."/recommend.py $breakfast $lunch $dinner $snacks");
        $extras = ["[","]","'"];
        $edit1 = str_replace($extras,"",$output);
        $food_items = explode(';',$edit1);
        #echo $food_items[0];

        $breakfast_items = explode(',',$food_items[0]);
        $lunch_items = explode(',',$food_items[1]);
        $dinner_items = explode(',',$food_items[2]);
        $snacks_items = explode(',',$food_items[3]);   
    }
}
elseif ($selected_status=="1"){

    $pref_breakfast_item = $_SESSION['pref_bf_item'];
    $pref_lunch_item = $_SESSION['pref_lun_item'];
    $pref_dinner_item = $_SESSION['pref_din_item'];
    if($num_meals==3)
    {
        $output = shell_exec(__DIR__."/compute.py $breakfast $lunch $dinner $pref_breakfast_item $pref_lunch_item $pref_dinner_item");
        #echo $output;

        $extras = ["[","]","'"];
        $edit1 = str_replace($extras,"",$output);
        $food_items = explode(';',$edit1);
        #echo $food_items[0];  
        $_SESSION['bf_items']=$food_items[0];
        $_SESSION['lun_items']=$food_items[1];
        $_SESSION['din_items']=$food_items[2];
        $selected_status="2";

    }
    elseif($num_meals==4)
    {
        $output = shell_exec(__DIR__."/compute.py $breakfast $lunch $dinner $pref_breakfast_item $pref_lunch_item $pref_dinner_item $snacks");
        #echo $output;
        $extras = ["[","]","'"];
        $edit1 = str_replace($extras,"",$output);
        $food_items = explode(';',$edit1);
        #echo $food_items[0];
        $_SESSION['bf_items']=$food_items[0];
        $_SESSION['lun_items']=$food_items[1];
        $_SESSION['din_items']=$food_items[2];
        $_SESSION['snacks']=$food_items[6];
        $selected_status="2";
    }
}
else if ($selected_status=="2")
{
    header("Location:home_dash.php");
}

#echo shell_exec(__DIR__."/recommend.py $day_cal $user_key");
?>