<?php
$url = "https://www.swashivam.com/modules/Webforms/capture.php";
$enu = base64_encode($url);
?>

<!---------------------website1 form-------------------->
 <div class="modal fade" id="test" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center><h4 class="modal-title">Website Form</h4></center>
      </div>
      <div class="modal-body">


          
         <form id="__vtigerWebForm" name="kalpataru project" action="capture.php" method="post" accept-charset="utf-8" enctype="multipart/form-data"><input name="__vtrftk" value="sid:159c5039eb676704a4d09be8231b9007edb94df4,1511254518" type="hidden">
                        <input name="publicid" value="8efe16d7e612273d48aa22ea2978bdf9" type="hidden">
                        <input name="urlencodeenable" value="1" type="hidden">
                        <input name="name" value="kalpataru project" type="hidden">
                         <input name="__vtCurrency" value="1" type="hidden">

   
          <div class="form-group form_name">
		  <input class="form-control" name="lastname" data-label="" value="" pattern="[a-zA-Z\s]{1,}"  required="true" type="text" placeholder="Enter Your Name">

          	</div>
          <div class="form-group_2 form_email">
		  <input name="email" class="form-control" data-label="" value="" type="email" required="true" placeholder="Enter Email Address"></div>
           <div class="form-group form_country">
			<select name="cf_leads_countrycode" data-label="label:Country+Code" class="form-control">
				<option value="India +91">India +91</option> 
				<option value=" Afghanistan +93"> Afghanistan +93</option>
				<option value=" Albania +355">Albania +355</option><option value="Algeria +213">Algeria +213</option><option value="Andorra +376">Andorra +376</option><option value="Angola +244">Angola +244</option><option value="Argentina +54">Argentina +54</option><option value="Armenia +374">Armenia +374</option><option value="Australia +61">Australia +61</option><option value="Austria +43">Austria +43</option><option value="Azerbaigan +994">Azerbaigan +994</option><option value="Bahrain +973">Bahrain +973</option><option value="Bangladesh +880">Bangladesh +880</option><option value="Belarus +375">Belarus +375</option><option value="Belgium +32">Belgium +32</option><option value="Bolivia +591">Bolivia +591</option><option value="Bosnia +387">Bosnia +387</option><option value="Brazil +55">Brazil +55</option><option value="Bulgaria +359">Bulgaria +359</option>
				<option value="Cameroon +237">Cameroon +237</option><option value="Canada +1">Canada +1</option><option value="Chad +235">Chad +235</option><option value="Chile +56">Chile +56</option><option value="China[People's Republic] +86">China[People's Republic] +86</option><option value="Colombia +57">Colombia +57</option><option value="Congo +242">Congo +242</option><option value="Costa Rica +506">Costa Rica +506</option><option value="Croatia +385">Croatia +385</option><option value="Cuba +53">Cuba +53</option><option value="Cyprus +357">Cyprus +357</option><option value="Czech Republic +420">Czech Republic +420</option><option value="Denmark +45">Denmark +45</option><option value="Ecuador +593">Ecuador +593</option>
				<option value="Egypt +20">Egypt +20</option><option value="France +33">France +33</option><option value="Georgia +995">Georgia +995</option><option value="Germany +49">Germany +49</option><option value="Hong Kong +852">Hong Kong +852</option><option value="Iceland +354">Iceland +354</option>
				<option value="Indonesia +62">Indonesia +62</option><option value="Iran +98">Iran +98</option><option value="Iraq +964">Iraq +964</option><option value="Ireland +353">Ireland +353</option><option value="Italy +36">Italy +36</option><option value="Japan +81">Japan +81</option><option value="Kenya +254">Kenya +254</option><option value="Korea +85">Korea +85</option><option value="Liberia +231">Liberia +231</option><option value="Libya +218">Libya +218</option>
				<option value="Liechtenstein +41">Liechtenstein +41</option><option value="Nepal +977">Nepal +977</option><option value="New Zealand +64">New Zealand +64</option>
				<option value="Nigeria +234">Nigeria +234</option><option value="North Korea +850">North Korea +850</option><option value="Pakistan +92">Pakistan +92</option><option value="Romania +40">Romania +40</option><option value="Russia +70">Russia +70</option><option value="Saudi Arabia +966">Saudi Arabia +966</option>
				<option value="Senegal +221">Senegal +221</option><option value="Serbia +381">Serbia +381</option><option value="Singapore +65">Singapore +65</option><option value="Somalia +252">Somalia +252</option><option value="South Africa +27">South Africa +27</option><option value="Sri Lanka +94">Sri Lanka +94</option><option value="Sweden +46">Sweden +46</option><option value="Switzerland +41">Switzerland +41</option><option value="Turkey +90">Turkey +90</option><option value="United Arab Emirates +971">United Arab Emirates +971</option><option value="United Kingdom +44">United Kingdom +44</option><option value="USA +1">USA +1</option><option value="Zaire +243">Zaire +243</option><option value="Zambia +260">Zambia +260</option><option value="Zimbabwe +263">Zimbabwe +263</option> 
			</select>
		   </div>
		<div class="form-group_2 form_mob">
		<input name="mobile" class="form-control" data-label="" pattern="^\d{7}||\d{8}||\d{9}||\d{10}||\d{11}||\d{12}$" required="true" value="" type="text" placeholder="Contact Number"> 
		</div>

		<div class="form-group form_roomtype">
<select name="cf_leads_typeofproperty" data-label="label:Type+Of+Property" class="form-control" style="visibility:hidden;">
	<option value="">Select Value</option>
	<option value="1 BHK">1 BHK</option>
				<option value="2 BHK ">2 BHK  </option>
				<option value="3 BHK ">3 BHK </option>
				<option value="4 BHK">4 BHK</option>
	</select></div>
		<div class="form-group_2 form_date">
<input class="form-control"  name="cf_leads_pickupdate" data-label="" value="" type="hidden" placeholder=" Pick Up Date">
</div>
<div class="form-group form_time">
<input class="form-control" name="cf_leads_pickuptime" data-label="" value="" type="hidden" placeholder=" Pick Up Time">
</div>

<div class="form-group_2 form_time_section">
<select class="form-control" name="cf_leads_time" data-label="label:Time" style="visibility:hidden;">
	
	<option value="">Select Value</option>
	<option value="AM">AM</option>
	<option value="PM">PM</option>
	</select></div>
			  <div class="form-group">
            <label><input type="checkbox" name="accept" id="accept" checked>I Agree to <a href="inc/privacy.php" target="_blank">Privacy Policy</a> and <a href="inc/privacy.php" target="_blank">Terms and Conditions. </a> </label></div>
          <div class="form-group_btn " align="center">
            <button class="btn btn-primary " value="Submit" id="vtigerFormSubmitBtn0" style="width:"35%;"  type="submit">
		 Submit </button>
		  </div> 
	    </form>
		</div>
	</div>
  </div>
</div>
<!------------------------------------website1 form end------------------------>
<!---------------------------NRI Services-------------------------------------->
<div class="modal fade" id="more_details" role="dialog">
  <div class="modal-dialog">  
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center><h4 class="modal-title">FREE APPRAISAL</h4></center>
      </div>
      <div class="modal-body">
    
    <form id="__vtigerWebForm" name="kalpataru project" action="test.php" method="post" accept-charset="utf-8" enctype="multipart/form-data"><input type="hidden" name="__vtrftk" value="sid:82aaf4829cc8c7ded697519c2aee8aeaff5cd919,1596542252"><input type="hidden" name="publicid" value="90f35917b6686c207b7a75426095222b"><input type="hidden" name="urlencodeenable" value="1"><input type="hidden" name="name" value="kalpataru project">

 		<input name="cf_908" data-label="" value="<?php print $_SERVER['REMOTE_ADDR']; ?>" type="hidden">
<input name="cf_850" data-label="" value="kalpataru project" type="hidden">
  
<input name="cf_986" data-label="" value=" " type="hidden">
<input name="cf_984" data-label="" value="" type="hidden"> 
  
<input name="cf_850"  data-label="" value="kalpataru project" type="hidden">            

<input name="cf_886"  data-label="" value="Website" type="hidden">
<input name="enu" id="enu" data-label="" value="<?php print $enu; ?>" type="hidden">
	 
          <div class="form-group form_name">
		  <input class="form-control" name="lastname" data-label="" value="" pattern="[a-zA-Z\s]{1,}"  required="true" type="text" placeholder="Enter Your Name">

          	</div>
          <div class="form-group_2 form_email">
		  <input name="email" class="form-control" data-label="" value="" type="email" required="true" placeholder="Enter Email Address"></div>
            <div class="form-group form_country">
			<select name="cf_852" data-label="label:Country+Code" class="form-control">
				<option value="India +91">India +91</option> 
				<option value=" Afghanistan +93"> Afghanistan +93</option>
				<option value=" Albania +355">Albania +355</option><option value="Algeria +213">Algeria +213</option><option value="Andorra +376">Andorra +376</option><option value="Angola +244">Angola +244</option><option value="Argentina +54">Argentina +54</option><option value="Armenia +374">Armenia +374</option><option value="Australia +61">Australia +61</option><option value="Austria +43">Austria +43</option><option value="Azerbaigan +994">Azerbaigan +994</option><option value="Bahrain +973">Bahrain +973</option><option value="Bangladesh +880">Bangladesh +880</option><option value="Belarus +375">Belarus +375</option><option value="Belgium +32">Belgium +32</option><option value="Bolivia +591">Bolivia +591</option><option value="Bosnia +387">Bosnia +387</option><option value="Brazil +55">Brazil +55</option><option value="Bulgaria +359">Bulgaria +359</option>
				<option value="Cameroon +237">Cameroon +237</option><option value="Canada +1">Canada +1</option><option value="Chad +235">Chad +235</option><option value="Chile +56">Chile +56</option><option value="China[People's Republic] +86">China[People's Republic] +86</option><option value="Colombia +57">Colombia +57</option><option value="Congo +242">Congo +242</option><option value="Costa Rica +506">Costa Rica +506</option><option value="Croatia +385">Croatia +385</option><option value="Cuba +53">Cuba +53</option><option value="Cyprus +357">Cyprus +357</option><option value="Czech Republic +420">Czech Republic +420</option><option value="Denmark +45">Denmark +45</option><option value="Ecuador +593">Ecuador +593</option>
				<option value="Egypt +20">Egypt +20</option><option value="France +33">France +33</option><option value="Georgia +995">Georgia +995</option><option value="Germany +49">Germany +49</option><option value="Hong Kong +852">Hong Kong +852</option><option value="Iceland +354">Iceland +354</option>
				<option value="Indonesia +62">Indonesia +62</option><option value="Iran +98">Iran +98</option><option value="Iraq +964">Iraq +964</option><option value="Ireland +353">Ireland +353</option><option value="Italy +36">Italy +36</option><option value="Japan +81">Japan +81</option><option value="Kenya +254">Kenya +254</option><option value="Korea +85">Korea +85</option><option value="Liberia +231">Liberia +231</option><option value="Libya +218">Libya +218</option>
				<option value="Liechtenstein +41">Liechtenstein +41</option><option value="Nepal +977">Nepal +977</option><option value="New Zealand +64">New Zealand +64</option>
				<option value="Nigeria +234">Nigeria +234</option><option value="North Korea +850">North Korea +850</option><option value="Pakistan +92">Pakistan +92</option><option value="Romania +40">Romania +40</option><option value="Russia +70">Russia +70</option><option value="Saudi Arabia +966">Saudi Arabia +966</option>
				<option value="Senegal +221">Senegal +221</option><option value="Serbia +381">Serbia +381</option><option value="Singapore +65">Singapore +65</option><option value="Somalia +252">Somalia +252</option><option value="South Africa +27">South Africa +27</option><option value="Sri Lanka +94">Sri Lanka +94</option><option value="Sweden +46">Sweden +46</option><option value="Switzerland +41">Switzerland +41</option><option value="Turkey +90">Turkey +90</option><option value="United Arab Emirates +971">United Arab Emirates +971</option><option value="United Kingdom +44">United Kingdom +44</option><option value="USA +1">USA +1</option><option value="Zaire +243">Zaire +243</option><option value="Zambia +260">Zambia +260</option><option value="Zimbabwe +263">Zimbabwe +263</option> 
			</select>
		   </div>
		<div class="form-group_2 form_mob">
		<input name="mobile" class="form-control" data-label="" pattern="^\d{7}||\d{8}||\d{9}||\d{10}||\d{11}||\d{12}$" required="true" value="" type="text" placeholder="Contact Number"> 
		</div>
<div class="form-group form_comment" style="display:none;">
	<select id="enquiry" name="cf_1096" data-label="label:From+Which+Form+Lead+is+Coming+%3F" class="form-control" >
	<option value="">Choose Enquiry</option>
	            <option value="kalpataru projects FREE APPRAISAL" selected>FREE APPRAISAL</option>
				<option value="get-price-details">Get Price Details </option>
				<option value="get-virtual-tour">Get Virtual Tour </option>
				<option value="get-discount">Get Discount </option>
				
	</select>
</div>
	
		<div class="form-group_2 form_date">
<input class="form-control"  name="cf_leads_pickupdate" data-label="" value="" type="hidden" placeholder=" Pick Up Date">
</div>
<div class="form-group form_time">
<input class="form-control" name="cf_leads_pickuptime" data-label="" value="" type="hidden" placeholder=" Pick Up Time">
</div>


			  <div class="form-group">
            <label><input type="checkbox" name="accept" id="accept" checked>I Agree to <a href="inc/privacy.php" target="_blank">Privacy Policy</a> and <a href="inc/privacy.php" target="_blank">Terms and Conditions. </a> </label></div>
          <div class="form-group_btn " align="center">
            <button class="btn btn-primary btn-md" value="Submit" id="vtigerFormSubmitBtn" style="width:"35%;"  type="submit">
		 Submit </button>
		  </div> 
	    </form>
		</div>
	</div>
  </div>
</div>
<!-- <div class="left-sidebar_call hidden-xs hidden-sm">
  <a href="#" data-toggle="modal" data-target="#get_detail">
<img src="<?php //echo base_url();?>images/request-call.png"></a></div>
 <div class="right-sidebar_call4 hidden-xs hidden-sm">
<a href="#" data-toggle="modal" data-target="#get_detail" >
<img src="<?php //echo base_url();?>images/site-visit.png"></a></div> -->
<!---------- Get  Details ---------->
<!--------- end ------------------------>
 <?php 
?>