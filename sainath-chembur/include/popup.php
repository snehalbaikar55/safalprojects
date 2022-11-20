<div class="modal fade" id="enqModal" tabindex="-1" role="dialog" aria-hidden="true"> 
<div class="modal-dialog modal-dialog-centered enq-modal" role="document">
<div class="modal-content"> 
<div class="modal-body text-center"> 
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span> 
</button> 
<div class="modal-head d-none"><span class="modal-title">Title</span>
</div> 
 
<div class="d-flex"> 
<div class="flex-fill align-self-center flex-shrink-1 modal-highlight-bg d-none d-lg-block"  style="width: 50%;"> 
<span class="modal-highlight-title">We Promise</span> 
<ul class="modal-highlight"> <li><i class="mi mi-support-call"></i><span>Instant Call Back</span></li><li><i class="mi mi-support-visit"></i><span>Free Site Visit</span></li> <li><i class="mi mi-support-price"></i><span>Unmatched Price</span></li> </ul> 
</div> 

<div class="flex-fill align-self-center"> 
<?php
$ret=mysqli_query($con,"select * from tbllogos where PropertyID='$vid'");
while ($row=mysqli_fetch_array($ret)) 
{ ?> 
 
<img src="img/<?php echo $row['FeaturedImage'] ?>" class="modal-logo"  alt="logo">
<?php } ?>
   
<span class="modal-title-secondary">Register here and Avail the 
<span class="text-danger">Best Offers!!
</span> </span> 
<?php include('include/forms.php');?>     
</div> </div> 
<a href="tel:+91<?php
$ret=mysqli_query($con,"select * from tblpropertydetails where PropertyID='$vid'");
while ($row=mysqli_fetch_array($ret)) 
{ echo $row['Cnumber'];} ?>" class="modal-call-btn"><i class="mi mi-call"></i> +91<?php
$ret=mysqli_query($con,"select * from tblpropertydetails where PropertyID='$vid'");
while ($row=mysqli_fetch_array($ret)) 
{ echo $row['Cnumber'];} ?></a>
</div> </div> </div> </div>