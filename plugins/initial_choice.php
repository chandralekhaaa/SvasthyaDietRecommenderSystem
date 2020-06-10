<?php
include("../includes/dbconfig.php");
$day_cal = $_SESSION['cal_intake'];
$user_key = $_SESSION['username_id'];
echo shell_exec(__DIR__."/recommend.py $day_cal");
?>