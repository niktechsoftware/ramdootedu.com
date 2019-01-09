<div class="panel-heading clearfix">
	<h3 class="panel-title"><?php echo $testId." -> ".$name." -> ".$sectionName." -> ".$question." -> ".$language ;?></h3>
</div>
<div class="panel-body">
		
		<?php for($i = 1; $i <= $question; $i++):?>
			<?php $this->db->where("testId",$testId); ?>
			<?php $this->db->where("section",$sectionName); ?>
			<?php $this->db->where("quesNumber",$i); ?>
			<?php $this->db->where("language",$language); ?>
			<?php $this->db->from("question"); ?>
			<?php $count = $this->db->count_all_results(); ?>
			<?php if($count > 0){ $cls = "btn btn-success btn-rounded"; }else{ $cls = "btn btn-default btn-rounded";}?>
			<button value="<?php echo $testId.",".$sectionName.",".$i.",".$language?>" type="button" id="<?php echo $i;?>" class="<?php echo $cls; ?>"  data-toggle="modal" data-target=".bs-example-modal-lg" style="margin: 5px;">
				<?php echo $i;?>
			</button>
		<?php endfor;?>
	<hr/>
	<div class="row">
		<div class="col-md-4">
			<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" style="width:90%;">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myLargeModalLabel"></h4>
						</div>
						<div class="modal-body">
							<div class="row">
		                        <div class="col-md-12">
		                            <div class="panel panel-white">
		                                <div class="panel-body">
		                                    <div id="rootwizard">
		                                        <ul class="nav nav-tabs" role="tablist">
		                                            <li role="presentation" class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-user m-r-xs"></i>Enter Question</a></li>
		                                            <li role="presentation"><a href="#tab2" data-toggle="tab"><i class="fa fa-truck m-r-xs"></i>Enter Options</a></li>
		                                            <li role="presentation"><a href="#tab3" data-toggle="tab"><i class="fa fa-truck m-r-xs"></i>Correct Answer</a></li>
		                                            <li role="presentation"><a href="#tab4" data-toggle="tab"><i class="fa fa-check m-r-xs"></i>Discription / Finish</a></li>
		                                        </ul>
		                          
		                                    
		                                        <div class="progress progress-sm m-t-sm">
		                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
		                                            </div>
		                                        </div>
		                                        <form id="wizardForm">
		                                            <div class="tab-content">
		                                                <div class="tab-pane active fade in" id="tab1">
		                                                    <div class="row m-b-lg">
		                                                        <div class="col-md-12">
		                                                            <div class="row">
		                                                                <div class="form-group col-md-12">
		                                                                    <label for="exampleInputName">Enter Question</label>
		                                                                    <textarea class="question1" name="discription" id="qu"></textarea>
		                                                                    <input type="hidden" id="tId">
		                                                                    <input type="hidden" id="sec">
		                                                                    <input type="hidden" id="qno">
		                                                                    <input type="hidden" id="sub">
		                                                                </div>
		                                                            </div>
		                                                        </div>
		                                                    </div>
		                                                </div>
		                                                <div class="tab-pane fade" id="tab2">
		                                                    <div class="row">
		                                                        <div class="col-md-2">
	                                                                <label for="exampleInputProductName">Answer 1</label>
		                                                        </div>
		                                                        <div class="form-group col-md-10">
	                                                                <input type="text" class="ans1" name="ans1" id="ans1" placeholder="Answer 1">
	                                                            </div>
		                                                    </div>
		                                                    
		                                                    <div class="row">
		                                                        <div class="col-md-2">
	                                                                <label for="exampleInputProductName">Answer 2</label>
		                                                        </div>
		                                                        <div class="form-group col-md-10">
	                                                                <input type="text" class="ans2" name="ans2" id="ans2" placeholder="Answer 2">
	                                                            </div>
		                                                    </div>
		                                                    
		                                                    <div class="row">
		                                                        <div class="col-md-2">
	                                                                <label for="exampleInputProductName">Answer 3</label>
		                                                        </div>
		                                                        <div class="form-group col-md-10">
	                                                                <input type="text" class="ans3" name="ans3" id="ans3" placeholder="Answer 3">
	                                                            </div>
		                                                    </div>
		                                                    
		                                                    <div class="row">
		                                                        <div class="col-md-2">
	                                                                <label for="exampleInputProductName">Answer 4</label>
		                                                        </div>
		                                                        <div class="form-group col-md-10">
	                                                                <input type="text" class="ans4" name="ans4" id="ans4" placeholder="Answer 4">
	                                                            </div>
		                                                    </div>
		                                                    
		                                                    <div class="row">
		                                                        <div class="col-md-2">
	                                                                <label for="exampleInputProductName">Answer 5</label>
		                                                        </div>
		                                                        <div class="form-group col-md-10">
	                                                                <input type="text" class="ans5" name="ans5" id="ans5" placeholder="Answer 5">
	                                                            </div>
		                                                    </div>
		                                                </div>
		                                                <div class="tab-pane fade" id="tab3">
		                                                    <div class="row">
		                                                        <div class="col-md-2">
	                                                                <label for="exampleInputProductName">Correct Answer</label>
		                                                        </div>
		                                                        <div class="form-group col-md-10">
	                                                                <input type="text" class="c_ans" name="c_ans" id="c_ans" placeholder="Correct Answer">
	                                                            </div>
		                                                    </div>
		                                                </div>
		                                                <div class="tab-pane fade" id="tab4">
		                                                    <h2 class="no-s">Thank You !</h2>
		                                                    <div class="alert alert-info m-t-sm m-b-lg" role="alert">
		                                                        Congratulations ! You got the last step.
		                                                    </div>
		                                                    <div class="row">
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputName">Answer Description if you want to save with this question..</label>
                                                                    <textarea style="height: 200px;" class="summernote" id="discription" ></textarea>
                                                                </div>
                                                            </div>
		                                                </div>
		                                                <ul class="pager wizard">
		                                                    <li class="previous"><a href="#" class="btn btn-default">Previous</a></li>
		                                                    <li class="next"><a href="#" class="btn btn-default">Next</a></li>
		                                                </ul>
		                                            </div>
		                                        </form>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                    </div><!-- Row -->
						</div>
						
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-success" data-dismiss="modal" id="save">Save changes</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="msg"></div>
</div> 
		 <script src="<?php echo base_url()?>assets/admin/assets/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/summernote-master/summernote.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/js/pages/form-elements.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/js/pages/form-wizard.js"></script>
 <script>
	        jQuery(document).ready(function() {
	        	$(".question1").summernote({
		        	height: 200
	        	});
	        	$(".ans1").summernote({
		        	height: 50
	        	});
	        	$(".ans2").summernote({
		        	height: 50
	        	});
	        	$(".ans3").summernote({
		        	height: 50
	        	});
	        	$(".ans4").summernote({
		        	height: 50
	        	});
	        	$(".ans5").summernote({
		        	height: 50
	        	});
	        	$(".c_ans").summernote({
		        	height: 100
	        	});
	        	
	        	<?php for($i = 1; $i <= $question; $i++):?>
		        	$("#<?php echo $i;?>").click(function(){
						var str = $("#<?php echo $i;?>").val();
						$.post("<?php echo site_url("ajax/qDetail") ?>",{str : str}, function(data){
							var d = jQuery.parseJSON(data);
							$("#tId").val(d.testId);
							$("#sec").val(d.sectionName);
							$("#qno").val(d.quesNumber);
							$("#sub").val(d.language);
							var ms = d.testId+" -> "+d.sectionName+" -> "+d.quesNumber+" -> "+d.language+"."
							$("#myLargeModalLabel").html(ms);

							$("#qu").code(d.enterQuestion);
							$("#ans1").code(d.ans1);
							$("#ans2").code(d.ans2);
							$("#ans3").code(d.ans3);
							$("#ans4").code(d.ans4);
							$("#ans5").code(d.ans5);
							$("#c_ans").code(d.c_ans);
							$("#discription").code(d.discription);
						});
						//alert(testId);
						//alert(testId);
					});					
				<?php endfor;?>

				$("#save").click(function(){
					
					var testId = $("#tId").val();
					var sectionName = $("#sec").val();
					var quesNumber = $("#qno").val();
					var language = $("#sub").val();
					
					var enterQuestion = $("#qu").code();
					var ans1 = $("#ans1").code();
					var ans2 = $("#ans2").code();
					var ans3 = $("#ans3").code();
					var ans4 = $("#ans4").code();
					var ans5 = $("#ans5").code();
					var c_ans = $("#c_ans").code();
					var discription = $("#discription").code();
					//alert(testId+sectionName+quesNumber+language+enterQuestion+ans1+ans2+ans3+ans4+ans5+c_ans+discription);
					var form_data = {testId : testId, sectionName : sectionName, quesNumber : quesNumber, language : language, enterQuestion : enterQuestion, ans1 : ans1, ans2 : ans2, ans3 : ans3, ans4 : ans4, ans5 : ans5, c_ans : c_ans, discription : discription};
							$.ajax({
									url: "<?php echo site_url("ajax/saveQuestions") ?>",
									type: 'POST',
									data: form_data,
									success: function(msg){
										$("#msg").html(msg);
									}
								});
					//alert(testId+sectionName+quesNumber+language+enterQuestion+ans1+ans2+ans3+ans4+ans5+c_ans+discription);
					$("#tId").val("");
					$("#sec").val("");
					$("#qno").val("");
					$("#sub").val("");
					
					$("#qu").code("");
					$("#ans1").code("");
					$("#ans2").code("");
					$("#ans3").code("");
					$("#ans4").code("");
					$("#ans5").code("");
					$("#c_ans").code("");
					$("#discription").code("");
				});
				
	        });
</script>