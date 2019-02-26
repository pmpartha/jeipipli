<?php
ob_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include("conection.php");
date_default_timezone_set('Asia/Kolkata');
//admin login
class Admin extends Connection 
{
    function adminLogin($username, $password) {
        $qry = "SELECT * FROM admin_table where userName='$username' AND password='$password'";
        $this->ExecQuery($qry);
        $row = $this->FetchResult();
        return $row;
    }
    function viewCategory(){
        $result=array();
        $query = "SELECT * FROM slider_notice";
        $this->ExecQuery($query);
        while($row=$this->FetchResult())
        {
            $result[]=$row;
        }
        return $result;
    }
    function viewCategorys(){
        $result=array();
        $query = "SELECT * FROM slider_notice order by sliderId desc limit 5";
        $this->ExecQuery($query);
        while($row=$this->FetchResult())
        {
            $result[]=$row;
        }
        return $result;
    }
    function deleteProduct($sliderId){
        $query = "DELETE FROM  slider_notice WHERE sliderId = '$sliderId'";
        $result = $this->ExecQuery($query);
        return $result;
    }
    function viewImage(){
        $result=array();
        $query = "SELECT * FROM slider_image";
        $this->ExecQuery($query);
        while($row=$this->FetchResult())
        {
            $result[]=$row;
        }
        return $result;
    }
    function viewImageFrontend(){
        $result=array();
        $query = "SELECT * FROM slider_image ORDER BY ImageId desc LIMIT 0,3";
        $this->ExecQuery($query);
        while($row=$this->FetchResult())
        {
            $result[]=$row;
        }
        return $result;
    }
    function deleteImage($ImageId){
        $query = "DELETE FROM slider_image WHERE ImageId = '$ImageId'";
        $result = $this->ExecQuery($query);
        return $result;
    }
    function latestNews(){
        $result=array();
        $query = "SELECT * FROM latest_news";
        $this->ExecQuery($query);
        while($row=$this->FetchResult())
        {
            $result[]=$row;
        }
        return $result;
    }
    function latestNews1(){
        $result=array();
        $query = "SELECT * FROM latest_news order by newsId desc limit 5";
        $this->ExecQuery($query);
        while($row=$this->FetchResult())
        {
            $result[]=$row;
        }
        return $result;
    }
    function deletelatestNews($newsId){
        $query = "DELETE FROM latest_news WHERE newsId = '$newsId'";
        $result = $this->ExecQuery($query);
        return $result;
    }
    function testResult(){
        $result=array();
        $query = "SELECT * FROM test_result order by resultId desc";
        $this->ExecQuery($query);
        while($row=$this->FetchResult())
        {
            $result[]=$row;
        }
        return $result;
    }
    function deleteTestResult($resultId){
        $query = "DELETE FROM test_result WHERE resultId = '$resultId'";
        $result = $this->ExecQuery($query);
        return $result;
    }
    function studyMaterial(){
        $result=array();
        $query = "SELECT * FROM study_material";
        $this->ExecQuery($query);
        while($row=$this->FetchResult())
        {
            $result[]=$row;
        }
        return $result;
    }
    function deleteStudyMaterial($studyId){
        $query = "DELETE FROM study_material WHERE studyId = '$studyId'";
        $result = $this->ExecQuery($query);
        return $result;
    }
    function viewStudentDetailsBackend(){
        $result=array();
        $query = "SELECT * FROM admission_details";
        $this->ExecQuery($query);
        while($row=$this->FetchResult())
        {
            $result[]=$row;
        }
        return $result;
    }
    function deleteStudentDetailsBackend($admissionId){
        $query = "DELETE FROM admission_details WHERE admissionId= '$admissionId'";
        $result = $this->ExecQuery($query);
        return $result;
    }
    function viewStudentDetails($applicationId) {
        $query   = "SELECT * from admission_details WHERE applicationId ='$applicationId'";
        $row     = $this->ExecQuery($query);
        $rows     = $this->FetchResult();
        $num_rows = $row->num_rows;
        return array('row'=>$rows,'num_rows'=>$num_rows);
    }
    function viewCourses(){
        $result=array();
        $query = "SELECT * FROM courseTable WHERE status=0";
        $this->ExecQuery($query);
        while($row=$this->FetchResult())
        {
            $result[]=$row;
        }
        return $result;
    }
    function deleteAdmissionDetails($admissionId){
        $query = "DELETE FROM admission_details WHERE admissionId = '$admissionId'";
        $result = $this->ExecQuery($query);
        return $result;
    }
    function sucesfulStudent(){
        $result=array();
        $query = "SELECT * FROM sucessful_student";
        $this->ExecQuery($query);
        while($row=$this->FetchResult())
        {
            $result[]=$row;
        }
        return $result;
    }
    function viewSucesfulStudentIdWise($studentId) {
        $query   = "SELECT * from sucessful_student WHERE studentId ='$studentId'";
        $row     = $this->ExecQuery($query);
        $rows     = $this->FetchResult();
        $num_rows = $row->num_rows;
        return array('row'=>$rows,'num_rows'=>$num_rows);
    }
     function deleteSucesfulStudent($studentId){
        $query = "DELETE FROM sucessful_student WHERE studentId = '$studentId'";
        $result = $this->ExecQuery($query);
        return $result;
    }
    function viewGalleryImage(){
        $result=array();
        $query = "SELECT * FROM gallery_image";
        $this->ExecQuery($query);
        while($row=$this->FetchResult())
        {
            $result[]=$row;
        }
        return $result;
    }
     function deleteGalleryImage($galleryId){
        $query = "DELETE FROM gallery_image WHERE galleryId = '$galleryId'";
        $result = $this->ExecQuery($query);
        return $result;
}
 	function certificateDetails(){
        $result=array();
        $query = "SELECT * FROM certificate_details";
        $this->ExecQuery($query);
        while($row=$this->FetchResult())
        {
            $result[]=$row;
        }
        return $result;
    }
     function viewcertificateDetailsIdWise($rollNumber) {
        $query   = "SELECT * from certificate_details WHERE rollNumber ='$rollNumber'";
        $row     = $this->ExecQuery($query);
        $rows     = $this->FetchResult();
        $num_rows = $row->num_rows;
        return array('row'=>$rows,'num_rows'=>$num_rows);
    }
     function deleteCertificate($rollNumber){
        $query = "DELETE FROM certificate_details WHERE rollNumber = '$rollNumber'";
        $result = $this->ExecQuery($query);
        return $result;
}
    function duplicateSerialNoCheck($serialNo){
        $query="SELECT * FROM certificate_details WHERE serialNo = '$serialNo'";
        $row     = $this->ExecQuery($query);
        $num_rows = $row->num_rows;
        return $num_rows;
    }
    function duplicateCertificateCheck($certificateNo){
        $query="SELECT * FROM certificate_details WHERE certificateNo = '$certificateNo'";
        $row     = $this->ExecQuery($query);
        $num_rows = $row->num_rows;
        return $num_rows;
    }
    function duplicateRollNoCheck($rollNumber){
        $query="SELECT * FROM certificate_details WHERE rollNumber = '$rollNumber'";
        $row     = $this->ExecQuery($query);
        $num_rows = $row->num_rows;
        return $num_rows;
    }
    function viewCertificateSearch($roll,$certificate,$serial){
        if($roll){
            $query="SELECT * FROM certificate_details WHERE rollNumber = '$roll'";
        }else if($certificate){
             $query="SELECT * FROM certificate_details WHERE certificateNo='$certificate'";
        }elseif($serial){
             $query="SELECT * FROM certificate_details WHERE serialNo='$serial'";
        }else {
            $query="SELECT * FROM certificate_details WHERE rollNumber = '$roll', certificateNo='$certificate', serialNo='$serial'";
        }
        //echo $query;die;
        $row = $this->ExecQuery($query);
        $num_rows = $row->num_rows;
        $rows     = $this->FetchResult();
        return array('row'=>$rows,'num_rows'=>$num_rows);
    }
    function chkEmail($email,$cpass){
        $query = "SELECT * FROM admin_table WHERE adminEmail = '$email'";
        $result = $this->ExecQuery($query);
        $num_rows = $result->num_rows;
        if($num_rows > 0){
            //echo 'Hiii';die;
            $qry = "UPDATE admin_table set password='$cpass' WHERE adminEmail='$email'";
            $insertedid1 = $this-> insertedId($qry);
            $insertedid = $insertedid1+1;
            if($insertedid){
                return 'one';
            }
        } else {
            return 'two';
        }
    }
}
?>