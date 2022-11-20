<ul class="mob-action nav nav-fill d-sm-block d-lg-none">
<li class="nav-item" onclick="javascript:location.href='tel:<?php $ret=mysqli_query($con,"select * from tblpropertydetails where PropertyID='$vid'");while ($row=mysqli_fetch_array($ret)) { echo $row['Cnumber'];} ?>'">
<span class="mi mi-call action-icon"></span> Call</li>

<li class="nav-item enqModal" data-form="md" data-title="Mail me pricing details" data-btn="Send now" data-enquiry="Enquire Now" data-redirect="enquiry" data-toggle="modal" data-target="#enqModal">
<span class="mi mi-enquire action-icon"></span> Enquire</li>

<li class="nav-item" onclick="window.open('https://api.whatsapp.com/send?phone=+919833717888&text=Hi!%20I\'m%20Interested%20In%20 <?php $ret=mysqli_query($con,"select * from tblpropertydetails where PropertyID='$vid'");while ($row=mysqli_fetch_array($ret)) { echo $row['PropertyName'];} ?>.%20Please%20Share%20Details.', '_blank');">
<span class="mi mi-whatsapp action-icon">
<span class="path1"></span><span class="path2"></span><span class="path3"></span></span> WhatsApp</li> </ul>   
 