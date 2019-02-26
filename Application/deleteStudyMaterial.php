<?php
//error_reporting(0);
session_start();
session_regenerate_id();
include("function.php");
$admin=new Admin();
$studyId = $_POST['studyId'];
$result = $admin->deleteStudyMaterial($studyId);
echo $result;
?>