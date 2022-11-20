<?php
session_start();
error_reporting(0);
include('include/dbconnection.php');
include('include/vid.php');

?>

<?php
include('include/crmurl.php');
$enu = base64_encode($url);


?>

<?php
include('include/browserdetection.php');
include('include/devicedetection.php');
include('include/log.php');
?>

<?php

$lat = $result['lat'];
$lon = $result['lon'];
$regionName = $result['regionName'];
$city = $result['city'];
$country = $result['country'];
$zip = $result['zip'];
$timezone = $result['timezone'];
$REMOTE_ADDR = $_SERVER['REMOTE_ADDR'];
?>

<?php
$ret=mysqli_query($con,"select * from tblpropertydetails where PropertyID='$vid'");
while ($row=mysqli_fetch_array($ret)) 
{
$Region = $row['Region'];
}
?>

<?php
$ret=mysqli_query($con,"select crmurl from tblform where PropertyID='$vid'");
while ($row=mysqli_fetch_array($ret)) 
{
$crmurl = $row['crmurl'];
}
?>

<?php
$ret=mysqli_query($con,"select * from tblpropertydetails where PropertyID='$vid'");
while ($row=mysqli_fetch_array($ret)) 
{ 
$SubRegion = $row['SubRegion'];
} 
?>

<?php

$ret=mysqli_query($con,"select * from tblform where PropertyID='$vid'");
while ($row=mysqli_fetch_array($ret)) 
        {
        $public=$row['id2'];

        $con1=mysqli_connect("localhost", "horizb9k_itsmeshital", "iCa33A]RNG#;", "horizb9k_mashtdb");
        $ret=mysqli_query($con1,"select * from vtiger_users join vtiger_webforms on vtiger_users.id=vtiger_webforms.ownerid where  publicid='$public'");
        while ($row=mysqli_fetch_array($ret)) 
        { 
            $user_name = $row['user_name'];} 
        }
?>

<?php
$ret=mysqli_query($con,"select * from tblpropertydetails where PropertyID='$vid'");
while ($row=mysqli_fetch_array($ret)) 
{ 
$formname = $row['PropertyName'];
} 
?>
<?php
$ret=mysqli_query($con,"select * from tblpropertydetails where PropertyID='$vid'");
while ($row=mysqli_fetch_array($ret)) 
{ 
$location1 = $row['Location'];
} 
?>

<?php
$ret=mysqli_query($con,"select * from tblform where PropertyID='$vid'");
while ($row=mysqli_fetch_array($ret)) 
{ 
$id1 = $row['id1'];
} 
?>

<?php
$ret=mysqli_query($con,"select * from tblform where PropertyID='$vid'");
while ($row=mysqli_fetch_array($ret)) 
{ 
$id2 = $row['id2'];
} 
?>

<?php


//get chat
$con = mysqli_connect("localhost","horizb9k_swapnil","az$==TO,qeWx,%IK1","horizb9k_property");
	
 	$id = $_POST['id'];
 	 $url = $_POST['base_url'];
		 $ref_url = $_POST[referrer_url] ; 
 
 	$company = $formname;

 	$sql='SELECT * FROM chat where session_id="'.$id.'"';
		$email = '';
		$mobile = '';
		$name = '';
		$service ='';
		$req = '';
if ($result=mysqli_query($con,$sql))
  {
$res = array('Price Details','Arrange Site Visit','Area Details','Location Details');
  while ($row=mysqli_fetch_array ($result))
    {
   
        			if(in_array($row['message'], $res))
        			{
        				$service = $row['message'];
        			}
        			elseif (preg_match("/^\d*(?:\.\d{1,2})?$/", $row['message'])) {
        				$mobile = $row['message'];
        			}
        			elseif (preg_match('/@/', $row['message']))
        			{
        				$email = $row['message'];
        			}
        			 elseif (strpos($row['message'], '+') !== FALSE)

                   {
                           $cntry = $row['message'];
                   }
                   elseif (strpos($row['message'], 'Requirement') !== FALSE)

                   {
                           $req = $row['message'];
                   }
        			else{
        				$name = $row['message'];
        			}

    }
  
    
 // Free result set
 echo '<form id="myform" name="'.$formname.'" action="'.$crmurl.'" method="post" accept-charset="utf-8" enctype="multipart/form-data">
 <input type="hidden" name="__vtrftk" value="'.$id1.'">
 <input type="hidden" name="publicid" value="'.$id2.'">
 <input type="hidden" name="urlencodeenable" value="1">
 <input type="hidden" name="name" value="'.$formname.'">
 
    <input name="cf_950" data-label="" value="'.$url.'" type="hidden">
                        <input name="cf_938" data-label="" value="'.$ref_url.'" type="hidden">
                        <input name="cf_854" data-label="" value="'.$company.'" type="hidden">
						 <input name="cf_1359" data-label="" value="'.$company.'" type="hidden">
                         <input name="leadsource" data-label="" value="website" type="hidden">
                         <input name="cf_886" data-label="" value="'.$location1.'" type="hidden"> 
                       <input name="cf_984" data-label="" value="25" type="hidden">
        		<input name="cf_928" data-label="" value="Website" type="hidden"> 
        		<select name="cf_888" data-label="label:Country+Code" class="form-control" id="cc">
                                <option value="">Select Value</option>
                         <option value="'.$cntry.'" selected>test</option>
                </select>
        		<select name="cf_946" data-label="label:Backend+Source" style="display: none;">
                                            <option value="">Select Value</option>
<option value="Cold Call">Cold Call</option>
<option value="FB">FB</option>
<option value="Faacebook">Faacebook</option>
<option value="Self Generated">Self Generated</option>
<option value="Referral">Referral</option>
<option value="Word of mouth">Word of mouth</option>
<option value="Web Site">Web Site</option>
<option value="Trade Show">Trade Show</option>
<option value="Conference">Conference</option>
<option value="Direct Mail">Direct Mail</option>
<option value="Public Relations">Public Relations</option>
<option value="Partner">Partner</option>
<option value="Employee">Employee</option>
<option value="Existing Customer">Existing Customer</option>
<option value="Facebook">Facebook</option>
<option value="Chat" selected>Chat</option>
<option value="Emailer">Emailer</option>
</select>
        		 <input name="lastname" data-label="" value="'.$name.'" type="hidden">
        		  <input name="email"  data-label="" value="'.$email.'" type="hidden">
        		  <input name="mobile" data-label="" value="'.$mobile.'" type="hidden">
        		  <input name="cf_1040" data-label="" value="'.$req.'" type="hidden">
        		  
        		  <input type="hidden" name="cf_1050" data-label="" value="'.$os.'"> 
<input type="hidden" name="cf_948" data-label="" value="'.$agent.'"> 
<input type="hidden" name="cf_1063" data-label="" value="'.$logdetails.'"> 


<input name="cf_1271" data-label="" value="'.$lat.'" type="hidden"> 
<input name="cf_1281" data-label="" value="'.$lon.'" type="hidden"> 
<input name="cf_1307" data-label="" value="'.$regionName.'" type="hidden">
<input name="cf_1297" data-label="" value="'.$city.'" type="hidden">
<input name="cf_998" data-label="" value="'.$country.'" type="hidden">
<input name="cf_1299" data-label="" value="'.$zip.'" type="hidden">
<input name="cf_1301" data-label="" value="'.$timezone.'" type="hidden">
<input name="cf_1305" data-label="" value="'.$REMOTE_ADDR.'" type="hidden">

<input name="cf_1291" data-label="" value="'.$Region.'" type="hidden"> 
<input name="cf_1293" data-label="" value="'.$SubRegion.'" type="hidden"> 
<input name="cf_1277" data-label="" value="'.$user_name.'" type="hidden">


        		</form>';
}

?>

<script>

var taxCodes = {
    'India+91': '<?php $ret=mysqli_query($con,"select * from tblform where PropertyID='$vid'");
            while ($row=mysqli_fetch_array($ret)) 
        { echo $row['id2'];} ?>',
    ' Afghanistan +93': 'a56af08ab0cf9b056ae8bebba15665b0',
    ' Albania +355': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Algeria +213' : 'a56af08ab0cf9b056ae8bebba15665b0',
	'Andorra +376' : 'a56af08ab0cf9b056ae8bebba15665b0',
	'Angola +244' : 'a56af08ab0cf9b056ae8bebba15665b0',
	'Argentina +54' : 'a56af08ab0cf9b056ae8bebba15665b0',
	'Armenia +374' : 'a56af08ab0cf9b056ae8bebba15665b0',
	'Australia +61' : 'a56af08ab0cf9b056ae8bebba15665b0',
	'Austria +43' : 'a56af08ab0cf9b056ae8bebba15665b0',
	'Azerbaigan +994' : 'a56af08ab0cf9b056ae8bebba15665b0',
	'Bahrain +973' : 'a56af08ab0cf9b056ae8bebba15665b0',
	'Bangladesh +880' : 'a56af08ab0cf9b056ae8bebba15665b0',
	'Belarus +375' : 'a56af08ab0cf9b056ae8bebba15665b0',
	'Belgium +32' : 'a56af08ab0cf9b056ae8bebba15665b0',
	'Bolivia +591' : 'a56af08ab0cf9b056ae8bebba15665b0',
	'Bosnia +387' : 'a56af08ab0cf9b056ae8bebba15665b0',
	'Brazil +55' : 'a56af08ab0cf9b056ae8bebba15665b0',
	'Bulgaria +359' : 'a56af08ab0cf9b056ae8bebba15665b0',
	'Cameroon +237': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Canada +1': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Chad +235': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Chile +56': 'a56af08ab0cf9b056ae8bebba15665b0',
	'China[Peoples Republic] +86': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Colombia +57': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Congo +242': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Costa Rica +506': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Croatia +385': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Cuba +53': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Cyprus +357': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Czech Republic +420': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Denmark +45': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Ecuador +593': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Egypt +20': 'a56af08ab0cf9b056ae8bebba15665b0',
	'France +33': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Georgia +995': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Germany +49': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Hong Kong +852': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Iceland +354': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Indonesia +62': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Iran +98': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Iraq +964': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Ireland +353': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Italy +36': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Japan +81': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Kenya +254': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Korea +85': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Liberia +231': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Libya +218': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Liechtenstein +41': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Nepal +977': 'a56af08ab0cf9b056ae8bebba15665b0',
	'New Zealand +64': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Nigeria +234': 'a56af08ab0cf9b056ae8bebba15665b0',
	'North Korea +850': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Pakistan +92': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Romania +40': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Russia +70': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Saudi Arabia +966': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Senegal +221': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Serbia +381': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Singapore+65': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Somalia +252': 'a56af08ab0cf9b056ae8bebba15665b0',
	'South Africa +27': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Sri Lanka +94': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Sweden +46': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Switzerland +41': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Turkey +90': 'a56af08ab0cf9b056ae8bebba15665b0',
	'United-Arab-Emirates+971': 'a56af08ab0cf9b056ae8bebba15665b0',
	'United-Kingdom+44': 'a56af08ab0cf9b056ae8bebba15665b0',
	'USA+1': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Zaire +243': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Zambia +260': 'a56af08ab0cf9b056ae8bebba15665b0',
	'Zimbabwe +263': 'a56af08ab0cf9b056ae8bebba15665b0'
};

var form = document.getElementById('myform');
form.elements.cf_888.onchange = function () {
    var form = this.form;
    form.elements.publicid.value = taxCodes[this.value];
};
</script>