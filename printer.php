<?php
require 'template/header.php';

 ?>
  <body>
  <?php
    if(isset($_GET['printer'])){
    $printer = $_GET['printer'];

  
    }
    else {
   header('Location:show_bill.php');
    }
   ?>



  </body>
</html>
