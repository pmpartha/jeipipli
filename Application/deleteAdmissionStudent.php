<?php
//error_reporting(0);
session_start();
session_regenerate_id();
include("function.php");
$admin=new Admin();
$admissionId = $_POST['admissionId'];
$result = $admin->deleteAdmissionDetails($admissionId);
echo $result;
?>