<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Start Date</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="sdt" id="sdt" class="form-control date-picker" placeholder="Start Date" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">End Date</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="edt" id="edt" class="form-control date-picker" placeholder="End Date" required="required">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Select Fee </label>
                                            <div class="col-sm-4">
                                                <select  class="form-control" name="detailType" id="detailType" required="required">
			                                    	<option value="select">-Select Fee Type-</option>
			                                    	<option value="regifee">Registration</option>
			                                    	<option value="paid">Course Fee</option>
			                                    	<option value="onlinest">OnLine ST Fee </option>
			                                    	<option value="offlinest">OffLine ST Fee</option>
			                                    	<option value="otherfee">Other Fee</option>
			                                    </select>
                                            </div>
                                           
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" id="btn1" class="btn btn-success">Get Detail</button>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                	<div id= "section1"></div>
                                </div>
                            </div>
                         </div>
                     </div>
                </div><!-- Main Wrapper -->