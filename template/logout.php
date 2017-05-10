<?php
  session_start();
  session_destroy();
  session_unset(); 
  echo "<script type='text/javascript'>";
  echo "window.location = './login.php'";
  echo "</script>";
?>
