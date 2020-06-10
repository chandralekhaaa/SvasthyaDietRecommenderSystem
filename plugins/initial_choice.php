<?php
include("../includes/dbconfig.php");
include("../includes/home.php");
$day_cal = $_SESSION['cal_intake'];
echo shell_exec(__DIR__."/recommend.py $day_cal");
?>