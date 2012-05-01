<?php 
  $second = mktime(0,0,0,1,1,2013);
  $first = mktime(0,0,0,22,3,2012); 
  $difference = $first - $second;
  echo ' hours, '; 
  echo floor(floor($difference / 60) / 24); 
?>