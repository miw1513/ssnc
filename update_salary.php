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
    <form class="" action="index.html" method="post">
    <div class="columns">
      <div class="column is-one-third">
        <h1 class="title">จัดการเงินเดือนของพนักงาน</h1>
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
            <td>  <a href="#"> <?php echo $row['Emp_ID']; ?> </a></td>
              <td><?php echo $row['Emp_Name']; ?></td>
            </tr>
          <?php
            }
          ?>
        </table>
        </div>
      </div><br>
          <div class="columns">
            <div class="column is-half">
              <label class="label">ภาษี</label>
            </div>
            <div class="column is-half">
              <input type="number" name="" class="input is-small is-focused" style="width : 80%" readonly> บาท
            </div>
          </div>
          <div class="columns">
            <div class="column is-half">
              <label class="label">ค่าประกันสังคม</label>
            </div>
            <div class="column is-half">
              <input type="number" name="" class="input is-small is-focused" style="width : 80%" readonly> บาท
            </div>
          </div>
          <div class="columns">
            <div class="column is-half">
              <label class="label">เงินที่เบิก</label>
            </div>
            <div class="column is-half">
              <input type="number" name="" class="input is-small is-focused" style="width : 80%" readonly> บาท
            </div>
          </div>
          <div class="columns">
            <div class="column is-half">
              <label class="label">กองทุนสำรองเลี้ยงชีพ</label>
            </div>
            <div class="column is-half">
              <input type="number" name="" class="input is-small is-focused" style="width : 80%" readonly> บาท
            </div>
          </div>
        </div>
          <div class="column is-two-third">
            <br><br>
            <div class="columns">
              <div class="column is-one-third">

                <label class="label">รหัสพนักงาน</label>
              </div>
              <div class="column is-half">
                <input type="text" name="Emp_ID" value=""class="input is-small is-focused" style="width : 100%" readonly>
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-third">
                <label class="label">ชื่อนามสกุล</label>
              </div>
              <div class="column is-half">
                <input type="text" name="Emp_Name" class="input is-small is-focused" style="width : 100%" readonly>
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-third">
                <label class="label">แผนก</label>
              </div>
              <div class="column is-half">
                <input type="text" name="" class="input is-small is-focused" style="width : 100%" readonly>
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-third">
                <label class="label">ประเภทการทำงาน</label>
              </div>
              <div class="column is-half">
                <input type="text" name="" class="input is-small is-focused" style="width : 100%" readonly>
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-third">
                <label class="label">รายได้</label>
              </div>
              <div class="column is-half">
                <input type="number" name="" class="input is-small is-focused" style="width : 80%" readonly> บาท
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-third">
                <label class="label">เงินที่เบิก</label>
              </div>
              <div class="column is-half">
                <input type="number" class="input is-small is-focused" style="width : 40%" readonly> บาท
                <input type="number" name="Paid" value="" style="width : 40%" class="input is-small" autofocus=""> บาท
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-third">
                <label class="label">OT*1.5</label>
              </div>
              <div class="column is-two-third">
                จำนวนชั่วโมง : <input type="number" class="input is-small is-focused" style="width : 15%" readonly>
                จำนวนเงินที่ได้ : <input type="number" name="Paid" value="" style="width : 15%" class="input is-small is-focused"readonly >
                 <input type="number" name="Paid" value="" style="width : 15%" class="input is-small" autofocus=""> บาท
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-third">
                <label class="label">OT*2.0</label>
              </div>
              <div class="column is-two-third">
                จำนวนชั่วโมง : <input type="number" class="input is-small is-focused" style="width : 15%" readonly>
                จำนวนเงินที่ได้ : <input type="number" name="Paid" value="" style="width : 15%" class="input is-small is-focused"readonly >
                <input type="number" name="Paid" value="" style="width : 15%" class="input is-small" autofocus=""> บาท
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-third">
                <label class="label">OT*3.0</label>
              </div>
              <div class="column is-two-third">
                จำนวนชั่วโมง : <input type="number" class="input is-small is-focused" style="width : 15%" readonly>
                จำนวนเงินที่ได้ : <input type="number" name="Paid" value="" style="width : 15%" class="input is-small is-focused"readonly >
                <input type="number" name="Paid" value="" style="width : 15%" class="input is-small" autofocus=""> บาท
              </div>
            </div>
            <div class="columns">
              <div class="column is-one-third">
                <label class="label">เงินที่เหลือ</label>
              </div>
              <div class="column is-half">
                <input type="number" name="" class="input is-small is-focused" style="width : 80%" readonly> บาท
              </div>
            </div>
          </div>
        </form>
      </div>
    </form>
    </div>
  </body>
</html>
