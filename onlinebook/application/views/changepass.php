
<div class="row">
	<div class="col-sm-4"></div>
<div class="col-sm-4">
<form class="form-group" method="post" action="<?php echo base_url();?>login/changepassword">
	<input type="hidden" name="id" value="<?php echo $body->id;?>"><br>
	New Password:<input type="text" name="newpass" placeholder="Enter New password" class="form-control">
    Confirm Password:<input type="text" name="confirmpass" placeholder="Confirm Your password" class="form-control"><br>
	<input type="submit" name="submit" value="Change password">

</form>
</div></div>