<?php
error_reporting(0);
date_default_timezone_set('Asia/Kolkata'); 

$ip = $_SERVER['REMOTE_ADDR']; // the IP address to query
//$ip='106.206.97.143';

$result = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));

if($result && $result['status'] == 'success') 
{
	
	  "Country:".$result['country'].'<br/>';
      "Region:".$result['regionName'].'<br/>';
	  "Country Code:".$result['countryCode'].'<br/>';
	  "Region:".$result['region'].'<br/>';
	  "City:".$result['city'].'<br/>';
	  "ZIP:".$result['zip'].'<br/>';
	 "Time ZOne:".$result['timezone'].'<br/>';
	 "Visitor IP:".$result['ip'].'<br/>';
	 "Latitude:" .$result['lat'].'<br/>';
	  "Longitude:" .$result['lon'].'<br/>';

}
else
{
    
    $result1="not submitted";
    
}

$date = new DateTime();
$timeZone = $date->getTimezone();
//echo $timeZone->getName();
$logfile= 'log.txt';
$IP = $_SERVER['REMOTE_ADDR'];
if($result && $result['status'] == 'success') 
{
$logdetails= date("F j Y, g:ia") . ': ' . 'Country='.$result['country']. 'Country Code='.$result['countryCode'].'State='.$result['regionName'].'Time ZOne='.$result['timezone'] .'City='.$result['city'].'ZIp Code='.$result['zip']. 'Visitor IP='.$IP. 'Latitude='.$result['lat'].'Longitude='.$result['lon'] ;
// open the file for reading and writing
$fp = fopen($logfile, "a+");
// write out new log entry to the beginning of the file
fwrite($fp, $logdetails, strlen($logdetails));
file_put_contents('log.txt',"\r\n",FILE_APPEND);
fclose($fp);
}
else
{
    $logdetails= date("F j Y, g:ia") . ': ' . $result1 ;
// open the file for reading and writing
$fp = fopen($logfile, "a+");
// write out new log entry to the beginning of the file
fwrite($fp, $logdetails, strlen($logdetails));
file_put_contents('log.txt',"\r\n",FILE_APPEND);
fclose($fp);
}

?>