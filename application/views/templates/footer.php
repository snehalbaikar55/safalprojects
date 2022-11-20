<div style="background: #fff;" id="foo">
<div class="container " >
<div class="grid_7">
<div class="col-md-3">
                <h4 style="color: #095ba2; font-weight: 700">Receive our Newsletter</h4>
                
                <div class="search">
                          
                               <input type="text" name="email" id="subscriber"  placeholder="Your Email Address">
                               <input type="submit" id="subscribe" value="Subscribe">
                               <p class="msg" id="msg">Successfully Subscribed</p>
                               <p class="email" id="exist">Email address already exist</p>
                                <p class="error" style="color : #f94b67;" id="error">Invalid Email Id</p>
                        </div>
            </div>

        	<div class="col-md-3">
            <h4 style="color: #095ba2; font-weight: 700">Latest Projects</h4>
                <ul class="list_2">
                     <li>
                            <a href="https://www.kalpataruproject.com/projects/kalpataru-paramount"target="_blank">Kalpataru Paramount</a>
                        </li>
                        <li>
                            <a href="https://www.kalpataruproject.com/projects/kalpataru-immensa"target="_blank">Kalpataru Immensa</a>
                        </li>
                        <li>
                            <a href="https://www.kalpataruproject.com/projects/kalpataru-crest"target="_blank">Kalpataru Crest</a>
                        </li>
                        <li>
                            <a href="https://www.kalpataruproject.com/projects/kalpataru-sunrise"target="_blank">Kalpataru Sunrise</a>
                        </li>
                        <li>
                            <a href="https://www.kalpataruproject.com/projects/kalpataru-siddhachal-elegant"target="_blank">Kalpataru Siddhachal Elegant</a>
                        </li>
                       
                        
                        
                        
                </ul>
            </div>
        	
        	
        	<div class="col-md-3">
            <h4 style="color: #095ba2; font-weight: 700">More</h4>
        		<ul class="list_2">
                        <li>
                            <a href="<?php echo base_url() ?>privacy" target="_blank">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#">FAQ</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>privacy" target="_blank">Terms & Conditions</a>
                        </li>
                        
                </ul>
        	</div>

            
    
       	<div class="clearfix"> </div>
        </div>
		</div>
        </div>
	<div class="copy">
        <div class="col-md-8">
            <p>© 2018 All Rights Reseverd Designed by <a href="http://99soft.in/" target="_balnk">99soft</a></p>
            <p>Projects has been registered via MahaRERA.It is available on the website <a href="https://maharera.mahaonline.gov.in" target="_blank">maharera.mahaonline.gov.in</a></p>
       <br>
		</div>
        <!--<div class="col-md-4">	
            <ul class="social-icons">
                <li><a href="https://www.facebook.com/Lodha-Projects-365964260587268/" target="_blank"><img width="35" height="35" alt="" src="<?php echo base_url()?>images/facebook.png"></a></li>
                <li><a href="https://www.linkedin.com/company/13726552/admin/overview/" target="_blank"><img width="35" height="35" alt="" src="<?php echo base_url()?>images/linkedin.png"></a></li>
                <li><a href="https://www.youtube.com/channel/UCDgcrysJ0oq1EoUPailukCA/featured?view_as=subscriber" target="_blank"><img width="35" height="35" alt="" src="<?php echo base_url()?>images/youtube.png"></a></li>
                <li><a href="https://plus.google.com/collection/oPdiZE" target="_blank"><img width="35" height="35" alt="" src="<?php echo base_url()?>images/google-plus.png"></a></li>

            </ul>
        </div>
        -->
	    </div>

<script type="text/javascript">
    $(document).ready(function(){
        $(".btn-md").click(function(){
        var enu = $('#enu').val();
        var t = atob(enu);
    $("form").attr("action", t);
  });
        $('#subscribe').on('click', function(){
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var subscriber = $("#subscriber").val();
            
            if(regex.test(subscriber))
            {
                $.ajax({
                    url: "Pages/newsletter",
                    method: "POST",
                    data: {subscriber : subscriber},
                    cache: false,
                success: function(data)
                {
                    
                    
                   if(data == 1)
                    {
                        $('#msg').show();
                        $('#error').hide();
                        $('#exist').hide();
                    }
                    else
                    {   
                        $('#msg').hide();
                         $('#error').hide();
                        $('#exist').show();
                    }
                    

                },

                error: function(data){
                    alert('data');
                }
                });
            }

           else
            {
               $('#msg').hide();
                $('#exist').hide();
                $('#error').show();
                
            }
           

        });
    });
</script>     
</body>
</html>