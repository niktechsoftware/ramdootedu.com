
                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                    <form class="form-horizontal" action="<?php echo base_url()?>welcome/saveRegister" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Candidate ID</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" name="student_id" placeholder="Candidate ID" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Candidate Name</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" name="name" placeholder="Candidate Name" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Father's Name</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="fname" class="form-control" placeholder="Father's Name" required="required">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Full Address</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="address" class="form-control" placeholder="Full Address" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Your City</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="city" class="form-control" placeholder="Your City" required="required">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Your State</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="state" class="form-control" placeholder="Your State" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Area Pin Code</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="pin" class="form-control" placeholder="Area Pin Code" required="required">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Contact Number</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="mobile" class="form-control" placeholder="Contact Number" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Date of birth</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="dob" class="form-control date-picker" placeholder="Date of birth" required="required">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Heighest Qualification</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="heighQ" class="form-control" placeholder="Heighest Qualification" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Course Applied for</label>
                                            <div class="col-sm-4">
                                                <select name="courseApplied" class="form-control" required="required">
													<option value="">-Select Course-</option>
													<?php 
														$courses = $this->db->get("courses")->result();
														foreach($courses as $row):
													?>
														<option value="<?php echo $row->course_name;?>"><?php echo $row->course_name;?></option>
													<?php endforeach;?>
												</select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Select batch timing</label>
                                            <div class="col-sm-4">
                                                <select  class="form-control" name="timing" required="required">
			                                    	<option value="">-Select batch time-</option>
			                                    	<?php 
														$courses = $this->db->get("batch_time")->result();
														foreach($courses as $row):
													?>
														<option value="<?php echo $row->batch_time;?>"><?php echo $row->batch_time;?></option>
													<?php endforeach;?>
			                                    </select>
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Select Gender</label>
                                            <div class="col-sm-4">
                                                <select  class="form-control" name="gender" required="required">
			                                    	<option value="">-Select Gender-</option>
			                                    	<option value="Male">Male</option>
			                                    	<option value="Female">Female</option>
			                                    </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Browse Candidate's image (120 KB Max.)</label>
                                            <div class="col-sm-4">
                                                <input type="file" name="image" class="form-control" placeholder="Browse Candidate's image" >
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Browse Candidate's signature (100 KB Max.)</label>
                                            <div class="col-sm-4">
                                                <input type="file" name="signature" class="form-control" placeholder="Browse Candidate's signature" >
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Email Address</label>
                                            <div class="col-sm-4">
                                                <input type="email" name="email" class="form-control" placeholder="Email Address" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Choose A password</label>
                                            <div class="col-sm-4">
                                                <input type="password" name="password" class="form-control" placeholder="Choose A password" required="required">
                                            </div>
                                        </div>
                                        
                                        <hr/>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Total Fee</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="total_fee" class="form-control" placeholder="Total Course Fee" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Fee Method</label>
                                            <div class="col-sm-4">
                                                 <select  class="form-control" name="fee_method" required="required">
			                                    	<option value="">-Select Method-</option>
			                                    	<option value="One Time">One Time</option>
			                                    	<option value="Installment">Installment</option>
			                                    	<option value="Monthly">Monthly</option>
			                                    </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                            	<input type="hidden" name="submitType" value="admin">
                                                <button type="submit" class="btn btn-success">Save Student Information</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->