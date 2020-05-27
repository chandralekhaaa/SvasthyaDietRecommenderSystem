<?php
include("../includes/dbconfig.php");
if(isset($_POST['signup']))
{
	$r_emailid=$_POST['r_emailid'];
	$r_password=$_POST['r_password'];
	$r_cpassword=$_POST['r_cpassword'];
	$auth=$firebase->getAuth();
	if($r_password == $r_cpassword)
	{$user=$auth->createUserWithEmailAndPassword($r_emailid,$r_password);
	header("Location:index.php");}
	else
		echo "Validate your password";
}
else{
	$l_emailid=$_POST['l_emailid'];
	$l_password=$_POST['l_password'];
	$auth=$firebase->getAuth();
	$user=$auth->getUserWithEmailAndPassword($l_emailid,$l_password);
	if($user)
		session_start();
	    $_SESSION['user']=true;
	    header("Location:index.php");

}
?>