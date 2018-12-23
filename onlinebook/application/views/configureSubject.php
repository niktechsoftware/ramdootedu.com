                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-heading clearfix">
                                    <h4 class="panel-title">Manage Course</h4>
                                </div>
                            	<div class="panel-body">
                            		<div class="row">
	                            		<div class="col-md-12">
			                            	<?php if($this->uri->segment(3) == "edit"):?>
			                            	<?php 
			                            	$this->db->where("id",$this->uri->segment(4));?>
			                            	<?php $deta = $this->db->get("booksubject")->row();
			                            	$classname = $this->db->get("bookclass")->result();
			                            	?>
			                                   <form class="form-horizontal" action="<?php echo base_url()?>patient/editSubject" method="post">
			                                        <div class="form-group">
			                                            <label class="col-sm-2 control-label"><strong>Class Name</strong></label>
			                                            <div class="col-sm-4">
			                                            	<input type="hidden" value="<?php echo $this->uri->segment(4);?>" name="id">
			                                               
			                                             <select class="form-control m-b-sm" id="gender" name="className" required="required">
															<option value="">-Select Class-</option>
															<?php foreach($classname as $cn):?>
															<option value="<?php echo $cn->id;?>" <?php if($cn->id== $deta->bookclass_id){ echo 'selected="selected"';}?>><?php echo $cn->class; ?></option>
															<?php endforeach;?>
																
															</select>
			                                             
			                                             
			                                             </div>
			                                             <label for="input-Default" class="col-sm-2 control-label"><strong>Subject</strong></label>
			                                            <div class="col-sm-4">
			                                                <input type="text" class="form-control"  value="<?php echo $deta->booksubject;?>" name="subject">
			                                            </div>
			                                           
			                                          
			                                        </div>
			                                        
			                                        
			                                       
			                                        
			                                         <div class="col-sm-offset-2 col-sm-10">
			                                            <button type="submit" class="btn btn-success">Edit Subject Details</button>
			                                         </div>
			                                    </form>
			                                <?php else:?>
			                                <?php 	$classname = $this->db->get("bookclass")->result();?>
			                                	<form class="form-horizontal" action="<?php echo base_url()?>patient/saveSubject" method="post">
			                                        <div class="form-group">
			                                            <label for="input-Default" class="col-sm-2 control-label"><strong>class Name</strong></label>
			                                            <div class="col-sm-4"> 
			                                            <select class="form-control m-b-sm" id="gender" name="className" required="required">
															<option value="">-Select Class-</option>
															<?php foreach($classname as $cn):?>
															<option value="<?php echo $cn->id;?>"><?php echo $cn->class; ?></option>
															<?php endforeach;?>
															</select>
			                                      </div>
			                                        
			                                            <label for="input-Default" class="col-sm-2 control-label"><strong>Subject Name</strong></label>
			                                            <div class="col-sm-4">
			                                                <input type="text" class="form-control" id="input-Default123" name="subject">
			                                            </div>
			                                        </div>
			                                       
			                                       
			                                         <div class="col-sm-offset-2 col-sm-10">
			                                            <button type="submit" class="btn btn-success">Save Subject</button>
			                                         </div>
			                                    </form>
			                                <?php endif;?>
										</div>
									</div>
									<div class="row">
                            			<div class="col-md-12">
											<table class="table" style="width: 100%; cellspacing: 0;">
	                                        <thead>
	                                            <tr>
	                                                <th>#</th>
	                                                <th>Course Name</th>
	                                                  <th>Detail</th>   
	                                                <th>Action</th>
	                                            </tr>
	                                        </thead>
	                                        <tbody>
	                                        	<?php $i = 1;?>
	                                        	<?php 
	                                        	
	                                        	$res = $this->db->get("booksubject")->result();?>
	                                        	<?php foreach($res as $row):?>
	                                            <tr>
	                                                <td>
	                                                	<?php echo $i; ?>
	                                                </td>
	                                               <?php $this->db->where("id",$row->bookclass_id);
	                                                			$rty = $this->db->get("bookclass")->row();   ?>
	                                                <td><?php  echo $rty->class; ?></td>
	                                                 <td><?php echo $row->booksubject; ?></td>
	                                                  
	                                                <td>
	                                                	<a href="<?php echo base_url();?>patient/configureSubject/edit/<?php echo $row->id;?>">Edit</a> | 
	                                                	<a href="<?php echo base_url();?>patient/deleteSubject/<?php echo $row->id;?>">Delete</a>
	                                                </td>
	                                            </tr>
	                                            <?php $i++;?>
	                                            <?php endforeach;?>
	                                        </tbody>
	                                       </table>  
										</div>
                            		</div>
                                </div>
                                
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->