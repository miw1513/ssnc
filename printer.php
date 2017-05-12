<?php
require 'connect.php';

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>SSNC-Civil</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.css" />
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
  <style >
  body{
    font-family: 'Didact Gothic', sans-serif;
    font-size:9px;
  }
  .table {
    width:700px;
   border-style:double;
   border:2px solid black;

  }

  </style>

</head>


<body >
  <div id="div1">
    <script type="text/javascript">
    var statusOnClick = true

    function printContent(el){
      // var gen = window.open();
      // var layertext = document.getElementById(el);
      //
      // gen.document.write(layertext.innerHTML.replace("Print"));
      //
      // gen.document.close();

        $('#btn').toggle()
        window.print()
        window.close()
        $('#btn').toggle()


    }

    </script>
    <div class="container">



      <?php
      if(isset($_GET['printer'])){
        $printer = $_GET['printer'];

        ?>
        <div>
          <?php
            $check = 0;
          for ($i=0;$i<count($printer);$i++){


            ?>
            <div >
              <?php

                $sql_select_print = $sqlselect = "SELECT * FROM salary INNER JOIN employees ON salary.Salary_ID = employees.Emp_ID INNER JOIN time ON salary.Salary_ID=time.Time_ID WHERE Emp_ID = '".$printer[$i]."' ";
                $query_sql_select = $connect->query($sql_select_print);
                $select_print = $query_sql_select->fetch_assoc();

                ?>
                <table  class="table">
                  <tr >
                    <th >รหัสพนักงาน</th>
                    <th >A001</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th >รอบวันที่</th>
                    <th >19/01/2000</th>

                  </tr>
                  <tr >
                    <th >ชื่อ</th>
                    <th >Micro eieiza</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th >วันที่จ่าย</th>
                    <th>19/01/2000</th>

                  </tr>
                  <tr >
                    <th>วันเริ่มงาน</th>
                    <th>19/01/2000</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>แผนก</th>
                    <th>asd</th>

                  </tr>
                  <tr >
                    <th colspan="2"></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>รูปแบบการจ่าย</th>
                    <th>เงินสด</th>

                  </tr>

                  <br>
                  <br>

                  <tr >
                    <th >รายได้<br>Income</th>
                    <th></th>
                    <th>บาท<br>BAHT</th>
                    <th>รายการหัก<br>Deducation</th>
                    <th>บาท<br>BAHT</th>
                    <th>สรุป<br>Summary</th>
                    <th>บาท<br>BAHT</th>
                  </tr>
                  <tr  >
                    <td>เงินเดือน / Salary </td>
                    <td> 5 วัน </td>
                    <th></th>
                    <td>หักมาสาย</td>
                    <td>500</td>
                    <td>รวมรายได้</td>
                    <td>1000000</td>

                  </tr>
                  <tr >
                    <td>ค่าล่วงเวลา 1 / OT 1 </td>
                    <td>5 ชม</td>
                    <td></td>
                    <td>หักออกก่อน </td>
                    <td>500</td>

                    <td>รวมรายการหัก </td>
                    <td>600 บาท</td>


                  </tr>
                  <tr>
                    <td>ค่าล่วงเวลา 1.5 / OT 1.5 </td>
                    <td>6 ชม</td>
                    <td></td>
                    <td>หักลา</td>
                    <td>500 บาท</td>
                    <td></td>
                    <td></td>
                    <th></th>
                  </tr>
                  <tr>
                    <td>ค่าล่วงเวลา 2 / OT 2 </td>
                    <td>6 ชม</td>
                    <td></td>
                    <td>หักขาดงาน</td>
                    <td>700 บาท</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>ค่าล่วงเวลา 3 / OT 3 </td>
                    <td>6 ชม</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>วันหยุดประเพณี</td>
                    <td>6 วัน</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>รายได้สุทธิ / Net Income</td>
                    <td>700 บาท</td>
                  </tr>
                  <tr>
                    <td>ค่ากะ</td>
                    <td>6 วัน</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>เบี้ยขยัน</td>
                    <td>6 วัน</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Year to Date ภาษี</td>
                    <td>600 บาท</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Year to Date กองทุนส่วนสมาชิก</td>
                    <td>600 บาท</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td>ภาษี</td>
                    <td> 700 บาท</td>
                    <td></td>
                    <td>Year to Date กองทุนส่วนนายจ้าง</td>
                    <td>600 บาท</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td>ประกันสังคม</td>
                    <td>700 บาท</td>
                    <td></td>
                    <td>Year to Date ประกันสังคม</td>
                    <td>600 บาท</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td>กองทุนสำรองเลี้ยงชีพ</td>
                    <td>700 บาท</td>
                    <td></td>
                    <td>Year to Date รายได้สะสม</td>
                    <td>600 บาท</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td>ค่าโอนเงิน</td>
                    <td>700 บาท</td>
                    <td></td>
                    <td>Year to Date รายได้สุทธิสะสม</td>
                    <td>600 บาท</td>
                  </tr>

                </table>









                <?php
                $check++;
              ?>
            </div>

            <?php
            if ($check == 2 AND ($i+1) != count($printer) ){

             ?>
             <div style="page-break-after: always"></div>

            <?php
            $check = 0;
            }
          }
          ?>

        </div>
          <center><button id="btn" onclick="printContent('div1')" >Print</button></center>

        <?php
      }

      else {
        header('Location:show_bill.php');
      }
      ?>
    </div><br><br>
  </div>



</body>
</html>
