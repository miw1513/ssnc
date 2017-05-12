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
      window.print()
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

                $sql_select_print = $sqlselect = "SELECT * FROM salary INNER JOIN employees ON salary.Salary_ID = employees.Emp_ID INNER JOIN time ON salary.Salary_ID=time.Time_ID INNER JOIN department ON employees.Dep_ID = department.Dep_ID WHERE Emp_ID = '".$printer[$i]."' ";
                $query_sql_select = $connect->query($sql_select_print);
                $select_print = $query_sql_select->fetch_assoc();

                ?>
                <!-- <table   border="1">
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
                    <td><b>รายการหัก</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Year to Date กองทุนส่วนสมาชิก</td>
                    <td>600 บาท</td>
                  </tr>
                  <tr>
                    <td>ภาษี</td>
                    <td> 700 บาท</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Year to Date กองทุนส่วนนายจ้าง</td>
                    <td>600 บาท</td>
                  </tr>
                  <tr>
                    <td>ประกันสังคม</td>
                    <td>700 บาท</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Year to Date ประกันสังคม</td>
                    <td>600 บาท</td>
                  </tr>
                  <tr>
                    <td>กองทุนสำรองเลี้ยงชีพ</td>
                    <td>700 บาท</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Year to Date รายได้สะสม</td>
                    <td>600 บาท</td>
                  </tr>
                  <tr>
                    <td>ค่าโอนเงิน</td>
                    <td>700 บาท</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Year to Date รายได้สุทธิสะสม</td>
                    <td>600 บาท</td>
                  </tr>

                </table> -->
              <center>
                <table class="table">
                  <tr style="border : 3px solid;">
                    <td>
                      <table>
                        <tr>
                          <td>รหัสพนักงาน</td><td><?php echo $select_print['Emp_ID']; ?></td>
                        </tr>
                        <tr>
                          <td>ชื่อ</td><td><?php echo $select_print['Emp_Name']; ?></td>
                        </tr>
                        <tr>
                          <td>วันที่เริ่มงาน</td><td><?php echo $select_print['Emp_StrDate']; ?></td>
                        </tr>
                      </table>
                    </td>
                    <td>
                    </td>
                    <td>
                      <table>
                        <tr>
                          <td>รอบวันที่</td><td><?php echo $select_print['MonthYear']; ?></td>
                        </tr>
                        <tr>
                          <td>วันที่จ่าย</td><td><?php echo date("d-m-Y"); ?></td>
                        </tr>
                        <tr>
                          <td>แผนก</td><td><?php echo $select_print['Dep_Name']; ?></td>
                        </tr>
                        <tr>
                          <td>รูปแบบการจ่าย</td><td>เงินสด</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td  style="border : 3px solid;" rowspan="2">
                      <table>
                        <th>รายได้<br>Income</th><th></th><th>บาท<br>baht</th>
                        <tr>
                          <td>เงินเดือน/Salary</td><td><?php echo $select_print['Time_Work']; ?></td><td><?php echo $select_print['Salary_Money']; ?></td>
                        </tr>
                        <tr>
                          <td>ค่าล่วงเวลา1.5/OT1.5</td><td><?php echo $select_print['Time_OT15']; ?></td><td><?php echo $select_print['Salary_OT15']; ?></td>
                        </tr>
                        <tr>
                          <td>ค่าล่วงเวลา2/OT2</td><td><?php echo $select_print['Time_OT20']; ?></td><td><?php echo $select_print['Salary_OT20']; ?></td>
                        </tr>
                        <tr>
                          <td>ค่าล่วงเวลา3/OT3</td><td><?php echo $select_print['Time_OT30']; ?></td><td><?php echo $select_print['Salary_OT30']; ?></td>
                        </tr>
                        <tr>
                          <td>เบี้ยขยัน</td><td></td><td><?php echo $select_print['Salary_Diligent']; ?></td>
                        </tr>
                      </table>
                    </td>
                    <td  style="border : 3px solid;" rowspan="2">
                      <table>
                        <th>รายการหัก<br>deducation</th><th>บาท<br>baht</th>
                        <tr>
                          <td>หักเบิกก่อน</td><td><?php echo $select_print['Salary_Paid']; ?></td>
                        </tr>
                        <tr>
                          <td>ภาษี</td><td><?php echo $select_print['Salary_Vat']; ?></td>
                        </tr>
                        <tr>
                          <td>ประกันสังคม</td><td><?php echo $select_print['Salary_Insurance']; ?></td>
                        </tr>
                        <tr>
                          <td>กองทุนสำรองเลี้ยงชีพ</td><td><?php echo $select_print['Salary_Fund']; ?></td>
                        </tr>
                      </table>
                    </td>
                    <td  style="border : 3px solid;" >
                      <table>
                        <th>สรุป<br>Summary</th><th>บาท<br>baht</th>
                        <tr>
                          <td>รายได้</td><td><?php echo $select_print['Salary_Money']*$select_print['Time_Work']; ?></td>
                        </tr>
                        <tr>
                          <?php $totalSalary = (($select_print['Salary_Money']*$select_print['Time_Work']) + $select_print['Salary_OT15'] + $select_print['Salary_OT20'] + $select_print['Salary_OT30'] + +$select_print['Salary_Diligent']); ?>
                          <td>รวมรายได้</td><td><?php echo $totalSalary; ?></td>
                        </tr>
                        <tr>
                          <?php $totalPaid = $select_print['Salary_Paid'] + $select_print['Salary_Fund'] + $select_print['Salary_Vat'] + $select_print['Salary_Insurance']; ?>
                          <td>รวมรายการหัก</td><td><?php echo $totalPaid; ?></td>
                        </tr>
                        <tr>
                          <td><br><br><br><b>รายได้สุทธิ</b></td><td><br><br><br><u><?php echo $select_print['Salary_Balance']; ?></td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td  style="border : 3px solid;">
                      <table>
                        <tr>
                          <?php
                            $ID = $select_print['Emp_ID'];
                            $sqlsum = "SELECT SUM(Salary_Vat) FROM salary WHERE Salary_ID = '$ID' GROUP BY Salary_ID";
                            $result = $connect->query($sqlsum);
                            $sum = $result->fetch_assoc();
                           ?>
                          <td>Year to date ภาษี</td><td><?php echo $sum['SUM(Salary_Vat)']; ?></td>
                        </tr>
                        <tr>
                          <?php
                            $sqlsum = "SELECT SUM(Salary_Fund) FROM salary WHERE Salary_ID = '$ID' GROUP BY Salary_ID";
                            $result = $connect->query($sqlsum);
                            $sum = $result->fetch_assoc();
                           ?>
                          <td>Year to date กองทุนสำรองเลี้ยงชีพ</td><td><?php echo $sum['SUM(Salary_Fund)']; ?></td>
                        </tr>
                        <tr>
                          <?php
                            $sqlsum = "SELECT SUM(Salary_Insurance) FROM salary WHERE Salary_ID = '$ID' GROUP BY Salary_ID";
                            $result = $connect->query($sqlsum);
                            $sum = $result->fetch_assoc();
                           ?>
                          <td>Year to date ประกันสังคม</td><td><?php echo $sum['SUM(Salary_Insurance)']; ?></td>
                        </tr>
                        <tr>
                          <?php
                            $sqlsum = "SELECT SUM(Time_Work) FROM time WHERE Time_ID = '$ID' GROUP BY Time_ID";
                            $result = $connect->query($sqlsum);
                            $sum = $result->fetch_assoc();
                            $salary = $select_print['Salary_Money']*$sum['SUM(Time_Work)'];
                           ?>
                          <td>Year to date รายได้สะสม</td><td><?php echo $salary; ?></td>
                        </tr>
                        <tr>
                          <?php
                            $sqlsum = "SELECT SUM(Salary_Balance) FROM salary WHERE Salary_ID = '$ID' GROUP BY Salary_ID";
                            $result = $connect->query($sqlsum);
                            $sum = $result->fetch_assoc();
                           ?>
                          <td>Year to date รายได้สุทธิ</td><td><?php echo $sum['SUM(Salary_Balance)']; ?></td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </center>
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
          <!-- <center><button id="btn" onclick="printContent('div1')" >Print</button></center> -->

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
