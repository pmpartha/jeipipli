<?php
//error_reporting(0);
session_start();
session_regenerate_id();
include("function.php");
$admin=new Admin();
$galleryId = $_POST['galleryId'];
$result = $admin->deleteGalleryImage($galleryId);
echo $result;
?>