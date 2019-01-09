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
				
				$("#testId").change(function(){
					var testId = $("#testId").val();
					//alert(testId);
					$.post("<?php echo site_url('ajax/getTestSectionByTestId') ?>",{testId : testId},function(data){
						$("#section").html(data);
					});
				});

				$("#section").change(function(){
					var section = $("#section").val();
					//alert(testId);
					$.post("<?php echo site_url('ajax/getLanguage') ?>",{section : section},function(data){
						$("#language").html(data);
					});
				});

				$("#language").change(function(){
					var testId = $("#testId").val();
					var section = $("#section").val();
					var language = $("#language").val();
					//alert(testId);
					$.post("<?php echo site_url('ajax/getQuestions') ?>",{testId : testId, section : section, language : language},function(data){
						$("#enterQuestion").html(data);
					});
				});
	        });
        </script>