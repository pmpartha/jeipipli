<?php
include('function.php');
$admin= new Admin();

if(ISSET($_POST['btnSubmit'])){

	         $latestNews        = htmlentities($_POST["latestNews"],ENT_QUOTES);
           $userIp            = $_SERVER['REMOTE_ADDR'];
           $createdOn         = date("Y-m-d H:i:s");

	 $query = "INSERT INTO latest_news set latestNews='$latestNews', userIp='$userIp',createdOn='$createdOn'";
	     $insertedid = $admin-> insertedId($query);
	     if($insertedid > 0){
              header('location: viewLatestNews.php');
      }     
        } 
           else {
                    $errFlag++;
                    $outMsg = "Mandatory field cannot be blank";
                    header("location:registration.php?errmsg=$outMsg");
                }
    





?>