<?php
ob_start();
session_start();
  $host = "103.70.5.49";
  $user = "ssnccivi_ssnc";
  $pass = "ssnc1234";
  $db = "ssnccivi_ssnc";
  $connect = new mysqli($host,$user,$pass,$db);
  $connect->set_charset('utf8');
  if ($connect->connect_errno) {
    printf("Connect failed: %s\n", $connect->connect_error);
}
date_default_timezone_set("Asia/Bangkok");

 ?>
