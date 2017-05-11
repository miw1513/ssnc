<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body >
    <?php include ('template/header.php');
    if (  $_SESSION['login'] == 'yes'){
    ?>
    <br>
    <div class="container">
      <div class="columns">
        <h1 class="title">จัดการข้อมูลพนักงาน</h1>
      </div>
        <div class="columns">
          <div class="column is-one-quarter">
            <div class="box" style="width: 200px;">
              <a href="show_employees.php"><img src="image/icon/show_emp.png" alt=""></a>
              <ul class="menu-list">
                <a href="show_employees.php"><p class="title is-6">แสดงข้อมูลพนักงาน</p></a>
              </ul>
            </div>
          </div>
          <div class="column is-one-quarter">
            <div class="box" style="width: 200px;">
              <a href="insert_employees.php"><img src="image/icon/insert_emp.png" alt=""></a>
              <ul class="menu-list">
                <a href="insert_employees.php"><p class="title is-6">เพิ่มข้อมูลพนักงาน</p></a>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <br><br>
      <div class="container">
        <div class="columns">
          <h1 class="title">จัดการเงินเดือนพนักงาน</h1>
        </div>
          <div class="columns">
            <div class="column is-one-quarter">
              <div class="box" style="width: 200px;">
                <a href="show_salary.php"><img src="image/icon/show_salary.png" alt=""></a>
                <ul class="menu-list">
                  <a href="show_salary.php"><p class="title is-6">แสดงเงินเดือน</p></a>
                </ul>
              </div>
            </div>
            <div class="column is-one-quarter">
              <div class="box" style="width: 200px;">
                <a href="update_salary.php"><img src="image/icon/update_salary.png" alt=""></a>
                <ul class="menu-list">
                  <a href="update_salary.php"><p class="title is-6">อัพเดทเงินเดือน</p></a>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <br><br>
        <div class="container">
          <div class="columns">
            <h1 class="title">พิมพ์รายงาน</h1>
          </div>
            <div class="columns">
              <div class="column is-one-quarter">
                <div class="box" style="width: 200px;">
                  <a href="show_bill.php"><img src="image/icon/print_salary.png" alt=""></a>
                  <ul class="menu-list">
                    <a href="show_bill.php"><p class="title is-6">พิมพ์ใบจ่ายเงินเดือน</p></a>
                  </ul>
                </div>
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
</html>
