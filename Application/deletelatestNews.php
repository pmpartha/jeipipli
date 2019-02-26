<?php
//error_reporting(0);
session_start();
session_regenerate_id();
include("function.php");
$admin=new Admin();
$newsId = $_POST['newsId'];
$result = $admin->deletelatestNews($newsId);
echo $result;
?>