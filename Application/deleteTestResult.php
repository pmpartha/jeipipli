<?php
//error_reporting(0);
session_start();
session_regenerate_id();
include("function.php");
$admin=new Admin();
$resultId = $_POST['resultId'];
$result = $admin->deleteTestResult($resultId);
echo $result;
?>