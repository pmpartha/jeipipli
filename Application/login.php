<?php
error_reporting(0);
session_start();
include("function.php");
$admin=new Admin();
if(isset($_POST['admin_login']))
{	
	$username= $_POST['userName'];
    $password=$_POST['password'];
	if(!empty($username) && !empty($password))
	{
		//if form validation true
		$login=$admin->adminLogin($username, $password);
		$dbuser = $login['userName'];
		$dbpass = $login['password'];		
		if(count($login)!=0 && $username==$dbuser && $password==$dbpass)
		{
			$adminId = $login['adminId'];	
			$_SESSION['adminId']=$login['adminId'];				
			header("Location: dashboard.php");				
		}
		else
		{
			header("Location: index.php?msg=invalid username and password");			
		}
	}	
}
?>