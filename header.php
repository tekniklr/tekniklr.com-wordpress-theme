<!DOCTYPE html> 
<html lang="en">
  <head>
    <?php $headincmeta = file_get_contents("http://".$_SERVER['HTTP_HOST']."/static/headincmeta"); echo $headincmeta; ?>
    <title><?php
  	  global $page, $paged;
  	  $title = wp_title(' ☆ ', false, 'right');
  	  if (!empty($title)) {
  	    echo strtolower($title);
	    }
    ?>blog ☆ tekniklr</title>
    <?php wp_head(); ?>
  </head>

  <body onload="prettyPrint()">
    <div id="container">
      <?php $header = file_get_contents("http://".$_SERVER['HTTP_HOST']."/static/header"); echo $header; ?>
      <?php $navigation = file_get_contents("http://".$_SERVER['HTTP_HOST']."/static/navigation"); echo $navigation; ?>
      <div id="main">
      	<div id="wordpress">
