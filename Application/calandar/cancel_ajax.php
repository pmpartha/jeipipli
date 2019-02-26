<?php 
include("../function.php");
$admin=new Admin();
date_default_timezone_set('Asia/Kolkata');
if(isset($_REQUEST['ajaxType']) && $_REQUEST['ajaxType']=='showAppointment'){
	$appointmentDetails = $admin->appointmentDetails($_REQUEST['appointmentId'], $_REQUEST['blockByAdmin']);
	if(!empty($appointmentDetails)){
		$appointmentId = ' data-appoinment_id="'.$appointmentDetails["id"].'"';
		$slotId = ' data-slotid1="'.$_REQUEST["slotId"].'"';
		if($_REQUEST['blockByAdmin']==1){
			$result = 	'<div class="modal-header">
                        <h4 class="modal-title">Patient Details</h4>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <tr>
                                <td>This time slot is blocked by admin.</td>
                            </tr>
                            <tr>
                                <td><button type="button" class="btn btn-danger cancel-appointment"'.$appointmentId.$slotId.'>Cancel Appointment</button></td>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>';
		}else{
			if(strtotime($_REQUEST['slotdbDate'])==strtotime(date('Y-m-d'))){
				$cancelButton = '<button type="button" class="btn btn-success close-appointment"'.$appointmentId.$slotId.'>Close Appointment</button>';
			}else{
				$cancelButton = "";
			}
			$result = 	'<div class="modal-header">
                        <h4 class="modal-title">Patient Details</h4>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <tr>
                                <td>Name : </td>
                                <td>'.$appointmentDetails["patientName"].'</td>
                            </tr>
                            <tr>
                                <td>Mobile : </td>
                                <td>'.$appointmentDetails["mobile"].'</td>
                            </tr>
                            <tr>
                                <td><button type="button" class="btn btn-danger cancel-appointment"'.$appointmentId.$slotId.'>Cancel Appointment</button></td>
                                <td>'.$cancelButton.'</td></td>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>';
                }
		
        echo $result;
	}
}
if(isset($_REQUEST['ajaxType']) && $_REQUEST['ajaxType']=='cancelAppointment'){
	if(isset($_REQUEST['appointmentId'])){
		$cancelAppointment = $admin->cancelAppointment($_REQUEST['appointmentId']);
		if($cancelAppointment){
			$result = array('status' => 200, 'message' => 'Apponintment has canceled.');
		}else{
			$result = array('status' => 400, 'message' => 'Cancellation has been failed, please try again.');
		}
	}else{
		$result = array('status' => 400, 'message' => 'Appoint Id not found, contact your technical team.');
	}
	echo json_encode($result);
}

if(isset($_REQUEST['ajaxType']) && $_REQUEST['ajaxType']=='closeAppointment'){
	if(isset($_REQUEST['appointmentId'])){
		$closeAppointment = $admin->closeAppointment($_REQUEST['appointmentId']);
		if($closeAppointment){
			$result = array('status' => 200, 'message' => 'Apponintment has closed.');
		}else{
			$result = array('status' => 400, 'message' => 'Close has been failed, please try again.');
		}
	}else{
		$result = array('status' => 400, 'message' => 'Appoint Id not found, contact your technical team.');
	}
	echo json_encode($result);
}

if(isset($_REQUEST['ajaxType']) && $_REQUEST['ajaxType']=='block'){
	$blockTime = $admin->blockTime($_REQUEST['slotdb_date'], $_REQUEST['slotdb_time']);
	if($blockTime){
		$result = array('status' => 200, 'message' => 'Appointment has blocked.', 'appointmentId' => $blockTime);
	}else{
		$result = array('status' => 400, 'message' => 'Block has been failed, please try again.');
	}
	echo json_encode($result);
}
?>