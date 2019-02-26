<?php
include('function.php');
$admin= new Admin();

if(ISSET($_POST['submitBtn'])){

              $galleryImage           = $_FILES['galleryImage']['name'];
              $tmp_name               = $_FILES['galleryImage']['tmp_name'];
              $allowed_ext            = ['jpeg','jpg','png'];
              $location               = 'gallery/';      
              $filearray = explode('.', $galleryImage);
              $ext = end($filearray);
              move_uploaded_file($tmp_name, $location.$galleryImage); 
	            $userIp = $_SERVER['REMOTE_ADDR'];
              $createdOn = date("Y-m-d H:i:s");

	 $query = "INSERT INTO gallery_image set galleryImage='$galleryImage', userIp='$userIp',createdOn='$createdOn'";
	 $insertedid = $admin-> insertedId($query);
	 if($insertedid > 0){
          header('location: viewGalleryImage.php');
      }     
    }  
    else {
        $errFlag++;
        $outMsg = "Mandatory field cannot be blank";
        header("location:registration.php?errmsg=$outMsg");
    }
    





?>