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
      <?php session_start(); ?>
      <?php include 'template/header.php';?>
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

                  <?php
                    $em_id = $_GET['ID'];
                    ?>
                    <label class="label"><?php echo "$em_id"; ?></label>
                </select>

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
              $ID = $_POST['Emp_ID'];
              $sql = "SELECT * FROM employees JOIN salary ON Emp_ID = Salary_ID WHERE Emp_ID = '$em_id'";
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

             ?>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">ชื่อพนักงาน</label>
              </div>
              <div class="column is-three-quarters">
                <input type="text" name="Emp_Name" value="<?php echo "$Name"; ?>" class="input is-small"  style="width : 60%" <?php echo $readonly; ?>>
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">เลขประจำตัวประชาชน</label>
              </div>
              <div class="column is-three-quarters">
                <input type="text" name="Emp_NID" value="<?php echo $NID; ?>" class="input is-small"  style="width : 60%" <?php echo $readonly; ?>>
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">วันเดือนปีเกิด</label>
              </div>
              <div class="column is-three-quarters">
                  <input type="date" name="Emp_DOB" value="<?php echo $DOB; ?>" class="input is-small"  style="width : 60%" <?php echo $readonly; ?>>
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">ประเภทการทำงาน</label>
              </div>
              <div class="column is-three-quarters">
                <select name="Emp_Work" class="input is-small" required="" style="width : 60%">
                  <option value="รายวัน">รายวัน</option>
                  <option value="รายเดือน">รายเดือน</option>
                </select>
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">แผนก</label>
              </div>
              <div class="column is-three-quarters">
                  <select class="input is-small" name="Dep_ID" style="width : 60%" >
                    <?php
                      $sql = "SELECT * FROM department ORDER BY Dep_ID";
                      $result = $connect->query($sql);
                      while($row = $result->fetch_array()){
                    ?>
                        <option value=<?php echo $row['Dep_ID']; ?>><?php echo $row['Dep_Name']; ?></option>
                    <?php
                      }
                     ?>
                  </select>
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">เงินเดือน</label>
              </div>
              <div class="column is-half">
                  <input type="number" value="<?php echo $Salary; ?>" name="Emp_Salary" min="0" step="0.01" class="input is-small"  style="width : 60%" <?php echo $readonly; ?>>

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
                  <input type="text" name="Emp_Disease" value="<?php echo $Disease; ?>" class="input is-small"  style="width : 60%" <?php echo $readonly; ?>>
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">จำนวนบุตร</label>
              </div>

              <div class="column is-half">
                  <input type="number" value="<?php echo $Child; ?>" name="Emp_Child" min="0" class="input is-small"  style="width : 60%" <?php echo $readonly; ?>>
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
                  <input type="date" name="Emp_StrDate" value="<?php echo $StrDate; ?>" class="input is-small"  style="width : 60%" <?php echo $readonly; ?>>
              </div>
            </div>
          </div>
          <div class="column is-half">
            <div class="columns">
              <div class="Pic"> <img id="output"/ width=150px height=160px src="<?php echo $IMG; ?>"></div><br>
            </div>
            <br>
            <div class="columns">
              <input type="file" name="fileToUpload"  accept="image/*" onchange="loadFile(event)">
                <script>
                  var loadFile = function(event) {
                    var output = document.getElementById('output');
                    output.src = URL.createObjectURL(event.target.files[0]);
                  };
                  </script>
            </div>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">เพศ</label>
              </div>
              <div class="column is-three-quarters">
                <input type="radio" name="Emp_Gender" value="ชาย" checked="">
                ชาย
                <input type="radio" name="Emp_Gender" value="หญิง">
                หญิง
              </div>
            </div>
            <div class="colomns">
              <div class="column is-one-quarter">
                  <label class="label">ที่อยู่</label>
              </div>
              <div class="columns">
                  <textarea class="textarea" name ="Emp_Add" style="width : 60%" <?php echo $readonly; ?>><?php echo $Add; ?></textarea>
              </div>
            </div>
            <br>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">โทรศัพท์</label>
              </div>
              <div class="column is-three-quarters">
                  <input type="tel" name="Emp_Tel" value="<?php echo $Tel; ?>" class="input is-small"  style="width : 60%" <?php echo $readonly; ?>>
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">สถานะภาพ</label>
              </div>
              <div class="column is-three-quarters">
                <select  name="Emp_Status" class="input is-small"style="width : 60%" >
                  <option value="โสด" >โสด</option>
                  <option value="แต่งงานแล้ว">แต่งงานแล้ว</option>
                  <option value="หย่าร้าง">หย่าร้าง</option>
                </select>
              </div>
            </div>
          </div>
      </div>
      <center><input type="submit"class="button is-primary is-outlined" value="ยืนยัน"> <input type="reset" value="ล้างข้อมูล" class="button is-primary is-outlined is-danger">
    </div>
    </form>
    <?php }
    else {
      echo "<script type='text/javascript'>";
      echo "window.location = 'login.php'";
      echo "</script>";
    }
    ?>
    <?php
          if($_POST){
            $Emp_Name = $_POST['Emp_Name'];
            $Emp_NID = $_POST['Emp_NID'];
            $Emp_DOB = $_POST['Emp_DOB'];
            $Emp_Work = $_POST['Emp_Work'];
            $Emp_Add = $_POST['Emp_Add'];
            $Emp_Tel = $_POST['Emp_Tel'];
            $Status = $_POST['Emp_Status'];
            $Emp_Status = $_POST['Emp_Disease'];
            $Emp_StrDate = $_POST['Emp_StrDate'];
            $Emp_Gender = $_POST['Emp_Gender'];
            $Dep_ID = $_POST['Dep_ID'];
            $Emp_Child = $_POST['Emp_Child'];
            $target_dir = "image/member/";
            $randomfile = 1; //ยังไม่ได้ใช้
            $insert_picture = "image/member/";
            //while ($randomfile != 0){
            $mydate=getdate(date("U"));
            $randomfile = "$mydate[weekday].$mydate[month].$mydate[mday].$mydate[year].$mydate[hours].$mydate[minutes].$mydate[seconds]";
            $target_file = $target_dir.$randomfile.$_FILES["fileToUpload"]["name"];
            $insert_picture = $insert_picture.$randomfile.$_FILES["fileToUpload"]["name"];
            //ทำการ random ชื่อแล้ว เช็คใน db ว่ามีการซ้ำรึไม่
            //}

            if(copy($_FILES['fileToUpload']['tmp_name'], $target_file)){

            }
            //End Upload

            //INSERT EMP
            // $sql = "UPDATE  employees (Emp_ID,Emp_Name,Emp_NID,Emp_DOB,Emp_Work,Emp_Add,Emp_Tel,Emp_Status,Emp_Disease,Emp_StrDate,Emp_Gender,Emp_IMG,Dep_ID,Emp_Child)
            //         VALUES ('$ID','$Name','$NID','$DOB','$Work','$Add','$Tel','$Status','$Disease','$StrDate','$Gender','$insert_picture','$Dep','$Child')";
            // $connect->query($sql);
            $sql ="UPDATE employees SET Emp_ID"


            $Date = date("my");
            $table = "time";
            $Salary = $_POST['Salary'];
            if ($Work == "รายวัน") {
              //INSERT SALARY
              $sql = "INSERT INTO salary (Salary_ID,MonthYear,Salary_Money,Salary_OT15,Salary_OT20,Salary_OT30,Salary_Balance
                      ,Salary_Vat,Salary_Insurance,Salary_Paid,Salary_Fund)
                      VALUES ('$ID','$Date','$Salary','0','0','0','0','0','0','0','0')";
              $connect->query($sql);
              //INSERT TIME
              $sql = "INSERT INTO $table (Time_ID,MonthYear,Time_Work,Time_OT15,Time_OT20,Time_OT30)
                      VALUES ('$ID','$Date','0','0','0','0')";
              $connect->query($sql);
            }
            else {
              //INSERT SALARY
              $sql = "INSERT INTO salary (Salary_ID,MonthYear,Salary_Money,Salary_OT15,Salary_OT20,Salary_OT30,Salary_Balance,Salary_Vat,Salary_Insurance,Salary_Paid,Salary_Fund)
                      VALUES ('$ID','$Date','$Salary','0','0','0','$Salary','0','0','0','0')";
              $connect->query($sql);
              //INSERT TIME
              $sql = "INSERT INTO $table (Time_ID,MonthYear,Time_Work,Time_OT15,Time_OT20,Time_OT30)
                      VALUES ('$ID','$Date','1','0','0','0')";
              $connect->query($sql);
            }


        }
        ?>
    <br><br><br>
  </body>
</html>
