<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SSNC-CIVIL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.css" />
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

      <?php
      include 'template/header.php'; ?>
      <?php if (  $_SESSION['login'] == 'yes'){
      ?>
    <br>
    <div class="container">
      <div class="columns" >
        <div class="column is-half">
            <h1  class="title">ข้อมูลพนักงาน</h1>
            <div class="columns">
              <div class="column is-half">
                <label class="label">เลือกแผนกที่ต้องการ</label>
              </div>
              <div class="column is-half">
                <form method="GET">
                <span class="select">
                  <select name="sel_department">
                     <option value="all_depart">เลือกทั้งหมด</option>
                    <?php
                    $sql_sel_dep = 'SELECT * FROM department';
                    $query_sel_dep = $connect->query($sql_sel_dep);
                    while ($sel_dep = $query_sel_dep->fetch_assoc()){
                    ?>
                  <option value="<?php echo $sel_dep['Dep_ID']; ?>"><?php echo $sel_dep['Dep_Name']; ?></option>
                  <?php
                  }
                   ?>

                </select>
                </span>
              
                <button  class="button is-primary is-outlined">เลือกแผนก</button>


              </form>
              </div>

            </div>

            <?php if (isset($_GET['sel_department'])){ ?>
              <form class="" action="#" method="post" enctype="multipart/form-data">
            <div class="columns">
              <div class="column is-half">
                <label class="label">แสดงข้อมูลตามรหัสพนักงาน</label>
              </div>
              <div class="column is-half">
                <span class="select">
                  <select name="Emp_ID" style="width : 100%" readonly>
                    <?php
                      $invis = "visibility: hidden;";
                      if ($_GET['sel_department'] == "all_depart"){
                        $sql = "SELECT * FROM employees WHERE Emp_ID <> 1000 ORDER BY Emp_ID";
                      }
                      else {
                      $sql = "SELECT * FROM employees WHERE Emp_ID <> 1000 AND Dep_ID = '".$_GET['sel_department']."' ORDER BY Emp_ID";
                    }
                      $result = $connect->query($sql);
                      while($row = $result->fetch_array()){
                    ?>
                        <option value=<?php echo $row['Emp_ID']; ?>><?php echo $row['Emp_ID']; ?> <?php echo $row['Emp_Name']; ?></option>
                    <?php
                      }
                     ?>
                  </select>
                </span>
                <input type="submit" name="show" value="ดูข้อมูล" class="button is-primary is-outlined">
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
              $invis = "";
            }
             ?>
           <br>
           <div class="columns" style="<?php echo $invis; ?>" >
               <div class="column is-one-quarter">
                 <label class="label">รหัสพนักงาน</label>
               </div>
               <div class="column is-three-quarters">
                 <?php echo "$ID"; ?>
               </div>
             </div>
            <div class="columns" style="<?php echo $invis; ?>">
              <div class="column is-one-quarter">
                <label class="label">ชื่อพนักงาน</label>
              </div>
              <div class="column is-three-quarters">
                <?php echo "$Name"; ?>
              </div>
            </div>
            <div class="columns" style="<?php echo $invis; ?>">
              <div class="column is-one-quarter">
                <label class="label">เลขประจำตัวประชาชน</label>
              </div>
              <div class="column is-three-quarters">
                <?php echo $NID; ?>
              </div>
            </div>
            <div class="columns" style="<?php echo $invis; ?>">
              <div class="column is-one-quarter">
                <label class="label">วันเดือนปีเกิด</label>
              </div>
              <div class="column is-three-quarters">
                  <?php echo $DOB; ?>
              </div>
            </div>
            <div class="columns" style="<?php echo $invis; ?>">
              <div class="column is-one-quarter">
                <label class="label">ประเภทการทำงาน</label>
              </div>
              <div class="column is-three-quarters">
                <?php echo $Work; ?>
              </div>
            </div>
            <div class="columns" style="<?php echo $invis; ?>">
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
                  <?php echo $DepName; ?>
              </div>
            </div>
            <div class="columns" style="<?php echo $invis; ?>">
              <div class="column is-one-quarter">
                <label class="label">เงินเดือน</label>
              </div>
              <div class="column is-half">
                  <?php echo $Salary; ?>
              </div>
              <div class="column is-one-quarter">
                  <label class="label">บาท</label>
              </div>
            </div>
            </div>
          <div class="column is-half" style="<?php echo $invis; ?>">
            <div class="columns">
              <br><br>
            </div>
            <div class="columns">
              <div class="Pic"> <img id="fileToUpload"/ width=150px height=160px src="<?php echo $IMG; ?>"></div><br>
            </div>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">เพศ</label>
              </div>
              <div class="column is-three-quarters">
                <?php echo $Gender; ?>
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">ที่อยู่</label>
              </div>
              <div class="column is-three-quarters">
                <?php echo "$Add"; ?>
              </div>
            </div>
            <br>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">โทรศัพท์</label>
              </div>
              <div class="column is-three-quarters">
                  <?php echo $Tel; ?>
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">สถานะภาพ</label>
              </div>
              <div class="column is-three-quarters">
                <?php echo $Status; ?>
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">โรคประจำตัว</label>
              </div>
              <div class="column is-three-quarters">
                <?php echo $Disease; ?>
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">จำนวนบุตร</label>
              </div>
              <div class="column is-half">
                  <?php echo $Child; ?>
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
                  <?php echo $StrDate; ?>
              </div>
            </div>
          </div>
        </div>
        <center><a href="update_employees.php?ID=<?php echo $ID; ?>"><button type="button" name="button" class="button is-primary is-outlined" style="<?php echo $invis; ?>">แก้ไขข้อมูล</button></a>
        <a href="delete_employees.php?ID=<?php echo $ID; ?>"><input type="button" value="ลบข้อมูล" class="button is-primary is-outlined is-danger" style="<?php echo $invis; ?>" onclick="if(confirm('ยืนยันการลบ')) return true; else return false;"></a></center>
      </div>
    </form>
    <?php }
  }
    else {
      echo "<script type='text/javascript'>";
      echo "window.location = 'login.php'";
      echo "</script>";
    }
    ?>

    <br><br><br>
  </body>
</html>
