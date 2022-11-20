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
    
<!-- Privacy Policy Starts --> 
<section class="section shadow-sm lazyload" data-script="./assets/plugins/fancybox/jquery.fancybox.min.js"  style="top:50px;">
<span class="section-link" id="nriservices">
</span>
<span class="head text-capitalize"></span> 
<div class="row mb-3">
<span class="d-block section-heading-sub text-capitalize">Privacy Policies</span> 
<p>In our endeavor and commitment of protecting your personal information, we have designed this comprehensive privacy policy. This is to keep your interests and information safe on our website.This privacy policy is subject to undergo change and review without any prior notice or approval. So to keep yourself updated on the changes introduced, please keep visiting and reviewing the terms and conditions of this privacy policy.</p>
    
<span class="d-block section-heading-sub text-capitalize">Terms & Conditions</span> 
<p>By using our website, you agree to abide by the rules laid out by us and consent to collection and use of all such information that you may furnish to, or through, our website. In some cases, while you visit our website, you may not need to provide any personal information. But in certain instances, we must have your personal information in order for us to grant you access to some of the links or sites. Such links/ pages may ask for your name, e-mail address, phone number etc. The information furnished by you is used to provide relevant products and services and to acknowledge receipt of your communication or to send out information and updates to you. You have option of requesting removal from our mailing list. We do not give away your personal information to any third party.</p>
<br>
    <p>To ensure security while transferring sensitive information, all the ongoing transmissions between client and server are encrypted using advanced and standard protocols. We also practice restricted access by employees and hold them to high levels of confidentiality. Use of cookies We may use cookies for security, session continuity, and customization purposes. In case of a user opting to reject a cookie, he/ she may not be able to gain access to some of the limited services or use some features of the site. In case of any queries or suggestions regarding privacy statement or your dealings with this web site, please contact.</p>
    
</section> 
<!-- Privacy Policy Ends-->
    
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