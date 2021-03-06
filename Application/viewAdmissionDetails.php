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
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8" />
        <title>JANANI EDUCATIONAL INSTITUTE</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        
        <link rel="stylesheet" href="assets/css/jquery-ui.css"/>
        
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> 
      </head>  
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <div class="page-wrapper">
        
            <!-- BEGIN HEADER -->
            <?php include('include/header.php'); ?>
            <!-- END HEADER -->
            
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
            
                <!-- BEGIN SIDEBAR -->
                <?php include('include/sidebar.php'); ?>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->                        
                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="dashboard.php">Home</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <a href="#.">Dashboard</a>
                                    <i class="fa fa-circle"></i>
                                </li>                                
                            </ul>                            
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> View
                            <small>Admission Details</small>
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div id="successMessage" style="color: #14ce24;font-weight: 600;">
                            <?php if(isset($_REQUEST['msg']) && $_REQUEST['msg'] !=''){ echo $_REQUEST['msg']; } ?> 
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="portlet light bordered">  
                                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                            <thead>
                                                <tr>
                                                    <th width="14%">App.Id</th>
                                                    <th width="15%">Applicant Details</th>
                                                    <th width="14%">Date of Birth </th>
                                                    <th width="13%">Gender</th> 
                                                    <th width="14%">Qualification </th>
                                                    <th width="16%">Admission Date</th>
                                                    <th width="14%"> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $ctr=0;
                                            $viewStudentDetailsBackend = $admin->viewStudentDetailsBackend();
                                            foreach($viewStudentDetailsBackend as $viewStudentDetailsBackend)
                                            {
                                                $ctr++;
                                            ?>
                                                <tr class="odd gradeX">
                                                    <td>
                                                        <?=$viewStudentDetailsBackend['applicationId']?>
                                                    </td>
                                                    <td>
                                                        <?=$viewStudentDetailsBackend['fullName']?> <br>
                                                        <?=$viewStudentDetailsBackend['mobileNo']?><br>
                                                        <?=$viewStudentDetailsBackend['emailId']?>
                                                    </td>
                                                    <td> <?=$viewStudentDetailsBackend['dateOfBirth']?> </td>
                                                    <td> <?=$viewStudentDetailsBackend['Sex']?> </td>
                                                    <td> <?=$viewStudentDetailsBackend['educationalQualification']?> </td>
                                                    <td> <?=$viewStudentDetailsBackend['admissionDate']?> </td>
                                                    <td>
                                                        <a href="viewAdmissionDetailsIdWise.php?id=<?=$viewStudentDetailsBackend['applicationId']?>" class="btn btn-xs green" type="submit" style="margin-bottom: 5px;width: 70%;"> <i class="fa fa-eye"></i> View</a> <br>
                                                        <a href="updateAdmissionDetailsIdWise.php?id=<?=$viewStudentDetailsBackend['applicationId']?>" class="btn btn-xs blue" type="submit" style="margin-bottom: 5px;width: 70%;"> <i class="fa fa-edit"></i> Edit</a><br>
                                                        <button class="btn btn-xs red" type="submit" onclick="deletee(<?php echo $viewStudentDetailsBackend['admissionId'] ?>);" style="width: 70%;"> <i class="fa fa-trash"></i> Delete</button>  
                                                    </td> 
                                                </tr>  
											<?php } ?>              
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
                        </div>                       
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->               
            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            <?php include('include/footer.php'); ?>
            <!-- END FOOTER -->
        </div>
        <!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui.js"></script>

<script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
<script src="assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<script>
function deletee(admissionId)
{
    //alert(x);
    //return false;
	var x = confirm("Do you want to Delete?");
	//alert(x);
	//return false;
	if(x == true){
			$.ajax({
	       	type:'POST',
	       	url :'deleteAdmissionStudent.php',
	       	data:{"admissionId" : admissionId},
	       	success:function(result){
	       		if(result == 1){
	       			//console.info(result);
	       			location.reload();
	       		} else {
	       			alert('some error occoured.Please try again later.');
	       		}	           
	       	},error: function (exception) {
	        console.log(exception);
	        //alert(exception);
	      	}
	   });
	}		
}	
</script>
<script>
	/*$("#datepicker").datepicker({ 
    dateFormat: 'yy-mm-dd',
    minDate: '1',
    onSelect: function(date){
        var selectedDate = new Date(date);
        var msecsInADay = 86400000;
        var endDate = new Date(selectedDate.getTime() + msecsInADay);
        $("#datepicker1").datepicker( "option", "minDate", endDate );
    }
    });

	$("#datepicker1").datepicker({ 
	    dateFormat: 'yy-mm-dd',
	    minDate: '2',
	});*/
  	</script>
</body>
</html>
