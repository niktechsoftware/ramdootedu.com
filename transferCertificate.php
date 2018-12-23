<?php include_once("./db.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head><title>
	Ram Doot International school
</title><link href="css/bk_main.css" rel="stylesheet" type="text/css" /><link href="menu.css" rel="stylesheet" type="text/css" />
    <script src="menu.js" type="text/javascript"></script>
    <script src="jquery.js" type="text/javascript"></script>
    
    <style type="text/css">
        .style3
        {
            font-family: Calibri;
            font-size: 30px;
           
            color: #443266;
        height: 42px;
         border-bottom: 2px solid #443266;
    }
        .style6
        {
            width: 100%;
        }
        .style7
        {
            height: 23px;
        }
        .style8
        {
            height: 23px;
            }
        .style9
        {
            width: 266px;
        }
        .style10
        {
            height: 23px;
            width: 266px;
            font-weight: bold;
            text-align: right;
        }
    </style>
    <script type = "text/javascript">
        function PrintPanel() {
            var panel = document.getElementById("ContentPlaceHolder1_pnlContents");
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>DIV Contents</title>');
            printWindow.document.write('</head><body >');
            printWindow.document.write(panel.innerHTML);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            setTimeout(function () {
                printWindow.print();
            }, 500);
            return false;
        }
    </script>

    <style type="text/css">
        .st1
        {
            color: white;
        }
        
        .st3
        {
            color: white;
        }
        .st2
        {
            font-family: "Courier New", Courier, monospace;
            font-size: 14px;
        }
        
        .styl1
        {
            color: #FFCC00;
        }
        .st7
        {
            color: #99FF66;
        }
    </style>
</head>
<body>
 
 
     
     <?php include"header.php" ?>
   

    <div id="main">
     <div id="main_sub">
   
          <?php include"sidemenu.php" ?>
         <div style="float:right; width:660px; margin-top:30px; margin-right:20px;">
             
    <div class="style3">Transfer Certificate
    </div><br />
<div>
   
   
      <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
       						<table border="1px solid FFFF">
       							
       								<td>Admission No</td>
       								<td><input type="text" class="frm" name="adm_no" id="name" placeholder="Enter Your Admission Number"></td>
       							</tr>
       							
								
								<br />
       							<tr>
                            		<td colspan="2"><input type="submit" name="submit" value="SUBMIT"></td>
                         		</tr>
                         	</table>
                          	</form>

   <?php

        if(isset($_POST['submit']))
        {

     
			 $adm_no = $_POST['adm_no'];

 			
							$id = mysql_query("select * from uploadTC where adm_no = '$adm_no'");
							$row=mysql_fetch_object($id);  
							$num=mysql_num_rows($id);
		
			if($num > 0){?>
			    <table width="100%">
			        <tr>
			            <td>  <img src="./ramdoot/assets/tc/<?php echo $row->image; ?>" style="border:1px #CCCCCC solid; padding:5px;" height="700" width="600"></td>
			        </tr>
			    </table>
			    
				<?php	}
			else
			{?>
			
			<font color="#FF0000">Invalid  Admission number</font>
      <?php   }
        }
      ?>

      

</div>

        </div>
   
         
    </div>
    


   
     
    </div>
   <?php include"footer.php" ?>
</body>

<!-- Mirrored from rajschool.com/student_tc.aspx by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 08 Apr 2016 15:29:40 GMT -->
</html>