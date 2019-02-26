<?php
include('function.php');
$admin = new Admin();
$email = $_POST['email'];
$cpass = $_POST['cpass'];
$confpass = $_POST['confpass'];


$dbemail = $admin->chkEmail($email,$cpass);
//$dbemail = 'debadipti@gmail.com';
if($dbemail == 'one'){
    echo 'success';
} else if($dbemail == 'two'){
    echo 'failure';
}
?>