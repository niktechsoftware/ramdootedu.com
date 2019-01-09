		<!-- Javascripts -->
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/jquery/jquery-2.1.3.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/pace-master/pace.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/switchery/switchery.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/classie/classie.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/waves/waves.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/jquery-mockjax-master/jquery.mockjax.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/moment/moment.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/datatables/js/jquery.datatables.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/x-editable/bootstrap3-editable/js/bootstrap-editable.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/js/modern.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/js/pages/table-data.js"></script>
        <script>
	        jQuery(document).ready(function() {

	        	$("#feePay").keyup(function (e) {
	        	     //if the letter is not digit then display error and don't type anything
	        	     if (
	    	        	     e.keyCode != 8 
	    	        	     && e.keyCode != 48
	    	        	     && e.keyCode != 49
	    	        	     && e.keyCode != 50
	    	        	     && e.keyCode != 51
	    	        	     && e.keyCode != 52
	    	        	     && e.keyCode != 53
	    	        	     && e.keyCode != 54
	    	        	     && e.keyCode != 55
	    	        	     && e.keyCode != 56
	    	        	     && e.keyCode != 57
	    	        	     && e.keyCode != 96
	    	        	    && e.keyCode != 97
	    	        	    && e.keyCode != 98
	    	        	    && e.keyCode != 99
	    	        	    && e.keyCode != 100
	    	        	    && e.keyCode != 101
	    	        	    && e.keyCode != 102
	    	        	    && e.keyCode != 103
	    	        	    && e.keyCode != 104
	    	        	    && e.keyCode != 105
	    	        	  ) {
	        	        //display error message
	        	        $("#feePay").val("");
	        	        $("#bal").val($("#hbal").val());
	        	        $("#errmsg").html("Digits Only").show().fadeOut(2000);
	        	               return false;
	        	    }
	        	    else{
		        	    var temp = Number($("#hbal").val()) - Number($("#feePay").val());
		        	    if(temp < 0){
		        	    	$("#feePay").val("");
		        	        $("#bal").val($("#hbal").val());
		        	        $("#errmsg").html("Greater than balance").show().fadeOut(2000);
		        	    }
		        	    else{
		        	    	$("#bal").val(temp);
		        	    }
	        	     }
	        	});
				
	        });
        </script>