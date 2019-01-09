<form method="post" action="<?php echo base_url();?>apanel/save_fee">
	<div id="main-wrapper" class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-white">
					<div class="panel-body">
						<div class="row">
							<div class="col-md-2 panel-yellow">
								<label>Student ID</label>
							</div>
							<div class="col-md-2">
								<input type="hidden" name="student_id" value="<?php echo $row->student_id;?>">
								<label><?php echo $row->student_id;?></label>
							</div>
							
							<div class="col-md-2 panel-yellow">
								<label>Student Name</label>
							</div>
							<div class="col-md-2">
								<label><?php echo $row->name;?></label>
							</div>
							
							<div class="col-md-2 panel-yellow">
								<label>Father's Name</label>
							</div>
							<div class="col-md-2">
								<label><?php echo $row->fName;?></label>
							</div>
						</div>
						<hr/>
						<div class="row">
							<div class="col-md-2 panel-yellow">
								<label>Course Applied</label>
							</div>
							<div class="col-md-2">
								<label><?php echo $row->courseApplied;?></label>
							</div>
							<div class="col-md-1 panel-yellow">
								<label>Address</label>
							</div>
							<div class="col-md-3">
								<label><?php echo $row->address." ".$row->city." ".$row->state."-".$row->pin;?></label>
							</div>
							<div class="col-md-2 panel-yellow">
								<label>Mobile Number</label>
							</div>
							<div class="col-md-2">
								<label><?php echo $row->mobile;?></label>
							</div>
							
						</div>
						<hr/>
						<div class="row">
							<div class="col-md-2 panel-yellow">
								<label>Join Date</label>
							</div>
							<div class="col-md-2">
								<label><?php echo date("d-M-Y",strtotime($row->joinDate));?></label>
							</div>
							<div class="col-md-2 panel-yellow">
								<label>Total Course Fee</label>
							</div>
							<div class="col-md-2">
								<label><?php echo $row->total_fee;?></label>
							</div>
							<div class="col-md-2 panel-yellow">
								<label>Fee Deposit Method</label>
							</div>
							<div class="col-md-2">
								<label><?php echo $row->fee_method;?></label>
							</div>
						</div>
						<hr/>
						<div class="row">
							<div class="col-md-2">
								<label>Balance Fee</label>
							</div>
							<div class="col-md-2">
								<input type="hidden" value="<?php echo $balance;?>" id="hbal">
								<input type="text" class="form-control" name="balance" value="<?php echo $balance;?>" id="bal" required="required"/>
							</div>
							
							
							<div class="col-md-1">
								<label>Fee Pay</label>
							</div>
							<div class="col-md-1">
								<input type="text" class="form-control" name="feePay" id="feePay">
							</div>
							<div class="col-md-2">
								<label id='errmsg' style="color : red;"></label>
							</div>
							<div class="col-md-2">
								<label>Recieved By</label>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control" name="recieved">
							</div>
						</div>
						<hr/>
						<div class="row">
							<div class="col-md-2">
								<label>Registration fee </label>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control" name="regfee" >
							</div>
							<div class="col-md-1">
								<label>Online ST Fee</label>
							</div>
							<div class="col-md-1">
								<input type="text" class="form-control" name="onlinest">
							</div>
							<div class="col-md-1">
								<label>Offline ST Fee</label>
							</div>
							<div class="col-md-1">
								<input type="text" class="form-control" name="offlinest">
							</div>
							<div class="col-md-1">
								<label>Other fee</label>
							</div>
							<div class="col-md-1">
								<input type="text" class="form-control" name="otherfee">
							</div>
						</div>
						<hr/>
						<div class="row">
							<div class="col-md-2">
								<label>Date Of Issue</label>
							</div>
							<div class="col-md-2">
								<input type="date" class="form-control" name="issueDate" value="<?php echo date("Y-m-d");?>">
							</div>
							<div class="col-md-2">
								<label>Valid Up to Date</label>
							</div>
							<div class="col-md-2">
								<input type="date" class="form-control" name="tillDate">
							</div>
							<div class="col-md-2">
								<label>Paid Month<br/> (Name of months)</label>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control" name="monthName">
							</div>
						</div>
						<hr/>
						<div class="row">
							<div class="col-md-2">
								<button class="btn btn-success" type="submit">Save & Print</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- Row -->
	</div><!-- Main Wrapper -->
</form>