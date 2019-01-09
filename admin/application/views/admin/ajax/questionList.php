
                            <div class="panel panel-white">
                            	<div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>Test ID</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $i = 1;?>
                                        	<?php 
                                        		$this->db->where("testId",$testId);
                                        		$this->db->where("section",$sectionName);
                                        		$this->db->where("language",$language);
                                        		$res = $this->db->get("question")->result();
                                        	?>
                                        	<?php foreach($res as $row):?>
                                            <tr>
                                                <td>
                                                	<input type="hidden" id="tID" value="<?php echo $testId; ?>">
                                                	<input type="hidden" id="sec" value="<?php echo $sectionName; ?>">
                                                	<input type="hidden" id="lang" value="<?php echo $language; ?>">
                                                	<div class="search-item">
                                                		<p><strong>Question <?php echo $row->quesNumber; ?> : </strong><?php echo $row->enterQuestion; ?></p>
		                                                <h3 class="no-m">
		                                                	A : 
		                                                	<a href="javascript:void(0);">
		                                                		<?php echo $row->ans1; ?>
		                                                	</a>
		                                                </h3>
		                                                <h3 class="no-m">
		                                                	B : 
		                                                	<a href="javascript:void(0);">
		                                                		<?php echo $row->ans2; ?>
		                                                	</a>
		                                                </h3>
		                                                <h3 class="no-m">
		                                                	C : 
		                                                	<a href="javascript:void(0);">
		                                                		<?php echo $row->ans3; ?>
		                                                	</a>
		                                                </h3>
		                                                <h3 class="no-m">
		                                                	D : 
		                                                	<a href="javascript:void(0);">
		                                                		<?php echo $row->ans4; ?>
		                                                	</a>
		                                                </h3>
		                                                <h3 class="no-m">
		                                                	E : 
		                                                	<a href="javascript:void(0);">
		                                                		<?php echo $row->ans5; ?>
		                                                	</a>
		                                                </h3>
		                                                
		                                                <a href="javascript:void(0);" class="search-link">
		                                                	<strong>Answer : </strong>
		                                                	<?php echo $row->c_ans; ?>
		                                               	</a>
		                                                <p><strong>Discription : </strong><?php echo $row->discription; ?></p>
		                                                <button type="submit" value="<?php echo $row->id; ?>" class="btn btn-success" id="del<?php echo $i; ?>">
		                                                	Click for delete this question
		                                                </button>
		                                            </div>
                                                </td>
                                            </tr>
                                            <?php $i++;?>
                                            <?php endforeach;?>
                                        </tbody>
                                       </table>  
                                    </div>
                                </div>
                            </div>
                            
                            
                            <script>
                            <?php $j = 1;?>
                            <?php foreach($res as $row):?>
                            $("#del<?php echo $j; ?>").click(function(){
            					var id = $("#del<?php echo $j; ?>").val();
            					var testId = $("#tID").val();
            					var section = $("#sec").val();
            					var language = $("#lang").val();
            					//alert(testId+" - "+id+" - "+section+" - "+language);
            					$.post("<?php echo site_url('ajax/deleteQuestions') ?>",{testId : testId, section : section, language : language, id : id},function(data){
            						$("#qList").html(data);
            					});
            				});
                            <?php $j++;?>
                            <?php endforeach;?>
                            </script>