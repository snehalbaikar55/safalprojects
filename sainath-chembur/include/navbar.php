<!--****** Logo ******-->
<?php
$ret=mysqli_query($con,"select * from tbllogos where PropertyID='$vid'");
while ($row=mysqli_fetch_array($ret)) 
{ ?>   
<div id="loader"><span class="loader-text"><img src="img/<?php echo $row['FeaturedImage'] ?>" class="loader-logo"  alt="logo"></span> </div> 
  

<!--****** Header & navbar ******-->
<header class="micro-nav fixed-top pload"> <nav class="navbar navbar-expand-lg navbar-light bg-white micro-navbar">
 <a class="navbar-brand" href="#" onclick="return false">
<img src="img/<?php echo $row['FeaturedImage'] ?>" class="logo" alt=" logo"></a>  <?php } ?>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button> 
<div class="collapse navbar-collapse" id="navbarNav"> <ul class="navbar-nav nav-fill"> 
<li class="nav-item"><a class="nav-link" href="index.php#home"><i class="mi mi-home nav-icon"></i><span class="d-sm-inline d-md-none"> Home</span></a></li>
<li class="nav-item"><a class="nav-link" href="index.php#pricing"><i class="fa fa-rupee"></i> Price</a></li> 
<li class="nav-item"><a class="nav-link" href="index.php#sitefloorplan"><i class="mi mi-siteplan nav-icon"></i>Floor Plans</a></li>
<li class="nav-item"><a class="nav-link" href="index.php#amenities"><i class="fa fa-cutlery"></i>Amenities</a></li> 
<li class="nav-item"><a class="nav-link" href="index.php#gallery"><i class="mi mi-gallery nav-icon"></i> Gallery</a></li> 
<li class="nav-item"><a class="nav-link" href="location.php"><i class="fa fa-road"></i> Location</a></li>
<li class="nav-item"><a class="nav-link" href="index.php#nriservices"><i class="fa fa-plane"></i> NRI Services</a></li>
<li class="nav-item"><a class="nav-link" href="emi-calculator.php"><i class="fa fa-calculator"></i> EMI Calculator</a></li> 
<li class="nav-item overflow-hidden"><a class="nav-link enqModal" href="#" data-form="md" data-title="Download brochure" data-btn="Download now" data-enquiry="Ebook Download" data-redirect="brochure" data-redirect-file="brochure.pdf" data-toggle="modal" data-target="#enqModal"><i class="mi mi-download nav-icon d-inline-block animated slideInDown infinite"></i> Brochure</a></li></ul> </div> </nav> </header>
