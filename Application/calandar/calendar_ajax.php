<?php 
include("../function.php");
class Calendar {  
    /********************* PROPERTY ********************/  
    private $dayLabels = array("Mon","Tue","Wed","Thu","Fri","Sat","Sun");
    private $currentYear=0;
    private $currentMonth=0;
    private $currentDay=0;
    private $currentDate=null;
    private $daysInMonth=0;
    //private $daysInMonth=0;
     
    /********************* PUBLIC **********************/  
        
    /**
    * print out the calendar
    */
    public function show($year, $month) {
        $this->currentYear=$year;
        $this->currentMonth=$month;
        $this->daysInMonth=$this->_daysInMonth($month,$year);  
        $content='<div id="calendar">'.
                        '<div class="calendar-header">'.
                        $this->_createNavi().
                        '</div>'.
                        '<div class="calendar-body">'.
                                '<div class="weekdays fl">'.$this->_createLabels().'</div>';  
                                $weeksInMonth = $this->_weeksInMonth($month,$year);
                                $k=0;
                                for( $i=0; $i<$weeksInMonth; $i++ ){
                                    $content.='<div class="dates">'; 
                                    $k=$i*7+7;   
                                    //Create days in a week
                                    for($j=1;$j<=7;$j++){
                                        $content.=$this->_showDay($i*7+$j, $k);
                                    }
                                    $content.='</div>';
                                    $content.='<div class="ct-show-time time_slot_box display_selected_date_slots_box'.$k.'"></div>';
                                }
                                $content.='<div class="clear"></div>';     
             				
             				$content.='<div class="today-date"><a class="ct-button nm today_btttn ct-lg-offset-1" data-istoday="Y" data-cur_dates="'.date('d-m-Y').'" data-next_month="'.$this->currentMonth.'" data-next_month_year="'.$this->currentYear.'">TODAY</a><div class="ct-selected-date-view ct-lg-pull-1"><span class="add_date" data-date=""></span><span class="add_time"></span></div></div>';
                        $content.='</div>';
                 
        $content.='</div>';
        return $content;   
    }
     
    /********************* PRIVATE **********************/ 
    /**
    * create the li element for ul
    */
    private function _showDay($cellNumber, $id){
        if($this->currentDay==0){
            $firstDayOfTheWeek = date('N',strtotime($this->currentYear.'-'.$this->currentMonth.'-01'));
            if(intval($cellNumber) == intval($firstDayOfTheWeek)){
                $this->currentDay=1;
            }
        }
         
        if( ($this->currentDay!=0)&&($this->currentDay<=$this->daysInMonth) ){
            $this->currentDate = date('Y-m-d',strtotime($this->currentYear.'-'.$this->currentMonth.'-'.($this->currentDay)));
            $cellContent = $this->currentDay;
            $this->currentDay++; 
        }else{
            $this->currentDate =null;
            $cellContent=null;
        }

        $dates = '';
        if ($cellContent!='') {
        	if(strtotime($this->currentDate)>strtotime(date("d-m-Y"))){
        		return '<div class="ct-tooltipss-ajax ct-week selected_datess'.$this->currentDate.' remove_selection selected_date" data-id="'.$id.'" data-selected_dates="'.$this->currentDate.'" data-cur_dates="'.date("Y-m-d").'" data-c_date="'.strtotime(date("Y-m-d")).'" data-s_date="'.strtotime($this->currentDate).'"><a href="javascript:void(0)"><span>'.$cellContent.'</span></a></div>';
        	}else if(strtotime($this->currentDate)==strtotime(date("d-m-Y"))){
        		return '<div class="ct-tooltipss-ajax ct-week by_default_today_selected selected_datess'.$this->currentDate.' remove_selection selected_date" data-id="'.$id.'" data-selected_dates="'.$this->currentDate.'" data-cur_dates="'.date("Y-m-d").'" data-c_date="'.strtotime(date("Y-m-d")).'" data-s_date="'.strtotime($this->currentDate).'"><a href="javascript:void(0)"><span>'.$cellContent.'</span></a></div>';
        	}else{
        		return '<div class="ct-week  hide_previous_dates" data-id="'.$id.'" data-selected_dates="'.$this->currentDate.'" data-cur_dates="'.date("Y-m-d").'" data-c_date="'.strtotime(date("Y-m-d")).'" data-s_date="'.strtotime($this->currentDate).'"><a href="javascript:void(0)"><span>'.$cellContent.'</span></a></div>';
        	}
        }else{
        	return '<div class="ct-week hide_previous_dates"></div>';
        }
    }
     
    /**
    * create navigation
    */
    private function _createNavi(){
        $nextMonth = $this->currentMonth==12?1:intval($this->currentMonth)+1;
        $nextYear = $this->currentMonth==12?intval($this->currentYear)+1:$this->currentYear;
        $preMonth = $this->currentMonth==1?12:intval($this->currentMonth)-1;
        $preYear = $this->currentMonth==1?intval($this->currentYear)-1:$this->currentYear;
        return
            '<a data-istoday="N" class="previous-date previous_next" href="javascript:void(0)" data-next_month="'.$preMonth.'" data-next_month_year="'.$preYear.'"><i class="icon-arrow-left icons"></i></a>	
			<div class="calendar-title">'.date('F',strtotime($this->currentYear.'-'.$this->currentMonth.'-1')).'</div>
			<div class="calendar-year">'.$this->currentYear.'</div>
			<a data-istoday="N" class="next-date previous_next" href="javascript:void(0)" data-next_month="'.$nextMonth.'" data-next_month_year="'.$nextYear.'"><i class="icon-arrow-right icons"></i></a>';
    }
         
    /**
    * create calendar week labels
    */
    private function _createLabels(){ 
        $content='';
        foreach($this->dayLabels as $index=>$label){
            $content.='<div class="ct-day"><span>'.$label.'</span></div>';
        }
        return $content;
    }
     
     
     
    /**
    * calculate number of weeks in a particular month
    */
    private function _weeksInMonth($month=null,$year=null){
        if( null==($year) ) {
            $year =  date("Y",time()); 
        }
        if(null==($month)) {
            $month = date("m",time());
        }
        // find number of days in this month
        $daysInMonths = $this->_daysInMonth($month,$year);
        $numOfweeks = ($daysInMonths%7==0?0:1) + intval($daysInMonths/7);
        $monthEndingDay= date('N',strtotime($year.'-'.$month.'-'.$daysInMonths));
        $monthStartDay = date('N',strtotime($year.'-'.$month.'-01'));
        if($monthEndingDay<$monthStartDay){
            $numOfweeks++;
        }
        return $numOfweeks;
    }
 
    /**
    * calculate number of days in a particular month
    */
    private function _daysInMonth($month=null,$year=null){
        if(null==($year))
            $year =  date("Y",time());
        if(null==($month))
            $month = date("m",time());
        return date('t',strtotime($year.'-'.$month.'-01'));
    }
}

class Timeslot{
	/**
    * showMorning
    */
    
    public function showMorning($selectedDates, $curDates) {
        $this->selectedDates=$selectedDates;
        $this->curDates=$curDates;
        $content='<div class="time-slot-container">'.
                        '<div class="ct-slot-legends">'.
                        $this->_createHeading().
                        '</div>'.
                        '<ul class="time-slot-ul br-5">';
                        	$selectedTime = "09:00 AM";
                            for($j=1;$j<=16;$j++){
                                $content.=$this->_showTimeSlot($selectedTime);
                                //$k=$i*7+$j;
                                $endTime = strtotime("+15 minutes", strtotime($selectedTime));
                                
                                $selectedTime = date('h:i A', $endTime);
                            }
                        $content.='</ul>';
                 
        $content.='</div>';
        return $content;   
    }

    /**
    * showAfternoon
    */
    public function showAfternoon($selectedDates, $curDates) {
        $this->selectedDates=$selectedDates;
        $this->curDates=$curDates;
        $content='<div class="time-slot-container">'.
                        '<div class="ct-slot-legends">'.
                        $this->_createHeading().
                        '</div>'.
                        '<ul class="time-slot-ul br-5">';
                        	$selectedTime = "05:00 PM";
                            for($j=1;$j<=16;$j++){
                                $content.=$this->_showTimeSlot($selectedTime);
                                //$k=$i*7+$j;
                                $endTime = strtotime("+15 minutes", strtotime($selectedTime));
                                
                                $selectedTime = date('h:i A', $endTime);
                            }
                        $content.='</ul>';
                 
        $content.='</div>';
        return $content;   
    }

    /**
    * create createHeading
    */
    private function _createHeading(){
		return '<ul class="ct-legends-ul">
					<li><span class="ct-slot-legends-box ct-available-new"></span>Available</li>
					<li><span class="ct-slot-legends-box ct-not-available-new"></span>Not Available</li>
                    <li><span class="ct-slot-legends-box ct-closed"></span>Closed</li>
                    <br>
				</ul>';
                /*<li><span class="ct-slot-legends-box ct-selected-new"></span>Selected</li>*/
    }

    /**
    * create showTimeSlot
    */
    private function _showTimeSlot($timeSlot){
        $this->admin = new Admin();
        $appointment = $this->admin->findAppointmentTimeSlotWise(date('Y-m-d', strtotime($this->selectedDates)), $timeSlot);
        if(@$appointment['id']>0){
            if(@$appointment['status']=='2'){
                $ctSlotBooked = " ct-closed";
            }else{
                $ctSlotBooked = " ct-booked";
            }
            $appointmentId = " data-appoinment_id=".@$appointment['id'];
            if(@$appointment['blockByAdmin']=='1'){
                $blockByAdmin = " data-blockByAdmin=1";
            }else{
                $blockByAdmin = " data-blockByAdmin=0";
            }
            
        }else{
            $ctSlotBooked = " time_slotss";
            $appointmentId = " data-appoinment_id=0";
            $blockByAdmin = "";
        }
        
        $dates = '';
        if ($timeSlot!='') {
        	return '<li id="'.date('Ymd', strtotime($this->selectedDates)).date('hi', strtotime($timeSlot)).'" data-slotid="'.date('Ymd', strtotime($this->selectedDates)).date('hi', strtotime($timeSlot)).'" class="time-slot br-2'.$ctSlotBooked.'" data-slot_date_to_display="'.date('j-M-Y', strtotime($this->selectedDates)).'" data-ct_date_selected="'.date('D\, j F\, Y', strtotime($this->selectedDates)).'"  data-slot_date="'.$this->selectedDates.'" data-slot_time="'.$timeSlot.'" data-slotdb_time="'.date('h:i', strtotime($timeSlot)).'" data-slotdb_date="'.date('Y-m-d', strtotime($this->selectedDates)).'" data-ct_time_selected="'.$timeSlot.'"'.$appointmentId.$blockByAdmin.'>'.$timeSlot.'</li>';
        }else{
        	return '<div class="ct-week hide_previous_dates"></div>';
        }
    }
}
 
if(isset($_REQUEST['get_calendar_on_page_load']) || isset($_REQUEST['get_calendar'])){
	if(isset($_REQUEST['year'])){
	    $year = $_REQUEST['year'];
	}else{
	    $year = date("Y",time());  
	}          
	 
	if(isset($_REQUEST['month'])){
	    $month = $_REQUEST['month'];
	}else{
	    $month = date("m",time());
	} 
	$calendar = new Calendar();
	echo $calendar->show($year, $month);
}
if(isset($_REQUEST['get_slots'])){
	if(isset($_REQUEST['selected_dates'])){
	    $selectedDates = $_REQUEST['selected_dates'];
	}        
	 
	if(isset($_REQUEST['cur_dates'])){
	    $curDates = $_REQUEST['cur_dates'];
	}

	if(isset($_REQUEST['id'])){
	    $id = $_REQUEST['id'];
	} 

	$Timeslot = new Timeslot();
	echo $Timeslot->showMorning($selectedDates, $curDates);
	echo $Timeslot->showAfternoon($selectedDates, $curDates);
}


?>  