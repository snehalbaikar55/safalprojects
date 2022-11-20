<!DOCTYPE HTML>
<html>
<head>
 <title><?php echo $title; ?></title>
<!--<title>Realist an Real_Estate Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
if($property->result())
{
?>
<?php foreach ($property->result() as $row): ?>
<meta name="keywords" content="<?php echo $row->keywords; ?>" />
<meta name="description" content="<?php echo $row->meta_description; ?>" /> 
<?php endforeach; }?>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url()?>css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url()?>js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url()?>js/bootstrap.min.js"></script>

<!-- Custom Theme files -->
<link href="<?php echo base_url()?>css/style.css" rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Grand+Hotel:400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto'
 rel='stylesheet:100,300,400,500,600,700,800,900' type='text/css'>
 <link href="<?php echo base_url()?>css/new.css" rel='stylesheet' type='text/css' />
 <link href="<?php echo base_url()?>css/new1.css" rel='stylesheet' type='text/css' />
 <script type="text/javascript" src="<?php echo base_url()?>js/jquery.fancybox.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/jquery.fancybox.css" media="screen" />
 <?php foreach ($property->result() as $row):
 $region= $row->region;
  $region1= str_replace(' ','-', $region);
  $name = $row->name;
  $name1 = str_replace(' ','-', $name); 
  $city = $row->city;
  $city1 = str_replace(' ','-', $city);
  $row->actual_price; ?>
<link rel="amphtml" href="<?php echo base_url()?>index.php/Pages/amp/<?php echo $row->id?>/<?php echo $row->actual_price; ?>/<?php echo $region1; ?>/<?php echo $name1; ?>/<?php echo $city1;?>">
<?php endforeach; ?>

 <!--<script src="js/responsiveslides.min.js"></script>-->
 