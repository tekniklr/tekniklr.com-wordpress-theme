<!DOCTYPE html> 
<html lang="en">
  <head>
    <?php $headincmeta = file_get_contents("https://tekniklr.com/static/headincmeta"); echo $headincmeta; ?>
    <title><?php
  	  global $page, $paged;
  	  $title = wp_title(' - ', false, 'right');
  	  if (!empty($title)) {
  	    echo strtolower($title);
	    }
    ?>blog - tekniklr.com</title>
    <?php wp_head(); ?>
  </head>

  <body>
    <div id="container">
      <?php $header = file_get_contents("https://tekniklr.com/static/header"); echo $header; ?>
      <?php $navigation = file_get_contents("https://tekniklr.com/static/navigation"); echo $navigation; ?>
      <div id="main">
      	<div id="wordpress">
