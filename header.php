<!DOCTYPE html> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]--> 
<!--[if IE 7 ]> <html lang="en" class="no-js ie7"> <![endif]--> 
<!--[if IE 8 ]> <html lang="en" class="no-js ie8"> <![endif]--> 
<!--[if IE 9 ]> <html lang="en" class="no-js ie9"> <![endif]--> 
<!--[if gt IE 9]> <html lang="en" class="no-js"> <![endif]--> 
<head>
  <?php $headincmeta = file_get_contents("http://".$_SERVER['HTTP_HOST']."/static/headincmeta"); echo $headincmeta; ?>
  <title><?php
	  global $page, $paged;
	  wp_title( '~', true, 'right' );
  ?> blog ~ tekniklr.com</title>
  <?php wp_head(); ?>
</head>

<body>
  <div id="container">
    <?php $header = file_get_contents("http://".$_SERVER['HTTP_HOST']."/static/header"); echo $header; ?>
    <?php $navigation = file_get_contents("http://".$_SERVER['HTTP_HOST']."/static/navigation"); echo $navigation; ?>
    <div id="main">