 		<script src="<?php echo base_url()?>assets/plugins/jquery/jquery-2.1.3.min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/pace-master/pace.min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/switchery/switchery.min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/classie/classie.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/waves/waves.min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/summernote-master/summernote.min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
        <script src="<?php echo base_url()?>assets/js/pages/form-elements.js"></script>
        
<script>
	
			jQuery(document).ready(function() {
				

				  $('#types').change(function(){  
			    		if($('#types').val() == 'Regular'){
			    		    $('#regular').show();
			    			$('#retail').hide();   
			    		}
			    		else if($('#types').val() == 'Retail'){
			    			$('#regular').hide();
			    			$('#retail').show();
			    		}
			    		else { 
			    		    $('#regular').hide();
			    		    $('#retail').hide();     
			    		}  
			    	}); 

				$("#regular").keyup(function(){
					var customer_id = $("#regular").val();
					$.post("<?php echo site_url("patient/cDetailAjax") ?>", {customer_id : customer_id}, function(data){		
						$("#reply").html(data);
					});
				});

				$("#ref").change(function(){
					var classID = $("#ref").val();
					
					$.post("<?php echo site_url("home/getSubjects") ?>", {classID : classID}, function(data){
					    console.log(data)
					    
                        let response = JSON.parse(data);
                        let otherData = response.other;
                        response = response.tableData;
                        let responseLength = response.length
                        console.log(responseLength);
                        
                        for(let i = 1; i <= 30; i++) {
                            
    					        $(`#item_name-${i}`).val('');
        					    $(`#item_price${i}`).val('' );
                                $(`#company_name${i}`).val('');
                                $(`#product_code${i}`).val('');
                                $(`#hsn_sac${i}`).val('');
                                $(`#avlQ${i}`).val('');
                                $(`#vat${i}`).val('');
                                $(`#sat${i}`).val('');
                                $(`#item_discount${i}`).val('');
					    }
                        
					   // let response = `<option value="">-Select Subject-</option>` + JSON.parse(data).map(val => `<option value="${val.name}">${val.name}</option>`).join('\n');
					    //[{"sno":"117","name":"DRAWING","product_code":"0","company_name":"1","prize_perunit":"18.00","vat":"0.00","sat":"0.00","discount":"0.000","pRate":"14.00","batch_no":"","extraQuantity":"10","a_date":"2018-11-27","reff_bill_num":"656","clinic_id":"10001","hsn_sac":"1"},{"sno":"116","name":"MATH","product_code":"0","company_name":"2","prize_perunit":"16.00","vat":"0.00","sat":"0.00","discount":"0.000","pRate":"12.00","batch_no":"","extraQuantity":"9","a_date":"2018-11-27","reff_bill_num":"656","clinic_id":"10001","hsn_sac":"1"},{"sno":"110","name":"manjari","product_code":"5","company_name":"1","prize_perunit":"15.00","vat":"12.00","sat":"12.00","discount":"0.000","pRate":"12.00","batch_no":"","extraQuantity":"5","a_date":"2018-11-27","reff_bill_num":"23","clinic_id":"10001","hsn_sac":"1"},{"sno":"107","name":"ENGLISH 1","product_code":"1","company_name":"RAJ","prize_perunit":"20.00","vat":"0.00","sat":"0.00","discount":"0.000","pRate":"15.00","batch_no":"","extraQuantity":"15","a_date":"2018-11-17","reff_bill_num":"11","clinic_id":"10001","hsn_sac":"1"},{"sno":"106","name":"HINDI 1","product_code":"4","company_name":"RAj","prize_perunit":"15.00","vat":"0.00","sat":"0.00","discount":"0.000","pRate":"10.00","batch_no":"","extraQuantity":"5","a_date":"2018-11-17","reff_bill_num":"11","clinic_id":"10001","hsn_sac":"1"}]
					    let counter = 1;
					    for(let i = 0; i < responseLength; i++) {
					        console.log(i)
    					        $(`#item_name-${counter}`).val(response[i].name);
        					    $(`#item_price${counter}`).val(response[i].prize_perunit);
                                $(`#company_name${counter}`).val(response[i].company_name);
                                $(`#product_code${counter}`).val(response[i].product_code);
                                $(`#hsn_sac${counter}`).val(otherData[i].booksubject);
                                $(`#avlQ${counter}`).val(otherData[i].total);
                                $(`#vat${counter}`).val(response[i].vat);
                                $(`#sat${counter}`).val(response[i].sat);
                                $(`#item_discount${counter}`).val(response[i].discount);
                                counter++;
					    }
					    
					});
				});
				
				$(document).on('change', '.item_name', function(event) {
				    let currentID = event.target.id.split('-')[1];
				    let name = event.target.value;
				    let classID = $("#ref").val();
				    
				    $.ajax({
				        url: '<?php echo site_url("home/getStockDetail") ?>',
				        method: 'POST',
				        data: {classID: classID, name: name},
				        success: function(data) {
				            let response = JSON.parse(data);
                            $(`#item_price${currentID}`).val(response.otherData[0].prize_perunit);
                            $(`#company_name${currentID}`).val(response.otherData[0].company_name);
                            $(`#product_code${currentID}`).val(response.otherData[0].product_code);
                            $(`#hsn_sac${currentID}`).val(classID);
                            $(`#avlQ${currentID}`).val(response.quantity);
                            $(`#vat${currentID}`).val(response.otherData[0].vat);
                            $(`#sat${currentID}`).val(response.otherData[0].sat);
                            $(`#item_discount${currentID}`).val(response.otherData[0].discount);
				        },
				        error: function(error){
				            console.log(error);
				        }
				    });
				})
					
				<?php $i = 1; for($i = 1; $i<=30; $i++){ ?>

				
					<?php if($i != 1 && $i != 2 && $i != 3 && $i != 4 && $i != 5 && $i != 6 && $i != 7 && $i != 8 && $i != 9){?>
						$("#row<?php echo $i;?>").hide();
					<?php }?>

					$('#add<?php echo $i; ?>').click(function(){
						$("#row<?php echo $i+1;?>").show();
						$("#add<?php echo $i;?>").hide();
						$("#del<?php echo $i;?>").hide();
					});

					<?php if($i != 4){?>
						$('#del<?php echo $i; ?>').click(function(){
							$("#row<?php echo $i;?>").hide();
							$("#add<?php echo $i-1;?>").show();
							$("#del<?php echo $i-1;?>").show();
							$('#item_name<?php echo $i; ?>').val("");
							$('#item_comp<?php echo $i; ?>').val("");
							
							$('#item_price<?php echo $i; ?>').val("");
							$('#unit<?php echo $i; ?>').val("");
							$('#total_price<?php echo $i; ?>').val("");
							$('#sub_total<?php echo $i; ?>').val("");
							$('#discount<?php echo $i; ?>').val("");
							$('#item_quantity<?php echo $i; ?>').val("");
							$('#item_discount<?php echo $i; ?>').val("");
							$('select#item_no<?php echo $i; ?> option[value=""]').attr("selected",true);
						});
					<?php }?>

				// 	$( "#item_name<?php echo $i; ?>" ).autocomplete({
				//     	source: '<?php echo site_url("ajaxSale/getData/?");?>',
				//     	close: function(){
				// 			var name = $("#item_name<?php echo $i;?>").val();
				// 			$.post("<?php echo site_url("ajaxSale/getItemData") ?>", {name : name}, function(data){		
				// 				var d = jQuery.parseJSON(data);				
				// 				 $('#product_code<?php echo $i; ?>').val(d.product_code);
				// 				 $('#hsn_sac<?php echo $i; ?>').val(d.hsn_sac);
								 
								 
				// 				 $('#company_name<?php echo $i; ?>').val(d.company_name);
				// 			});
				// 		}
				//     });				
					
				
					
					$('input#item_discount<?php echo $i; ?>').keyup(function(){
							var name = $('#total_price<?php echo $i; ?>').val();
							var name1 = $('#item_discount<?php echo $i; ?>').val();
							
							var dis = (name1 * name)/100;
							var total = name - dis;
							document.getElementById('total_price<?php echo $i; ?>').value=name;
							document.getElementById('sub_total<?php echo $i; ?>').value=total;
							document.getElementById('discount<?php echo $i; ?>').value=dis;
					});


					$("#total_price<?= $i; ?>").keyup(function() {
						let total = $(this).val();
						let itemNo = $("#item_name<?= $i; ?>").val();
						let quantity = $("#item_quantity<?php echo $i; ?>").val();
						$.ajax({   
			                url:"<?php echo base_url(); ?>ajaxSale/calVatSat", 
			                type: "POST", 
			                data: {"total" : total, "itmeNo": itemNo, "quantity": quantity}, 
			                dataType: "text",
			                cache:false,
			                success: function(result) {
				                let data = JSON.parse(result);
				                $("#vat<?= $i; ?>").val(data['vat']);
				                $("#sat<?= $i; ?>").val(data['sat']);
				                $("#item_price<?= $i; ?>").val(data['round']);
			                }
			                
			            })
					})
					
				<?php } ?>
	
				$('input#p_balance').focusin(function(){

					var customer_id = $("#regular").val();
					$.post(
						"<?php echo site_url("customer/pBalanceAjax") ?>", 
						{customer_id : customer_id}, 
						function(data){		
							$("#p_balance").val(data);
						});
				});
					$('input#paid').keyup(
					function(){
					   
						var name = $('#paid').val();
						var name1 = $('#total').val();
						var a = name1 - name;				
						document.getElementById('balance').value=a;
					});				
				
				});

				$('input#CGST').keyup(function(){
					var sat = Number($('#CGST').val());
					if(!sat)sat=0; 
					var tot = Number($('#p_balance').val()) + Number($('#sub_total1').val()) + Number($('#sub_total2').val()) + Number($('#sub_total3').val()) + Number($('#sub_total4').val()) + Number($('#sub_total5').val()) + Number($('#sub_total6').val()) + Number($('#sub_total7').val()) + Number($('#sub_total8').val()) + Number($('#sub_total9').val()) + Number($('#sub_total10').val()) + Number($('#sub_total11').val()) + Number($('#sub_total12').val()) + Number($('#sub_total13').val()) + Number($('#sub_total14').val()) + Number($('#sub_total15').val()) + Number($('#sub_total16').val()) + Number($('#sub_total17').val()) + Number($('#sub_total18').val()) + Number($('#sub_total19').val()) + Number($('#sub_total20').val()) + Number($('#sub_total21').val()) + Number($('#sub_total22').val()) + Number($('#sub_total23').val()) + Number($('#sub_total24').val()) + Number($('#sub_total25').val()) + Number($('#sub_total26').val()) + Number($('#sub_total27').val()) + Number($('#sub_total28').val()) + Number($('#sub_total29').val()) + Number($('#sub_total30').val());				
					var calsat = (tot*sat)/100;
					var vat = Number($('#SGST/UTGST').val());
					if(vat){ }else{ vat=0;}
					//var tot = Number($('#p_balance').val()) + Number($('#sub_total1').val()) + Number($('#sub_total2').val()) + Number($('#sub_total3').val()) + Number($('#sub_total4').val()) + Number($('#sub_total5').val()) + Number($('#sub_total6').val()) + Number($('#sub_total7').val()) + Number($('#sub_total8').val()) + Number($('#sub_total9').val()) + Number($('#sub_total10').val()) + Number($('#sub_total11').val()) + Number($('#sub_total12').val()) + Number($('#sub_total13').val()) + Number($('#sub_total14').val()) + Number($('#sub_total15').val()) + Number($('#sub_total16').val()) + Number($('#sub_total17').val()) + Number($('#sub_total18').val()) + Number($('#sub_total19').val()) + Number($('#sub_total20').val()) + Number($('#sub_total21').val()) + Number($('#sub_total22').val()) + Number($('#sub_total23').val()) + Number($('#sub_total24').val()) + Number($('#sub_total25').val()) + Number($('#sub_total26').val()) + Number($('#sub_total27').val()) + Number($('#sub_total28').val()) + Number($('#sub_total29').val()) + Number($('#sub_total30').val());				
					var calvat = (tot*vat)/100;
					var name= tot+calsat+calvat;
					$("#total").val(name);
				});
	
				$('input#SGST/UTGST').focusin(function(){
					var vat = Number($('#CGST').val());
					if(vat){ }else{ vat=0;}
					var tot = Number($('#p_balance').val()) + Number($('#sub_total1').val()) + Number($('#sub_total2').val()) + Number($('#sub_total3').val()) + Number($('#sub_total4').val()) + Number($('#sub_total5').val()) + Number($('#sub_total6').val()) + Number($('#sub_total7').val()) + Number($('#sub_total8').val()) + Number($('#sub_total9').val()) + Number($('#sub_total10').val()) + Number($('#sub_total11').val()) + Number($('#sub_total12').val()) + Number($('#sub_total13').val()) + Number($('#sub_total14').val()) + Number($('#sub_total15').val()) + Number($('#sub_total16').val()) + Number($('#sub_total17').val()) + Number($('#sub_total18').val()) + Number($('#sub_total19').val()) + Number($('#sub_total20').val()) + Number($('#sub_total21').val()) + Number($('#sub_total22').val()) + Number($('#sub_total23').val()) + Number($('#sub_total24').val()) + Number($('#sub_total25').val()) + Number($('#sub_total26').val()) + Number($('#sub_total27').val()) + Number($('#sub_total28').val()) + Number($('#sub_total29').val()) + Number($('#sub_total30').val());				
					var calvat = (tot*vat)/100;
					var sat = Number($('#SGST/UTGST').val());
					if(sat){ }else{ sat=0;}
					//var tot = Number($('#p_balance').val()) + Number($('#sub_total1').val()) + Number($('#sub_total2').val()) + Number($('#sub_total3').val()) + Number($('#sub_total4').val()) + Number($('#sub_total5').val()) + Number($('#sub_total6').val()) + Number($('#sub_total7').val()) + Number($('#sub_total8').val()) + Number($('#sub_total9').val()) + Number($('#sub_total10').val()) + Number($('#sub_total11').val()) + Number($('#sub_total12').val()) + Number($('#sub_total13').val()) + Number($('#sub_total14').val()) + Number($('#sub_total15').val()) + Number($('#sub_total16').val()) + Number($('#sub_total17').val()) + Number($('#sub_total18').val()) + Number($('#sub_total19').val()) + Number($('#sub_total20').val()) + Number($('#sub_total21').val()) + Number($('#sub_total22').val()) + Number($('#sub_total23').val()) + Number($('#sub_total24').val()) + Number($('#sub_total25').val()) + Number($('#sub_total26').val()) + Number($('#sub_total27').val()) + Number($('#sub_total28').val()) + Number($('#sub_total29').val()) + Number($('#sub_total30').val());				
					var calsat = (tot*sat)/100;
					var name= tot+calsat+calvat;
					$("#total").val(name);
				});
			

				$('input#total').focusin(function(){
					var vat = Number($('#CGST').val());
					if(vat){ }else{ vat=0;}
					var tot = Number($('#p_balance').val()) + Number($('#sub_total1').val()) + Number($('#sub_total2').val()) + Number($('#sub_total3').val()) + Number($('#sub_total4').val()) + Number($('#sub_total5').val()) + Number($('#sub_total6').val()) + Number($('#sub_total7').val()) + Number($('#sub_total8').val()) + Number($('#sub_total9').val()) + Number($('#sub_total10').val()) + Number($('#sub_total11').val()) + Number($('#sub_total12').val()) + Number($('#sub_total13').val()) + Number($('#sub_total14').val()) + Number($('#sub_total15').val()) + Number($('#sub_total16').val()) + Number($('#sub_total17').val()) + Number($('#sub_total18').val()) + Number($('#sub_total19').val()) + Number($('#sub_total20').val()) + Number($('#sub_total21').val()) + Number($('#sub_total22').val()) + Number($('#sub_total23').val()) + Number($('#sub_total24').val()) + Number($('#sub_total25').val()) + Number($('#sub_total26').val()) + Number($('#sub_total27').val()) + Number($('#sub_total28').val()) + Number($('#sub_total29').val()) + Number($('#sub_total30').val());				
					var calvat = (tot*vat)/100;
					var sat = Number($('#SGST/UTGST').val());
					if(sat){ }else{ vat=0;}
					//var tot = Number($('#p_balance').val()) + Number($('#sub_total1').val()) + Number($('#sub_total2').val()) + Number($('#sub_total3').val()) + Number($('#sub_total4').val()) + Number($('#sub_total5').val()) + Number($('#sub_total6').val()) + Number($('#sub_total7').val()) + Number($('#sub_total8').val()) + Number($('#sub_total9').val()) + Number($('#sub_total10').val()) + Number($('#sub_total11').val()) + Number($('#sub_total12').val()) + Number($('#sub_total13').val()) + Number($('#sub_total14').val()) + Number($('#sub_total15').val()) + Number($('#sub_total16').val()) + Number($('#sub_total17').val()) + Number($('#sub_total18').val()) + Number($('#sub_total19').val()) + Number($('#sub_total20').val()) + Number($('#sub_total21').val()) + Number($('#sub_total22').val()) + Number($('#sub_total23').val()) + Number($('#sub_total24').val()) + Number($('#sub_total25').val()) + Number($('#sub_total26').val()) + Number($('#sub_total27').val()) + Number($('#sub_total28').val()) + Number($('#sub_total29').val()) + Number($('#sub_total30').val());				
					var calsat = (tot*sat)/100;
					var name= tot+calsat+calvat;
					$("#total").val(name);
				});
		
			

			$('input#total').keyup(function(){
				var vat = Number($('#CGST'));
				if(!vat) vat=0
				var tot = Number($('#p_balance').val()) + Number($('#sub_total1').val()) + Number($('#sub_total2').val()) + Number($('#sub_total3').val()) + Number($('#sub_total4').val()) + Number($('#sub_total5').val()) + Number($('#sub_total6').val()) + Number($('#sub_total7').val()) + Number($('#sub_total8').val()) + Number($('#sub_total9').val()) + Number($('#sub_total10').val()) + Number($('#sub_total11').val()) + Number($('#sub_total12').val()) + Number($('#sub_total13').val()) + Number($('#sub_total14').val()) + Number($('#sub_total15').val()) + Number($('#sub_total16').val()) + Number($('#sub_total17').val()) + Number($('#sub_total18').val()) + Number($('#sub_total19').val()) + Number($('#sub_total20').val()) + Number($('#sub_total21').val()) + Number($('#sub_total22').val()) + Number($('#sub_total23').val()) + Number($('#sub_total24').val()) + Number($('#sub_total25').val()) + Number($('#sub_total26').val()) + Number($('#sub_total27').val()) + Number($('#sub_total28').val()) + Number($('#sub_total29').val()) + Number($('#sub_total30').val());				
				var calvat = (tot*vat)/100;
				var sat = Number($('#SGST/UTGST').val());
				if(!sat) vat=0
				//var tot = Number($('#p_balance').val()) + Number($('#sub_total1').val()) + Number($('#sub_total2').val()) + Number($('#sub_total3').val()) + Number($('#sub_total4').val()) + Number($('#sub_total5').val()) + Number($('#sub_total6').val()) + Number($('#sub_total7').val()) + Number($('#sub_total8').val()) + Number($('#sub_total9').val()) + Number($('#sub_total10').val()) + Number($('#sub_total11').val()) + Number($('#sub_total12').val()) + Number($('#sub_total13').val()) + Number($('#sub_total14').val()) + Number($('#sub_total15').val()) + Number($('#sub_total16').val()) + Number($('#sub_total17').val()) + Number($('#sub_total18').val()) + Number($('#sub_total19').val()) + Number($('#sub_total20').val()) + Number($('#sub_total21').val()) + Number($('#sub_total22').val()) + Number($('#sub_total23').val()) + Number($('#sub_total24').val()) + Number($('#sub_total25').val()) + Number($('#sub_total26').val()) + Number($('#sub_total27').val()) + Number($('#sub_total28').val()) + Number($('#sub_total29').val()) + Number($('#sub_total30').val());				
				var calsat = (tot*sat)/100;
				var name= tot+calsat+calvat;
				var newtot = Number($('#total').val());
				var discount = name - newtot;
				$("#discount").val(discount);
			});

			
		</script>
		