                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                <?php if($this->uri->segment(4) == "fskhknkfskljkljksdf"):?>
                              <?php $studentId = $this->uri->segment(3); //echo $studentId;?>	
							<?php
									$this->db->where("id",$studentId);
									$deta = $this->db->get("student_info")->row();	
								?>
                                    <form class="form-horizontal" action="<?php echo base_url()?>apanelForms/editProfile" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Candidate ID</label>
                                            <div class="col-sm-4">
                                            	<input type="hidden" name="row_id" value="<?php echo $deta->id;?>" />
                                            	<input type="hidden" name="student_id" value="<?php echo $this->uri->segment(3);?>" />
                                                <input type="text" class="form-control" id="input-Default" name="student_id" value="<?php echo $deta->student_id;?>">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Upload Image</label>
                                            <div class="col-sm-4">
                                            	<input type="hidden" name="old_stuImg" value="<?php echo $deta->photo ?>" class="form-control">
                                                <input type="file" name="stuImage" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Candidate Name</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" name="name" value="<?php echo $deta->name;?>">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Father's Name</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="fname" class="form-control" value="<?php echo $deta->fName;?>">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Full Address</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="address" class="form-control" value="<?php echo $deta->address;?>">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Your City</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="city" class="form-control" value="<?php echo $deta->city;?>">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Your State</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="state" class="form-control" value="<?php echo $deta->state;?>">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Area Pin Code</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="pin" class="form-control" value="<?php echo $deta->pin;?>">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Contact Number</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="mobile" class="form-control" value="<?php echo $deta->mobile;?>">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Date of birth</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="dob" class="form-control date-picker" value="<?php echo $deta->dob;?>">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Heighest Qualification</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="heighQ" class="form-control" value="<?php echo $deta->heighQ;?>">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Course Applied for</label>
                                            <div class="col-sm-4">
                                             <input type="text" name="courseApplied" class="form-control" value="<?php echo $deta->courseApplied;?>">              
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Select batch timing</label>
                                            <div class="col-sm-4">
                                             <input type="text" name="timing" class="form-control" value="<?php echo $deta->timing;?>">              
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Select Gender</label>
                                            <div class="col-sm-4">
                                             <input type="text" name="gender" class="form-control" value="<?php echo $deta->gender;?>">              
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Email Address</label>
                                            <div class="col-sm-4">
                                                <input type="email" name="email" class="form-control" value="<?php echo $deta->email;?>">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Choose A password</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="password" class="form-control" value="<?php echo $deta->password;?>">
                                            </div>
                                        </div>
                                        
                                        <hr/>                                        
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                            	<input type="hidden" name="submitType" value="admin">
                                                <button type="submit" class="btn btn-success">Update Student Information</button>
                                            </div>
                                        </div>
                                    </form>
                                      <?php endif;?> 
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->