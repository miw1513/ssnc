<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body >
    <?php include ('template/header.php');
    if (  $_SESSION['login'] == 'yes'){
      $sql_select_employees =  'SELECT COUNT(Emp_ID) as total FROM employees';
      $query_select_employees = $connect->query($sql_select_employees);
      $count_member = $query_select_employees->fetch_assoc();


    ?>
    <br>
    <div class="container">

      <div class="column is-one-quarter">
        <h1 class="subtitle">จัดการข้อมูลพนักงาน</h1><br>

      </div>

        <div class="columns">
          <div class="column is-one-quarter">
            <div class="box" style="width: 200px;">
              <a href="show_employees.php"><img src="image/icon/1.png" alt=""></a>
              <ul class="menu-list">
                <a href="show_employees.php"><p class="title is-6">แสดงข้อมูลพนักงาน</p></a>
              </ul>
            </div>
          </div>
          <div class="column is-one-quarter">
            <div class="box" style="width: 200px;">
              <a href="insert_employees.php"><img src="image/icon/2.png" alt=""></a>
              <ul class="menu-list">
                <a href="insert_employees.php"><p class="title is-6">เพิ่มข้อมูลพนักงาน</p></a>
              </ul>
            </div>
          </div>
          <div class="column is-one-quarter">
            <div class="box" style="height:240px;">
            <center>
            <h3 >จำนวนพนักงานทั้งหมด</h1>
            <h1 class="subtitle"><?php echo $count_member['total']; ?>

            </center>
          </div>
          </div>
        </div>
      </div>
      <br><br>
      <div class="container">
        <div class="columns">
          <h1 class="subtitle">จัดการเงินเดือนพนักงาน</h1>
        </div>
          <div class="columns">
            <div class="column is-one-quarter">
              <div class="box" style="width: 200px;">
                <a href="show_salary.php"><img src="image/icon/3.png" alt=""></a>
                <ul class="menu-list">
                  <a href="show_salary.php"><p class="title is-6">แสดงเงินเดือน</p></a>
                </ul>
              </div>
            </div>
            <div class="column is-one-quarter">
              <div class="box" style="width: 200px;">
                <a href="update_salary.php"><img src="image/icon/4.png" alt=""></a>
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
            <h1 class="subtitle">พิมพ์รายงาน</h1>
          </div>
            <div class="columns">
              <div class="column is-one-quarter">
                <div class="box" style="width: 200px;">
                  <a href="show_bill.php"><img src="image/icon/5.png" alt=""></a>
                  <ul class="menu-list">
                    <a href="show_bill.php"><p class="title is-6">พิมพ์ใบจ่ายเงินเดือน</p></a>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="container">
            <div class="column is-half">
              <div class="column is-12">
                <h1 class="subtitle">จัดการข้อมูลพนักงาน</h1>
              </div>

                  <div class="column is-12">
                    <div class="box" style="width: 200px;">
                      <a href="show_employees.php"><img src="image/icon/1.png" alt=""></a>
                      <ul class="menu-list">
                        <a href="show_employees.php"><p class="title is-6">แสดงข้อมูลพนักงาน</p></a>
                      </ul>
                    </div>
                    <div class="box" style="width: 200px;">
                      <a href="insert_employees.php"><img src="image/icon/2.png" alt=""></a>
                      <ul class="menu-list">
                        <a href="insert_employees.php"><p class="title is-6">เพิ่มข้อมูลพนักงาน</p></a>
                      </ul>
                    </div>
                  </div>


            </div>
          </div> -->
    <?php }
    else {
      echo "<script type='text/javascript'>";
      echo "window.location = 'login.php'";
      echo "</script>";
    }
    ?>
  </body>
</html>
