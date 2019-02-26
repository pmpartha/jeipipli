<?php
date_default_timezone_set('Asia/Calcutta'); 
include('function.php');
$admin= new Admin();
if(ISSET($_POST['submitBtn'])){
	$errFlag = 0;
	
	
	$rollNumber             = htmlentities($_POST["rollNumber"],ENT_QUOTES);
	$certificateNo          = htmlentities($_POST["certificateNo"],ENT_QUOTES);
	$serialNo               = htmlentities($_POST["serialNo"],ENT_QUOTES);

	$dupSerialNo 		= $admin->duplicateSerialNoCheck($serialNo);
	$dupCertificateNo 	= $admin->duplicateCertificateCheck($certificateNo);
	$dupRollNumber 		= $admin->duplicateRollNoCheck($rollNumber);
	
	if($dupSerialNo > 0){
		$errFlag++;
		$outMsg = 'Duplicate Serial Number Exists!!';
	} else if($dupCertificateNo > 0){
		$errFlag++;
		$outMsg = 'Duplicate Cerificate Number Exists!!';
	} else if($dupRollNumber > 0) {
		$errFlag++;
		$outMsg = 'Duplicate Roll Number Exists!!';
	}


	$fullName               = htmlentities($_POST["fullName"],ENT_QUOTES);
	$fatherName             = htmlentities($_POST["fatherName"],ENT_QUOTES);
	$course                 = htmlentities($_POST["course"],ENT_QUOTES);
	$grade                  = htmlentities($_POST["grade"],ENT_QUOTES);
	$yearOfPassing          = htmlentities($_POST["yearOfPassing"],ENT_QUOTES);
	$userIp 				= $_SERVER['REMOTE_ADDR'];
	$createdOn 				= date("Y-m-d H:i:s");
    
	    if($errFlag > 0){
        	header("location:addCertificate.php?errmsg=$outMsg");
	    } else {
	    	$query = "INSERT INTO certificate_details set rollNumber='$rollNumber',certificateNo='$certificateNo',serialNo='$serialNo',fullName='$fullName',fatherName='$fatherName',course='$course',grade='$grade',yearOfPassing='$yearOfPassing',userIp='$userIp',createdOn='$createdOn'"; 
	    	$insertedid = $admin-> insertedId($query);
	   		if($insertedid > 0){
	          	header('location: viewCertificateDetails.php');
	      	} 
	    }  
    }  
    else {
        $errFlag++;
        $outMsg = "Mandatory field cannot be blank";
        header("location:registration.php?errmsg=$outMsg");
    }







?>