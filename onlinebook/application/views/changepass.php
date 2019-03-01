
<div class="row "><br><br>
	<div class="col-sm-4"></div>

<div class="col-sm-4 jumbotron">
<form class="form-group" method="post" action="<?php echo base_url();?>login/changepassword">
	<input type="hidden" name="id" value="<?php echo $body->id;?>"><br>
	<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-2">
	<label><b>New Password:</b></label></div><div class="col-sm-8"><input type="text" name="newpass" placeholder="Enter New password" class="form-control"></div><div class="col-sm-1"></div>
     </div> <br>
     <div class="row">
     	<div class="col-sm-1"></div>
    <div class="col-sm-2">
   <label> <b>Confirm Password:</b></label></div><div class="col-sm-8"><input type="text" name="confirmpass" placeholder="Confirm Your password" class="form-control"></div>
   <div class="col-sm-1"></div>
   </div><br><center>
	<input type="submit" name="submit" class="btn btn-info" value="Change password"></center>

</form>
</div></div>