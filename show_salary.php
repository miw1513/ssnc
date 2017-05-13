
<?php
require 'template/header.php';
 ?>
 <?php if (  $_SESSION['login'] == 'yes'){
 ?>
<div class="container">
<form method="GET">
  <div class="field">
  <p class="control">
    <br>
    <span class="select">
<select name="monthyear">
  <?php

  $sql_select_month = 'SELECT DISTINCT MonthYear FROM salary ';
  $query_select_month = $connect->query($sql_select_month);

  while ($select_month = $query_select_month->fetch_assoc()){
  ?>

    <option values="<?php echo $select_month['MonthYear']; ?>"> <?php echo $select_month['MonthYear']; ?> </option>

  <?php
  }
   ?>
</select>
    </span>
  </p>
              </div>
                <button class="button is-primary" value="ส่งข้อมูล">แสดงข้อมูล</button>
    </form>
<br>

<?php
 if (isset($_GET['monthyear'])){
   $monthyear = $_GET['monthyear'];

 ?>
<table class="table" >
  <tr style="border:1px solid black;">
    <th>Salary_ID</th>
    <th>ชื่อพนักงาน</th>
    <th>แผนก</th>
    <th>ประเภท</th>
    <th>เงินเดือน</th>
    <th>รายได้สุทธิ</th>
    <th>OT*1.5</th>
    <th>OT*2.0</th>
    <th>OT*3.0</th>


    <th></th>
  </tr>
<?php

   $sql_salary = "SELECT * FROM salary INNER JOIN employees ON salary.Salary_ID = employees.Emp_ID JOIN department ON employees.Dep_ID = department.Dep_ID JOIN time ON salary.Salary_ID = time.Time_ID WHERE salary.MonthYear = '$monthyear' AND time.MonthYear = '$monthyear'";
   $query_salary = $connect->query($sql_salary);




   while ($select_salary = $query_salary->fetch_assoc() ){



  ?>

    <tr style="border:2px solid black;">
      <td> <?php echo $select_salary['Salary_ID']; ?></td>
      <td> <?php echo $select_salary['Emp_Name']; ?></td>
      <td> <?php echo $select_salary['Dep_Name']; ?></td>
      <td> <?php echo $select_salary['Emp_Work']; ?></td>
      <td> <?php echo $select_salary['Salary_Money']; ?></td>
      <td> <?php echo $select_salary['Salary_Balance']; ?></td>
      <td> <?php echo $select_salary['Salary_OT15']; ?></td>
      <td> <?php echo $select_salary['Salary_OT20']; ?></td>
      <td> <?php echo $select_salary['Salary_OT30']; ?></td>

      <td> <a href="javascript:toggleDiv('<?php echo $select_salary['Salary_ID'];  ?>')">เพิ่มเติม </a></td>

    </tr>

    <tr id="<?php echo $select_salary['Salary_ID']; ?>" style="display:none; ">
      <tr id="1<?php echo $select_salary['Salary_ID']; ?>" style="display:none; ">

        <th>ภาษี</th>
        <th>ประกันสังคม</th>
        <th>ยอดเบิก</th>
        <th>กองทุนเลี้ยงชีพ</th>
        <th>จำนวนวันทำงาน</th>
        <th>ชม.OT1.5</th>
        <th>ชม.OT2.0</th>
        <th>ชม.OT3.0</th>
      </tr>
      <tr id="2<?php echo $select_salary['Salary_ID']; ?>" style="display:none; ">

        <td> <?php echo $select_salary['Salary_Vat']; ?></td>
        <td> <?php echo $select_salary['Salary_Insurance']; ?></td>
        <td> <?php echo $select_salary['Salary_Paid']; ?></td>
        <td> <?php echo $select_salary['Salary_Fund']; ?></td>
        <td> <?php echo $select_salary['Time_Work']; ?></td>
        <td> <?php echo $select_salary['Time_OT15']; ?></td>
        <td> <?php echo $select_salary['Time_OT20']; ?></td>
        <td> <?php echo $select_salary['Time_OT30']; ?></td>
      </tr>

    </tr>



<?php
   }


 ?>
 </table>

<?php  }
}
else {
  echo "<script type='text/javascript'>";
  echo "window.location = 'login.php'";
  echo "</script>";
}
?>




</div>
