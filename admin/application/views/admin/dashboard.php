			                <div id="main-wrapper" class="container">
			                    <div class="row">
			                        <div class="col-lg-3 col-md-6">
			                            <div class="panel info-box panel-white">
			                                <div class="panel-body">
			                                    <div class="info-box-stats">
			                                        <p class="counter">
			                                        	<?php 
			                                        		echo $this->db->count_all('student_info');
			                                        	?>
			                                        </p>
			                                        <span class="info-box-title">Total Number of student.</span>
			                                    </div>
			                                    <div class="info-box-icon">
			                                        <i class="icon-users"></i>
			                                    </div>
			                                    <div class="info-box-progress">
			                                        <div class="progress progress-xs progress-squared bs-n">
			                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
			                                            </div>
			                                        </div>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
			                        <div class="col-lg-3 col-md-6">
			                            <div class="panel info-box panel-white">
			                                <div class="panel-body">
			                                    <div class="info-box-stats">
			                                        <p>
			                                        	<i class="fa fa-inr"></i>
			                                        	<span class="counter">
			                                        	<?php $dt = date("y-m-d"); echo $this->db->query("SELECT SUM(paid) as total FROM fee WHERE paid_date = '$dt'")->row()->total; ?>
			                                        	</span>
			                                        </p>
			                                        <span class="info-box-title">Todays Total Collection</span>
			                                    </div>
			                                    <div class="info-box-icon">
			                                        <i class="icon-eye"></i>
			                                    </div>
			                                    <div class="info-box-progress">
			                                        <div class="progress progress-xs progress-squared bs-n">
			                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
			                                            </div>
			                                        </div>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
			                        <div class="col-lg-3 col-md-6">
			                            <div class="panel info-box panel-white">
			                                <div class="panel-body">
			                                    <div class="info-box-stats">
			                                        <p>
			                                        	<i class="fa fa-inr"></i>
			                                        	<span class="counter">
			                                        		<?php echo $this->db->query("select closing_balance from opening_closing_balance where opening_date='".date('Y-m-d')."'")->row()->closing_balance; ?>
			                                        	</span>
			                                        </p>
			                                        <span class="info-box-title">Todays Total Expences</span>
			                                    </div>
			                                    <div class="info-box-icon">
			                                        <i class="icon-basket"></i>
			                                    </div>
			                                    <div class="info-box-progress">
			                                        <div class="progress progress-xs progress-squared bs-n">
			                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
			                                            </div>
			                                        </div>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
			                        <div class="col-lg-3 col-md-6">
			                            <div class="panel info-box panel-white">
			                                <div class="panel-body">
			                                    <div class="info-box-stats">
			                                        <p>
			                                        	<i class="fa fa-inr"></i>
			                                        	<span class="counter">
			                                        	<?php echo $this->db->query("select closing_balance from opening_closing_balance where opening_date='".date('Y-m-d')."'")->row()->closing_balance; ?>
			                                        	</span>
			                                        </p>
			                                        <span class="info-box-title">Account Balance</span>
			                                    </div>
			                                    <div class="info-box-icon">
			                                        <i class="icon-envelope"></i>
			                                    </div>
			                                    <div class="info-box-progress">
			                                        <div class="progress progress-xs progress-squared bs-n">
			                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
			                                            </div>
			                                        </div>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
			                    </div><!-- Row -->
			                    <div class="row">
			                        <div class="col-lg-9 col-md-12">
			                            <div class="panel panel-white">
			                                <div class="row">
			                                    <div class="col-sm-8">
			                                        <div class="visitors-chart">
			                                            <div class="panel-heading">
			                                                <h4 class="panel-title">Visitors</h4>
			                                            </div>
			                                            <div class="panel-body">
			                                                <div id="flotchart1"></div>
			                                            </div>
			                                        </div>
			                                    </div>
			                                    <div class="col-sm-4">
			                                        <div class="stats-info">
			                                            <div class="panel-heading">
			                                                <h4 class="panel-title">Browser Stats</h4>
			                                            </div>
			                                            <div class="panel-body">
			                                                <ul class="list-unstyled">
			                                                    <li>Google Chrome<div class="text-success pull-right">32%<i class="fa fa-level-up"></i></div></li>
			                                                    <li>Firefox<div class="text-success pull-right">25%<i class="fa fa-level-up"></i></div></li>
			                                                    <li>Internet Explorer<div class="text-success pull-right">16%<i class="fa fa-level-up"></i></div></li>
			                                                    <li>Safari<div class="text-danger pull-right">13%<i class="fa fa-level-down"></i></div></li>
			                                                    <li>Opera<div class="text-danger pull-right">7%<i class="fa fa-level-down"></i></div></li>
			                                                    <li>Mobile &amp; tablet<div class="text-success pull-right">4%<i class="fa fa-level-up"></i></div></li>
			                                                    <li>Others<div class="text-success pull-right">3%<i class="fa fa-level-up"></i></div></li>
			                                                </ul>
			                                            </div>
			                                        </div>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
			                        <div class="col-lg-3 col-md-6">
			                            <div class="panel panel-white" style="height: 100%;">
			                                <div class="panel-heading">
			                                    <h4 class="panel-title">Server Load</h4>
			                                    <div class="panel-control">
			                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Expand/Collapse" class="panel-collapse"><i class="icon-arrow-down"></i></a>
			                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Reload" class="panel-reload"><i class="icon-reload"></i></a>
			                                    </div>
			                                </div>
			                                <div class="panel-body">
			                                    <div class="server-load">
			                                        <div class="server-stat">
			                                            <span>Total Usage</span>
			                                            <p>67GB</p>
			                                        </div>
			                                        <div class="server-stat">
			                                            <span>Total Space</span>
			                                            <p>320GB</p>
			                                        </div>
			                                        <div class="server-stat">
			                                            <span>CPU</span>
			                                            <p>57%</p>
			                                        </div>
			                                    </div>
			                                    <div id="flotchart2"></div>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
			                </div><!-- Main Wrapper -->