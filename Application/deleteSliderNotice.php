<?php
//error_reporting(0);
session_start();
session_regenerate_id();
include("function.php");
$admin=new Admin();
$sliderId = $_POST['sliderId'];
$result = $admin->deleteProduct($sliderId);
echo $result;
?>