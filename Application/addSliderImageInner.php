<?php
include('function.php');
$admin= new Admin();

if(ISSET($_POST['submitBtn'])){

              $SliderImage            = $_FILES['SliderImage']['name'];
              $tmp_name               = $_FILES['SliderImage']['tmp_name'];
              $allowed_ext            = ['jpeg','jpg','png'];
              $location               = 'images/';      
              $filearray = explode('.', $SliderImage);
              $ext = end($filearray);
              move_uploaded_file($tmp_name, $location.$SliderImage); 
	            $userIp = $_SERVER['REMOTE_ADDR'];
              $createdOn = date("Y-m-d H:i:s");

	 $query = "INSERT INTO slider_image set SliderImage='$SliderImage', userIp='$userIp',createdOn='$createdOn'";
	 $insertedid = $admin-> insertedId($query);
	 if($insertedid > 0){
          header('location: viewSliderImage.php');
      }     
    }  
    else {
        $errFlag++;
        $outMsg = "Mandatory field cannot be blank";
        header("location:registration.php?errmsg=$outMsg");
    }
    





?>