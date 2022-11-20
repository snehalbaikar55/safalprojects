<div class="container" id="godrej">
   	 <h1 class="blog_head">Our Projects</h1>
   	  <div class="grid_1">

   	  	<?php 
if($kalpataru)
{
?>

<?php foreach ($kalpataru as $row): ?>
		<div class="col-md-4 box_1">
			<a href="https://www.kalpataruproject.com/projects/<?php echo $row->pro_name; ?>" target="_blank">
				<img src="https://www.1stprelaunch.com/uploads/<?php echo $row->image; ?>"  alt="" class="img-responsive1"/></a>
		    <div class="box_2">
			  <div class="special-wrap"><div class="hot_offer"><span class="m_11">Hot Offer</span></div><div class="forclosure"><span class="m_12">Special Offer</span></div></div>
			</div>
		    <div class="box_3">
			 <center><h4><a style="color:#ca2e6d;" href="https://www.kalpataruproject.com/projects/<?php echo $row->pro_name; ?>" target="_blank"><?php echo $row->name; ?></a></h4></center>
			
			 <p><i class="fa fa-map-marker"></i> <?php echo $row->city; ?></p>
			 <p><i class="fa fa-home"></i> <?php echo $row->type; ?></p>
			 <span style="margin-top:-29px;" class="anchor hidden-xs"><a style="color:#fff;" href="https://www.kalpataruproject.com/projects/<?php echo $row->pro_name; ?>" target="_blank">Know More</a></span>
			<br>
		   </div>
		</div>
	<?php endforeach; ?>
	<?php } ?>	
		
		
		
		
		<div class="clearfix"> </div>
	</div>
	</div>