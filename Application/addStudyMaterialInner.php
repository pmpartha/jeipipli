<?php
include('function.php');
$admin= new Admin();

if(ISSET($_POST['submitBtn'])){
              $userIp                 = $_SERVER['REMOTE_ADDR'];
              $createdOn              = date("Y-m-d H:i:s");
              $studyMaterialHeading   = htmlentities($_POST["studyMaterialHeading"],ENT_QUOTES);
              $studyMaterial          = $_FILES['studyMaterial']['name'];
              $tmp_name               = $_FILES['studyMaterial']['tmp_name'];
              $allowed_ext            = ['doc','pdf','docx'];
              $location               = 'studymaterial/';     
              $filearray              = explode('.', $testResult);
              $ext                    = end($filearray);
              move_uploaded_file($tmp_name, $location.$studyMaterial); 
	           
	 $query = "INSERT INTO study_material set studyMaterialHeading='$studyMaterialHeading',studyMaterial='$studyMaterial', userIp='$userIp',createdOn='$createdOn'";
	 $insertedid = $admin-> insertedId($query);
	 if($insertedid > 0){
          header('location: viewStudyMaterial.php');
      }     
    }  
    else {
        $errFlag++;
        $outMsg = "Mandatory field cannot be blank";
        header("location:registration.php?errmsg=$outMsg");
    }
    





?>