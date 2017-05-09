<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SSNC-Civil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
  </head>
    <style media="screen">
      .Pic{
        border: 1px solid black;
        width: 150px;
        height : 160px;
      }
      input[type = text]{
        width: 200px;
      }
    </style>
  <body>

    <form class="" action="#" method="post" enctype="multipart/form-data">
      <?php include 'template/header.php'; ?>
    <br>
    <div class="container">
      <div class="columns">
          <div class="column is-half">
            <h1  class="title">เพิ่มข้อมูลพนักงาน</h1>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">รหัสพนักงาน</label>
              </div>
              <div class="column is-three-quarters">
                <input type="text" name="Emp_ID" value=""class="input is-small" autofocus="" placeholder="" required="" style="width : 60%">
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">ชื่อพนักงาน</label>
              </div>
              <div class="column is-three-quarters">
                <input type="text" name="Emp_Name" value="" class="input is-small" required="" style="width : 60%">
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">เลขประจำตัวประชาชน</label>
              </div>
              <div class="column is-three-quarters">
                <input type="text" name="NID" value="" class="input is-small" required="" style="width : 60%">
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">วันเดือนปีเกิด</label>
              </div>
              <div class="column is-three-quarters">
                  <input type="date" name="Emp_DOB" value="" class="input is-small" required="" style="width : 60%">
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
                  <select class="input is-small" name="Dep" style="width : 60%" >
                    <?php
                      $sql = "SELECT Dep_Name FROM department ORDER BY Dep_ID";
                      $result = $connect->query($sql);
                      while($row = $result->fetch_array()){
                    ?>
                        <option value=<?php echo $row['Dep_Name']; ?>><?php echo $row['Dep_Name']; ?></option>
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
                  <input type="number" name="Salary" min="0" step="0.01" class="input is-small" required="" style="width : 60%">

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
                  <input type="text" name="Emp_Disease" value="" class="input is-small" required="" style="width : 60%">
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">จำนวนบุตร</label>
              </div>

              <div class="column is-half">
                  <input type="number" name="Emp_Child" min="0" class="input is-small" required="" style="width : 60%">
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
                  <input type="date" name="Emp_StrDate" value="" class="input is-small" required="" style="width : 60%">
              </div>
            </div>
          </div>
          <div class="column is-half">
            <div class="columns">
              <div class="Pic"> <img id="output"/ width=150px height=160px></div><br>
            </div>
            <br>
            <div class="columns">
              <!-- <input type="file" accept="image/*" name= "fileToUpload" id="fileToUpload" onchange="loadFile(event)" class="button is-primary is-outlined"> -->
              <input type="file" name="fileToUpload" id="fileToUpload">
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
                  <textarea class="textarea" name = "Emp_Add" placeholder="ที่อยู่" required="" style="width : 60%"></textarea>
              </div>
            </div>
            <br>
            <div class="columns">
              <div class="column is-one-quarter">
                <label class="label">โทรศัพท์</label>
              </div>
              <div class="column is-three-quarters">
                  <input type="tel" name="Emp_Tel" value="" class="input is-small" required="" style="width : 60%">
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
      <center><input type="submit" name="submit" value="เพิ่มข้อมูล" class="button is-primary is-outlined"> <input type="reset" value="ล้างข้อมูล" class="button is-primary is-outlined is-danger">
    </div>
    </form>
    <br><br><br>
    <?php
    if ($_POST) {

      $ID = $_POST['Emp_ID'];
      $Name = $_POST['Emp_Name'];
      $NID = $_POST['NID'];
      $DOB = $_POST['Emp_DOB'];
      $Work = $_POST['Emp_Work'];
      $Add = $_POST['Emp_Add'];
      $Tel = $_POST['Emp_Tel'];
      $Status = $_POST['Emp_Status'];
      $Disease = $_POST['Emp_Disease'];
      $StrDate = $_POST['Emp_StrDate'];
      $Gender = $_POST['Emp_Gender'];
      $Dep = $_POST['Dep'];

      // UPLOAD imageFileType

      $target_dir = "IMG/";
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      $uploadOk = 1;
      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
      // Check if image file is a actual image or fake image
      if(isset($_POST["submit"])) {
          $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
          if($check !== false) {
              echo "File is an image - " . $check["mime"] . ".";
              $uploadOk = 1;
          } else {
              echo "File is not an image.";
              $uploadOk = 0;
          }
      }
      // Check if file already exists
      if (file_exists($target_file)) {
          echo "Sorry, file already exists.";
          $uploadOk = 0;
      }
      // Check file size
      if ($_FILES["fileToUpload"]["size"] > 500000) {
          echo "Sorry, your file is too large.";
          $uploadOk = 0;
      }
      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" ) {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          $uploadOk = 0;
      }
      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
      } else {
          if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
              echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
          } else {
              echo "Sorry, there was an error uploading your file.";
          }
      }

      //End Upload

      $sql = "INSERT INTO employees (Emp_ID,Emp_Name,Emp_NID,Emp_DOB,Emp_Work,Emp_Add,Emp_Tel,Emp_Status,Emp_Disease,Emp_StrDate,Emp_Gender,Emp_IMG,Dep_ID)
              VALUES ('$ID','$Name','$NID','$DOB','$Work','$Add','$Tel','$Status','$Disease','$StrDate','$Gender','Flame','D001')";
      $connect->query($sql);

      $Date = date("my");
      $Salary = $_POST['Salary'];
      if ($Work = "รายวัน") {
        $sql = "INSERT INTO salary (Salary_ID,MonthYear,Salary_Money,Salary_OT15,Salary_OT20,Salary_OT30,Salary_Balance
                ,Salary_Vat,Salary_Insurance,Salary_Paid,Salary_Fund)
                VALUES ($ID,$Date,$Salary,0,0,0,0,0,0,0,0)";
      }
      else {
        $sql = "INSERT INTO salary (Salary_ID,MonthYear,Salary_Money,Salary_OT15,Salary_OT20,Salary_OT30,Salary_Balance,Salary_Vat,Salary_Insurance,Salary_Paid,Salary_Fund)
                VALUES ('$ID','$Date','$Salary','0','0','0','$Salary','0','0','0','0')";
        $connect->query($sql);
      }
      echo "$sql";



    }



     ?>
     <?php include 'template/footer.php'; ?>
  </body>
</html>
