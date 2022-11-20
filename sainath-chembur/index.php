<?php
session_start();
error_reporting(0);
include('include/dbconnection.php');

/* VID GOES HER */
include('include/vid.php');

$url = "https://smashsst.com/mcrm/modules/Webforms/capture.php";
$enu = base64_encode($url);

$id = session_id();
$base_url= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//$referrer_url = $_SERVER['HTTP_REFERER'];
session_start();
$_SESSION['url'] = $base_url;
// $_SESSION['base_url'] = $referrer_url ; 
?>

<?php 
include('include/log.php'); include('include/browserdetection.php'); include('include/devicedetection.php'); include('include/head.php'); include('include/backend.php'); ?>

<!--****************** BODY SECTION STARTS ******************-->
<body data-spy="scroll" data-target="#navbarNav">
    
<!--******  Clickcease.com tracking ******-->
<?php include('include/clickcease.php'); ?>
    
<!--******  Navigation bar and Logo ******-->    
<?php include('include/navbar.php'); ?>

<!--****************** MAIN CONTENT SECTION STARTS ******************-->
<main class="pload">     

<!--****** Featured Images ******-->
<div id="home" class="carousel slide micro-main-slider" data-ride="carousel"> 
<ol class="carousel-indicators">
<li data-target="#home" data-slide-to="0" class="active"></li> 
<li data-target="#home" data-slide-to="1"></li></ol> <div class="carousel-inner"> 
<?php
$ret=mysqli_query($con,"select * from tblfeaturedimages where PropertyID='$vid'");
while ($row=mysqli_fetch_array($ret)) 
{ ?>  
<div class="carousel-item"> <img src="img/<?php echo $row['FeaturedImage'] ?>" alt="Featured Image" ></div><?php } ?></div> </div> 

<!--****** Left Banner ******-->
<?php $ret=mysqli_query($con,"select * from tblpropertydetails where PropertyID='$vid'");while ($row=mysqli_fetch_array($ret)) { ?><div class="info-box overflow-hidden"><span class="pro-status">Booking Open</span> <span class="pro-title"><?php echo $row['PropertyName'];?></span><span class="pro-add">at <?php echo $row['Location'];?></span><span class="pro-dev">by <?php echo $row['Developer'];?></span>
<ul class="pro-spec"> <li><span class="list-icon">&rtrif;</span> <span class="heading">Land Area</span> : <?php echo $row['t1'];?></li><li><span class="list-icon">&rtrif;</span> <span class="heading"></span> <?php echo $row['t2'];?></li></ul>
<span class="d-block mt-1 mb-1" style="font-size: 15px; width: 100%; background: transparent;font-weight: bold; text-align: center;color: #fff; "><span style=" color: #fff;display: block; background-color: var(--colorPrimary); background: linear-gradient(-45deg, var(--colorPrimary), var(--colorSecondary) ,var(--colorPrimary),var(--colorSecondary)); background-size: 400% 400%; -webkit-animation: Gradient 3s ease infinite; -moz-animation: Gradient 3s ease infinite; animation: Gradient 3s ease infinite; font-size:15px; padding: 5px;"><?php echo $row['t3'];?> </span>
<span style="background: rgba(0, 0, 0, .7); display: block; border-bottom: 2px solid var(--colorPrimary);border-left: 2px solid var(--colorPrimary);border-right: 2px solid var(--colorPrimary);padding: 4px"> <span class="animated bounceIn infinite" style="animation-duration: 3s;font-size:13px;display: block;padding: 2px"><?php echo $row['t4'];?></span> </span> </span>
<span class="d-block mt-1 mb-1" style="font-size: 15px; width: 100%; background: transparent;font-weight: bold; text-align: center;color: #fff; "><span style=" color: #fff;display: block; background-color: var(--colorPrimary); background: linear-gradient(-45deg, var(--colorPrimary), var(--colorSecondary) ,var(--colorPrimary),var(--colorSecondary)); background-size: 400% 400%; -webkit-animation: Gradient 3s ease infinite; -moz-animation: Gradient 3s ease infinite; animation: Gradient 3s ease infinite; font-size:15px; padding: 5px;"><?php echo $row['t5'];?> </span> </span>
<span class="d-block mt-1 mb-1" style="font-size: 15px; width: 100%; background: transparent;font-weight: bold; text-align: center;color: #fff; "><span style=" color: #fff;display: block; background-color: var(--colorPrimary); background: linear-gradient(-45deg, var(--colorPrimary), var(--colorSecondary) ,var(--colorPrimary),var(--colorSecondary)); background-size: 400% 400%; -webkit-animation: Gradient 3s ease infinite; -moz-animation: Gradient 3s ease infinite; animation: Gradient 3s ease infinite; font-size:15px; padding: 5px;"><?php echo $row['t6'];?> </span> </span>
<span class="pro-tag-line"><?php echo $row['te7'];?></span><span class="pro-price"><i class="mi mi-rs-light info-icon"></i><?php echo $row['Price'];?> </span> <?php } ?>
<button class="btn btn-info micro-form-btn enqModal effetMoveGradient effectScale" data-form="md" data-title="Mail me pricing details" data-btn="Send now" data-enquiry="Enquire Now" data-redirect="enquiry" data-toggle="modal" data-target="#enqModal">Enquire Now</button></div> 

<!--****** Overview Section / Main Descriptioniption ******-->
<section class="section shadow-sm lazyload" id="overview"><span class="head text-capitalize d-none d-md-block">Overview</span><span class="d-block section-heading color-primary text-capitalize"><?php echo $row['ID'];?><?php echo $row['PropertyName'];?></span> <?php $ret=mysqli_query($con,"select * from tblpropertydetails where PropertyID='$vid'");while ($row=mysqli_fetch_array($ret)) { ?><span class="d-block section-heading-sub color-primary text-capitalize">At <?php echo $row['Location'];?></span> <p><?php echo $row['d1'];?></p> </p><button class="btn btn-sm btn-outline-info sectio-bro-btn overflow-hidden enqModal" data-form="md" data-title="Download brochure" data-btn="Download now" data-enquiry="Ebook Download" data-redirect="brochure" data-redirect-file="brochure.pdf" data-toggle="modal" data-target="#enqModal"><span class="d-inline-block mi mi-download mr-1 animated slideInDown infinite"></span> Download Brochure</button><div class="row my-2"> <div class="col-12"><h1 class="text-center text-uppercase mb-1 color-primary font-weight-bold">About <?php echo $row['Developer'];?></h1> </div></div> <p><?php echo $row['d2'];?></p> </section> <?php } ?>

<!--****** Pricing table starts ******-->
<section class="section shadow-sm lazyload"> <span class="section-link" id="pricing"></span> <span class="head text-capitalize">Price</span> <?php $ret=mysqli_query($con,"select * from tblpricing where PropertyID='$vid'"); ?><div class="row"> <div class="col-md-8"> <table class="table table-striped table-borderless border micro-price-table table-pricing"> <thead> <tr> <th scope="col" class="border border-bottom-0 mb-w">Type</th> <th scope="col" class="border border-bottom-0 mb-w">Carpet Area</th> <th scope="col" class="border border-bottom-0 border-right-0">Price</th><th scope="col"></th></tr></thead><tbody> <?php while ($row=mysqli_fetch_array($ret)) { ?><tr> <td class="border border-left-0 border-top-0 border-bottom-0 price-type"><?php echo $row['Type'];?></td><td class="border border-left-0 border-top-0 border-bottom-0 price-carpet"><?php echo $row['CarpetArea'];?><small class="d-inline-block d-md-none">(Carpet Area)</small></td><td class="price-amt"><i class="mi mi-rs-light"></i> <?php echo $row['Price'];?></td> <td><button class="btn btn-sm btn-info effetGradient effectScale enqModal" data-form="md" data-title="Send me costing details" data-btn="Send now" data-enquiry="Request Price" data-redirect="floorplan" data-toggle="modal" data-target="#enqModal">Price Breakup</button></td> </tr> <?php } ?> </tbody> </table> </div><div class="col-md-4"> <a href="#" class="text-decoration-none enqModal" data-form="md" data-title="Send me costing details" data-btn="Send now" data-enquiry="Costing Details" data-toggle="modal" data-target="#enqModal"><div class="at-property-item shadow-sm border border-grey mt-1"> <div class="at-property-img"> <picture> <source class="lazyload w-100" data-srcset="assets/img/costingdetails.jpg"> <img data-sizes="auto" class="lazyload w-100" data-srcset="assets/img/costingdetails.jpg"> </picture> <div class="at-property-overlayer"></div> <span class="btn btn-default at-property-btn">Enquire Now</span> </div> <div class="at-property-dis effetGradient"> <h5>Complete Costing Details</h5> </div> </div> </a> </div></div></section> 
<!--****** Floor Plans Section ******-->
<section class="section shadow-sm lazyload" data-script="./assets/plugins/fancybox/jquery.fancybox.min.js" ><span class="section-link" id="sitefloorplan"></span><span class="head text-capitalize">Site &amp; Floor Plan</span><span class="d-block section-heading-sub text-capitalize mt-3">Floor Plans</span><div class="row row-cols-1 row-cols-md-3"> <?php $ret=mysqli_query($con,"select * from tblfloorplans where PropertyID='$vid'"); while ($row=mysqli_fetch_array($ret)) { ?><div class="col"> <a href="#" class="text-decoration-none enqModal" data-form="md" data-title="Send me plan details" data-btn="Send now" data-enquiry="Floor Plan" data-redirect="floorplan" data-toggle="modal" data-target="#enqModal"> <div class="at-property-item shadow-sm border border-grey mt-1"> <div class="at-property-img"> <img src="img/<?php echo $row['Image'] ?>" alt="Floor Plan Image" style= " -webkit-filter: blur(5px); filter: blur(5px);" height="300px"><div class="at-property-overlayer"></div><span class="btn btn-default at-property-btn" role="button">Enquire Now</span> </div> <div class="at-property-dis effetGradient"><h5><?php echo $row['Title'] ?></h5> </div> </div> </a></div> <?php } ?> </section>
    
<!--****** Gallery sections starts ******-->
<section class="section shadow-sm lazyload"><span class="section-link" id="gallery"></span>
<span class="head text-capitalize">Gallery</span>
<div class="gal-3 owl-carousel owl-theme">
<?php $ret=mysqli_query($con,"select * from tblgalleryimages where PropertyID='$vid'"); while ($row=mysqli_fetch_array($ret)){ ?> 
<div class="item flex-fill"> <img src="img/<?php echo $row['FeaturedImage'] ?>" alt="Gallery Images" height="500px" > </div> 
<?php } ?> </div></section>

<!--****** Amentities Section ******-->
<section class="section shadow-sm lazyload" ><span class="section-link" id="amenities"></span> <span class="head text-capitalize">Amenities</span><div class="gal-5 owl-carousel owl-theme" > <?php $ret=mysqli_query($con,"select * from tblamenities where PropertyID='$vid' AND status='1'"); while ($row=mysqli_fetch_array($ret)){ ?> <div class="item" ><h1> <img src="<?php echo $row['source'] ?>" style="height:175px; margin: auto; width:175px;" alt="Amenities"> </h1> <h6><?php echo $row['Title'] ?></h6> </div> <?php } ?></div></section>

<!--****** NRI services Section ******--> 
<section class="section shadow-sm lazyload" data-script="./assets/plugins/fancybox/jquery.fancybox.min.js" ><span class="section-link" id="nriservices"></span><span class="head text-capitalize">Services</span> <div class="row mb-3"><span class="d-block section-heading-sub text-capitalize">NRI Services</span> <p>We provides better, excellent, and different service from what is usual especially to NRI's. As we have huge team exclusively for NRI clients, We understand your demand and desire deeply and provides you with profound facilities as per your need and preferences.We provide better, greater, and different service from what is usual especially to NRI's. As we have huge team exclusively for NRI clients, we understand your demand and desire deeply and provide you with profound facilities as per your need and preferences. We have a different massive team for NRI client thus they perform their role as per their convenience of meeting and guide them with their budgeting, location confusion, configuration selection and documentation process. With us you have to sit and enjoy your hot coffee and rest is our duty</p> </div> <?php $ret=mysqli_query($con,"select * from tblyoutubeurl where PropertyID='$vid'");while ($row=mysqli_fetch_array($ret)) { echo $row['youtubeURL'];} ?> </section> 
    
<!--****** Right Section Area ******-->   
<?php include('include/rightsection.php'); ?>
     
<!--****** Mobile UI Footer******-->  
<?php include('include/mobilefooter.php'); ?>

<!--****** Pop up starts ******-->  
<?php include('include/popup.php'); ?>
    
</main>
<!--****************** MAIN CONTENT SECTION ENDS ******************-->

<!--****** Rera Number only displayed for Mobile UI ******--> 
<section class="section shadow-sm lazyload" id="rera-desktop" data-script="./assets/plugins/fancybox/jquery.fancybox.min.js" ><span class="section-link" id="location"></span><span class="head text-capitalize">Rera No</span> <div class="row mb-3 rera"><span class="d-block section-heading-sub text-capitalize map">Rera No</span> <div class="rera-disp"><?php $ret=mysqli_query($con,"select * from tblrera where PropertyID='$vid'");while ($row=mysqli_fetch_array($ret)) {echo $row['Rera'];echo "<br>";}?> </div></div></section> 
 
<!--****** Footer Attributes ******-->  
<section class="section shadow-sm lazyload"> <div class="at-property-item my-2 pt-md-0" align="center"> <p><a href="privacy.php">Privacy Policy || Terms & Conditions || FAQ</a><a href="PMAY-SUBSIDY.php"> || PMAY SUBSIDY</a></p> <br> <span class="pro-rera" id="rera-mobile"><span class="heading">RERA No</span> : <?php $ret=mysqli_query($con,"select * from tblrera where PropertyID='$vid'");while ($row=mysqli_fetch_array($ret)) {echo $row['Rera'];echo ",";}?></span> <br> Disclaimer & Privacy Policy : Information Purpose Website | Content Provided By Respective Owners | Authorized Channel Partner RERA No.A51800001892 | Project MahaRERA number is available on the website maharera.mahaonline.gov. in under registered projects. <br><h5><p style="font-size:15px">2022 © Copyright - All Rights Reserved.</p></h5></div> </section>  

 
<script>document.addEventListener("DOMContentLoaded", function(event){document.getElementById("loader").remove();document.querySelector('header').classList.remove('pload');document.querySelector('main').classList.remove('pload');});var sitePrimaryColor='#CE8B3C';</script> 

<script>
    document.getElementById("myBtnRight").addEventListener("click", function()
    {
       
    var enu = $('#enu').val(); 
    var t = atob(enu);
   
    $("form").attr("action", t);
      
         });
</script>

<?php include 'include/footer.php'; ?>
</body>
</html>

