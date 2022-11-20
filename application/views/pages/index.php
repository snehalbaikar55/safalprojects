<script src="<?php echo base_url()?>js/responsiveslides.min.js"></script>
<script src="<?php echo base_url()?>js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
</script>

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
    var pos = $id.offset().top - 170 ;
    
    // animated top scrolling
    $('body, html').animate({scrollTop: pos});
});
</script>  	
</head>

<div class="slider">
	  <div class="callbacks_container">
	      <ul class="rslides" id="slider">
	        <li>
	        <img src="<?php echo base_url()?>images/Kalpataru-Banner1.jpg" class="img-responsive" alt=""/>
	          <div class="banner_desc">
	          	
				</div>
			 
			  <div class="HomeMainSearch hidden-xs" id="advrSrch">  

  
  <div class="changeClsSid"></div>

  <div class="row">
  <div class="col-md-12">


  <div class="searchWhiteBg floatL">
      <div class="row marginLR0">
        <div class="col-md-3 col-sm-3 hm--ciChange  min_height50"> 
         
          	<div class="box posR ctySrchBx">
          		<i class="fa fa-map-marker"></i>
            <select class="wide" id="selectField" name="selectField" >
              <option data-display="Your Location" value="">&nbsp;&nbsp;&nbsp;&nbsp;Project Location</option>
                      <option value="Thane">&nbsp;&nbsp;&nbsp;&nbsp;Thane</option>
							<option value="Bhandup">&nbsp;&nbsp;&nbsp;&nbsp;Bhandup</option>
							<option value="Bandra">&nbsp;&nbsp;&nbsp;&nbsp;Bandra</option>
							<option value="Parel">&nbsp;&nbsp;&nbsp;&nbsp;Parel</option>
							<option value="Goregaon">&nbsp;&nbsp;&nbsp;&nbsp;Goregaon</option>
							<option value="Panvel">&nbsp;&nbsp;&nbsp;&nbsp;Panvel</option>
							<option value="Andheri">&nbsp;&nbsp;&nbsp;&nbsp;Andheri</option>
							<option value="Juhu">&nbsp;&nbsp;&nbsp;&nbsp;Juhu</option>
							<option value="Chandivali">&nbsp;&nbsp;&nbsp;&nbsp;Chandivali</option>
							<option value="Santacruz">&nbsp;&nbsp;&nbsp;&nbsp;Santacruz</option>
						
                </select>
              
        </div>
        </div>
          <div class="col-md-5 col-sm-5 col-xs-12 paddingLR0 wd--in min_height50">  
              <input type="text" placeholder="Search by Project Name " 
			   onfocus="if(this.value==this.defaultValue)this.value='';" 
			  onblur="if(this.value=='')this.value=this.defaultValue;"  class="searchInput--field" 
			  id="search" name="search"/> 

			  <span class="ui-menu" style="position: absolute; z-index:999; width:328px;height: 120px; overflow: auto; display: none;"></span>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-2 col-sm-2 col-xs-6 wd--btn  paddingLR0 min_height50 pad_resSB" >
           <a href="#kalpataru"><input type="submit" class="searchBTN floatR disIco" value="Search"></a>
		
          </div>
          
</div>


      </div>
  </div> 
</div>



  
      
    </div>
    

</li>
	        
	        
</ul>
</div>

	 </div>


<div class="smart_details">
<form name="property_search" action="<?php echo base_url()?>Pages/search_property" enctype="multipart/form-data" id="filter_form" accept-charset="utf-8">
			     <div class="container">
	    	     <div class="col-md-10 dropdown-buttons">   
            	  <div class="col-md-4 dropdown-button">           			
            		<div class="section_room">
						 <select id="selectField1"  class="frm-field required" >
							<option value="">Your Location</option>
						 <option value="Thane">&nbsp;&nbsp;&nbsp;&nbsp;Thane</option>
							<option value="Bhandup">&nbsp;&nbsp;&nbsp;&nbsp;Bhandup</option>
							<option value="Bandra">&nbsp;&nbsp;&nbsp;&nbsp;Bandra</option>
							<option value="Parel">&nbsp;&nbsp;&nbsp;&nbsp;Parel</option>
							<option value="Goregaon">&nbsp;&nbsp;&nbsp;&nbsp;Goregaon</option>
							<option value="Panvel">&nbsp;&nbsp;&nbsp;&nbsp;Panvel</option>
							<option value="Andheri">&nbsp;&nbsp;&nbsp;&nbsp;Andheri</option>
							<option value="Juhu">&nbsp;&nbsp;&nbsp;&nbsp;Juhu</option>
							<option value="Chandivali">&nbsp;&nbsp;&nbsp;&nbsp;Chandivali</option>
							<option value="Santiacruz">&nbsp;&nbsp;&nbsp;&nbsp;Santiacruz</option>
						
						 </select>
					  </div>
					</div>
					<div class="col-md-4 dropdown-button">
					  <div class="section_room">
						 <input type="text" name="mobile_search" id="mobile_search" class=" required ui-autocomplete-input search1" onblur="if(this.value=='')this.value=this.defaultValue;" placeholder="Search by Project Name">
							
					  </div>
					  <span class="ui-menu" style=" width:340px; position: absolute; z-index:999; height: 70px; overflow: auto; display: none;"></span>
					  </div>


					  
				   </div>
				   <div class="col-md-2 submit_button"> 
				   	  
				   	   <a href="#kalpataru"><input type="submit"  value="Search"></a>
				   	  
				   </div>
				   <div class="clearfix"> </div>
				</div>
				</form>
</div>
<div class="content_top" >
   <div class="container" id="kalpataru">
   	  <h1 class="blog_head">Our Projects</h1>
   	  <div class="grid_1">

   	  	<?php 
if($kalpataru)
{
?>

<?php foreach ($kalpataru as $row): ?>

		<div class="col-md-4 box_1">
		   
			<a href="https://www.kalpataruproject.com/projects/<?php echo $row->pro_name; ?>" target="_blank">
				<img  src="https://www.1stprelaunch.com/uploads/<?php echo $row->image; ?>"  alt="" class="img-responsive1"/></a>
		    <div class="box_2">
			  <div class="special-wrap"><div class="hot_offer"><span class="m_11">Hot Offer</span></div><div class="forclosure"><span class="m_12">Special Offer</span></div></div>
			</div>
		   <div class=" box_3">
			 <center><h4><a style="color:#02a2d6;font-weight:700;" href="https://www.kalpataruproject.com/projects/<?php echo $row->pro_name; ?>" target="_blank"><?php echo $row->name; ?></a></h4></center>
			
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
<div class="content_bottom">
<div class="container">
	   <!--<h1 class="blog_head">Our Services</h1>-->
	   <!--<div class="service_grid">-->
	   <!--    	<div class="col-md-3 service_box">-->
	   <!--    		<a class="fancybox" href="<?php echo base_url()?>real-estate-consulting" data-fancybox-group="gallery" title="Real Estate Consulting">-->
	   <!--    		<center><img src="<?php echo base_url()?>images/real-estate-consulting.png" class="img-responsive" alt="real-estate-consulting"/></center><span> </span></a>-->
			 <!--   <center><h3>Real Estate Consulting</h3></center>-->
				<!--<p>Horizon Financial Planners can help you turn critical and complex real estate issues <span>  <a href="<?php echo base_url()?>real-estate-consulting">[Read More..]</a></span></p>-->
	   <!--    	</div>-->
	   <!--    	<div class="col-md-3 service_box">-->
	   <!--    		<a class="fancybox" href="<?php echo base_url()?>home-loan-and-legal-consultation" data-fancybox-group="gallery" title="Legal Consultation">-->
	   <!--    		<center><img src="<?php echo base_url()?>images/legal-consulting.png" class="img-responsive" alt="legal-consulting"/></center><span> </span></a>-->
			 <!--   <center><h3>Home Loan & Legal Consultation</h3></center>-->
				<!--<p>Horizon Financial Planners helps you in getting your fantasy home through home loan services.<span>  <a href="<?php echo base_url()?>home-loan-and-legal-consultation">[Read More..]</a></span></p>-->
	   <!--    	</div>-->
	   <!--    	<div class="col-md-3 service_box">-->
	   <!--    		<a class="fancybox" href="<?php echo base_url()?>nri-services" title="NRI Services">-->
	   <!--    		<center><img src="<?php echo base_url()?>images/nri-services.png" class="img-responsive" alt="nri-services"/></center><span> </span></a>-->
			 <!--   <center><h3>NRI Services</h3></center>-->
				<!--<p>A much needed platform for NRI looking to own a property in Mumbai INDIA. One Point Solution <span>  <a href="<?php echo base_url()?>nri-services">[Read More..]</a></span></p>-->
	   <!--    	</div>-->
	   <!--    	<div class="col-md-3 service_box">-->
	   <!--    		<a class="fancybox" href="<?php echo base_url()?>after-sales-services" data-fancybox-group="gallery" title="After Sales Assistance">-->
	   <!--    		<center><img src="<?php echo base_url()?>images/after-sales-services.png" class="img-responsive" alt="after-sales-services"/></center><span> </span></a>-->
			 <!--   <center><h3>After Sales Assistance</h3></center>-->
				<!--<p>Horizon Financial Planners does not stop with simply giving you help with purchasing the property you require,<span>  <a href="<?php echo base_url()?>after-sales-services">[Read More..]</a></span></p>-->
	   <!--    	</div>-->
	   <!--    	<div class="clearfix"> </div>-->
    <!--     </div> -->
		
        <div class="grid_4">
                <div class="col-md-7 grid_6">
                    <h3>
                        Want to Purchase
                        your Dream Home?
                    </h3>
                </div>
                <div class="col-md-5 grid_5">
                    <div class="banner2">
                        <a class="btn2" href="#" data-toggle="modal" data-target="#more_details">click here</a>
                        <h3>
                            FOR A FREE <br>
                            APPRAISAL
                        </h3>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
        </div>
     
       </div> 
	</div>
</div>


<script type="text/javascript">
	function loadSearch1() {
		var base_url=window.location;
		var setC;
		setC= document.getElementById('selectField1').value;

		setC= setC.toLowerCase();
	if(document.getElementById('selectField1').value != "" )
{
  var setUrlS=base_url+setC;
   window.open(setUrlS);
   return false;
}

}

</script>



<script type="text/javascript">
	
	$(document).ready(function(){
		$('#search').on('keyup', function(){
			
			var query = $(this).val();
			//alert(query);
			if(query != '')
			{
				$.ajax({
					url: "Pages/get_term",
					method: "POST",
      				data: {name : query},
      				cache: false,
            	success: function(data)
            	{
            		$('.ui-menu').fadeIn();
                	$('.ui-menu').html(data);
            	},

            	error: function(data){
            		alert(data);
          	}
				});
			}


		});
	});

	$(document).on('click','.list1', function(){
		$('#search').val($(this).text());
		$('.ui-menu').fadeOut();

	});

	
$(document).bind('click', function (event) {
        // Check if we have not clicked on the search box
        if(!$(event.target).is('#search'))
		{
    		 $(".ui-menu").hide();
		}
		else
		{
			$(".ui-menu").show();
		}
       
        });

// $(document).on('click','#search', function(){
		
// 		$('.panel_1').slideDown();

// 	});
</script>

<script type="text/javascript">
	
	$(document).ready(function(){
		$('#mobile_search').on('keyup', function(){
			//alert("yo");
			var query = $(this).val();
			//alert(query);
			if(query != '')
			{
				$.ajax({
					url: "Pages/get_term",
					method: "POST",
      				data: {name : query},
      				cache: false,
            	success: function(data)
            	{
            		$('.ui-menu').fadeIn();
                	$('.ui-menu').html(data);
            	},

            	error: function(data){
            		alert(data);
          	}
				});
			}


		});
	});

	$(document).on('click','.list1', function(){
		$('#mobile_search').val($(this).text());
		$('.ui-menu').fadeOut();

	});

	
$(document).bind('click', function (event) {
        // Check if we have not clicked on the search box
        if(!$(event.target).is('#mobile_search'))
		{
    		 $(".ui-menu").hide();
		}
		else
		{
			$(".ui-menu").show();
		}
       
        });

// $(document).on('click','#mobile_search', function(){
		
// 		$('.panel_mobile').slideDown();

// 	});
</script>
<script type="text/javascript">
	
	$(document).on('change', '#selectField', function() {
      
        var city_name = $(this).val();
        //alert(city_name);
        if(city_name != "") {
          $.ajax({
            url:"Pages/get_kalpataru_pro",
            data:{city:city_name},
            type:'POST',
            success:function(data) {
            // alert('hi');

           $('#kalpataru').html(data);
            
            }
          });
        } else {
          alert("error");
        }
      });
</script>

<script type="text/javascript">
	
	$(document).on('change', '#selectField1', function() {
      
        var city_name = $(this).val();
        //alert(city_name);
        if(city_name != "") {
          $.ajax({
            url:"Pages/get_kalpataru_pro",
            data:{city:city_name},
            type:'POST',
            success:function(data) {

            //var data1 = $.trim(data);
         // $('select[name="project_name"]').append(data1);
          $('#kalpataru').html(data);
             // $("#pi").html(data);
            }
          });
        } else {
          alert("error");
        }
      });
</script>

</body>
</html>		