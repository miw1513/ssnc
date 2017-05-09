<?php
  $host = "198.46.144.201";
  $user = "khaopodc_ssnc";
  $pass = "khaopodc";
  $db = "khaopodc_ssnc";
  $connect = new mysqli($host,$user,$pass,$db);
  $connect->set_charset('utf8');
  if ($connect->connect_errno) {
    printf("Connect failed: %s\n", $connect->connect_error);
}
date_default_timezone_set("Asia/Bangkok");

 ?>
