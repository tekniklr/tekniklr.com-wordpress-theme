<!DOCTYPE html> 
<html lang="en">
  <head>
    <?php $headincmeta = file_get_contents("http://".$_SERVER['HTTP_HOST']."/static/headincmeta"); echo $headincmeta; ?>
    <title><?php
  	  global $page, $paged;
  	  $title = get_the_title();
  	  echo strtolower($title);
    ?> ~ blog ~ tekniklr.com</title>
    <?php wp_head(); ?>
  </head>

  <body>
    <div id="container">
      <?php $header = file_get_contents("http://".$_SERVER['HTTP_HOST']."/static/header"); echo $header; ?>
      <?php $navigation = file_get_contents("http://".$_SERVER['HTTP_HOST']."/static/navigation"); echo $navigation; ?>
      <div id="main">