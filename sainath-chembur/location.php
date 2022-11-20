<?php
session_start();
error_reporting(0);
include('include/dbconnection.php');
include('include/vid.php');
include('include/crmurl.php');

$enu = base64_encode($url);
?>

<?php 
include('include/log.php'); 
include('include/browserdetection.php'); 
include('include/devicedetection.php');
include('include/head.php'); 
include('include/backend.php'); 
?>


<!--****************** BODY SECTION STARTS ******************-->
<body data-spy="scroll" data-target="#navbarNav">
    
<!--******  Clickcease.com tracking ******-->
<?php include('include/clickcease.php'); ?>
 
<!--******  Navigation bar and Logo ******-->    
<?php include('include/navbar.php'); ?>

<main class="pload">    
   <br><br> <br>
<!--******  Location Section ******--> 
<section class="section shadow-sm lazyload" data-script="./assets/plugins/fancybox/jquery.fancybox.min.js" >
<span class="section-link" id="location"></span>
<span class="head text-capitalize">Location</span> 
<div class="row mb-3"><span class="d-block section-heading-sub text-capitalize map">Map View</span> 
<?php $ret=mysqli_query($con,"select * from tblurl where PropertyID='$vid'");while ($row=mysqli_fetch_array($ret)) { ?>
<p>
<?php echo $row['URL'];?>
</p> <?php } ?> 

<?php $ret=mysqli_query($con,"select * from tblpropertydetails where PropertyID='$vid'");while ($row=mysqli_fetch_array($ret)) { ?><p><?php echo $row['d3'];?></p> <?php } ?> 
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3"> <?php $ret=mysqli_query($con,"select * from tblnearbylocation where PropertyID='$vid'");while ($row=mysqli_fetch_array($ret)) { ?>
<div class="col my-2"><?php echo $row['l'];?></div> 
<?php } ?> 
</div>
</section>  
    
<!--****** Right Section Area ******-->   
<?php include('include/rightsection.php'); ?>

<!--****** Mobile UI Footer******-->  
<?php include('include/mobilefooter.php'); ?>

<!--****** Pop up starts ******-->  
<?php include('include/popup.php'); ?>
    
</main>
<!--****************** MAIN CONTENT SECTION ENDS ******************-->

<!--****** Footer Attributes ******-->  
<section class="section shadow-sm lazyload"> <div class="at-property-item my-2 pt-md-0" align="center"> <p><a href="privacy.php">Privacy Policy || Terms & Conditions || FAQ</a><a href="PMAY-SUBSIDY.php"> || PMAY SUBSIDY</a></p> <br> Disclaimer & Privacy Policy : Information Purpose Website | Content Provided By Respective Owners | Authorized Channel Partner RERA No.A51800001892 | Project MahaRERA number is available on the website maharera.mahaonline.gov. in under registered projects. <br><h5><p style="font-size:15px">2022 © Copyright - All Rights Reserved.</p></h5></div> </section>  

 
<script>document.addEventListener("DOMContentLoaded", function(event){document.getElementById("loader").remove();document.querySelector('header').classList.remove('pload');document.querySelector('main').classList.remove('pload')});var sitePrimaryColor='#CE8B3C';</script> 

<script>document.getElementById("myBtnRight").addEventListener("click", function() {var enu = $('#enu').val(); var t = atob(enu);$("form").attr("action", t);});</script>


<?php include 'include/footer.php'; ?>
</body>
</html>