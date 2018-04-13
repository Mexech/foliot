<?php

  ini_set('display_errors',1);
  error_reporting(E_ALL ^E_NOTICE);
  error_reporting(E_ALL);
  use OTPHP\TOTP;
  require 'vendor/autoload.php';

  // echo "string";
  $secret = "52ZPZbZf7Pk65MOgplIjd";
  $otp = TOTP::create($secret);

  echo 'The current OTP is:'.$otp->now();
?>
