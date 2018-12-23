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
        <script src="<?php echo base_url()?>assets/js/modern.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/pages/form-elements.js"></script>
        
<script>
	
			jQuery(document).ready(function() {
				$("#extQ").hide();
				$("#itemNo").keyup(function(){
					var itemNo = $("#itemNo").val();
					alert(itemNo);
					$.post("<?php echo site_url("ajaxSale/checkStock") ?>",{itemNo : itemNo}, function(data){
						var d = jQuery.parseJSON(data);
						$("#msg").html(d.msg);
						$("#itemName").val(d.itemName);
						$("#companyName").val(d.itemCat);
						$("#itemSize").val(d.itemsize);
						$("#price").val(d.price);
						$("#itemQuantity").val(d.itemQuantity);
						$("#itemUnit").val(d.itemUnit);
						if(d.itemQuantity > 0){
							$("#extQ").show();
						}
					});
					
				});
				$("#extraQuantity").change(function(){
					var oldQt = Number($("#itemQuantity").val());
					var newQt = Number($("#extraQuantity").val());
					var add = oldQt + newQt;
					$("#itemQuantity").val(add);
				});
			

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
					var ref = $("#ref").val();
					
					$.post("<?php echo site_url("patient/getRef") ?>", {ref : ref}, function(data){		
						$("#dis").val(data);
					});
				});
					
				<?php $i = 1; for($i = 1; $i<=30; $i++){ ?>

				
					<?php if($i != 1 && $i != 2 && $i != 3 && $i != 4){?>
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
				
					
								
					
					$('input#item_quantity<?php echo $i; ?>').keyup(function(){
							var a = 0;
							var name = $('#item_price<?php echo $i; ?>').val();
							var name1 = $('#item_quantity<?php echo $i; ?>').val();
							var avlQ = $('#avlQ<?php echo $i; ?>').val();
							var total = name * name1;
							document.getElementById('total_price<?php echo $i; ?>').value=total;
							document.getElementById('sub_total<?php echo $i; ?>').value=total;
							if(name1 > avlQ){
								$('#item_quantity<?php echo $i; ?>').val('');
								document.getElementById('total_price<?php echo $i; ?>').value=0;
								document.getElementById('sub_total<?php echo $i; ?>').value=0;
							}
					});
					
					$('input#item_discount<?php echo $i; ?>').keyup(function(){
							var name = $('#total_price<?php echo $i; ?>').val();
							var name1 = $('#item_discount<?php echo $i; ?>').val();
							
							var dis = (name1 * name)/100;
							var total = name - dis;
							document.getElementById('total_price<?php echo $i; ?>').value=name;
							document.getElementById('sub_total<?php echo $i; ?>').value=total;
							document.getElementById('discount<?php echo $i; ?>').value=dis;
					});
					
				<?php } ?>

				$('input#p_balance').focusin(function(){

					var customer_id = $("#regular").val();
					$.post("<?php echo site_url("customer/pBalanceAjax") ?>", {customer_id : customer_id}, function(data){		
						$("#p_balance").val(data);
					});
				});

				$('input#outputVAT').keyup(function(){
					var sat = Number($('#outputSAT').val());
					if(sat){ }else{ sat=0;}
					var tot = Number($('#p_balance').val()) + Number($('#sub_total1').val()) + Number($('#sub_total2').val()) + Number($('#sub_total3').val()) + Number($('#sub_total4').val()) + Number($('#sub_total5').val()) + Number($('#sub_total6').val()) + Number($('#sub_total7').val()) + Number($('#sub_total8').val()) + Number($('#sub_total9').val()) + Number($('#sub_total10').val()) + Number($('#sub_total11').val()) + Number($('#sub_total12').val()) + Number($('#sub_total13').val()) + Number($('#sub_total14').val()) + Number($('#sub_total15').val()) + Number($('#sub_total16').val()) + Number($('#sub_total17').val()) + Number($('#sub_total18').val()) + Number($('#sub_total19').val()) + Number($('#sub_total20').val()) + Number($('#sub_total21').val()) + Number($('#sub_total22').val()) + Number($('#sub_total23').val()) + Number($('#sub_total24').val()) + Number($('#sub_total25').val()) + Number($('#sub_total26').val()) + Number($('#sub_total27').val()) + Number($('#sub_total28').val()) + Number($('#sub_total29').val()) + Number($('#sub_total30').val());				
					var calsat = (tot*sat)/100;
					var vat = Number($('#outputVAT').val());
					if(vat){ }else{ vat=0;}
					//var tot = Number($('#p_balance').val()) + Number($('#sub_total1').val()) + Number($('#sub_total2').val()) + Number($('#sub_total3').val()) + Number($('#sub_total4').val()) + Number($('#sub_total5').val()) + Number($('#sub_total6').val()) + Number($('#sub_total7').val()) + Number($('#sub_total8').val()) + Number($('#sub_total9').val()) + Number($('#sub_total10').val()) + Number($('#sub_total11').val()) + Number($('#sub_total12').val()) + Number($('#sub_total13').val()) + Number($('#sub_total14').val()) + Number($('#sub_total15').val()) + Number($('#sub_total16').val()) + Number($('#sub_total17').val()) + Number($('#sub_total18').val()) + Number($('#sub_total19').val()) + Number($('#sub_total20').val()) + Number($('#sub_total21').val()) + Number($('#sub_total22').val()) + Number($('#sub_total23').val()) + Number($('#sub_total24').val()) + Number($('#sub_total25').val()) + Number($('#sub_total26').val()) + Number($('#sub_total27').val()) + Number($('#sub_total28').val()) + Number($('#sub_total29').val()) + Number($('#sub_total30').val());				
					var calvat = (tot*vat)/100;
					var name= tot+calsat+calvat;
					$("#total").val(name);
				});

				$('input#outputSAT').keyup(function(){
					var vat = Number($('#outputVAT').val());
					if(vat){ }else{ vat=0;}
					var tot = Number($('#p_balance').val()) + Number($('#sub_total1').val()) + Number($('#sub_total2').val()) + Number($('#sub_total3').val()) + Number($('#sub_total4').val()) + Number($('#sub_total5').val()) + Number($('#sub_total6').val()) + Number($('#sub_total7').val()) + Number($('#sub_total8').val()) + Number($('#sub_total9').val()) + Number($('#sub_total10').val()) + Number($('#sub_total11').val()) + Number($('#sub_total12').val()) + Number($('#sub_total13').val()) + Number($('#sub_total14').val()) + Number($('#sub_total15').val()) + Number($('#sub_total16').val()) + Number($('#sub_total17').val()) + Number($('#sub_total18').val()) + Number($('#sub_total19').val()) + Number($('#sub_total20').val()) + Number($('#sub_total21').val()) + Number($('#sub_total22').val()) + Number($('#sub_total23').val()) + Number($('#sub_total24').val()) + Number($('#sub_total25').val()) + Number($('#sub_total26').val()) + Number($('#sub_total27').val()) + Number($('#sub_total28').val()) + Number($('#sub_total29').val()) + Number($('#sub_total30').val());				
					var calvat = (tot*vat)/100;
					var sat = Number($('#outputSAT').val());
					if(sat){ }else{ sat=0;}
					//var tot = Number($('#p_balance').val()) + Number($('#sub_total1').val()) + Number($('#sub_total2').val()) + Number($('#sub_total3').val()) + Number($('#sub_total4').val()) + Number($('#sub_total5').val()) + Number($('#sub_total6').val()) + Number($('#sub_total7').val()) + Number($('#sub_total8').val()) + Number($('#sub_total9').val()) + Number($('#sub_total10').val()) + Number($('#sub_total11').val()) + Number($('#sub_total12').val()) + Number($('#sub_total13').val()) + Number($('#sub_total14').val()) + Number($('#sub_total15').val()) + Number($('#sub_total16').val()) + Number($('#sub_total17').val()) + Number($('#sub_total18').val()) + Number($('#sub_total19').val()) + Number($('#sub_total20').val()) + Number($('#sub_total21').val()) + Number($('#sub_total22').val()) + Number($('#sub_total23').val()) + Number($('#sub_total24').val()) + Number($('#sub_total25').val()) + Number($('#sub_total26').val()) + Number($('#sub_total27').val()) + Number($('#sub_total28').val()) + Number($('#sub_total29').val()) + Number($('#sub_total30').val());				
					var calsat = (tot*sat)/100;
					var name= tot+calsat+calvat;
					$("#total").val(name);
				});

				$('input#total').focusin(function(){
					var vat = Number($('#outputVAT').val());
					if(vat){ }else{ vat=0;}
					var tot = Number($('#p_balance').val()) + Number($('#sub_total1').val()) + Number($('#sub_total2').val()) + Number($('#sub_total3').val()) + Number($('#sub_total4').val()) + Number($('#sub_total5').val()) + Number($('#sub_total6').val()) + Number($('#sub_total7').val()) + Number($('#sub_total8').val()) + Number($('#sub_total9').val()) + Number($('#sub_total10').val()) + Number($('#sub_total11').val()) + Number($('#sub_total12').val()) + Number($('#sub_total13').val()) + Number($('#sub_total14').val()) + Number($('#sub_total15').val()) + Number($('#sub_total16').val()) + Number($('#sub_total17').val()) + Number($('#sub_total18').val()) + Number($('#sub_total19').val()) + Number($('#sub_total20').val()) + Number($('#sub_total21').val()) + Number($('#sub_total22').val()) + Number($('#sub_total23').val()) + Number($('#sub_total24').val()) + Number($('#sub_total25').val()) + Number($('#sub_total26').val()) + Number($('#sub_total27').val()) + Number($('#sub_total28').val()) + Number($('#sub_total29').val()) + Number($('#sub_total30').val());				
					var calvat = (tot*vat)/100;
					var sat = Number($('#outputSAT').val());
					if(sat){ }else{ vat=0;}
					//var tot = Number($('#p_balance').val()) + Number($('#sub_total1').val()) + Number($('#sub_total2').val()) + Number($('#sub_total3').val()) + Number($('#sub_total4').val()) + Number($('#sub_total5').val()) + Number($('#sub_total6').val()) + Number($('#sub_total7').val()) + Number($('#sub_total8').val()) + Number($('#sub_total9').val()) + Number($('#sub_total10').val()) + Number($('#sub_total11').val()) + Number($('#sub_total12').val()) + Number($('#sub_total13').val()) + Number($('#sub_total14').val()) + Number($('#sub_total15').val()) + Number($('#sub_total16').val()) + Number($('#sub_total17').val()) + Number($('#sub_total18').val()) + Number($('#sub_total19').val()) + Number($('#sub_total20').val()) + Number($('#sub_total21').val()) + Number($('#sub_total22').val()) + Number($('#sub_total23').val()) + Number($('#sub_total24').val()) + Number($('#sub_total25').val()) + Number($('#sub_total26').val()) + Number($('#sub_total27').val()) + Number($('#sub_total28').val()) + Number($('#sub_total29').val()) + Number($('#sub_total30').val());				
					var calsat = (tot*sat)/100;
					var name= tot+calsat+calvat;
					$("#total").val(name);
				});
				
				$('input#paid').keyup(
					function(){
						var name = $('#paid').val();
						var name1 = $('#total').val();
						var a = name1 - name;				
						document.getElementById('balance').value=a;
					});				
				
				});

			$('input#total').keyup(function(){
				var vat = Number($('#outputVAT').val());
				if(vat){ }else{ vat=0;}
				var tot = Number($('#p_balance').val()) + Number($('#sub_total1').val()) + Number($('#sub_total2').val()) + Number($('#sub_total3').val()) + Number($('#sub_total4').val()) + Number($('#sub_total5').val()) + Number($('#sub_total6').val()) + Number($('#sub_total7').val()) + Number($('#sub_total8').val()) + Number($('#sub_total9').val()) + Number($('#sub_total10').val()) + Number($('#sub_total11').val()) + Number($('#sub_total12').val()) + Number($('#sub_total13').val()) + Number($('#sub_total14').val()) + Number($('#sub_total15').val()) + Number($('#sub_total16').val()) + Number($('#sub_total17').val()) + Number($('#sub_total18').val()) + Number($('#sub_total19').val()) + Number($('#sub_total20').val()) + Number($('#sub_total21').val()) + Number($('#sub_total22').val()) + Number($('#sub_total23').val()) + Number($('#sub_total24').val()) + Number($('#sub_total25').val()) + Number($('#sub_total26').val()) + Number($('#sub_total27').val()) + Number($('#sub_total28').val()) + Number($('#sub_total29').val()) + Number($('#sub_total30').val());				
				var calvat = (tot*vat)/100;
				var sat = Number($('#outputSAT').val());
				if(sat){ }else{ vat=0;}
				//var tot = Number($('#p_balance').val()) + Number($('#sub_total1').val()) + Number($('#sub_total2').val()) + Number($('#sub_total3').val()) + Number($('#sub_total4').val()) + Number($('#sub_total5').val()) + Number($('#sub_total6').val()) + Number($('#sub_total7').val()) + Number($('#sub_total8').val()) + Number($('#sub_total9').val()) + Number($('#sub_total10').val()) + Number($('#sub_total11').val()) + Number($('#sub_total12').val()) + Number($('#sub_total13').val()) + Number($('#sub_total14').val()) + Number($('#sub_total15').val()) + Number($('#sub_total16').val()) + Number($('#sub_total17').val()) + Number($('#sub_total18').val()) + Number($('#sub_total19').val()) + Number($('#sub_total20').val()) + Number($('#sub_total21').val()) + Number($('#sub_total22').val()) + Number($('#sub_total23').val()) + Number($('#sub_total24').val()) + Number($('#sub_total25').val()) + Number($('#sub_total26').val()) + Number($('#sub_total27').val()) + Number($('#sub_total28').val()) + Number($('#sub_total29').val()) + Number($('#sub_total30').val());				
				var calsat = (tot*sat)/100;
				var name= tot+calsat+calvat;
				var newtot = Number($('#total').val());
				var discount = name - newtot;
				$("#discount").val(discount);
			});

			
		</script>