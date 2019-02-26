/* tooltipster jquery */

jQuery(document).ready(function() {
	jQuery('.ct-tooltip').tooltipster({
		animation: 'grow',
		delay: 20,
		theme: 'tooltipster-shadow',
		trigger: 'hover'
	});
	jQuery('.ct-tooltipss').tooltipster({
		animation: 'grow',
		delay: 20,
		theme: 'tooltipster-shadow',
		trigger: 'hover'
	});
	jQuery('.ct-tooltip-services').tooltipster({
		animation: 'grow',
		side: 'bottom',
		interactive : 'true',
		theme: 'tooltipster-shadow',
		trigger: 'hover',
		delayTouch : 300,
		maxWidth:400,
		functionPosition: function(instance, helper, position){
			position.coord.top -= 70;
			return position;
		},
		contentAsHTML : 'true'
	});
});

var ct_postalcode_status_check = ct_postalcode_statusObj.ct_postalcode_status;
var guest_user_status ='off';
/* scroll to next step */
jQuery(document).ready(function(){
	jQuery('.ct-service').on('click',function(){
		jQuery('html, body').stop().animate({
			'scrollTop': jQuery('.ct-scroll-meth-unit').offset().top - 30
		}, 800, 'swing', function () {});
	});
});

jQuery(document).ready(function () {
	jQuery('.ct-loading-main').hide();
    var subheader_status=subheaderObj.subheader_status;
    if(subheader_status == 'Y'){
        jQuery('.ct-sub').show();
    }else{
        jQuery('.ct-sub').hide();
        jQuery('.ct-sub-complete-booking').html('<br>');
    }
	if(ct_postalcode_status_check == 'Y'){
		jQuery('.ct_remove_id').attr('id','');
		jQuery(document).on('click','.ct_remove_id',function(){
			jQuery('#ct_postal_code').focus();
			jQuery('#ct_postal_code').keyup();
		});
	}
	jQuery('.ct-loading-main-complete_booking').hide();
	jQuery('.remove_guest_user_preferred_email').hide();
    jQuery('.show_methods_after_service_selection').hide();
    jQuery('.freq_discount_display').hide();
    jQuery('.hide_allsss_addons').hide();
    jQuery('.partial_amount_hide_on_load').hide();
    jQuery('.hide_right_side_box').hide();
    
    jQuery('.postal_code_error').show();
    //jQuery('.postal_code_error').html(errorobj_please_enter_postal_code);
    jQuery('.hideservice_name').hide();
    jQuery('.hidedatetime_value').hide();
    jQuery('.s_m_units_design_1').hide();
    jQuery('.s_m_units_design_2').hide();
    jQuery('.s_m_units_design_3').hide();
    jQuery('.s_m_units_design_4').hide();
    jQuery('.s_m_units_design_5').hide();

});


/* see more instructions in service popup */
jQuery(document).ready(function() {
    jQuery(".show-more-toggler").click(function() {
        jQuery(".bullet-more").toggle( "blind", {direction: "vertical"}, 500);
        jQuery(".show-more-toggler:after").addClass('rotate');
    });
});


/*  create the back to top button */
jQuery(document).ready(function () {
    jQuery('body').prepend('<a href="javascript:void(0)" class="ct-back-to-top"></a>');
    var amountScrolled = 500;
    jQuery(window).scroll(function() {
        if ( jQuery(window).scrollTop() > amountScrolled ) {
            jQuery('a.ct-back-to-top').fadeIn('slow');
        } else {
            jQuery('a.ct-back-to-top').fadeOut('slow');
        }
    });
    jQuery('a.ct-back-to-top, a.ct-simple-back-to-top').click(function() {
        jQuery('html, body').animate({
            scrollTop: 0
        }, 2000);
        return false;
    });
});

/************* Code by developer side --- ****************/

jQuery(document).on('keyup keydown blur','.add_show_error_class',function(event){
	jQuery('.ct-loading-main').hide();
    var id = jQuery(this).attr('id');
    var Number = /(?:\(?\+\d{2}\)?\s*)?\d+(?:[ -]*\d+)*$/;
    if(jQuery(this).hasClass('error')){
        jQuery( this ).removeClass('error');
        jQuery( "#"+id ).parent().removeClass('error');
        jQuery( this ).addClass('show-error');
        jQuery( "#"+id ).parent().addClass('show-error');
        
    }else{
        jQuery( this ).removeClass('error');
        jQuery( "#"+id ).parent().removeClass('error');
        jQuery( this ).removeClass('show-error');
        jQuery( "#"+id ).parent().removeClass('show-error');
    }
});

jQuery(document).on('keyup keydown blur','.add_show_error_class_for_login',function(event){
    var id = jQuery(this).attr('id');
    if(jQuery(this).hasClass('error')){
        jQuery( this ).removeClass('error');
        jQuery( "#"+id ).parent().removeClass('error');
        jQuery( this ).addClass('show-error');
        jQuery( "#"+id ).parent().addClass('show-error');
    }else{
        jQuery( this ).removeClass('error');
        jQuery( "#"+id ).parent().removeClass('error');
        jQuery( this ).removeClass('show-error');
        jQuery( "#"+id ).parent().removeClass('show-error');
    }
});

var clicked = false;


jQuery(document).on('click','#accept-conditions',function(){
    jQuery('.terms_and_condition').hide();
});

/* new existing user */

/* ct_user_radio_group */

jQuery(document).on("change",".existing-user",function() {
    if(jQuery('.existing-user').is(':checked')) {
        jQuery('.ct-new-user-details').hide( "blind", {direction: "vertical"}, 300);
        jQuery('.ct-login-existing').show( "blind", {direction: "vertical"}, 700);
        jQuery('.ct-peronal-details').hide( "blind", {direction: "vertical"}, 300);
        jQuery('#appointmentBy').val('exist');
    }
});

jQuery(document).on("change",".new-user",function() {
    if(jQuery('.new-user').is(':checked')) {
        jQuery('.ct-new-user-details').show( "blind", {direction: "vertical"}, 700);
        jQuery('.ct-login-existing').hide( "blind", {direction: "vertical"}, 300);
        jQuery('.ct-peronal-details').show( "blind", {direction: "vertical"}, 300);
        jQuery('#appointmentBy').val('new');
    }
});

/*** calendar code start ***/
/* time slots dropdown show hide list */
jQuery(document).on("click",".time-slot-is",function() {
    jQuery(".time-slots-dropdown").show( "blind", {direction: "vertical"}, 700 );
});
jQuery(document).on("click",".time-slot",function() {
    jQuery('.time-slot').each(function(){
        jQuery(this).removeClass('selected-time-slot');
    });
    jQuery(this).addClass('selected-time-slot');
    jQuery(".time-slots-dropdown").hide( "blind", {direction: "vertical"}, 300 );
});

jQuery(document).on('click','.ct-week', function() {
    var valuess = jQuery(this).val();
    var s_date = jQuery(this).data('s_date');
    var c_date = jQuery(this).data('c_date');
    if(s_date >= c_date){
        jQuery('.ct-week').each(function(){
            jQuery(this).removeClass('active');
            jQuery('.ct-show-time').removeClass('shown');
        });
        jQuery(this).addClass('active');
        jQuery('.ct-show-time').addClass('shown');
    }else if(s_date < c_date || valuess == ''){
        jQuery('.time_slot_box').hide();
    }
});
/******************/

jQuery(document).on("click",".selected_date",function() {
	jQuery('.ct-loading-main').show();
    var selected_dates = jQuery(this).data('selected_dates');
    var cur_dates = jQuery(this).data('cur_dates');
    var id = jQuery(this).data('id');
    jQuery('#appointmentDate').val(selected_dates); 
	jQuery('#appointmentDate1').val(selected_dates); 
    appointmentDate = selected_dates;
    
	jQuery.ajax({
        type:"POST",
        url: "calandar/calendar_ajax.php",
        data : {
            'selected_dates' : selected_dates,
            'id' : id,
            'cur_dates' : cur_dates,
            'get_slots' : 1
        },
        success: function(res){
			jQuery('.ct-loading-main').hide();
            jQuery('.time_slot_box').hide();
            jQuery('.display_selected_date_slots_box'+id).html(res);
            jQuery('.display_selected_date_slots_box'+id).show();
            jQuery('.display_selected_date_slots_box'+id).addClass('shown');
        }
    });
});
jQuery(document).ready(function() {
    jQuery('.space_between_date_time').hide();
    var site_url=siteurlObj.site_url;
    var ajax_url=ajaxurlObj.ajax_url;
    jQuery.ajax({
        type:"POST",
        url: "calandar/calendar_ajax.php",
        data : {
            'get_calendar_on_page_load' : 1
        },
        success: function(res){
            jQuery('.cal_info').html(res);
            var d = new Date();
            var month = d.getMonth()+1;
            var day = d.getDate();
            var output = day + '-' +(month<10 ? '0' : '') + month + '-' +  d.getFullYear();
            var selected_dates = jQuery('.selected_date').data('selected_dates');
            var cur_dates = jQuery('.selected_date').data('cur_dates');
            if(output == cur_dates){
                jQuery('.by_default_today_selected').addClass('active_today');
            }
        }
    });
});
jQuery(document).on("click",".previous_next,.today_btttn",function() {
	jQuery('.ct-loading-main').show();
    var ct_date_selected = jQuery('.ct-date-selected').text();
    var ct_time_selected = jQuery('.ct-time-selected').text();
    var ct_date = jQuery('.ct-date-selected').data('date');

    if(ct_date_selected != ''){
        jQuery('.add_date').attr('data-date',ct_date);
    }
    var month = jQuery(this).data('next_month');
    var year = jQuery(this).data('next_month_year');
    var todaybtn = jQuery(this).data('istoday');
    var today_date = jQuery(this).data('cur_dates');
    jQuery.ajax({
        type:"POST",
        url: "calandar/calendar_ajax.php",
        data : {
            'month' : month,
            'year' : year,
            'get_calendar' : 1
        },
        success: function(res){
			jQuery('.ct-loading-main').hide();
            jQuery('.cal_info').html(res);
        }
    });
});

jQuery(document).on("click",".time_slotss",function() {

    var slotdb_date = jQuery(this).data('slotdb_date');
    var slotdb_time = jQuery(this).data('slot_time');
    var slotid = jQuery(this).data('slotid');

    var modalBody = '<div class="modal-header"><h4 class="modal-title">What you want to do?</h4></div>';
        modalBody += '<div class="modal-body"><table class="table"><tr><td style="text-align:center;"><button type="button" class="btn btn-danger block-appointment" data-slotdb_date="'+slotdb_date+'" data-slotdb_time="'+slotdb_time+'" data-slotid="'+slotid+'" style="width:70%;">Block</button></td><td style="text-align:center;"><button type="button" class="btn btn-success book-appointment" style="width:70%;" data-slotdb_date="'+slotdb_date+'" data-slotdb_time="'+slotdb_time+'" data-slotid="'+slotid+'">Book</button></td></tr></table></div>';
        modalBody += '<div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>';
    jQuery('.modal-content').empty();            
    jQuery('.modal-content').html(modalBody);
    $('#myModal').modal('toggle');
	/*jQuery('.ct-selected-date-view').removeClass('pulse');
	jQuery('.date_time_error').hide();
    jQuery('.time_slot_box').hide();
    jQuery('.space_between_date_time').show();
    jQuery('.hidedatetime_value').show();
    jQuery('.add_date').addClass('ct-date-selected');
    jQuery('.add_time').addClass('ct-time-selected');

    var slot_date_to_display = jQuery(this).data('slot_date_to_display');
    var slot_date = jQuery(this).data('slot_date');
    var slotdb_date = jQuery(this).data('slotdb_date');
    var slot_time = jQuery(this).data('slot_time');
    var slotdb_time = jQuery(this).data('slotdb_time');
    var ct_date_selected = jQuery(this).data('ct_date_selected');
    var ct_time_selected = jQuery(this).data('ct_time_selected');
	
	jQuery('.ct-date-selected').attr('data-date',slot_date);
    jQuery('#save_selected_date').val(slot_date);  
    jQuery('#appointmentTime').val(slot_time);
	jQuery('#appointmentTime1').val(slot_time);
    appointmentTime = slot_time;	
    jQuery('.ct-date-selected').html(ct_date_selected);
    jQuery('.ct-time-selected').html(ct_time_selected);
	jQuery('.ct-selected-date-view').addClass('pulse');*/
});

jQuery(document).on("click",".ct-booked",function() {
    var appointmentId = jQuery(this).data('appoinment_id');
    var slotId = jQuery(this).data('slotid');
    var slotdbDate = jQuery(this).data('slotdb_date');
    var blockByAdmin = jQuery(this).data('blockbyadmin');
    jQuery.ajax({
        type:"POST",
        url: "calandar/cancel_ajax.php",
        data : {
            'appointmentId' : appointmentId,
            'slotId' : slotId,
            'slotdbDate' : slotdbDate,
            'blockByAdmin' : blockByAdmin,
            'ajaxType' : 'showAppointment'
        },
        success: function(res){
            jQuery('.modal-content').empty();            
            jQuery('.modal-content').html(res);            
            $('#myModal').modal('toggle');
        }
    });
});

jQuery(document).on("click",".cancel-appointment",function() {
    var x = confirm("Are you sure to cancel appointment.");
    if(x){
        var appointmentId = jQuery(this).data('appoinment_id');
        var slotId = jQuery(this).data('slotid1');
        jQuery.ajax({
            type:"POST",
            url: "calandar/cancel_ajax.php",
            data : {
                'appointmentId' : appointmentId,
                'ajaxType' : 'cancelAppointment'
            },
            success: function(res){
                var result = jQuery.parseJSON(res);
                if(result.status==200){
                    $('#myModal').modal('toggle');
                    $('#'+slotId).removeClass('ct-booked');
                    $('#'+slotId).addClass('time_slotss');
                }else{
                    alert(result.message);
                }
            }
        });
    }
});

jQuery(document).on("click",".close-appointment",function() {
    var x = confirm("Are you sure to close appointment.");
    if(x){
        var appointmentId = jQuery(this).data('appoinment_id');
        var slotId = jQuery(this).data('slotid1');
        jQuery.ajax({
            type:"POST",
            url: "calandar/cancel_ajax.php",
            data : {
                'appointmentId' : appointmentId,
                'ajaxType' : 'closeAppointment'
            },
            success: function(res){
                var result = jQuery.parseJSON(res);
                if(result.status==200){
                    $('#myModal').modal('toggle');
                    $('#'+slotId).removeClass('ct-booked');
                    $('#'+slotId).addClass('ct-closed');
                }else{
                    alert(result.message);
                }
            }
        });
    }
});

jQuery(document).on("click",".block-appointment",function() {
    var x = confirm("Are you sure to block.");
    if(x){
        var slotdb_date = jQuery(this).data('slotdb_date');
        var slotdb_time = jQuery(this).data('slotdb_time');
        var slotId = jQuery(this).data('slotid');
        jQuery.ajax({
            type:"POST",
            url: "calandar/cancel_ajax.php",
            data : {
                'slotdb_date' : slotdb_date,
                'slotdb_time' : slotdb_time,
                'ajaxType' : 'block'
            },
            success: function(res){
                var result = jQuery.parseJSON(res);
                if(result.status==200){
                    $('#myModal').modal('toggle');
                    $('#'+slotId).addClass('ct-booked');
                    $('#'+slotId).attr('data-appoinment_id', result.appointmentId);
                    $('#'+slotId).attr('data-blockByAdmin', '1');
                    $('#'+slotId).removeClass('time_slotss');
                }else{
                    alert(result.message);
                }
            }
        });
    }
});

jQuery(document).on("click",".book-appointment",function() {
    var slotdb_date = jQuery(this).data('slotdb_date');
    var slotdb_time = jQuery(this).data('slot_time');
    var slotid = jQuery(this).data('slotid');

    var modalBody = '<div class="modal-header"><h4 class="modal-title">What you want to do?</h4></div>';
        modalBody += '<div class="modal-body"><form method="post"><input type="hidden" name="slotdbDate" value="'+slotdb_date+'"><input type="hidden" name="slotdbTime" value="'+slotdb_time+'"><input type="hidden" name="slotId" value="'+slotid+'"><div class="form-group"><label>Patient Mobile</label><input type"text" name="patientMobile" class="form-control"></div><div class="form-group"><label>Patient Name</label><input type"text" name="patientName" class="form-control"></div><button type="button" class="btn btn-success">Book</button></from></div>';
        modalBody += '<div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>';
    
    jQuery('.modal-content').empty();            
    jQuery('.modal-content').html(modalBody);
    //$('#myModal').modal('toggle');
    /*jQuery('.ct-selected-date-view').removeClass('pulse');
    jQuery('.date_time_error').hide();
    jQuery('.time_slot_box').hide();
    jQuery('.space_between_date_time').show();
    jQuery('.hidedatetime_value').show();
    jQuery('.add_date').addClass('ct-date-selected');
    jQuery('.add_time').addClass('ct-time-selected');

    var slot_date_to_display = jQuery(this).data('slot_date_to_display');
    var slot_date = jQuery(this).data('slot_date');
    var slotdb_date = jQuery(this).data('slotdb_date');
    var slot_time = jQuery(this).data('slot_time');
    var slotdb_time = jQuery(this).data('slotdb_time');
    var ct_date_selected = jQuery(this).data('ct_date_selected');
    var ct_time_selected = jQuery(this).data('ct_time_selected');
    
    jQuery('.ct-date-selected').attr('data-date',slot_date);
    jQuery('#save_selected_date').val(slot_date);  
    jQuery('#appointmentTime').val(slot_time);
    jQuery('#appointmentTime1').val(slot_time);
    appointmentTime = slot_time;    
    jQuery('.ct-date-selected').html(ct_date_selected);
    jQuery('.ct-time-selected').html(ct_time_selected);
    jQuery('.ct-selected-date-view').addClass('pulse');*/
});
jQuery(document).on("click",".today_btttn",function() {
    var today_date = jQuery(this).data('cur_dates');
    jQuery('.dates .selected_datess'+today_date).trigger('click');
});


/*** calendar code end ***/

jQuery(document).ready(function () {
    jQuery('[data-toggle="tooltip"]').tooltip({'placement': 'right'});
});

/* same as above details  */



