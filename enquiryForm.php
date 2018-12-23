

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head><title>
	Ram Doot International School
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
        
     .style7
     {
         font-family: Arial, Helvetica, sans-serif;
         font-size: small;
         text-align:justify;color:#333333;
     }
     .style10
    {
        width: 326px;
        font-family: Arial;
    }
    .style11
    {
        width: 26px;
    }
    .style12
    {
        font-family: Arial;
    }
    .style14
    {
        font-family: Arial;
        font-weight: bold;
    }
     .style18
    {
        font-family: Arial;
        height: 21px;
    }
    .style19
    {
        width: 26px;
        height: 21px;
    }
    .style20
    {
        width: 26px;
        height: 19px;
    }
    .style21
    {
        width: 326px;
        font-family: Arial;
        height: 19px;
    }
    .style22
    {
        width: 26px;
        height: 48px;
    }
    .style23
    {
        font-family: Arial;
        height: 48px;
    }
     </style>

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
             
<div class="style3">Enquiry Form</div><br />
<div class="style7">
<style type="text/css">
table tr td{
	padding:6px;
	
}
</style>
   <form method="post" action="mail.php">
					<table>
                    	<tr style="background:none; border:none;">
                        	<td><label>Name</label></td><td><input type="text" name="name" /></td>
                        </tr>
                        <tr style="background:none; border:none;">
                        	<td><label>Mobile No</label></td><td><input type="text" name="mob" /></td>
                        </tr>
                        <tr>
                        	<td><label>Email</label></td><td><input type="text" name="email" /></td>
                        </tr>
                        <tr style="background:none; border:none;">
           <td valign="top"><label>Message</label></td><td><textarea name="msg" rows="5" cols="20"></textarea></td>
                        </tr>
                        <tr>
     <td colspan="2" align="center"><input type="submit" value="Mail Us" /> &nbsp;&nbsp; <input type="reset" value="Reset" /></td>
                        </tr>
                    </table>
                    </form>
</div>

        </div>
   
         
    </div>
    


   
     
    </div>
    <?php include"footer.php" ?>
</body>
</html>