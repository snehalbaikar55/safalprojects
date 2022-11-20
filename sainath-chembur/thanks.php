<?php
session_start();
error_reporting(0);
include('include/dbconnection.php');
include('include/vid.php');
?>
<html>
<title>Thankyou</title>
<head>
<!-- Global site tag (gtag.js) -->
<?php include('include/googlesitetag.php');?>

<!-- Facebook Pixel Code -->
<?php include('include/facebookpixelcode.php'); ?>

<!-- Event Snippet -->
<?php $ret=mysqli_query($con,"select * from tblextracode where PropertyID='$vid'");while ($row=mysqli_fetch_array($ret)) { echo $row['code4'];} ?>

</head>
<body>

<!--******  Clickcease.com tracking ******-->
<?php include('include/clickcease.php'); ?>

<!--  Clickcease.com Conversion tracking-->
<script type="text/javascript">
ccConVal = 0;
var script = document.createElement("script");
script.async = true;
script.type = "text/javascript";
var target = 'https://www.clickcease.com/monitor/cccontrack.js';
script.src = target; var elem = document.head; elem.appendChild(script);
</script>
<noscript>
<a href="https://www.clickcease.com" rel="nofollow"><img src="https://monitor.clickcease.com/conversions/conversions.aspx?value=0" alt="ClickCease"/></a>
</noscript>
<!--  Clickcease.com Conversion tracking-->

<!-- Thanks --> 
<section  style="top:50px;">
<span class="section-link" >
</span>
<span class="head text-capitalize"></span> 
<div class="row mb-3">
<img src="assets/img/banner04.jpg" class="img-responsive" style="width: -webkit-fill-available; "alt="thanks">
<script>setTimeout(function(){window.location.href='index.php'},10000);</script>
    
</section> 


</body>
</html>