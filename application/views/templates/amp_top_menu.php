<!--<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
</script>-->
 <!--font-Awesome-->


<body>
	<amp-sidebar id="sidebar1" layout="nodisplay" side="right">
		
  <ul class="menu">
    <!--<li><a href="<?php echo base_url()?>" ><i class="fa fa-home"> </i>  Home</a></li>
    <li><a href="<?php echo base_url()?>/about" ><i class="fa fa-star"> </i>  About</a></li>
    <li><a href="<?php echo base_url()?>/services" ><i class="fa fa-thumbs-up"> </i>  Services</a></li>
    <li><a href="<?php echo base_url()?>/contact" ><i class="fa fa-envelope-o"> </i>  Contact</a></li>-->
<li><a href="#home" ><i class="fa fa-home"> </i>  Home</a></li>
   <li><a href="#description"> About</a></li>
<li><a href="#amenities">Amenities</a></li>
					<!--<li><a href="gallery"><i class="fa fa-picture-o"> </i>Gallery</a></li>-->
<li><a href="#floor_plans">Floor Plans</a></li>
<li><a href="#location">Location</a></li>
  </ul>

  
</amp-sidebar>

<header id="js-header">
<div class="col-xs-4">
<div class="logo">
		<?php if($logo)
    {
     foreach($logo as $key): ?>
		<a href="#"><amp-img src="<?php echo base_url()?>uploads/logo/<?php echo $key->file_name;?>" alt="" width="198" height="26"></amp-image></a>
			<?php endforeach;?>
<?php } else {?>
<a href="<?php echo base_url()?>"><amp-img src="<?php echo base_url()?>images/logo.png" alt="" width="198" height="26"></amp-image></a>
<?php } ?>
	  </div>
</div>

	<button id="menu-btn" class="btn" on="tap:sidebar1.toggle">
&#9776;
           </button>
</header> 

 <!--<header id="js-header">
	<div class="col-xs-4">
	  <div class="logo">
		<a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>images/logo.png" alt=""/></a>
	  </div>
	</div>
	
	 
			
				
				
					<amp-sidebar id="sidebar1" layout="nodisplay" side="right">
						<ul>
						<li><a href="#idTwo" >Nav item 2</a></li>
					<li><a  href="<?php echo base_url()?>">Home</a></li>
					<li><a href="about">About</a></li>
					<li><a href="services"></i>Services</a></li>
					<!--<li><a href="gallery"><i class="fa fa-picture-o"> </i>Gallery</a></li>-->
				<!--<li><a href="contact"></i>Contact</a></li>
			</ul>
					<nav toolbar="(max-width: 767px)" toolbar-target="target-element">
    <ul>
      <li>
        <input placeholder="Search..."/>
      </li>
    </ul>
  </nav>
				</amp-sidebar>
				<button class="hamburger" on='tap:sidebar1.toggle'></button>
<button on='tap:sidebar1'>Open</button>
<button on='tap:sidebar1.open'>Open</button>
<button on='tap:sidebar1.close'>x</button>
				<div class="clearfix"></div>
			
			<!-- script for menu -->
				
			<!-- script for menu -->
	
	<!--<div class="clearfix"> </div>
</header>-->