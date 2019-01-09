                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-heading clearfix">
                                    <h4 class="panel-title">Enter Letest Thoughts</h4>
                                </div>
                            	<div class="panel-body">
                            	<?php if($this->uri->segment(3) == "edit"):?>
                            	<?php $this->db->where("id",$this->uri->segment(4));?>
                            	<?php $deta = $this->db->get("latest_news")->row();?>
                                   <form class="form-horizontal" action="<?php echo base_url()?>apanelForms/editNews" method="post">
                                        <div class="form-group">
                                            <label for="input-Default" class="col-sm-2 control-label">Subject</label>
                                            <div class="col-sm-10">
                                            	<input type="hidden" name="id" value="<?php echo $this->uri->segment(4);?>" />
                                                <input type="text" class="form-control" id="input-Default" name="title" value="<?php echo $deta->subject;?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Thought</label>
                                            <div class="col-sm-10">
                                            	<textarea rows="6" cols="60" class="form-control summernote" name="content" >
                                            		<?php echo $deta->message;?>
                                            	</textarea>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-2 control-label">Written by</label>
                                            <div class="col-sm-10">
                                            	<input rows="6" cols="60" class="form-control" name="url" 
                                            		value ="<?php echo $deta->url;?>"/>
                                            	
                                            </div>
                                        </div>
                                         <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-success">Edit Thought</button>
                                         </div>
                                    </form>
                                <?php else:?>
                                	<form class="form-horizontal" action="<?php echo base_url()?>apanelForms/letestNews" method="post">
                                        <div class="form-group">
                                            <label for="input-Default" class="col-sm-2 control-label">Subject</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="input-Default" name="title">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Thought</label>
                                            <div class="col-sm-10">
                                            	<textarea rows="6" cols="60" class="form-control summernote" name="content" ></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">URL</label>
                                            <div class="col-sm-10">
                                            	<input rows="6" cols="60" class="form-control" name="url" />
                                            </div>
                                        </div>
                                         <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-success">Save Thought</button>
                                         </div>
                                    </form>
                                <?php endif;?>    
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Subject</th>
                                                <th>Thought</th>
                                                <th>Written by</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $i = 1;?>
                                        	<?php $res = $this->db->get("latest_news")->result();?>
                                        	<?php foreach($res as $row):?>
                                            <tr>
                                                <td>
                                                	<?php echo $i; ?>
                                                </td>
                                                <td><?php echo $row->subject; ?></td>
                                                <td><?php echo $row->message; ?></td>
                                                <td><?php echo $row->url; ?></td>
                                                <td>
                                                	<a href="<?php echo base_url();?>apanel/latestNews/edit/<?php echo $row->id;?>">Edit</a> | 
                                                	<a href="<?php echo base_url();?>apanelForms/deleteNews/<?php echo $row->id;?>">Delete</a>
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
                </div><!-- Main Wrapper -->