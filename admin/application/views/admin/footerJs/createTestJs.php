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
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/summernote-master/summernote.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/js/modern.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/js/pages/form-elements.js"></script>
        <script>
	        jQuery(document).ready(function() {
				
				$("#testId").keyup(function(){
					var testId = $("#testId").val();
					//alert(testId);
					$.post("<?php echo site_url('ajax/checkTestId') ?>",{testId : testId},function(data){
						$("#testError").html(data);
					});
				});

				$("#totalQ").keyup(function(){
					var testId = $("#totalQ").val();
					//alert(testId);
					var a = testId/4;
					$("#1ques").val(a);
					$("#2ques").val(a);
					$("#3ques").val(a);
					$("#4ques").val(a);
				});
				
				$('#nigatieve_marks').keypress(function(eve) {
					  if ((eve.which != 46 || $(this).val().indexOf('.') != -1) && (eve.which < 48 || eve.which > 57) || (eve.which == 46 && $(this).caret().start == 0) ) {
					    eve.preventDefault();
					  }
					     
					// this part is when left part of number is deleted and leaves a . in the leftmost position. For example, 33.25, then 33 is deleted
					 $('#nigatieve_marks').keyup(function(eve) {
					  if($(this).val().indexOf('.') == 0) {    $(this).val($(this).val().substring(1));
					  }
					 });
				});
	        });
        </script>