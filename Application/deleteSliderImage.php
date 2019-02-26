<?php
//error_reporting(0);
session_start();
session_regenerate_id();
include("function.php");
$admin=new Admin();
$ImageId = $_POST['ImageId'];
$result = $admin->deleteImage($ImageId);
echo $result;
?>