<script>
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
 <!--font-Awesome-->
<link rel="stylesheet" href="<?php echo base_url()?>fonts/css/font-awesome.min.css">
<!--font-Awesome-->


<body>
    
    <!--  Clickcease.com tracking-->
<script type='text/javascript'>var script = document.createElement('script');
script.async = true; script.type = 'text/javascript';
var target = 'https://www.clickcease.com/monitor/stat.js';
script.src = target;var elem = document.head;elem.appendChild(script);
</script>
<noscript>
<a href='https://www.clickcease.com' rel='nofollow'><img src='https://monitor.clickcease.com/stats/stats.aspx' alt='ClickCease'/></a>
</noscript>
<!--  Clickcease.com tracking-->

<header id="js-header">
	<div class="col-xs-4">
	  <div class="logo">
		<a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>images/logo-kalpataru.jpg" alt=""/></a>
	  </div>
	</div>
	<div class="col-xs-8 header_right">
	  <span class="menu"></span>
			<div class="top-menu">
				<ul>
				    <a style="margin:2%;padding:8px 32px;font-size:17px;font-weight:700;color:#02a2d6;" class="btn hidden-xs" href="tel://+919619920094"><i class="fa fa-phone blink"> </i> &nbsp; 9619920094</a>
					<li><a class="scroll" href="<?php echo base_url()?>"><i class="fa fa-home"> </i> Home</a></li>
					<li><a href="about"><i class="fa fa-star"> </i> About</a></li>
					<!--<li><a href="services"><i class="fa fa-thumbs-up"> </i> Services</a></li>-->
					<!--<li><a href="gallery"><i class="fa fa-picture-o"> </i>Gallery</a></li>-->
					<li><a href="contact"><i class="fa fa-envelope-o"> </i> Contact</a></li>
					
				

					<!--<li><img class="hidden-xs " src="<?php echo base_url()?>images/logo.png" height="50"></li>-->
					<div class="clearfix"></div>
				</ul>
			 </div>
			<!-- script for menu -->
				<script>
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