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
    <form class="" action="index.html" method="post">


    <br>
    <h1>จัดการเงินเดือนของพนักงาน</h1>
    <table border="1">
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

    รหัสพนักงาน
    <input type="text" name="Emp_ID" value="" readonly>
    ชื่อนามสกุล
    <input type="text" name="Emp_Name" readonly>
    แผนก
    <input type="text" name="" readonly>
    ประเภทการทำงาน
    <input type="text" name="" readonly>
    รายได้
    <input type="number" name="" readonly> บาท
    เงินที่เบิก
    <input type="number" name="Salary_Paid" readonly> บาท
    <input type="number" name="Paid" value="">


      </form>
      <?php
        if ($_POST) {
          # code...
        }
       ?>
  </body>
</html>
