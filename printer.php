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
    <div id="div1">
      <?php

      for ($i=0;$i<count($printer);$i = $i+2){


        ?>
         <div style="height:850px;">
        <?php
        for ($u=0;$u<2;$u++){
          $sql_select_print = $sqlselect = "SELECT * FROM salary INNER JOIN employees ON salary.Salary_ID = employees.Emp_ID INNER JOIN time ON salary.Salary_ID=time.Time_ID WHERE Emp_ID = '".$printer[$i+$u]."' ";
          $query_sql_select = $connect->query($sql_select_print);
          $select_print = $query_sql_select->fetch_assoc();

        ?>
          <table>
            <tr>
              <th >รหัสพนักงาน</th>
              <th >A001</th>
              <th >รอบวันที่</th>
              <th >19/01/2000</th>
            </tr>
            <tr>
              <th >ชื่อ</th>
              <th >Micro eieiza</th>
              <th >วันที่จ่าย</th>
              <th>19/01/2000</th>
            </tr>
            <tr>
              <th>วันเริ่มงาน</th>
              <th>19/01/2000</th>
              <th>แผนก</th>
              <th>asd</th>
            </tr>
            <tr>
              <th colspan="2"></th>
              <th>รูปแบบการจ่าย</th>
              <th>เงินสด</th>
            </tr>

          <br>
          <br>

            <tr>
              <th>รายได้/Income</th>
              <th>บาท/BAHT</th>
              <th>รายการหัก/Deducation</th>
              <th>บาท/BAHT</th>
              <th>สรุป/Summary</th>
              <th>บาท/BAHT</th>
            </tr>
            <tr>
              <td>เงินเดือน / Salary </td>
              <td> 5 วัน </td>
              <td>หักมาสาย</td>
              <td>500</td>
              <td>รวมรายได้</td>
              <td>1000000</td>

            </tr>
            <tr>
              <td>ค่าล่วงเวลา 1 / OT 1 </td>
              <td>5 ชม</td>
              <td>หักออกก่อน </td>
              <td>500</td>
              <td>รวมรายการหัก </td>
              <td>600 บาท</td>

            </tr>
            <tr>

            </tr>

          </table>









 <?php
    }
    ?>
    </div>
    <div style="page-break-after: always"></div>

    <?php
   }
   ?>

    <button type="button" onclick="printContent('div1')">sdsd</button>
</div>
    <?php
    }

    else {
   header('Location:show_bill.php');
    }
   ?>
</div>


  </body>
</html>
