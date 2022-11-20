<!doctype html>
<!--****************** HEAD SECTION STARTS ******************-->
<html>
<head>

<!--****** Meta Tags******-->
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><meta name="language" content="English"><meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta name="title" content="<?php $ret=mysqli_query($con,"select * from tblpropertydetails where PropertyID='$vid'"); while ($row=mysqli_fetch_array($ret)) { echo $row['PropertyName'];} ?>">
<meta name="description" content="<?php $ret=mysqli_query($con,"select * from tblkeywords where PropertyID='$vid'"); while ($row=mysqli_fetch_array($ret)) { echo $row['metadescription'];} ?>">
<meta name="keywords" content="<?php $ret=mysqli_query($con,"select * from tblkeywords where PropertyID='$vid'"); while ($row=mysqli_fetch_array($ret)) { echo $row['keywords'];} ?>">

<!--****** FAVICON ******-->  
<?php $ret=mysqli_query($con,"select * from tblfavicon where PropertyID='$vid'");while ($row=mysqli_fetch_array($ret)) { ?> <link rel="icon" href="img/<?php echo $row['FeaturedImage'] ?>" <?php } ?> sizes="16x16" alt="<?php $ret=mysqli_query($con,"select * from tblpropertydetails where PropertyID='$vid'");while ($row=mysqli_fetch_array($ret)) { echo $row['PropertyName'];} ?> favicon">

<!-- Title -->
<title> <?php $ret=mysqli_query($con,"select * from tblpropertydetails where PropertyID='$vid'");while ($row=mysqli_fetch_array($ret)) { echo $row['PropertyName'];} ?> </title>

<!-- Colour -->
<?php $ret=mysqli_query($con,"select * from tblpropertydetails where PropertyID='$vid'"); while ($row=mysqli_fetch_array($ret)) { ?> 
<style>:root{--colorPrimary:<?php echo $row['Colour1'] ?>;--colorSecondary:<?php echo $row['Colour2'] ?>;--colorBtn:#ffffff}#loader{width:100vw;height:100vh;background-color:rgba(255,255,255,1);position:fixed;top:0;left:0;z-index:1040}.loader-text{display:block;text-align:center;color:#d7d7d7;font-family:Arial,sans-serif;position:absolute;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);-o-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.loading{height:0;width:0;padding:4vw;border:.8vw solid #ccc;border-right-color:#888;border-radius:6vw;-webkit-animation:rotate 1s infinite linear}@keyframes loader{0%{filter:grayscale(0)}50%{filter:grayscale(100%)}100%{filter:grayscale(0)}}.loader-logo{width:300px;-webkit-animation:loader 1.3s infinite linear;-moz-animation:loader 1.3s infinite linear;-ms-animation:loader 1.3s infinite linear;-o-animation:loader 1.3s infinite linear;animation:loader 1.3s infinite linear}.pload{display:none}</style>
<link rel="preload" href="assets/css/style.css" as="style">
<?php } ?>
 
 
<!-- Link Refernces -->
<link rel="stylesheet" href="assets/css/style.css">
<link rel="preload" href="assets/js/app.js" as="script">


<link rel="preload" href="assets/fonts/roboto-bold-webfont.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="assets/fonts/roboto-regular-webfont.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="assets/fonts/muli-variablefont_wght-webfont.woff2" as="font" type="font/woff2" crossorigin> 
<link rel="preload" href="assets/fonts/micon.woff2" as="font" type="font/woff2" crossorigin> 
<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">

<link rel="dns-prefetch" href="https://www.clickcease.com/monitor/stat.js" crossorigin>
<link rel="dns-prefetch" href="https://www.clickcease.com" crossorigin>
<link rel="dns-prefetch" href="http://google-analytics.com/" crossorigin>
<link rel="dns-prefetch" href="http://googletagmanager.com/" crossorigin>
<link rel="dns-prefetch" href="http://www.googleadservices.com/" crossorigin>
<link rel="dns-prefetch" href="http://googleads.g.doubleclick.net/" crossorigin>
<link rel="dns-prefetch" href="http://ipinfo.io/" crossorigin>
<link rel="dns-prefetch" href="http://cdn.jsdelivr.net/" crossorigin>
<link rel="dns-prefetch" href="https://connect.facebook.net/en_US/fbevents.js" crossorigin>
<link rel="dns-prefetch" href="https://connect.facebook.net/" crossorigin>

<style>@media only screen and (min-width: 1200px) { #rera-desktop{ display: none;}} @media only screen and (min-width: 992px).pro-rera { font-size: 17px !important; color: #000 !important;}.rera-disp { padding-top: 6px; margin-left: 30px;}</style>
<script src="assets/js/app.js" defer> </script>

<!-- Global site tag (gtag.js) -->
<?php include('include/googlesitetag.php');?>

<!-- Facebook Pixel Code -->
<?php include('include/facebookpixelcode.php'); ?>

</head> 

<!--****************** HEAD SECTION ENDS ******************-->