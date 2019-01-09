	<style type="text/css">

    #printable { display: block; }

    @media print
    {
    	#non-printable { display: none; }
    	#printable { display: block; }
    }
</style>
<script>
    function autoResize(id){
        var newheight;
        var newwidth;

        if(document.getElementById){
            newheight=document.getElementById(id).contentWindow.document .body.scrollHeight;
            newwidth=document.getElementById(id).contentWindow.document .body.scrollWidth;
        }

        document.getElementById(id).height= (newheight) + "px";
        document.getElementById(id).width= (newwidth) + "px";
    }
</script>
	
	<!-- CONTENT 
	============================================= -->
	<div class="content shortcodes">
		<div class="layout">
			<div class="row">
				<?php if($this->uri->segment(4) == "lskajdfasiuf09e4iuorivmnsldfosuteioruetoi"):?>
				<p class="p-20 centered">
					Your admission is not confirmed in CMG. You have to submit this printout to institute and take approval of admission than you will be eligible for online test paper of CMG. And other facilities of Career Maker Group (CMG). 
				</p>
				<?php endif;?>
				<div class="gap" style="height: 20px;"></div>
				<?php $studentId = $this->uri->segment(3); ?>
				<IFRAME SRC="<?php echo base_url(); ?>invoiceController/registerC/<?php echo $studentId; ?>/<?php echo $this->uri->segment(4);?>" width="100%" height="200px" id="iframe1" style="border: 0px;" onLoad="autoResize('iframe1');"></iframe>
			</div>
		</div>
	</div>
	<!-- END CONTENT 
	============================================= -->
