<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include('template/header.php'); ?>
    <div class="container">
    <br><br>
      <div class="columns">
        <div class="column is-half">
          <h1 class="title">การจ่ายเงินเดือนของพนักงาน</h1>
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
            <button class="button is-primary is-outlined is-small">ส่งข้อมูล</button>
            <div id="table-wrapper">
              <div id="table-scroll">
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
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
