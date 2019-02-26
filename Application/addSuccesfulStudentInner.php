<?php
include('function.php');
$admin= new Admin();

if(ISSET($_POST['submitBtn'])){

              $studentName            = htmlentities($_POST["studentName"],ENT_QUOTES);
              $villageName            = htmlentities($_POST["villageName"],ENT_QUOTES);
              $designation            = htmlentities($_POST["designation"],ENT_QUOTES);
              $studentImage           = $_FILES['studentImage']['name'];
              $tmp_name               = $_FILES['studentImage']['tmp_name'];
              $allowed_ext            = ['jpeg','jpg','png'];
              $location               = 'images/';      
              $filearray = explode('.', $studentImage);
              $ext = end($filearray);
              move_uploaded_file($tmp_name, $location.$studentImage); 

               $userIp = $_SERVER['REMOTE_ADDR'];
              $createdOn = date("Y-m-d H:i:s");


            $query = "INSERT INTO sucessful_student set studentName='$studentName',villageName='$villageName',designation='$designation',studentImage='$studentImage', userIp='$userIp',createdOn='$createdOn'"; 
            $insertedid = $admin-> insertedId($query);
   if($insertedid > 0){
          header('location: viewSucessfulStudent.php');
      }     
    }  
    else {
        $errFlag++;
        $outMsg = "Mandatory field cannot be blank";
        header("location:registration.php?errmsg=$outMsg");
    }







?>