<?php
//session_start();
$id = session_id();
 $base_url= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
 $referrer_url = $_SERVER['HTTP_REFERER'];  
?>  
<!------ Include the above in your HEAD tag ---------->

<style>
/*demo1.css--------------------*/
* {
	box-sizing: border-box;
}

input[type=text] [disabled] {
	background-color: #ff0000;
}

.chat img {
	border-radius: 50%;
}

.blink2 {
	animation-duration: 1s;
	animation-name: blink2;
	animation-iteration-count: infinite;
	animation-direction: alternate;
	animation-timing-function: ease-in-out;
}

@keyframes blink2 {
	from {
		background-color: #a3d063;
	}
	to {
		background-color: #e2884a;
	}
}

#avatar-text {
	font-family: Open Sans, sans-serif;
	font-size: 16px !important;
	font-weight: 400;
	position: relative;
	display: block;
	z-index: 2147482999;
	cursor: pointer;
	background-color: #fff;
	color: #666;
	border-color:<?php
    include('include/vid.php');
$ret=mysqli_query($con,"select * from tblpropertydetails where PropertyID='$vid'");
while ($row=mysqli_fetch_array($ret)) 
{ ?>
<?php echo $row['Colour1'] ?>
    <?php } ?>;
	border-style: groove;
	padding: 10px;
	border-radius: .625rem !important;
	max-width: 270px;
	margin: -56px 80px;
	box-shadow: 0 0 20px 0 rgba(0, 0, 0, .15);
	margin-bottom: -70px;
}

.chat {
	position: fixed;
	bottom: 20px;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: end;
	-ms-flex-pack: end;
	justify-content: flex-end;
	-webkit-box-align: end;
	-ms-flex-align: end;
	align-items: flex-end;
	padding: 0.75rem 3.75rem 1.75rem 1rem;
	-webkit-box-orient: vertical;
	-webkit-box-direction: normal;
	-ms-flex-direction: column;
	flex-direction: column;
	z-index: 9999;
	margin-left: 926px;
}

.fa-wechat:before,
.fa-weixin:before {
	content: "\f1d7";
	color:<?php
    include('include/vid.php');
$ret=mysqli_query($con,"select * from tblpropertydetails where PropertyID='$vid'");
while ($row=mysqli_fetch_array($ret)) 
{ ?>
<?php echo $row['Colour1'] ?>
    <?php } ?>;
	font-size: 65px;
	text-shadow: 5px 5px 5px #130f00;
}

.bubble {
	animation: expand .75s ease-in-out infinite;
	border-radius: 20px;
	display: inline-block;
	transform-origin: center center;
	margin: 0 3px;
	width: 10px;
	height: 10px;
}

.bubble:nth-child(1) {
	background: #000;
}

.bubble:nth-child(2) {
	animation-delay: 180ms;
	background: #000;
}

.bubble:nth-child(3) {
	animation-delay: 360ms;
	background: #000;
}

.bubble:nth-child(4) {
	animation-delay: 540ms;
	background: #000;
}

@keyframes expand {
	0% {
		transform: scale(1);
	}
	25% {
		transform: scale(1.55);
	}
}

body {
	background-color: #edeff2;
}

@media screen and (max-width: 600px) {
	div .chat_window {
		left: 50%;
        z-index: 99999;
        width: 100%;
        margin-top: 10px;
	}
	.chat {
		bottom: 20%;
		width: 10%;
		margin-left: 390px;
		margin-bottom: -100px;
	}
	#avatar-text {
		display: none!important;
	}
}

@media screen and (max-width: 417px) {
	.chat {
		bottom: 20%;
		width: 10%;
		margin-left: 340px;
		margin-bottom: -100px;
	}
	#avatar-text {
		display: none!important;
	}
}

@media screen and (max-width: 360px) {
	.chat {
	bottom: 20%;
    width: 10%;
    margin-left: 330px;
    margin-bottom: -100px;
	}
	#avatar-text {
		display: none!important;
	}

	.second-footer {
		padding-bottom: 70px!important;
	}
	.first-footer .navigation h3 {
		text-align: center!important;
	}
	.first-footer .navigation h3::after {
		display: block;
		height: 3px;
		font-weight: 700;
		background-color: #fff;
		content: " ";
		width: 50px;
		margin-top: .5rem;
		margin-bottom: 1.5rem;
		margin-left: auto!important;
		margin-right: auto!important;
	}
	.navigation ul {
		margin: 0 auto!important;
		text-align: center!important;
	}
	.first-footer .widget h3 {
		text-align: center!important;
	}
	.first-footer .widget h3::after {
		display: block;
		height: 3px;
		font-weight: 700;
		background-color: #fff;
		content: " ";
		width: 50px;
		margin-top: .5rem;
		margin-bottom: 1.5rem;
		margin-left: auto!important;
		margin-right: auto!important;
	}
	.twitter-widget.contuct .twitter-area .text h5 {
		font-size: 14px;
		color: rgba(245, 255, 255, .8);
		font-weight: 400;
		text-transform: capitalize;
		line-height: 1.3rem;
		text-align: center!important;
	}
	.first-footer .newsletters h3 {
		margin-top: 3rem;
		text-align: center!important;
	}
	.first-footer .newsletters h3::after {
		display: block;
		height: 3px;
		font-weight: 700;
		background-color: #fff;
		content: " ";
		width: 50px;
		margin-top: .5rem;
		margin-bottom: 1.5rem;
		margin-left: auto!important;
		margin-right: auto!important;
	}
	.first-footer .contactus ul {
		list-style: none;
		padding: 0;
		margin: 0;
		margin-left: 80px!important;
	}
}

.chat_window {
	position: fixed;
	width: calc(100% - 20px);
	max-width: 360px;
	height: 500px;
	border-radius: 10px;
	left: 82%;
	top: 48%;
	right: 0%;
	transform: translateX(-50%) translateY(-50%);
	box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
	background-color: #fff;
	overflow: hidden;
	z-index: 9999;
}

.menu_top {
	background-color: <?php
    include('include/vid.php');
$ret=mysqli_query($con,"select * from tblpropertydetails where PropertyID='$vid'");
while ($row=mysqli_fetch_array($ret)) 
{ ?>
<?php echo $row['Colour1'] ?>
    <?php } ?>;
	width: 100%;
	padding: 20px 0 15px;
	box-shadow: 0 1px 30px rgba(0, 0, 0, 0.1);
}

.menu_top .buttons {
	margin: 3px 0 0 20px;
	position: absolute;
}

.menu_top .buttons .button {
	width: 16px;
	height: 16px;
	border-radius: 50%;
	display: inline-block;
	margin-right: 10px;
	position: relative;
}

.menu_top .buttons .button.close {
	background-color: #f5886e;
}

.menu_top .buttons .button.minimize {
	background-color: #fdbf68;
}

.menu_top .buttons .button.maximize {
	background-color: #a3d063;
}

.menu_top .title {
	text-align: center;
	color: #bcbdc0;
	font-size: 20px;
}

.messages {
	position: relative;
	list-style: none;
	padding: 20px 10px 0 10px;
	margin: 0;
	height: 347px;
	overflow: auto;
}

.messages .message {
	clear: both;
	overflow: hidden;
	margin-bottom: 20px;
	transition: all 0.5s linear;
	opacity: 0;
}

.messages .message.left .avatar {
	background: url('assets/img/icon3.png');
	float: left;
}

.messages .message.left .text_wrapper {
	background-color: #f5f3f0;
	margin-left: 20px;
	border-radius: 27px;
}

.messages .message.left .text_wrapper::after,
.messages .message.left .text_wrapper::before {}

.messages .message.left .text1 {
	color: #000;
}

.messages .message.right .avatar {
	background-color: #fdbf68;
	float: right;
}

.messages .message.right .text_wrapper {
	background-color: #04851a;
	margin-right: 20px;
	float: right;
	border-radius: 23px;
}

.messages .message.right .text_wrapper::after,
.messages .message.right .text_wrapper::before {}

.messages .message.right .text1 {
	color: #fff;
}

.messages .message.appeared {
	opacity: 1;
}

.messages .message .avatar {
	width: 40px;
	height: 40px;
	border-radius: 50%;
	display: inline-block;
}

.messages .message .text_wrapper {
	display: inline-block;
	padding: 12px;
	border-radius: 6px;
	width: calc(100% - 100px);
	min-width: 100px;
	position: relative;
}

.messages .message .text_wrapper::after,
.messages .message .text_wrapper:before {
	top: 18px;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none;
}

.messages .message .text_wrapper::after {
	border-width: 13px;
	margin-top: 0px;
}

.messages .message .text_wrapper::before {
	border-width: 15px;
	margin-top: -2px;
}

.messages .message .text_wrapper .text1 {
	font-size: 16px;
	font-weight: 300;
}

.bottom_wrapper {
	position: relative;
	width: 100%;
	background-color: #fff;
	padding: 10px 10px;
	position: absolute;
	bottom: 0;
}

.bottom_wrapper .message_input_wrapper {
	display: inline-block;
	height: 50px;
	border-radius: 25px;
	border: 1px solid #bcbdc0;
	width: calc(100% - 160px);
	position: relative;
	padding: 0 20px;
	background-color: #fff;
}

.bottom_wrapper .message_input_wrapper .message_input {
	border: none;
	height: 100%;
	box-sizing: border-box;
	width: calc(100% - 40px);
	position: absolute;
	outline-width: 0;
	color: gray;
}

.bottom_wrapper .send_message {
	width: 100px;
	height: 50px;
	display: inline-block;
	border-radius: 50px;
	background-color:<?php
    include('include/vid.php');
$ret=mysqli_query($con,"select * from tblpropertydetails where PropertyID='$vid'");
while ($row=mysqli_fetch_array($ret)) 
{ ?>
<?php echo $row['Colour1'] ?>
    <?php } ?>;
	border: 2px solid #856b16;
	color: #fff;
	cursor: pointer;
	transition: all 0.2s linear;
	text-align: center;
	float: right;
}

.bottom_wrapper .send_message:hover {
	color: #a3d063;
	background-color: #fff;
}

.bottom_wrapper .send_message .text1 {
	font-size: 18px;
	font-weight: 300;
	display: inline-block;
	line-height: 48px;
}

.message_template {
	display: none;
}

.container1 {
	background-color: #ffffff;
	height: 55px;
}

.bottom_wrapper .message_input_wrapper1 {
	display: inline-block;
	height: 50px;
	border-radius: 25px;
	border: 1px solid #bcbdc0;
	width: calc(100% - 162px);
	position: relative;
	padding: 0 20px;
	background-color: #fff;
}

.bottom_wrapper .message_input_wrapper2 {
	display: inline-block;
	height: 50px;
	border-radius: 25px;
	border: 1px solid #bcbdc0;
	width: calc(100% - 273px);
	position: relative;
	padding: 0 20px;
	background-color: #fff;
}

.message_input_wrapper2 select {
	background: transparent;
	border: none;
	width: 209%;
	margin-top: 13px;
	margin-left: -14px;
}

.bottom_wrapper .message_input_wrapper1 .message_input {
	border: none;
	height: 100%;
	box-sizing: border-box;
	width: calc(100% - 40px);
	position: absolute;
	outline-width: 0;
	color: gray;
}

.bottom_wrapper .message_input_wrapper2 .message_input {
	border: none;
	height: 100%;
	box-sizing: border-box;
	width: calc(100% - 40px);
	position: absolute;
	outline-width: 0;
	color: gray;
}


</style>







<div  id="chatbot"  style="display: none;">
  
<div class="chat_window" id="frame">
    <div class="menu_top">
        <div class="buttons">
            <div class="button"><a href="tel://+919833717888"><img src="assets/img/call.png" width="15px" height="15px" alt="call"><!-- <i class="glyphicon glyphicon-earphone"></i> --></a></div>
            <!-- <div class="button maximize"></div> -->
            </div>
            <div class="title">Chat With Us



<button type="button" class="close" data-dismiss="chatbot" aria-label="Close" id="aa" style="margin-left: -40px; margin-top: 2px; margin-right:10px;">
<span aria-hidden="true">×</span> 
</button>
              
<!--               <button style="margin-right: 10%; font-size: 25px;">×</button>
 -->              <!-- <span aria-hidden="true">×</span> -->
             <!--  <button style="margin-right: 10%; font-size: 25px;" type="button" id="close_bot" class="close">X</button> -->
            </div>
          </div>

           <!--  <span aria-hidden="true">×</span>  -->
            <ul id="chat" class="messages">
              <!-- <li class="message left appeared">
                                <div class="avatar"></div>
                                <div class="text_wrapper">
                                    <div class="text"></div>
                                    </div>
                                    </li><li class="message right appeared">
                                <div class="avatar"></div>
                                <div class="text_wrapper">
                                    <div class="text"></div>
                                    </div>
                                    </li> -->

                                </ul>
                
            <div class="bottom_wrapper clearfix">
               <form id="chatForm" action="#" onSubmit="return false;" >
                <div class="message_input_wrapper">
                  
          <input type="hidden" name="id" id="id" value="<?php echo $id?>" />
  <input type="text" style="background-color: #fff;" style="background-color: #fff;" class="message_input " name="text" id="text" placeholder="Please Wait..." disabled>
                    </div>
                    <button class="send_message text1"  id="submit">Send</button>
</form> 
                        </div>
                    
                    </div>
                        <div class="message_template">
                          
                              <li class="message">
                                <div class="avatar"></div>
                                <div class="text_wrapper">
                                    <div class="text"></div>
                                    </div>
                                    </li>
                     </div>




</div>

<!--<div class="chat" id="chat_start" > <span class="hidden-xs" id="avatar-text">We are here to help</span>
<img width="70" height="70" src="public/images/icon3.png" /></div>-->
<div class="chat" id="chat_start"> <span class="hidden-xs" id="avatar-text">Chat with us !!</span>
<span class="hidden-xs" id="chatspace"style="margin-left: 300px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>

<!--<img width="60" height="60" src="public/images/avatar1.jpg" alt="avatar" />-->
<i class="fa fa-weixin blink" aria-hidden="true"></i></div>
<script type="text/javascript" src="assets/js/jquery-2.2.1.min.js"></script>

<script type="text/javascript">
function diff_minutes(dt2, dt1) 
 {
 var time = "Just Now";
  var diff =(dt2.getTime() - dt1.getTime()) / 1000;
  diff /= 60;

  if(diff > 1)
  {
  return Math.abs(Math.round(diff));
  }
  else
  {
    return time;
  }
  
 }


function scroll()
{
  $('ul').scrollTop($('#chat').prop('scrollHeight'));
 

}

function  send_data(id,base_url,referrer_url)
{
  //var ses_id = id;
  //alert(id);
  $.post('webform.php',{id:id,base_url:base_url,referrer_url:referrer_url},function(data){
          
         var prevState = $('#chat').html();
       
          $('#chat').html(prevState+data);
           setTimeout(function(){ $('#myform').submit(); }, 2000);
          

        });
}

function addInput()
{
      $("#form2").remove();

       $('.bottom_wrapper').html('<form id="chatForm" action="#" onSubmit="return false;" ><div class="message_input_wrapper"><input type="hidden" name="base_url" id="base_url" value="<?php echo $base_url; ?>" /><input type="hidden" name="referrer_url" id="referrer_url" value="<?php echo $referrer_url; ?>" /><input type="hidden" name="id" id="id" value="<?php echo $id?>" /><input type="text" style="background-color: #fff;" class="message_input" name="text" id="text" placeholder="Please Wait..." disabled></div><button class="send_message text1"  id="submit">Send</button></form>');

       setTimeout(function () {
            $("#text").removeAttr('disabled');
             $("#text").attr("placeholder", "Your message here...");
      },2000);
       $('#submit').click(function(){
       
      var text = $.trim($('#text').val());
      var id = $.trim($('#id').val());
       var url = $.trim($('#base_url').val());
            var ref_url = $.trim($('#referrer_url').val());
       var filter = /^\d*(?:\.\d{1,2})?$/;
        var dt = new Date();
        var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
       var time = dt.getDate() + " " + months[dt.getMonth()] + " " + dt.getFullYear() + ":" + dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
      if(text != '' && id !='')
      {
        $.post('chatPoster.php',{text:text, id:id, time: time},function(data){
          
          var prevState = $('#chat').html();   
          // if(prevState != "")
          // {
          //   prevState = prevState +'<br>'
          // }
          $('#chat').html(prevState+data);
          $('#text').val("");
         
       send_message("Please let us know if you have any other requirement");
       timeOut('Otherwise  <br><span id="skip"><input type="radio" name="skip" value="Skip"> Skip<br> </span>');
       $(document).on("click","input[name='skip']", function(){
           var text = $("input[name='skip']:checked").val();
           $('#chat').html(prevState+'<li class="message right appeared"><div class="text_wrapper"><div class="text1">'+ text +'</div></div></li>');
            send_message('Thank you');
        timeOut('We will get back to you soon');
        setTimeout(function(){  send_data(id,url,ref_url); }, 4000);
        $('#chatForm').remove();
       });
       
       addReq();
        });
      }
      
    });


}

function addReq()
{
      $("#form2").remove();

       $('.bottom_wrapper').html('<form id="chatForm" action="#" onSubmit="return false;" ><div class="message_input_wrapper"><input type="hidden" name="base_url" id="base_url" value="<?php echo $base_url; ?>" /><input type="hidden" name="referrer_url" id="referrer_url" value="<?php echo $referrer_url; ?>" /><input type="hidden" name="id" id="id" value="<?php echo $id?>" /><input type="text" style="background-color: #fff;" class="message_input" name="requirement" id="requirement" placeholder="Please Wait..." disabled></div><button class="send_message text1"  id="submit">Send</button></form>');

       setTimeout(function () {
            $("#requirement").removeAttr('disabled');
             $("#requirement").attr("placeholder", "Your message here...");
      },2000);
       $('#submit').click(function(){
       
      var requirement = $.trim($('#requirement').val());
      var id = $.trim($('#id').val());
       var url = $.trim($('#base_url').val());
            var ref_url = $.trim($('#referrer_url').val());
       var filter = /^\d*(?:\.\d{1,2})?$/;
        var dt = new Date();
        var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
       var time = dt.getDate() + " " + months[dt.getMonth()] + " " + dt.getFullYear() + ":" + dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
      if(requirement != '' && id !='')
      {
        $.post('chatPoster.php',{requirement:requirement, id:id, time: time},function(data){
          
          var prevState = $('#chat').html();   
          // if(prevState != "")
          // {
          //   prevState = prevState +'<br>'
          // }
          $('#chat').html(prevState+data);
          $('#text').val("");
         // $('#user').html(prevState + newMessage);
        //

        send_message('Thank you');
        timeOut('We will get back to you soon');
        setTimeout(function(){  send_data(id,url,ref_url); }, 4000);
        $('#chatForm').remove();
        });
      }
      else
      {
        alert("Data missing");
      }
    });


}

/*function otp()

{

      $("#chatForm").remove();

 

       $('.bottom_wrapper').html('<form id="form3" action="#" onSubmit="return false;" ><div class="message_input_wrapper"><input type="hidden" name="id" id="id" value="<?php echo $id?>" /><input type="text" style="background-color: #fff;" class="message_input" name="text" id="text" placeholder="Please Wait..." disabled></div><button class="send_message text1"  id="submit">Send</button></form>');

        var encodedString = $("#otp_encode").val();

       var decodedString = atob(encodedString);

       setTimeout(function () {

            $("#text").removeAttr('disabled');

             $("#text").attr("placeholder", "Type your message here...");

      },2000);

       $('#submit').click(function(){

      

      var text = $.trim($('#text').val());

      var id = $.trim($('#id').val());

      

        var dt = new Date();

        var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];

       var time = dt.getDate() + " " + months[dt.getMonth()] + " " + dt.getFullYear() + ":" + dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();

      if(text != '' && id !='' && text == decodedString)

      {

       

          

         var prevState = $('#chat').html();

      

          // if(prevState != "")

          // {

          //   prevState = prevState +'<br>'

          // }

          $('#chat').html(prevState+'<li class="message right appeared"><div class="text_wrapper"> <div class="text1">'+text+'</div></div></li>');

          $('#text').val("");    

     //  $('#form1').hide();

        send_message("Oh great!!");

        timeOut("Which email shall we use to send details? Don't worry we don't spam");

        addEmail();

       

      }

      else

      {

        send_message("Please enter valid OTP");

      }

    });

 

 

}*/
/*function otp()
{
      $("#chatForm").remove();
 
       $('.bottom_wrapper').html('<form id="form3" action="#" onSubmit="return false;" ><div class="message_input_wrapper"><input type="hidden" name="id" id="id" value="<?php echo $id?>" /><input type="text" style="background-color: #fff;" class="message_input" name="text" id="text" placeholder="Please Wait..." disabled></div><button class="send_message text1"  id="submit">Send</button></form>');
        var encodedString = $("#otp_encode").val();
       var decodedString = atob(encodedString);
       setTimeout(function () {
            $("#text").removeAttr('disabled');
             $("#text").attr("placeholder", "Type your message here...");
      },2000);
       $('#submit').click(function(){
      
      var text = $.trim($('#text').val());
      var id = $.trim($('#id').val());
      
        var dt = new Date();
        var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
       var time = dt.getDate() + " " + months[dt.getMonth()] + " " + dt.getFullYear() + ":" + dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
      if(text != '' && id !='' && text == decodedString)
      {
       
          
         var prevState = $('#chat').html();
      
          // if(prevState != "")
          // {
          //   prevState = prevState +'<br>'
          // }
          $('#chat').html(prevState+'<li class="message right appeared"><div class="text_wrapper"> <div class="text1">'+text+'</div></div></li>');
          $('#text').val("");    
     //  $('#form1').hide();
        send_message("Oh great!!");
        timeOut("Which email shall we use to send details? Don't worry we don't spam");
        addEmail();
       
      }
      else
      {
        send_message("Please enter valid OTP");
      }
    });
 
 
}
*/
 

function addMobile()
    {
            $('.bottom_wrapper').html('<form id="form1" action="#" onSubmit="return false;" ><div style="display: inline-flex;width:100%"><div class="message_input_wrapper2"><input type="hidden" name="id" id="id" value="<?php echo $id?>" /><select name="cntry"  id="cnt"><option value="India +91">India +91</option> <option value=" Afghanistan +93"> Afghanistan +93</option><option value=" Albania +355">Albania +355</option><option value="Algeria +213">Algeria +213</option><option value="Andorra +376">Andorra +376</option><option value="Angola +244">Angola +244</option><option value="Argentina +54">Argentina +54</option><option value="Armenia +374">Armenia +374</option><option value="Australia +61">Australia +61</option><option value="Austria +43">Austria +43</option><option value="Azerbaigan +994">Azerbaigan +994</option><option value="Bahrain +973">Bahrain +973</option><option value="Bangladesh +880">Bangladesh +880</option><option value="Belarus +375">Belarus +375</option><option value="Belgium +32">Belgium +32</option><option value="Bolivia +591">Bolivia +591</option><option value="Bosnia +387">Bosnia +387</option><option value="Brazil +55">Brazil +55</option><option value="Bulgaria +359">Bulgaria +359</option><option value="Cameroon +237">Cameroon +237</option><option value="Canada +1">Canada +1</option><option value="Chad +235">Chad +235</option><option value="Chile +56">Chile +56</option><option value="China[Peoples Republic] +86">China[Peoples Republic] +86</option><option value="Colombia +57">Colombia +57</option><option value="Congo +242">Congo +242</option><option value="Costa Rica +506">Costa Rica +506</option><option value="Croatia +385">Croatia +385</option><option value="Cuba +53">Cuba +53</option><option value="Cyprus +357">Cyprus +357</option><option value="Czech Republic +420">Czech Republic +420</option><option value="Denmark +45">Denmark +45</option><option value="Ecuador +593">Ecuador +593</option><option value="Egypt +20">Egypt +20</option><option value="France +33">France +33</option><option value="Georgia +995">Georgia +995</option><option value="Germany +49">Germany +49</option><option value="Hong Kong +852">Hong Kong +852</option><option value="Iceland +354">Iceland +354</option><option value="Indonesia +62">Indonesia +62</option><option value="Iran +98">Iran +98</option><option value="Iraq +964">Iraq +964</option><option value="Ireland +353">Ireland +353</option><option value="Italy +36">Italy +36</option><option value="Japan +81">Japan +81</option><option value="Kenya +254">Kenya +254</option><option value="Korea +85">Korea +85</option><option value="Liberia +231">Liberia +231</option><option value="Libya +218">Libya +218</option><option value="Liechtenstein +41">Liechtenstein +41</option><option value="Nepal +977">Nepal +977</option><option value="New Zealand +64">New Zealand +64</option>        <option value="Nigeria +234">Nigeria +234</option><option value="North Korea +850">North Korea +850</option><option value="Pakistan +92">Pakistan +92</option><option value="Romania +40">Romania +40</option><option value="Russia +70">Russia +70</option><option value="Saudi Arabia +966">Saudi Arabia +966</option>        <option value="Senegal +221">Senegal +221</option><option value="Serbia +381">Serbia +381</option><option value="Singapore +65">Singapore +65</option><option value="Somalia +252">Somalia +252</option><option value="South Africa +27">South Africa +27</option><option value="Sri Lanka +94">Sri Lanka +94</option><option value="Sweden +46">Sweden +46</option><option value="Switzerland +41">Switzerland +41</option><option value="Turkey +90">Turkey +90</option><option value="United Arab Emirates +971">United Arab Emirates +971</option><option value="United Kingdom +44">United Kingdom +44</option><option value="USA +1">USA +1</option><option value="Zaire +243">Zaire +243</option><option value="Zambia +260">Zambia +260</option><option value="Zimbabwe +263">Zimbabwe +263</option>     </select></div><div class="message_input_wrapper1"><input class="message_input" style="background-color: #fff;" name="text" id="text" placeholder="Please Wait..." type="tel" disabled></div><button class="send_message text1"  id="subClick">Send</button></div></form> ');
    
    setTimeout(function () {
            $("#text").removeAttr('disabled');
            $("#text").attr("placeholder", "Your message here...");
      },4000);
      $('#subClick').on('click', function(){
      var id = $.trim($('#id').val());
    var country = $('#cnt').val();
       //var filter = /^\d*(?:\.\d{1,2})?$/;
       var arr = ['9999999999','8888888888','7777777777'];
      var text = $.trim($('#text').val());
      var filter = /^[789]\d{9}$/;
      var dt = new Date();
      var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 
var time = dt.getDate() + " " + months[dt.getMonth()] + " " + dt.getFullYear() + ":" + dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
      if(text != '' && id !='' && filter.test(text))
      {
          $.post('chatPoster.php',{country:country, id:id, time:time},function(data){
        });
        $.post('chatPoster.php',{text:text, id:id, time:time},function(data){
          
          var prevState = $('#chat').html();
       
          // if(prevState != "")
          // {
          //   prevState = prevState +'<br>'
          // }
          $('#chat').html(prevState+data);
          $('#text').val("");     
     //  $('#form1').hide();
        send_message("Oh great!!");
        timeOut("Which email shall we use to send details?");
        addEmail();
        
          
                  
        });
      }
      else
      {
        send_message("Please provide valid number");
      }
      
    });

    }
    
    function addEmail()
    {
      $("#form1").remove();

      $('.bottom_wrapper').html('<form id="form2" action="#" onSubmit="return false;" ><div class="message_input_wrapper"><input type="hidden" name="id" id="id" value="<?php echo $id?>" /><input type="text" style="background-color: #fff;" class="message_input" name="text" id="text" placeholder="Please Wait..." disabled></div><button class="send_message text1"  id="email_submit">Send</button></form>');
    setTimeout(function () {
            $("#text").removeAttr('disabled');
             $("#text").attr("placeholder", "Your message here...");
      },5000);
      $('#email_submit').on('click', function(){
         var text = $.trim($('#text').val());
      var id = $.trim($('#id').val());
      var filter = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
       var dt = new Date();
       var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
      var time = dt.getDate() + " " + months[dt.getMonth()] + " " + dt.getFullYear() + ":" + dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
      if(text != '' && id !='' && filter.test(text))
      {
        $.post('chatPoster.php',{text:text, id:id, time:time},function(data){
          
          var prevState = $('#chat').html();
          $('#chat').html(prevState+data);
          $('#text').val("");
               
        //send_message("Oh!! I nearly forgot..");
       send_message("Could you share your name please?");
       addInput();
        });
      }
      else
      {
        send_message("Please provide valid Email");
      }  
    });

    }

    function timeOut(message)
    {
      setTimeout(function () {

        send_message(message);
       
      },3000);
    }

  function firstMessage()
  {
     
    send_message('Please find the below information');
    
   setTimeout(function () {
        send_message('Do you want  <br><span id="list"><input type="radio" name="list" value="Price Details"> Price Details<br>  <input type="radio" name="list" value="Arrange Site Visit"> Arrange Site Visit<br><input type="radio" name="list" value="Area Details"> Area Details<br><input type="radio" name="list" value="Location Details"> Location Details<br><br><input type="hidden" name="id" id="id" value="<?php echo $id?>" /></span>');
        $('input[type="radio"]').on('click',function(){
       
           var text = $("input[name='list']:checked").val();
           var id = $.trim($('#id').val());
            var dt = new Date();
            var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
           var time = dt.getDate() + " " + months[dt.getMonth()] + " " + dt.getFullYear() + ":" + dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();

         $.post('chatPoster.php',{text:text, id:id, time:time},function(data){  
        var prevState = $('#chat').html();
          $('#chat').html(prevState+data); 
          $('#list').hide();
          
          
          send_message("Sure. We can help you with this");
          timeOut("May I know your contact number");
          addMobile();
      //     setTimeout(function () {
      //       addMobile();
      // },5000);
        
        });
       });
       
    },3000);
}
   
   function get_time()
   { 
     
     
   }
  function send_message(message)
  { 
  //  var date = setInterval(function() {
  //  return new Date($.now());
  //   }, 1000);
  //   alert(date);
  //   setInterval(function(){
  
  // var time = diff_minutes(new Date($.now()),curr_time);
  // alert(time);
  //   //$('.time').html(time);
    
  //  },500);


   var listing = '<li class="message left appeared loader"><div class="avatar"></div> <div class="text_wrapper"><div class="text1"><span class="bubble"></span><span class="bubble"></span><span class="bubble"></span><span class="bubble"></span></div></div></li>'; 
       
      var prevState = $('#chat').html();

setTimeout(function(){
  
  $('#chat').append(listing);
   
     scroll();
    },200);

      setTimeout(function(){
      $('.loader').hide();
     
       },1000);

   
 
    $('#chat').html(prevState +'<li class="message left appeared current"><div class="avatar"></div> <div class="text_wrapper"><div class="text1">'+ message +'</div></div></li>');
  
    $('.current').hide();
    $('.current').delay(1000).fadeIn();
    $('.current').removeClass('current');
   
   
  }

  function ai(data)
  {
   //alert(data);
    send_message("Nice to meet you" + data);

    if(data.indexOf('name')>=0)
  {
    send_message('My name is chatbot');

  }
  }

  $("#chat_start").one("click", function() {
   
    $('#avatar-text').hide();
    $('#chatbot').show();
    firstMessage();
   

      $('#text').keypress(function(event){
        if(event.which == 13)
        {
          //event.preventDefault();
          $('#submit').click();
          $('#subClick').click();
          $('#email_submit').click();
        }
      });

      $('#submit').click(function(){
       
      var text = $.trim($('#text').val());
      var id = $.trim($('#id').val());
       var filter = /^\d*(?:\.\d{1,2})?$/;
      if(text != '' && id !='')
      {
        $.post('chatPoster.php',{text:text, id:id},function(data){
          
          var prevState = $('#chat').html();   
          // if(prevState != "")
          // {
          //   prevState = prevState +'<br>'
          // }
          $('#chat').html(prevState+data);
          $('#text').val("");
         // $('#user').html(prevState + newMessage);
        // 
        ai(text);
        });
      }
      else
      {
        alert("Data missing");
      }
    });


   });

  $('#close_bot').click(function(){
    $('#chatbot').fadeOut(100);
  });
  $('#chat_start').click(function(){
    $('#chatbot').show();
  });
  setTimeout(function(){
      $( "#chat_start" ).one();
       },2000);





$(function () {
       $('#aa').on('click', function () {
            
            $('#chatbot').hide();
           
           
         });
    });


</script>

