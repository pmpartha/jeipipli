<?php
//error_reporting(0);
session_start();
session_regenerate_id();
include("function.php");
$admin=new Admin();
$studentId = $_POST['studentId'];
$result = $admin->deleteSucesfulStudent($studentId);
echo $result;
?>