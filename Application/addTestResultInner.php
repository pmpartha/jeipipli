<?php
include('function.php');
$admin= new Admin();

if(ISSET($_POST['submitBtn'])){
              $testResultHeading      = htmlentities($_POST["testResultHeading"],ENT_QUOTES);
              $testResult             = $_FILES['testResult']['name'];
              $tmp_name               = $_FILES['testResult']['tmp_name'];
              $allowed_ext            = ['doc','pdf','docx'];
              $location               = 'result/';      
              $filearray = explode('.', $testResult);
              $ext = end($filearray);
              move_uploaded_file($tmp_name, $location.$testResult); 
	            $userIp = $_SERVER['REMOTE_ADDR'];
              $createdOn = date("Y-m-d H:i:s");

	 $query = "INSERT INTO test_result set testResultHeading='$testResultHeading', testResult='$testResult', userIp='$userIp',createdOn='$createdOn'";
	 $insertedid = $admin-> insertedId($query);
	 if($insertedid > 0){
          header('location: viewTestResult.php');
      }     
    }  
    else {
        $errFlag++;
        $outMsg = "Mandatory field cannot be blank";
        header("location:registration.php?errmsg=$outMsg");
    }
    





?>