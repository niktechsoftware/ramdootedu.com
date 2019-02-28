                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <?php $total=0; $dabit=0; $credit =0;?>
                                                <th>#</th>
                                                <th>Paid By</th>
                                                <th>Recieved By</th>
                                                <th>Reason</th>
                                                <th>Dabit</th>
                                                 <th>Cradit</th>
                                                <th>Paid Amount</th>
                                                <th>Closing Balance</th>
                                                <th>Pay Date</th>
                                                <th>Pay Mode</th>
                                                <th>Invoice No</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $i = 1; foreach($table->result() as $row):?>
                                            <tr>
                                                <td><?php  echo $i; ?></td>
                                                <td><?php echo $row->paid_by; ?></td>
                                                <td><?php echo $row->paid_to; ?></td>
                                                <td><?php echo $row->reason; ?></td>
                                                <td><?php if($row->dabit_cradit=="Debit"){$dabit =$dabit + $row->total_amount;echo $row->dabit_cradit; }?></td>
                                                 <td><?php if($row->dabit_cradit=="cradit"){$credit = $credit +$row->total_amount ;echo $row->dabit_cradit; } ?></td>
                                                <td><?php $total = $total+ $row->total_amount; echo $row->total_amount; ?></td>
                                                <td><?php echo $row->closing_balance; ?></td>
                                                <td><?php echo date("d-M-Y", strtotime($row->pay_date)); ?></td>
                                                <td><?php echo $row->pay_mode; ?></td>
                                                <td><?php echo $row->invoice_no; ?></td>
                                            </tr>
                                            <?php $i++; endforeach;?>
                                              <tr>
                                                <td>></td>
                                                <td>Total</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><?php echo $total; ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                       </table>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->