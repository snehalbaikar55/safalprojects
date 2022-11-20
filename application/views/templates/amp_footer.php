<div class="footer-bg-color">
<div class="container " >
<div class="grid_7">

<div class="col-md-4">
<h5>Contact</h5>
                <address class="footer-addr">
                        Horizon Financial Planners Shop No. 7, Shramsaflya CHS., Bulding No. 66, Near Abhyudaya Bank, Nehru Nagar, Kurla East Mumbai - 400 024
                        <br>
                        email:
                        <a href="mailto:info@horizonfp.com">info@horizonfp.com</a>

                        <div class="phone">
                         <a  href="tel://+919833719888"><i class="fa fa-phone" ></i>&nbsp; 9833717888</a>
                        </div>
                    </address>
            </div>
            <div class="col-md-3">
            <h5>Quick Links</h5>
                <ul class="list_2">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">About Us</a>
                        </li>
                        <li>
                            <a href="#">Properties</a>
                        </li>
                        <li>
                            <a href="#">Services</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                </ul>
            </div>
            
            <div class="col-md-3">
            <h5>Latest Projects</h5>
                <ul class="list_2">
                        <li>
                            <a href="#">Lodha Palava</a>
                        </li>
                        <li>
                            <a href="#">Lodha Amara</a>
                        </li>
                        <li>
                            <a href="#">Omkar Meridia</a>
                        </li>
                        <li>
                            <a href="#">Lodha Upper Thane</a>
                        </li>
                        <li>
                            <a href="#">Tata Amantra</a>
                        </li>
                </ul>
            </div>
            <div class="col-md-2">
            <h5>More</h5>
                <ul class="list_2">
                        <li>
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#">FAQ</a>
                        </li>
                        <li>
                            <a href="#">Terms & Conditions</a>
                        </li>
                        
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
        </div>
        </div>
    <div class="copy">
        <div class="col-md-8">
            <p>© 2017 All Rights Reseverd Designed by <a href="http://99soft.in/" target="_blank">99soft</a></p>
       <br>
        </div>
        <div class="col-md-4">  
            <ul class="social-icons">
                <li><a href="#" target="_blank"><amp-img width="35" height="35" alt="" src="<?php echo base_url()?>images/facebook.png"></amp-img></a></li>
                <li><a href="#" target="_blank"><amp-img width="35" height="35" alt="" src="<?php echo base_url()?>images/linkedin.png"></amp-img></a></li>
                <li><a href="#" target="_blank"><amp-img width="35" height="35" alt="" src="<?php echo base_url()?>images/youtube.png"></amp-img></a></li>
                <li><a href="#" target="_blank"><amp-img width="35" height="35" alt="" src="<?php echo base_url()?>images/google-plus.png"></amp-img></a></li>

            </ul>
        </div>
        </div>
<footer class="footer1">    
    <div class="float_center">
         <?php foreach ($property->result() as $row):
         if(!$row->url) 
{
 $region= $row->region;
  $region1= str_replace(' ','-', $region);
  $name = $row->name;
  $name1 = str_replace(' ','-', $name); 
  $city = $row->city;
  $city1 = str_replace(' ','-', $city); ?>
  <center>
    
     <?= anchor("Pages/generic/{$row->id}/{$region1}/{$name1}/{$city1}","View More",['class'=>'footer1','target'=>'_blank']) ?>
         </center>

         <?php }
         else
         {?>
            <center>
        <?= anchor($row->url,"View More",['class'=>'footer1','target'=>'_blank']) ?>
         </center>

            <?php

         }
         ?>
        <?php endforeach; ?>
</div>
        <div class="clearfix"></div>
    </div>
</footer>
   
</body>
</html>