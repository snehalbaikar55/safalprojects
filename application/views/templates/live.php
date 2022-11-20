<script type="text/javascript">
function resizeHeaderOnScroll() {
  const distanceY = window.pageYOffset || document.documentElement.scrollTop,
  shrinkOn = 50,
  headerEl = document.getElementById('js-header');
  
  if (distanceY > shrinkOn) {
    headerEl.classList.add("smaller");
  } else {
    headerEl.classList.remove("smaller");
  }
}

window.addEventListener('scroll', resizeHeaderOnScroll);
</script>
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
 

<body>
<header id="js-header">
	<div class="col-xs-4">
	  <div class="logo">
		<a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>images/logo.png" width="300" height="69" alt=""></a>
	  </div>
	</div>
	<div class="col-xs-8 header_right">
	  <span class="menu"></span>
			<div class="top-menu">
				<ul>
					<li><a class="scroll" href="<?php echo base_url()?>"><i class="fa fa-home"> </i>Home</a></li>
					<li><a href="<?php echo base_url()?>about"><i class="fa fa-star"> </i> About</a></li>
					<li><a href="<?php echo base_url()?>services"><i class="fa fa-thumbs-up"> </i>Services</a></li>
					<!--<li><a href="<?php echo base_url()?>gallery"><i class="fa fa-picture-o"> </i>Gallery</a></li>-->
					<li><a href="<?php echo base_url()?>contact"><i class="fa fa-envelope-o"> </i>Contact</a></li>
					<div class="clearfix"></div>
				</ul>
			 </div>
			<!-- script for menu -->
				<script type="application/ld+json">
				$( "span.menu" ).click(function() {
				  $( ".top-menu" ).slideToggle( "slow", function() {
				    // Animation complete.
				  });
				});
			</script>
			<!-- script for menu -->
	</div>
	<div class="clearfix"> </div>
</header>