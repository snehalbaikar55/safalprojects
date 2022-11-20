  <?php

$name='';

$email='';

$mobile='';

 

$now = date("Y-m-d");

$expiry = new DateTime('+1 year');

$session_id = session_id();

 

if(isset($_COOKIE['id_session']) && isset($_COOKIE['count']) && isset($_COOKIE['date']))

{

      $count = $_COOKIE['count'];

      $ses_id = $_COOKIE['id_session'];

      $date = $_COOKIE['date'];

    if($_COOKIE['date'] < $now)

    {

        $val = $count + 1;

    }

  else

  {

      $val = 1;

  }

   

    setcookie('count',$val, $expiry->getTimestamp());

    $conn = mysqli_connect("localhost","hrealty_admin","horizonfp@123","hrealty_crm");

 

$sql = "SELECT contactid FROM vtiger_contactscf where cf_1130 = '$ses_id' ";

$result = $conn->query($sql);

$id = '';

if ($result->num_rows > 0) {

    // output data of each row

    while($row = $result->fetch_assoc()) {

        $id = $row['contactid'];

      $query = "UPDATE vtiger_contactscf SET cf_1132='$count' WHERE contactid='$id'";

      $result1 = $conn->query($query);

     

    }

    $data = "SELECT lastname,email,mobile FROM vtiger_contactdetails where contactid = '$id' ";

    $formdata = $conn->query($data);

    while($dt = $formdata->fetch_assoc()) {

  $name = $dt['lastname'];

  $email = $dt['email'];

    $mobile = $dt['mobile'];

}

  

}

}

else

{

    setcookie('id_session',$session_id,$expiry->getTimestamp(),'/');

    setcookie('count',1,$expiry->getTimestamp(),'/');

                setcookie('date',$now,$expiry->getTimestamp(),'/');

               

}


$str4[1]='';
$str5[1]='';
$tar[1]='';
$dev[1]='';
$matchtype[1]='';
$keyw[1]='';
$place[1]='';
$create[1]='';
$physical[1]='';
$src[1]='';
$netw[1]='';

$str1 = explode("?", $base_url);

//print_r($str1);
if ( ! isset($str1[1])) {
   $str1[1] = null;
}
else
{
$str2 = explode("&", $str1[1]);
$str3 = $str2[9];
$ad = $str2[10];
$device = $str2[0];
$match= $str2[1];
$keyword = $str2[2];
$target = $str2[3];
$place1 = $str2[4];
$creative = $str2[5];
$loc_physical = $str2[6];
$ad_src =$str2[7];
$network = $str2[8];


$str4 = explode('=', $str3);
$str5 = explode('=', $ad);
$dev = explode('=', $device);
$matchtype = explode('=', $match);
$keyw = explode('=', $keyword);
$tar = explode('=', $target);
$place = explode('=', $place1);
$create = explode('=', $creative);
$physical = explode('=',$loc_physical);
$src = explode('=', $ad_src);
$netw = explode('=', $network);
}

?>






