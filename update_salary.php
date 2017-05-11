<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SSNC-CIVIL</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php
      include 'template/header.php';
    ?>
  <div class="container">
    <br><br>
    <div class="columns">
      <div class="column is-one-third">
        <h1 class="title">จัดการเงินเดือนของพนักงาน</h1>
        <div id="table-wrapper">
          <div id="table-scroll">
            <select name="monthyear">
            <?php

            $sql_select_month = 'SELECT DISTINCT MonthYear FROM salary ';
            $query_select_month = $connect->query($sql_select_month);

            while ($select_month = $query_select_month->fetch_assoc()){
            ?>

              <option values="<?php echo $select_month['MonthYear']; ?>"><?php echo $select_month['MonthYear']; ?></option>

            <?php
            }
            $monthyear = $_GET['monthyear'];
             ?>
            </select>
            <button>ส่งข้อมูล</button>
            <form class="" action="#" method="post">
        <table  class="table" style="border : 1px solid;border-color : #eeeeee;">
          <tr>
            <th>รหัสพนักงาน</th>
            <th>ชื่อ - นามสกุล</th>
          </tr>
          <?php
            $sql = "SELECT * FROM employees";
            $result = $connect->query($sql);
            while($row = $result->fetch_array()){
          ?>
            <tr>
            <td><a href="?ID=<?php echo $row['Emp_ID']; ?>"><?php echo $row['Emp_ID']; ?></a></td>
            <td><?php echo $row['Emp_Name']; ?></td>
            </tr>
          <?php
            }
          ?>
        </table>
        </div>
      </div><br>
          <?php
            $ID ="";
            $Emp_Name = "";
            $Emp_Work = "";
            $Dep_ID = "";
            $Salary_Money ="";
            $Time_Work = "";
            $Salary_Paid = "";
            $Salary_OT15 = "";
            $Salary_OT20 = "";
            $Salary_OT30 = "";
            $Salary_Balance = "";
            $Salary_Vat = "";
            $Salary_Insurance ="";
            $Salary_Fund ="";
            $Time_OT15 = "";
            $Time_OT20 ="";
            $Time_OT30 ="";
            if ($_GET) {
              $ID = $_GET['ID'];
              $monthyear = date("my");
              $sqlselect = "SELECT * FROM salary INNER JOIN employees ON salary.Salary_ID = employees.Emp_ID INNER JOIN time ON salary.Salary_ID=time.Time_ID WHERE Emp_ID = '$ID' AND salary.MonthYear = '0517'";
              $result = $connect->query($sqlselect);
              while($row = $result->fetch_array()){
                $Emp_Name = $row['Emp_Name'];
                $Emp_Work = $row['Emp_Work'];
                $Dep_ID = $row['Dep_ID'];
                $Salary_Money = $row['Salary_Money'];
                $Time_Work = $row['Time_Work'];
                $Salary_Paid = $row['Salary_Paid'];
                $Salary_OT15 = $row['Salary_OT15'];
                $Salary_OT20 = $row['Salary_OT20'];
                $Salary_OT30 = $row['Salary_OT30'];
                $Salary_Balance = $row['Salary_Balance'];
                $Salary_Vat = $row['Salary_Vat'];
                $Salary_Insurance =$row['Salary_Insurance'];
                $Salary_Fund = $row['Salary_Fund'];
                $Time_OT15 = $row['Time_OT15'];
                $Time_OT20 = $row['Time_OT20'];
                $Time_OT30 = $row['Time_OT30'];
              }
            }

           ?>
          <div class="columns">
            <div class="column is-half">
              <label class="label">ภาษี</label>
            </div>
            <div class="column is-half">
              <?php echo $Salary_Vat; ?> บาท
            </div>
          </div>
          <div class="columns">
            <div class="column is-half">
              <label class="label">ค่าประกันสังคม</label>
            </div>
            <div class="column is-half">
              <?php echo $Salary_Insurance; ?> บาท
            </div>
          </div>
          <div class="columns">
            <div class="column is-half">
              <label class="label">กองทุนสำรองเลี้ยงชีพ</label>
            </div>
            <div class="column is-half">
              <?php echo $Salary_Fund; ?> บาท
            </div>
          </div>
        </div>
          <div class="column is-two-third">
            <br>
            <div class="columns">
              <div class="column is-one-third">

                <label class="label">รหัสพนักงาน</label>
              </div>
              <div class="column is-half">
                <?php echo $ID; ?>
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-third">
                <label class="label">ชื่อนามสกุล</label>
              </div>
              <div class="column is-half">
                <?php echo $Emp_Name; ?>
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-third">
                <label class="label">แผนก</label>
              </div>
              <div class="column is-half">
                <?php
                  $Dep_Name = "";
                  if ($_GET) {
                    $sqldep = "SELECT * FROM department WHERE Dep_ID = '$Dep_ID'";
                    $result = $connect->query($sqldep);
                    while($row = $result->fetch_array()){
                      $Dep_Name = $row['Dep_Name'];
                    }
                  }
                 ?>
                 <?php echo $Dep_Name; ?>
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-third">
                <label class="label">ประเภทการทำงาน</label>
              </div>
              <div class="column is-half">
                <?php echo $Emp_Work ?>
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-third">
                <label class="label">รายได้</label>
              </div>
              <div class="column is-half">
                <?php  echo $Salary_Money; ?> บาท
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-third">
                <label class="label">จำนวนวันทำงาน</label>
              </div>
              <div class="column is-half">
                <?php echo $Time_Work ?>
                <?php if ($Emp_Work == "รายวัน") :?> วัน <input type="number" name="InTime_Work" value="" class="input is-small" style="width : 40%">
                <?php else: ?> เดือน
                <?php endif; ?>
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-third">
                <label class="label">เงินที่เบิก</label>
              </div>
              <div class="column is-half">
                <?php echo $Salary_Paid; ?> บาท
                <input type="number" name="Paid" value="" style="width : 40%" class="input is-small" autofocus=""> บาท
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-third">
                <label class="label">OT*1.5</label>
              </div>
              <div class="column is-two-third">
                 <?php echo $Time_OT15; ?> ชม. =
                 <?php echo $Salary_OT15; ?> บาท
                 <input type="number" name="InOT15" value="" style="width : 15%" class="input is-small" autofocus=""> บาท
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-third">
                <label class="label">OT*2.0</label>
              </div>
              <div class="column is-two-third">
                <?php echo $Time_OT20; ?>  ชม. =
                <?php echo $Salary_OT20; ?> บาท
                <input type="number" name="InOT20" value="" style="width : 15%" class="input is-small" autofocus=""> บาท
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-third">
                <label class="label">OT*3.0</label>
              </div>
              <div class="column is-two-third">
                 <?php echo $Time_OT30; ?>  ชม. =
                 <?php echo $Salary_OT30; ?> บาท
                <input type="number" name="InOT30" value="" style="width : 15%" class="input is-small" autofocus=""> บาท
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-third">
                <label class="label"><b>เงินที่เหลือ</b></label>
              </div>
              <div class="column is-half">
                <b><?php echo $Salary_Balance; ?> บาท </b>
              </div>
            </div>
            <div class="columns">
              <input type="submit" name="" value="บันทึกข้อมูล" class="button is-primary is-outlined">
            </div>
          </div>
        </form>
      </div>
    </form>
    </div>
  </body>
</html>
