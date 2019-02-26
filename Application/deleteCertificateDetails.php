<?php
//error_reporting(0);
session_start();
session_regenerate_id();
include("function.php");
$admin=new Admin();
$rollNumber = $_POST['rollNumber'];
$result = $admin->deleteCertificate($rollNumber);
echo $result;
?>