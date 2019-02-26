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
$studentId="studentId";


if(ISSET($_POST['btnSubmitt'])){
	$studentId                 = htmlentities($_POST["studentId"],ENT_QUOTES);
    $studentName   		       = htmlentities($_POST["studentName"],ENT_QUOTES);
    $villageName  		       = htmlentities($_POST["villageName"],ENT_QUOTES);
    $designation               = htmlentities($_POST["designation"],ENT_QUOTES);
    $studentImage   		   = htmlentities($_POST["studentImage"],ENT_QUOTES);
    $studentImage              = $_FILES['studentImage']['name'];
    $tmp_name                  = $_FILES['studentImage']['tmp_name'];
    $allowed_ext               = ['jpeg','jpg','png'];
    $location                  = 'images/';       
    $filearray                 = explode('.', $studentImage);
    $ext                       = end($filearray);
    move_uploaded_file($tmp_name, $location.$studentImage); 
    $userIp                    = $_SERVER['REMOTE_ADDR'];
    $createdOn          	   = date("Y-m-d H:i:s");


     if ((!($_FILES['studentImage']['name']))) /* If there Is No file Selected*/ {
        $qry = "UPDATE sucessful_student set studentId='$studentId',studentName='$studentName',villageName='$villageName',designation='$designation',createdOn='$createdOn',userIp='$userIp' WHERE studentId='$studentId'";
               $insertedid = $admin-> insertedId($qry);
               header('Location: viewSucessfulStudent.php');
    } else  {
        
              
    $qry = "UPDATE sucessful_student set studentId='$studentId',studentName='$studentName',villageName='$villageName',designation='$designation', studentImage='$studentImage',createdOn='$createdOn',userIp='$userIp' WHERE studentId='$studentId'";
               $insertedid = $admin-> insertedId($qry);

               header('Location: error.php');
             }
         }
             
?>