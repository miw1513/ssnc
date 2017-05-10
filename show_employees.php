<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title>SSNC-CIVIL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.css" />
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <form class="" action="#" method="post" enctype="multipart/form-data">
      <?php
      include 'template/header.php'; ?>
      <?php if (  $_SESSION['login'] == 'yes'){
      ?>
    <br>
    <div class="container">
      <div class="columns">
          <div class="column is-half">
            <h1  class="title">ข้อมูลพนักงาน</h1>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">รหัสพนักงาน</label>
              </div>
              <div class="column is-three-quarters">
                <select class="input is-small" name="Emp_ID" style="width : 60%" readonly>
                  <?php
                    $sql = "SELECT * FROM employees JOIN salary ON Emp_ID = Salary_ID ORDER BY Emp_ID";
                    $result = $connect->query($sql);
                    while($row = $result->fetch_array()){
                  ?>
                      <option value=<?php echo $row['Emp_ID']; ?>><?php echo $row['Emp_ID']; ?></option>
                  <?php
                    }
                   ?>
                </select>
                <input type="submit" name="show" value="ดูข้อมูล">
              </div>
            </div>
            <?php
            $Name = "";
            $NID = "";
            $DOB = "";
            $Work = "";
            $Dep = "";
            $Salary ="";
            $Disease = "";
            $Child = "";
            $StrDate = "";
            $Add = "";
            $Tel = "";
            $Gender ="";
            $Status = "";
            $IMG ="";
            if ($_POST) {
              $ID = $_POST['Emp_ID'];
              $sql = "SELECT * FROM employees JOIN salary ON Emp_ID = Salary_ID WHERE Emp_ID = '$ID'";
              $result = $connect->query($sql);
              while($row = $result->fetch_array()){
                $Name = $row['Emp_Name'];
                $NID = $row['Emp_NID'];
                $DOB = $row['Emp_DOB'];
                $Work = $row['Emp_Work'];;
                $Dep = $row['Dep_ID'];
                $Salary = $row['Salary_Money'];
                $Disease = $row['Emp_Disease'];
                $Child = $row['Emp_Child'];
                $StrDate = $row['Emp_StrDate'];
                $Add = $row['Emp_Add'];
                $Tel = $row['Emp_Tel'];
                $Gender = $row['Emp_Gender'];
                $Status = $row['Emp_Status'];
                $IMG = $row['Emp_IMG'];
              }
            }
             ?>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">ชื่อพนักงาน</label>
              </div>
              <div class="column is-three-quarters">
                <input type="text" name="Emp_Name" value="<?php echo "$Name"; ?>" class="input is-small"  style="width : 60%" readonly>
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">เลขประจำตัวประชาชน</label>
              </div>
              <div class="column is-three-quarters">
                <input type="text" name="NID" value="<?php echo $NID; ?>" class="input is-small"  style="width : 60%" readonly>
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">วันเดือนปีเกิด</label>
              </div>
              <div class="column is-three-quarters">
                  <input type="text" name="Emp_DOB" value="<?php echo $DOB; ?>" class="input is-small"  style="width : 60%" readonly>
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">ประเภทการทำงาน</label>
              </div>
              <div class="column is-three-quarters">
                <input type="text" name="Work" value="<?php echo $Work; ?>" class="input is-small"  style="width : 60%" readonly>
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">แผนก</label>
              </div>
              <div class="column is-three-quarters">
                    <?php
                      $DepName = "";
                      if ($_POST) {
                        $sqldep = "SELECT * FROM department WHERE Dep_ID = '$Dep'";
                        $result = $connect->query($sqldep);
                        while($row = $result->fetch_array()){
                          $DepName = $row['Dep_Name'];
                        }
                      }
                     ?>
                  <input type="text" name="Dep" value="<?php echo $DepName; ?>" class="input is-small"  style="width : 60%" readonly>
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">เงินเดือน</label>
              </div>
              <div class="column is-half">
                  <input type="number" value="<?php echo $Salary; ?>" name="Salary" min="0" step="0.01" class="input is-small"  style="width : 60%" readonly>

              </div>
              <div class="column is-one-quarter">
                  <label class="label">บาท</label>
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">โรคประจำตัว</label>
              </div>
              <div class="column is-three-quarters">
                  <input type="text" name="Emp_Disease" value="<?php echo $Disease; ?>" class="input is-small"  style="width : 60%" readonly>
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">จำนวนบุตร</label>
              </div>

              <div class="column is-half">
                  <input type="number" value="<?php echo $Child; ?>" name="Emp_Child" min="0" class="input is-small"  style="width : 60%" readonly>
              </div>
              <div class="column is-one-quarter">
                  <label class="label">คน</label>
              </div>

            </div>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">วันที่เริ่มทำงาน</label>
              </div>
              <div class="column is-three-quarters">
                  <input type="date" name="Emp_StrDate" value="<?php echo $StrDate; ?>" class="input is-small"  style="width : 60%" readonly>
              </div>
            </div>
          </div>
          <div class="column is-half">
            <div class="columns">
              <div class="Pic"> <img id="fileToUpload"/ width=150px height=160px src="<?php echo $IMG; ?>"></div><br>
            </div>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">เพศ</label>
              </div>
              <div class="column is-three-quarters">
                <input type="text" name="Gender" value="<?php echo $Gender; ?>" class="input is-small"  style="width : 40%" readonly>
              </div>
            </div>
            <div class="colomns">
              <div class="column is-one-quarter">
                  <label class="label">ที่อยู่</label>
              </div>
              <div class="columns">
                  <textarea class="textarea" name ="Emp_Add" style="width : 60%" readonly><?php echo $Add; ?></textarea>
              </div>
            </div>
            <br>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">โทรศัพท์</label>
              </div>
              <div class="column is-three-quarters">
                  <input type="tel" name="Emp_Tel" value="<?php echo $Tel; ?>" class="input is-small"  style="width : 60%" readonly>
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">สถานะภาพ</label>
              </div>
              <div class="column is-three-quarters">
                <input type="text" name="Status" value="<?php echo $Status; ?>" class="input is-small"  style="width : 60%" readonly>
              </div>
            </div>
          </div>
      </div>
      <center><a href="update_employees.php?ID=<?php echo $ID; ?>"><button type="button" name="button" class="button is-primary is-outlined">แก้ไข</button></a> <input type="reset" value="ลบข้อมูล" class="button is-primary is-outlined is-danger">
    </div>
    </form>
    <?php }
    else {
      echo "<script type='text/javascript'>";
      echo "window.location = 'login.php'";
      echo "</script>";
    }
    ?>
    <br><br><br>
  </body>
</html>
