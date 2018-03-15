<?php
  echo date('d'); //day
  echo date('m'); //month
  echo date('Y'); //year
  echo date('l'); //DOW
  echo '<br>';
  echo date('Y/m/d');
  echo '<br>';
  echo date('h'); //hour
  echo date('a'); //AM/PM
  echo '<br>';
  echo date('h:i:sa');
  echo '<br>';

  #Set Time Zone
  date_default_timezone_get('America/New_York');
  echo date('h:i:sa');
  echo '<br>';

  #Timestamp
  $timestamp = mktime(10, 14, 54, 9, 10, 1981);
  echo $timestamp;
  echo date('m/d/Y h:i:sa', $timestamp);
  echo '<br>';

  #StringToTime
  $timestamp2 = strtotime('7:00pm March 22 2016');
  $timestamp3 = strtotime('tomorrow');
  $timestamp4 = strtotime('+2 Days');

  echo $timestamp2;
  echo '<br>';
  echo date('m/d/Y h:i:sa', $timestamp2);
  echo '<br>';
  echo date('m/d/Y h:i:sa', $timestamp3);
  echo '<br>';
  echo date('m/d/Y h:i:sa', $timestamp4);

?>