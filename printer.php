<?php
require 'template/header.php';

 ?>

    <script type="text/javascript">
      function printContent(el){
          var gen = window.open();
          var layertext = document.getElementById(el);
          gen.document.write(layertext.innerHTML.replace("Print"));
          gen.document.close();
          gen.print();
          gen.close();
      }
    </script>
<div class="container">



  <?php
    if(isset($_GET['printer'])){
    $printer = $_GET['printer'];

    ?>
    <div id="div1" class="column">
      <?php

      for ($i=0;$i<count($printer);$i = $i+2){


        ?>
         <div style="width:550px; height:820px;">
        <?php
        for ($u=0;$u<2;$u++){
          $sql_select_print = $sqlselect = "SELECT * FROM salary INNER JOIN employees ON salary.Salary_ID = employees.Emp_ID INNER JOIN time ON salary.Salary_ID=time.Time_ID WHERE Emp_ID = '".$printer[$i+$u]."' ";
          $query_sql_select = $connect->query($sql_select_print);
          $select_print = $query_sql_select->fetch_assoc();

          echo $select_print['Emp_ID']."eiei <br>";
        ?>



 <?php
    }
    ?>
    <div style="page-break-after: always"></div>
    </div>
    <?php
   }
   ?>

    <button type="button" onclick="printContent('div1')">sdsd</button>

    <?php
    }

    else {
   header('Location:show_bill.php');
    }
   ?>
</div>


  </body>
</html>
