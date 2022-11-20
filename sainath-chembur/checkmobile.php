<?php
session_start();
error_reporting(0);
include('include/dbconnection.php');
include('include/vid.php');

?>

<?php  
$logfile= 'mobilelog.txt';
$IP = $_SERVER['REMOTE_ADDR'];

$lastname = $_POST['lastname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

$ret23=mysqli_query($con, "select * from tblproperty where ID='$vid'");   
$row=mysqli_fetch_array($ret23);
$propname=$row['PropertyName'];

$query2=mysqli_query($con, "insert into leads (PropertyID,PropertyName,Name,Email,Mobile) value('$vid','$propname','$lastname','$email','$mobile')");

?> 

<?php 
$ret=mysqli_query($con,"select * from tblpropertydetails where PropertyID='$vid'");
while ($row=mysqli_fetch_array($ret)) 
{
$project = $row['PropertyName']; 
} 

?>  

<?php 

date_default_timezone_set("Asia/Kolkata");
//$logdetails= date("F j, Y, g:i a") . ': ' . '<a href=http://dnsstuff.com/tools/city.ch?ip='.$_SERVER['REMOTE_ADDR'].' target=_blank>'.$_SERVER['REMOTE_ADDR'].'</a>';

$logdetails= date("F j, Y, h:i:sa") . ':' . 'Visitor ip='.$_SERVER['REMOTE_ADDR'] . ': ' .'Name='.$lastname. ': ' . 'Mobile='.$mobile. ': ' .'Email='.$email. ': ' .'Project='.$project. ': ' .'Url='.$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
// open the file for reading and writing
$fp = fopen($logfile, "a+");
// write out new log entry to the beginning of the file
fwrite($fp, $logdetails, strlen($logdetails));
file_put_contents('mobilelog.txt',"\r\n",FILE_APPEND);
fclose($fp);
	

?>



