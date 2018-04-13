<?php
  $today = date("Y-m-d");
  $tomorrow = date("Y-m-d", strtotime("+1 day"));

  

  $afterTomorrow = date("Y-m-d", strtotime("+2 day"));
  $bookingPeriod = 14;
  if ($bookingPeriod > 365)
    $bookingPeriod = 365;
  $bookingEndDay = date("Y-m-d", strtotime("+".$bookingPeriod." day"));
?>
