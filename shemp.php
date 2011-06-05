<?php
  require('../../../wp-blog-header.php');
  if (is_user_logged_in()) {
    echo "1";
  }
  else {
    echo "0";
  }
?>