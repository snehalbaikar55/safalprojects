<!DOCTYPE HTML>
<html ⚡>
<head>
<meta charset="utf-8">
<script async src="https://cdn.ampproject.org/v0.js"></script>
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

<link href="<?php echo base_url()?>css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="<?php echo base_url()?>js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url()?>js/bootstrap.min.js"></script>-->
<!-- Custom Theme files -->
<!--<link href="<?php echo base_url()?>css/style.css" rel='stylesheet' type='text/css' />-->
<link href='http://fonts.googleapis.com/css?family=Grand+Hotel:400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto'
 rel='stylesheet:100,300,400,500,600,700,800,900' type='text/css'>
 <!--<link href="<?php echo base_url()?>css/new.css" rel='stylesheet' type='text/css' />
 <link href="<?php echo base_url()?>css/new1.css" rel='stylesheet' type='text/css' />-->
<style amp-custom>
<?php readfile( getcwd() . "/css/generic.css"); ?>
<?php readfile( getcwd() . "/css/amp_bootstrap.css"); ?>

</style>
<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
 
  <?php foreach ($property->result() as $row):
 $region= $row->region;
  $region1= str_replace(' ','-', $region);
  $name = $row->name;
  $name1 = str_replace(' ','-', $name); 
  $city = $row->city;
  $city1 = str_replace(' ','-', $city);
  $row->actual_price; ?>
 <link rel="canonical" href="<?php echo base_url()?>index.php/Pages/generic/<?php echo $row->id?>/<?php echo $row->actual_price; ?>/<?php echo $region1; ?>/<?php echo $name1; ?>/<?php echo $city1;?>" />

<?php endforeach; ?>
<script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
<script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script async custom-element="amp-image-lightbox" src="https://cdn.ampproject.org/v0/amp-image-lightbox-0.1.js"></script>


<script async custom-element="amp-lightbox" src="https://cdn.ampproject.org/v0/amp-lightbox-0.1.js"></script>


<script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>




 <!--<script src="js/responsiveslides.min.js"></script>-->
 