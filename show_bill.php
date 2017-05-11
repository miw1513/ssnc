<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <?php include('template/header.php'); ?>
    <div class="container">
    <br><br>
      <div class="columns">
        <div class="column">
          <h1 class="title">การจ่ายเงินเดือนของพนักงาน</h1>
          <form action="#" method="post">
          <select name="monthyear" class="input is-small" style="width : 50%;">
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
            <input type="submit" value="หาข้อมูล" class="button is-primary is-outlined is-small">
            </form>
            <br>
            <div id="table-wrapper">
              <div id="table-scroll" style="height:500px;">
                <table  class="table" style="border : 1px solid;border-color : #eeeeee;">
                  <tr>
                    <th><input type="checkbox" id="checkAll" value=""> All</th>
                    <th>รหัสพนักงาน</th>
                    <th>ชื่อ - นามสกุล</th>
                    <th>แผนก</th>
                    <th>การทำงาน</th>
                    <th>รายได้</th>
                    <th>OT*1.5</th>
                    <th>OT*2.0</th>
                    <th>OT*3.0</th>
                    <th>รายได้สุทธิ</th>
                  </tr>
                  <?php
                  if($_POST){
                  $monthyear =  $_POST['monthyear'];
                  $sql = "SELECT * FROM salary INNER JOIN employees ON salary.Salary_ID = employees.Emp_ID INNER JOIN time ON salary.Salary_ID=time.Time_ID INNER JOIN department ON employees.Dep_ID = department.Dep_ID
                          WHERE salary.MonthYear = '$monthyear'";
                  $result = $connect->query($sql);
                  while($row = $result->fetch_array()){
                    ?>
                    <tr>
                      <td><input type="checkbox" name="<?php echo $row['Emp_ID']; ?>"></td>
                      <td><?php echo $row['Emp_ID']; ?></td>
                      <td><?php echo $row['Emp_Name']; ?></td>
                      <td><?php echo $row['Dep_Name']; ?></td>
                      <td><?php echo $row['Emp_Work']; ?></td>
                      <td><?php echo $row['Salary_Money']; ?></td>
                      <td><?php echo $row['Salary_OT15']; ?></td>
                      <td><?php echo $row['Salary_OT20']; ?></td>
                      <td><?php echo $row['Salary_OT30']; ?></td>
                      <td><?php echo $row['Salary_Balance']; ?></td>
                    </tr>
              <?php
                }
              }
                ?>
              </table>
            </div>
            <button type="button" name="button" class="button is-primary is-outlined"> <i class="fa fa-print"></i>&nbsp;&nbsp;ปริ้นเงินเดือน</button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
