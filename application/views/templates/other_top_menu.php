 <!-- <script>
function resizeHeaderOnScroll() {
  const distanceY = window.pageYOffset || document.documentElement.scrollTop,
  shrinkOn = 50,
  headerEl = document.getElementById('js-header');
  
  if (distanceY > shrinkOn) {
    headerEl.classList.add("smaller1");
    
  } else {
    headerEl.classList.remove("smaller1");
   
  }
}

window.addEventListener('scroll', resizeHeaderOnScroll);
</script> -->  
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
<script type="text/javascript">
  $(document).on('click', 'a[href^="#"]', function(e) {
    // target element id
    var id = $(this).attr('href');
    
    // target element
    var $id = $(id);
    if ($id.length === 0) {
        return;
    }
    
    // prevent standard hash navigation (avoid blinking in IE)
    e.preventDefault();
    
    // top position relative to the document
    var pos = $id.offset().top - 20 ;
    
    // animated top scrolling
    $('body, html').animate({scrollTop: pos});
});
</script> 
<!-- <script type="text/javascript">
	$(document).ready(function(){
  // $sections incleudes all of the container divs that relate to menu items.
  var $sections = $('.row');
  
  // The user scrolls
  $(window).scroll(function(){
    
    // currentScroll is the number of pixels the window has been scrolled
    var currentScroll = $(this).scrollTop();
    
    // $currentSection is somewhere to place the section we must be looking at
    var $currentSection
    
    // We check the position of each of the divs compared to the windows scroll positon
    $sections.each(function(){
      // divPosition is the position down the page in px of the current section we are testing      
      var divPosition = $(this).offset().top;
      
      // If the divPosition is less the the currentScroll position the div we are testing has moved above the window edge.
      // the -1 is so that it includes the div 1px before the div leave the top of the window.
      if( divPosition -1 < currentScroll){
        // We have either read the section or are currently reading the section so we'll call it our current section
        $currentSection = $(this);
        
        // If the next div has also been read or we are currently reading it we will overwrite this value again. This will leave us with the LAST div that passed.
      }
      
      // This is the bit of code that uses the currentSection as its source of ID
      var id = $currentSection.attr('id');
   	 $('a').removeClass('active');
   	 
   	 $("[href=#"+id+"]").addClass('active');
   	 
      
    })

  });
});
</script>  -->


<body>
<header id="js-header1">
	<div class="col-xs-4">
	  <div class="logo">
      <?php if($logo)
    {
     foreach($logo as $key): ?>
    <a href="#"><img src="<?php echo base_url()?>uploads/logo/<?php echo $key->file_name;?>" alt=""/></a>
    <?php endforeach;?>
<?php } else {?>
<a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>images/logo.png" alt="" height="50"></a></a>
<?php } ?>
	  </div>
	</div>
	<div class="col-xs-8 header_right">
	  <span class="menu"></span>
			<div class="top-menu" style="margin-left: 2px;">
				<ul class="ul1">
					<a style="margin:11px 13px;padding:8px 32px;color:#fff;background-color: #095ba2; " class="btn btn-primary hidden-xs" href="#"><i style="color:#fff;" class="fa fa-phone blink"> </i> &nbsp; 9833717888</a>
					<li ><a href="#home">Home</a></li>
					<li><a href="#description"> About</a></li>
					<li><a href="#amenities">Amenities</a></li>
					<!--<li><a href="gallery"><i class="fa fa-picture-o"> </i>Gallery</a></li>-->
					<li><a href="#floor_plans">Floor Plans</a></li>
          <li><a href="#pricing">Pricing</a></li>
					<li><a href="#location">Location</a></li>
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