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
    <?php if (  $_SESSION['login'] == 'yes'){
    ?>
  <div class="container">
    <br><br>
    <div class="columns">
      <div class="column is-one-third">
        <h1 class="title">จัดการเงินเดือนของพนักงาน</h1>

            <form class="" action="" method="get">
              <span class="select">

            <select name="monthyear"  id = "monthyear" style="width : 100%;" >
            <?php
            $sql_select_month = 'SELECT DISTINCT MonthYear FROM salary ';
            $query_select_month = $connect->query($sql_select_month);

            while ($select_month = $query_select_month->fetch_assoc()){
            ?>

            <option values="<?php echo $select_month['MonthYear']; ?>"><a href="?monthyear=<?php echo $select_month['MonthYear']; ?>"><?php echo $select_month['MonthYear']; ?></a></option>

            <?php
            }
             ?>
            </select>
            </span>
            <input type="submit" name="" class="button is-primary is-outlined" value="ส่งข้อมูล">
            </form>

            <?php if (isset($_GET['monthyear'])) {
              $_SESSION['MonthYear'] = $_GET['monthyear'];
            }
            ?>


        <div id="table-wrapper">
          <div id="table-scroll">
            <form class="" action="" method="post">
        <table  class="table" style="border : 1px solid;border-color : #eeeeee;">
          <tr>
            <th>รหัสพนักงาน</th>
            <th>ชื่อ - นามสกุล</th>
          </tr>
          <?php
            $sql = "SELECT * FROM employees WHERE Emp_ID <> 1000";
            $result = $connect->query($sql);
            while($row = $result->fetch_array()){
          ?>
            <tr>
            <td><a href="?ID=<?php echo $row['Emp_ID']; ?>&monthyear=<?php echo $_SESSION['MonthYear'] ?>"><?php echo $row['Emp_ID']; ?></a></td>
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
            $IMG ="";
            $Salary_Diligent="";

            if (isset($_GET['ID'])) {
              $ID = $_GET['ID'];
              $monthyear = $_GET['monthyear'];
              $sqlselect = "SELECT * FROM salary INNER JOIN employees ON salary.Salary_ID = employees.Emp_ID INNER JOIN time ON salary.Salary_ID=time.Time_ID WHERE Emp_ID = '$ID' AND salary.MonthYear = '$monthyear'";
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
                $IMG =$row['Emp_IMG'];
                $Salary_Diligent= $row['Salary_Diligent'];
              }
            }

           ?>

          <div class="columns" >
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
          <div class="columns">
            <div class="column is-half">
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
            <div class="column is-half">
              <label class="label">ประเภทการทำงาน</label>
            </div>
            <div class="column is-half">
              <?php echo $Emp_Work ?>
            </div>
          </div>


        </div>
          <div class="column is-two-third">
            <div class="Pic"> <img id="output"/ width=150px height=160px src="<?php echo $IMG; ?>"></div>
            <div class="columns">
              <div class="column is-one-third">
                <label class="label">รหัสพนักงาน</label>
              </div>
              <div class="column is-one-third">
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
                <?php if ($Emp_Work == "รายวัน") :?> วัน <input type="number" name="InTimeWork" value="" class="input is-small" style="width : 40%" required min=0> วัน
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
                <input type="number" name="Paid" value="" style="width : 40%" class="input is-small" autofocus="" required min=0> บาท
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-third">
                <label class="label">OT*1.5</label>
              </div>
              <div class="column is-two-third">
                 <?php echo $Time_OT15; ?> ชม. =
                 <?php echo $Salary_OT15; ?> บาท
                 <input type="number" name="InOT15" value="" style="width : 15%" class="input is-small" autofocus="" required min=0> ชั่วโมง
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-third">
                <label class="label">OT*2.0</label>
              </div>
              <div class="column is-two-third">
                <?php echo $Time_OT20; ?>  ชม. =
                <?php echo $Salary_OT20; ?> บาท
                <input type="number" name="InOT20" value="" style="width : 15%" class="input is-small" autofocus="" required min=0> ชั่วโมง
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-third">
                <label class="label">OT*3.0</label>
              </div>
              <div class="column is-two-third">
                 <?php echo $Time_OT30; ?>  ชม. =
                 <?php echo $Salary_OT30; ?> บาท
                <input type="number" name="InOT30" value="" style="width : 15%" class="input is-small" autofocus="" required min=0> ชั่วโมง
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-third">
                <label class="label">เบี้ยขยัน</label>
              </div>
              <div class="column is-two-third">
                 <?php echo $Salary_Diligent; ?>  บาท
                <input type="number" name="InDiligent" value="" style="width : 30%" class="input is-small" autofocus="" required min=0> บาท
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
      </div>
    </div>
    <?php }
    else {
      echo "<script type='text/javascript'>";
      echo "window.location = 'login.php'";
      echo "</script>";
    }
    ?>
  </body>
  <?php
    if($_POST){
      $Paid = $_POST['Paid'];
      $InOT15 = $_POST['InOT15'];
      $InOT20 = $_POST['InOT20'];
      $InOT30 = $_POST['InOT30'];
      $Salary_Diligent = $_POST['InDiligent'];
      if ($Emp_Work == "รายวัน") {
        $InTimeWork = $_POST['InTimeWork'];
        $OT15 = ($Salary_Money/8) * $InOT15 * 1.5;
        $OT20 = ($Salary_Money/8) * $InOT20 * 2.0;
        $OT30 = ($Salary_Money/8) * $InOT30* 3.0;
        $Salary_Vat = $Salary_Money*$InTimeWork*0.03;
        $Salary_Insurance = $Salary_Money*$InTimeWork*0.05;
        if ($Salary_Insurance > 750) {
            $Salary_Insurance = 750;
        }
        $Salary_Fund = $Salary_Money*$InTimeWork*0.03;
      }
      else {
        $InTimeWork = 1;
        $OT15 = ($Salary_Money/30/8) * $InOT15 * 1.5;
        $OT20 = ($Salary_Money/30/8) * $InOT20 * 2.0;
        $OT30 = ($Salary_Money/30/8) * $InOT30 * 3.0;
        $Salary_Vat = $Salary_Money*0.03;
        $Salary_Insurance = $Salary_Money*0.05;
        if ($Salary_Insurance > 750) {
            $Salary_Insurance = 750;
        }
        $Salary_Fund = $Salary_Money*0.03;
      }
      $Salary_Balance = 0;
      $Salary_Balance = ($Salary_Money*$InTimeWork) + ($OT15 + $OT20 + $OT30) - ($Salary_Vat + $Salary_Insurance + $Salary_Fund + $Paid) ;
      //Update Salary Table
      $sqlsalary = "UPDATE salary SET
                    Salary_Balance = '$Salary_Balance',
                    Salary_OT15 = '$OT15',
                    Salary_OT20 = '$OT20',
                    Salary_OT30 = '$OT30',
                    Salary_Paid = '$Paid',
                    Salary_Vat = '$Salary_Vat',
                    Salary_Insurance = '$Salary_Insurance',
                    Salary_Fund = '$Salary_Fund',
                    Salary_Diligent = '$Salary_Diligent'
                    WHERE Salary_ID = '$ID'";
      $connect->query($sqlsalary);
      //Update Time Table
      $sqltime = "UPDATE time SET
                  Time_Work = '$InTimeWork',
                  Time_OT15 = '$InOT15',
                  Time_OT20 = '$InOT20',
                  Time_OT30 = '$InOT30'
                  WHERE Time_ID = '$ID'";
    $connect->query($sqltime);
    header("Refresh:0; url=update_salary.php?ID=$ID&monthyear=$monthyear");
    }
   ?>
</html>
