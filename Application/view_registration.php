<?php
//error_reporting(E_ALL);
ini_set( 'session.use_only_cookies', TRUE );				
ini_set( 'session.use_trans_sid', FALSE );
session_start();
session_regenerate_id();
if(!isset($_SESSION['admin_id'])){
	header('location: index.php');
}
include("function.php");
$admin=new Admin();

if(isset($_REQUEST['search'])){
    $fromDate   = $_REQUEST['date_from'];
    $toDate     = $_REQUEST['date_to'];
    $transId    = $_REQUEST['transId'];
    $MobileNo   = $_REQUEST['mobileNo'];
    $paymentMode = $_REQUEST['paymentMode'];
    $invoice = $_REQUEST['invoice'];
    $id = str_replace("DJ0000", '',$invoice );
} else {
    $fromDate   = '';
    $toDate     = '';
    $transId    = '';
    $MobileNo    = '';
    $paymentMode = '';
    $invoice = '';
}

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
        <title>Admin | Dashboard</title>
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
                                    <a href="index-2.html">Home</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <a href="#">Dashboard</a>
                                    <i class="fa fa-circle"></i>
                                </li>                                
                            </ul>                            
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> View
                            <small>Details</small>
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        
                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="portlet light bordered">                                    
                                    <div class="portlet-body">
                                    
                                    <div class="table-toolbar">
                                        <form action="" method="post" id="form_sample_2">
					<div class="row">   
	                                    <div class="col-md-12">
						<div class="form-group row">
                                                    <label class="col-md-2" style="color: #36c6d3;margin-top: 10px;">Choose From Date</label>
                                                        <div class="col-md-3">
	                                                        <input class="form-control" id="datepicker" name="date_from" type="text" value="<?= $fromDate;?>" placeholder="From Date">   
                                                        </div>          
	                                                <label class="col-md-2" style="color: #36c6d3;margin-top: 10px;"> Choose To Date</label>
                                                        <div class="col-md-3">
	                                                    <input class="form-control" id="datepicker1" type="text" name="date_to" value="<?= $toDate;?>" placeholder="To Date"> 
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-2" style="color: #36c6d3;margin-top: 10px;">Transaction ID</label>
                                                        <div class="col-md-3">
                                                        <input class="form-control" type="text" name="transId" value="<?= $transId;?>" placeholder="Transaction ID"> 
                                                        </div>

                                                        <label class="col-md-2" style="color: #36c6d3;margin-top: 10px;">Mobile Number</label>
                                                        <div class="col-md-3">
                                                        <input class="form-control" type="text" name="mobileNo" value="<?= $MobileNo;?>" placeholder="Mobile Number"> 
                                                        </div>   
	                                                   
                                                    </div>
                                                     <div class="form-group row">
                                                        <label class="col-md-2" style="color: #36c6d3;margin-top: 10px;">Payment Mode</label>
                                                       
                                                        <div class="col-md-3">
                                                            <select class="form-control" name="paymentMode">
                                                                <option value="">---- Select ----</option>
                                                                <option value="Paytm" <?php if($paymentMode == 'Paytm'){ echo 'selected'; } ?>>PAYTM</option>
                                                                <option value="Online" <?php if($paymentMode == 'Online'){ echo 'selected'; } ?>>ONLINE</option>
                                                            </select>
                                                        </div>  
                                                        <label class="col-md-2" style="color: #36c6d3;margin-top: 10px;">Invoice Id</label>
                                                        <div class="col-md-3">
                                                            <input class="form-control" type="text" name="invoice" value="<?= $invoice;?>" placeholder="Invoice Id"> 
                                                        </div>  
                                                    </div>
                                                    <div class="form-group row center">
                                                        <div class="col-md-4"></div>
                                                         <div class="col-md-3">
                                                            <button type="submit" name="search" id="sample_editable_1_new" class="btn sbold green" style="    width: 100%;"> Submit</button>
                                                         </div> 
                                                    </div>
                                                    </div>   
                                           </div>
                                           
                                          </form>
                                        </div>
                                    <div class="table-toolbar">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="btn-group">
                                                        <!--<a href="add_store.php"><button id="sample_editable_1_new" class="btn sbold green"><i class="fa fa-plus"></i> Add New</button></a>-->
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <!--<div class="btn-group pull-right">
                                                        <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-print"></i> Print </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                                            </li>
                                                        </ul>
                                                    </div>-->
                                                    <a href="excel.php?dateFrom=<?=$fromDate?>&dateTo=<?=$toDate?>&transId=<?=$transId?>&MobileNo=<?=$MobileNo?>&paymentMode=<?=$paymentMode?>&invoice=<?=$invoice?>" class="btn sbold green" style="float: right;"> <i class="fa fa-unlock-alt"></i> Export to Excel</a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                            <thead>
                                                <tr>
                                                    <th>Sl. No.</th>
                                                    <th> Name </th>
                                                    <th> EmailId </th>
                                                    <th> Mobile </th>
                                                    <th> Invoice Id </th>
                                                    <th> Payment Mode </th>
                                                    <th> Trans ID </th>
                                                    <th> Trans Date </th>      
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
	                                        $view_registration_details=$admin->view_registration_details($fromDate,$toDate,$transId,$MobileNo,$paymentMode,$invoice);
	                                        $x=1;
	                                        foreach($view_registration_details as $vr)
	                                        { //print_r($vr);die;
	                                        ?>
                                                <tr class="odd gradeX">
                                                    <th>
                                                        <?=$x?>
                                                    </th>
                                                    <td><?= $vr['title'] .' '. ucfirst($vr['name']); ?> </td>        
                                                    <td><?= $vr['email'] ?></td>        
                                                    <td><?= $vr['mobile'] ?></td>       
                                                    <td><?= 'DJ0000'.$vr['id'] ?></td>       
                                                    <td><?= strtoupper($vr['PaymentMode']); ?></td> 
                                                    <td><?= $vr['transId'] ?></td>   
                                                    <td><?= date('d-m-Y', strtotime($vr['transDate'])); ?></td>
                                                </tr>                
                                            </tbody>
                                            <?php $x++;} ?>
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
function confirm(id)
{
		$.ajax({
       	type:'POST',
       	url :'update_status.php',
       	data:{
           "id" : id,
       	},
       	success:function(result)
       	{
           location.reload();
       	},
       	error: function (exception)
       	{
        	console.log(exception);
      	}
   });
}	
</script>
<script>
	$("#datepicker").datepicker({ 
    dateFormat: 'yy-mm-dd',
    //minDate: '1',
    onSelect: function(date){
        var selectedDate = new Date(date);
        var msecsInADay = 86400000;
        var endDate = new Date(selectedDate.getTime() + msecsInADay);
        $("#datepicker1").datepicker( "option", "minDate", endDate );
    }
    });

	$("#datepicker1").datepicker({ 
	    dateFormat: 'yy-mm-dd',
	    //minDate: '2',
	});
  	</script>
</body>
</html>
