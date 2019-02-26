<?php
include('function.php');
$admin= new Admin();

if(ISSET($_POST['btnSubmit'])){

	 $sliderNotice   = htmlentities($_POST["sliderNotice"],ENT_QUOTES);

	 	$userIp = $_SERVER['REMOTE_ADDR'];
        $createdOn = date("Y-m-d H:i:s");

	 $query = "INSERT INTO slider_notice set sliderNotice='$sliderNotice', userIp='$userIp',createdOn='$createdOn'";
	 $insertedid = $admin-> insertedId($query);
	 if($insertedid > 0){
          header('location: viewSliderNotice.php');
      }     
    } 
    else {
        $errFlag++;
        $outMsg = "Mandatory field cannot be blank";
        header("location:registration.php?errmsg=$outMsg");
    }
    





?>