<?php
include_once("../db.php");
					
 ?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Mirrored from rajschool.com/gal/gal1.htm by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 08 Apr 2016 15:33:46 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <link href="amazon_scroller(3).css" rel="stylesheet" type="text/css">
    <link href="PhotoGallery.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="jquery.min.js"></script>

    <script type="text/javascript" src="amazon_scroller(4).js"></script>

</head>
<body>

    <script language="javascript" type="text/javascript">

        $(function () {

            $("#amazon_scroller2").amazon_scroller({
                scroller_title_show: 'disable',
                scroller_time_interval: '2000',
                scroller_window_background_color: "none",
                scroller_window_padding: '5',
                scroller_border_size: '0',
                scroller_border_color: '#CCC',
                scroller_images_width: '180',
                scroller_images_height: '126',
                scroller_title_size: '12',
                scroller_title_color: 'black',
                scroller_show_count: '3',
                directory: 'images'
            });

        });
    </script>

    <div id="amazon_scroller2" class="amazon_scroller" style="border: 0px solid rgb(204, 204, 204); padding: 5px; width: 630px; height: 146px; position: relative;">
        <div class="amazon_scroller_mask" style="width: 570px; height: 146px;">
            
                    <ul style="width: 950px; position: absolute; left: -570px;">
                <?php
			$gal = mysql_query("select * from  gallery where image_type = 'annual'"); 
				$number = mysql_num_rows($gal);
				if($number > 0)
				{
					while($res = mysql_fetch_object($gal))
					{
				?>    
                       
                    <li style="background-image: url(photo-back.png); padding-bottom: 20px; height: 126px; width: 180px; display: block; background-position: 50% 100%; background-repeat: no-repeat no-repeat;"><a href="#" target="_top" style="color: black; font-size: 12px;">
                        <img src="../ramdoot/assets/gallery/annual/<?php echo $res->image; ?>" style="width: 180px; height: 126px;">
                    </a></li>
                
                   
                     <?php } 
				}
				else
				{?>
                	<h2 style="color:#F00">No Image Found</h2>
                 <?php }
?> 
               
                    </ul>
                
        <ul style="width: 950px; position: absolute; left: 380px;">
                <?php
			$gal = mysql_query("select * from  gallery where image_type = 'sports'"); 
				$number = mysql_num_rows($gal);
				if($number > 0)
				{
					while($res = mysql_fetch_object($gal))
					{
				?>    
                   
                         
                    <li style="background-image: url(photo-back.png); padding-bottom: 20px; height: 126px; width: 180px; display: block; background-position: 50% 100%; background-repeat: no-repeat no-repeat;"><a href="#" target="_top" style="color: black; font-size: 12px;">
                        <img src="../ramdoot/assets/gallery/sports/<?php echo $res->image; ?>" style="width: 180px; height: 126px;">
                    </a></li>
                
                    <?php } 
				}
				else
				{?>
                	<h2 style="color:#F00">No Image Found</h2>
                 <?php }
?>
                    </ul></div>
    </div>


</body>
<!-- Mirrored from rajschool.com/gal/gal1.htm by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 08 Apr 2016 15:34:17 GMT -->
</html>
