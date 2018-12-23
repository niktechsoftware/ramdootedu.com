					<?php $classid = $this->db->get("bookclass")->result();
					?>
					<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                  
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                        <thead>
                                        	<tr>
                                            	<th>#</th>
											
												<th>Name</th>
												<th>Company Name</th>
												<th>Class</th>
											
												<th>Pr.Price/Unit</th>
												
												<th>  
													<table border="1" width="100%" >
													<tr > 
															<th colspan="3">Item Quantity </th>
															
														</tr>
														<tr> 
															<th> Instock</th>
															<th>OutStock</th>
															<th>Total</th>
														</tr>
													</table>
												</th>
												<th>Sel. Price/Unit</th>
												<th>xxxx</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        	$i = 1; foreach($classid as $cls):
                                        	   $val =  $this->db->query('SELECT * FROM `enter_stock1` WHERE `hsn_sac`='.$cls->id.' GROUP BY `name` ORDER BY `sno` DESC;')->result();
                                        	   foreach($val as $record):
                                        ?>
                                            <tr >
                                                <td><?php echo $i;?></td>
											
												<td><?php echo $record->name;?></a></td>
												<td><?php echo $record->company_name;?></td>
											<td><?php echo $cls->class;?></td>
												<td><?php echo $record->prize_perunit;?></td>
												
												<td>
												<table border="1" width="100%">
														<tr> 
														<?php 	$queryString = "SELECT SUM(`extraQuantity`) AS `extraQuantity`  FROM `enter_stock1` WHERE `hsn_sac`='".$cls->id."' AND `name`='".$record->name."' AND  `company_name`='".$record->company_name."';";
		    $oldQuantity = $this->db->query($queryString)->result();
		
		    $queryString = "SELECT SUM(`product_quantity`) AS `total` FROM `product_sale` WHERE `hsn_sac`='".$cls->id."' AND `item_name`='".$record->name."' AND `company_name`='".$record->company_name."';";
		    $saleQuantity = $this->db->query($queryString)->result();
		
		    $actualq = $oldQuantity[0]->extraQuantity - $saleQuantity[0]->total; ?>
															<td><?php echo $actualq;?></td>
															<td><?php echo $saleQuantity[0]->total;?></td>
															<td><?php echo $oldQuantity[0]->extraQuantity;?></td>
														</tr>
													</table>
												
												<?php //echo $row->item_quantity;?>
												</td>
												<td><?php echo $record->pRate;?></td>
												<td></td>
                                       		</tr>
                                       		
                                        <?php $i++;endforeach ; endforeach;?>
                                        </tbody>
                                       </table>  
                                    </div>
                                </div>
                            </div>
						</div>
					</div>