<!--****** Facebook Pixel Code ******-->
<?php $ret=mysqli_query($con,"select * from tblextracode where PropertyID='$vid'");while ($row=mysqli_fetch_array($ret)) { echo $row['code3'];} ?>