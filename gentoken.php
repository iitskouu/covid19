<?php 

if (empty($_SESSION['token'])) {
  $length = 32;
  $_SESSION['token'] = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $length); 
 
}
?>