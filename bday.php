


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>

</title>
    
    
         
    <script src="./jquery-1.6.min.js" type="text/javascript"></script>
     <script src="./jcarousellite_1.0.1c4.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            $(".newsticker").jCarouselLite({
                vertical: false,
                hoverPause: true,
                visible: 1,
                vertical: true,
                auto: 1000,
                speed: 2000
            });
        });
    </script>

    <style>
        .newsticker
        {
            width: 150px;
            text-align:center;
           
            
        }
        .newsticker ul li
        {
            display: block;
            list-style: none outside none;
            margin-bottom: 5px;
            padding-bottom: 1px;
            
        }
        .newsticker .thumbnail
        {
            float: left;
            width: 140px;
        }
        .newsticker .info
        {
        	margin-left:10px;
            float: right;
            width: 190px;
        }
        .newsticker .info span.cat
        {
            color: #808080;
            display: block;
            font-size: 10px;
        }
        .newsticker .info a
        {
            color: #3c7acf;
            text-decoration:none;
        }
        .clear
        {
            clear: both;
        }
         .skd_i
        {
            -webkit-box-shadow: 0 8px 6px -6px black, 0 -8px 6px -6px black; 
    -moz-box-shadow: 0 8px 6px -6px black, 0 -8px 6px -6px black; 
    box-shadow: 0 8px 6px -6px black, 0 -8px 6px -6px black;
    border:5px solid #fff;
   
        }
    </style>
</head>
<body>
 
    <div>
    
            <div class="newsticker">
   
            <li>
                <div class="thumbnail" >
                  <img src="gal/101.jpg" />  
  <br />
                    <div style="width:136px; vertical-align:middle; font-family:Arial Unicode MS; background-color:#FFCB67; padding:5px; text-align:center; margin-top:5px;">
                    <span id="dlNews_Label1_2" style="color:White;font-size:15px;"><?php echo $res->date_ob; ?></span>
                    </div>
                     <div style="width:136px; vertical-align:middle; font-family:Arial Unicode MS; background-color:#FF9966; padding:5px; text-align:center; margin-top:1px;">
                    <span id="dlNews_Label2_2" style="color:#333333;font-size:13px;">VI</span>
                    - <span id="dlNews_Label3_2" style="color:#333333;font-size:13px;">A</span>
                    </div>
                </div>
               
                <div class="clear">
                </div>
            </li>
        <li>
                <div class="thumbnail" >
                  <img src="gal/101.jpg" />  
  <br />
                    <div style="width:136px; vertical-align:middle; font-family:Arial Unicode MS; background-color:#FFCB67; padding:5px; text-align:center; margin-top:5px;">
                    <span id="dlNews_Label1_2" style="color:White;font-size:15px;"><?php echo $res->date_ob; ?></span>
                    </div>
                     <div style="width:136px; vertical-align:middle; font-family:Arial Unicode MS; background-color:#FF9966; padding:5px; text-align:center; margin-top:1px;">
                    <span id="dlNews_Label2_2" style="color:#333333;font-size:13px;">VI</span>
                    - <span id="dlNews_Label3_2" style="color:#333333;font-size:13px;">A</span>
                    </div>
                </div>
               
                <div class="clear">
                </div>
            </li>
        
            </ul> </div>
        
    </div>
    </form>
</body>
</html>
