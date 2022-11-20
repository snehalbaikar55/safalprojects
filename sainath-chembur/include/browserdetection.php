<?php

$agent = $_SERVER['HTTP_USER_AGENT'];

// Browser Detection

if(preg_match('/Firefox/i',$agent)) $br = 'Firefox'; 
  elseif(preg_match('/Mac/i',$agent)) $br = 'Mac';
  elseif(preg_match('/Chrome/i',$agent)) $br = 'Chrome'; 
  elseif(preg_match('/Opera/i',$agent)) $br = 'Opera'; 
  elseif(preg_match('/MSIE/i',$agent)) $br = 'IE'; 
  else $bs = 'Unknown';

?>