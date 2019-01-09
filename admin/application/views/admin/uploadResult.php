                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-heading clearfix">
                                    <h4 class="panel-title">Create Test</h4>
                                </div>
                            	<div class="panel-body">
								      <body>
										<div id="container">
											<div id="form">
											<?php
											//Upload File
											if (isset($_POST['submit'])) {
												if(is_uploaded_file($_FILES['filename']['tmp_name'])) {
													echo "<h1>" . "File ". $_FILES['filename']['name'] ." uploaded successfully." . "</h1>";
													echo "<h2>Displaying contents:</h2>";
													readfile($_FILES['filename']['tmp_name']);
												}
													//Import uploaded file to Database
													$handle = fopen($_FILES['filename']['tmp_name'], "r");
													while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
														$dt = array(
																"id" => "",
																"test_id" => $data[0],
																"set" => $data[1],
																"name" => $data[2],
																"right" => $data[3],
																"wrong" => $data[4],
																"left" => $data[5],
																"score" => $data[6],
																"sec1" => $data[7],
																"sec2" => $data[8],
																"sec3" => $data[9],
																"sec4" => $data[10]
														);
														$this->db->insert("result_test",$dt);
														}
														fclose($handle);
														print "Import done";
														//view upload form
														
												}else {
													print "Upload new csv by browsing to file and clicking on Upload<br />\n";
													print "<form enctype='multipart/form-data' method='post'>";
													print "File name to import:<br />\n";
													print "<input size='50' type='file' name='filename'><br />\n";
													print "<input type='submit' name='submit' value='Upload'></form>";
													}
													?>
											</div>
										</div>
									</body>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->