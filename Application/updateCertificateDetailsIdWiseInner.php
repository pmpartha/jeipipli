<?php
ini_set( 'session.use_only_cookies', TRUE );                
ini_set( 'session.use_trans_sid', FALSE );
session_start();
session_regenerate_id();
if(!isset($_SESSION['adminId'])){
    header('location: index.php');
    
}
include("function.php");
$admin=new Admin();
$rollNumber="rollNumber";


if(ISSET($_POST['btnSubmitt'])){
		$rollNumber             = htmlentities($_POST["rollNumber"],ENT_QUOTES);
    $certificateNo   		    = htmlentities($_POST["certificateNo"],ENT_QUOTES);
    $serialNo  					    = htmlentities($_POST["serialNo"],ENT_QUOTES);
    $fullName               = htmlentities($_POST["fullName"],ENT_QUOTES);
    $fatherName   				  = htmlentities($_POST["fatherName"],ENT_QUOTES);
    $course   					    = htmlentities($_POST["course"],ENT_QUOTES);
    $grade   				        = htmlentities($_POST["grade"],ENT_QUOTES);
    $yearOfPassing  	      = htmlentities($_POST["yearOfPassing"],ENT_QUOTES);
		$userIp                 = $_SERVER['REMOTE_ADDR'];
    $createdOn          		= date("Y-m-d H:i:s");
              
    $qry = "UPDATE certificate_details set rollNumber='$rollNumber',certificateNo='$certificateNo',serialNo='$serialNo',fullName='$fullName', fatherName='$fatherName',course='$course',grade='$grade',yearOfPassing='$yearOfPassing' WHERE rollNumber='$rollNumber'";
               $insertedid = $admin-> insertedId($qry);

               header('Location: viewCertificateDetails.php');
             }
                else{
                  $errFlag++;
                    $outMsg = "Mandatory field cannot be blank";
                    header("location:registration.php?errmsg=$outMsg");
             }

?>