                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-heading clearfix">
                                    <h4 class="panel-title">Enter Book Detail</h4>
                                </div>
                            	<div class="panel-body">
                                	<form class="form-horizontal" action="<?php echo base_url()?>apanelForms/uploadbooks" method="post" enctype="multipart/form-data">
                                        <?php $raj=$this->uri->segment(3);
                                        if($raj==23)
                                        {
                                        echo "Successfully Uploaded Image";
                                        	
                                        }?>
                                        
                                        
                                        <div class="form-group">
                                            <label for="input-Default" class="col-sm-2 control-label">Book Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="input-Default" name="title">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Selected Book Image </label>
                                            <div class="col-sm-10">
                                            	<input type="file"  name="uploadbooks" />
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-2 control-label">Subject </label>
                                            <div class="col-sm-10">
                                            	<input type="text"  name="subject" />
                                            </div>
                                        </div>
                                         <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-success">Upload Book</button>
                                         </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0; border:1; ">
                                        <thead>
                                            <tr>
                                                <th>Sr No.</th>
                                                <th>Books Name</th>
                                                <th>Books Image</th>
                                                <th>Subject</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $i = 1;?>
                                        	<?php $res = $this->db->get("upload_books")->result();?>
                                        	<?php foreach($res as $row):?>
                                            <tr>
                                                <td>
                                                	<?php echo $i; ?>
                                                </td>
                                                <td><?php echo $row->bookName; ?></td>
                                                <td><?php echo $row->subject; ?></td>
                                                <td><img src="<?php echo base_url();?>assets/images/<?php echo $row->photo; ?>" alt="Books Icon" width="100" /></td>
                                                <td>
                                                	<a href="<?php echo base_url();?>apanelForms/deleteBooks/<?php echo $row->SNo;?>">Delete</a>
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
                    </div><!-- Row -->
                    </div>