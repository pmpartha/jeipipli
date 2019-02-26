<?php
//error_reporting(E_ALL);
ini_set( 'session.use_only_cookies', TRUE );				
ini_set( 'session.use_trans_sid', FALSE );
session_start();
session_regenerate_id();
if(!isset($_SESSION['admin_id'])){
	header('location: index.php');
}
header("Content-type: application/octet-stream");
header("Content-Transfer-Encoding: chunked");
header("Content-Disposition: attachment;filename='Report.xls'");
header("Pragma: no-cache");
header("Expires: 0");
include("function.php");
$admin=new Admin();

$dateFrom   = (!empty($_REQUEST['dateFrom']))?$_REQUEST['dateFrom']:'';
$dateTo     = (!empty($_REQUEST['dateTo']))?$_REQUEST['dateTo']:'';
$transId    = (!empty($_REQUEST['transId']))?$_REQUEST['transId']:'';
$MobileNo   = (!empty($_REQUEST['MobileNo']))?$_REQUEST['MobileNo']:'';
$paymentMode = (!empty($_REQUEST['paymentMode']))?$_REQUEST['paymentMode']:'';
$invoice = (!empty($_REQUEST['invoice']))?$_REQUEST['invoice']:'';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">
        <thead>
            <tr>
                <th> Sl. No.</th>
                <th> Name </th>
                <th> Mobile </th>
                <th> Email ID </th>
                <th> Payment Mode </th>
                <th> Transaction ID </th>
                <th> Transaction Date </th>
            </tr>
        </thead>
        <tbody>
        <?php
            $view_registration_details=$admin->view_registration_details($dateFrom,$dateTo,$transId,$MobileNo,$paymentMode,$invoice);
            $x=1;
            foreach($view_registration_details as $vr)
            {
                $BankName   = strtoupper($BankName);
                //echo '<pre>';print_r($vr);die;
        ?>  

                <tr class="odd gradeX">
                    <th><?=$x?></th>   
                    <td>
                        <?php 
                        if(isset($vr['name'])){
                            echo ucfirst($vr['name']);
                        }else{
                            echo "NA";
                        }
                        ?>
                    </td>   
                    <td>
                        <?php 
                        if(isset($vr['mobile'])){
                            echo $vr['mobile'];
                        }else{
                            echo "NA";
                        }
                        ?>
                    </td> 
                    <td>
                    <?php 
                    if(isset($vr['email'])){
                        echo $vr['email'];
                    }else{
                        echo "NA";
                    }
                    ?>
                    </td> 
                    <td> <?php echo 'DJ0000'.$vr['id']?> </td>  
                    <td>
                    <?php 
                    if(isset($vr['paymentMode'])){
                        echo strtoupper($vr['paymentMode']);
                    }else{
                        echo "NA";
                    }
                    ?>
                    </td>   
                    <td>
                    <?php 
                    if(isset($vr['transId'])){
                        echo $vr['transId'];
                    }else{
                        echo "NA";
                    }
                    ?>
                    </td>
                    <td><?=date('d-m-Y', strtotime($vr['transDate']))?></td>   
                </tr> 
                <?php 
                $i++;
            }
        ?>                   
        </tbody>
    </table>
</body>
</html>