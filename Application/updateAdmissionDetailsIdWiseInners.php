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
$applicationId="applicationId";


if(ISSET($_POST['btnSubmitt'])){

				$applicationId                  = htmlentities($_POST["applicationId"],ENT_QUOTES);
	            $fullName   				    = htmlentities($_POST["fullName"],ENT_QUOTES);
 	            $fatherName  					= htmlentities($_POST["fatherName"],ENT_QUOTES);
                $motherName                     = htmlentities($_POST["motherName"],ENT_QUOTES);
 	            $dateOfBirth   					= htmlentities($_POST["dateOfBirth"],ENT_QUOTES);
 	            $mobileNo   					= htmlentities($_POST["mobileNo"],ENT_QUOTES);
 	            $emailId   					    = htmlentities($_POST["emailId"],ENT_QUOTES);
 	    		$educationalQualification  	    = htmlentities($_POST["educationalQualification"],ENT_QUOTES);
 				$Nationality   					= htmlentities($_POST["Nationality"],ENT_QUOTES);
                $Religion   					= htmlentities($_POST["Religion"],ENT_QUOTES);
 	            $admissionDate   			    = htmlentities($_POST["admissionDate"],ENT_QUOTES);
 	            $Sex   					        = htmlentities($_POST["Sex"],ENT_QUOTES);
                $martialStatus  			    = htmlentities($_POST["martialStatus"],ENT_QUOTES);
 	            $selectCourse 				    = $_POST["selectCourse"];
                $courses                        = implode(',', $selectCourse);
    //print_r($courses);die;
 	            $timePeriod   					= htmlentities($_POST["timePeriod"],ENT_QUOTES);
 	            $permanentAddress  			    = htmlentities($_POST["permanentAddress"],ENT_QUOTES);
 	          	$presentAddress   		        = htmlentities($_POST["presentAddress"],ENT_QUOTES);
 	            $userIp                    	    = $_SERVER['REMOTE_ADDR'];
                $createdOn          		    = date("Y-m-d H:i:s");

              
    $qry = "UPDATE admission_details set fullName='$fullName',fatherName='$fatherName', motherName='$motherName', dateOfBirth='$dateOfBirth', mobileNo='$mobileNo',emailId='$emailId',educationalQualification='$educationalQualification',Nationality='$Nationality', Religion='$Religion',admissionDate='$admissionDate',Sex='$Sex',martialStatus='$martialStatus',selectCourse='$selectCourse',timePeriod='$timePeriod',permanentAddress='$permanentAddress',presentAddress='$presentAddress' WHERE applicationId='$applicationId'";
               $insertedid = $admin-> insertedId($qry);

               header('Location: viewAdmissionDetails.php');
             }
                else{
                  $errFlag++;
                    $outMsg = "Mandatory field cannot be blank";
                    header("location:registration.php?errmsg=$outMsg");
             }

?>