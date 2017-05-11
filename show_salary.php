
<?php
require 'template/header.php';
 ?>
<div class="container">
<form method="GET">
  <div class="field">
  <p class="control">
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
                <button class="button is-primary" value="ส่งข้อมูล">Submit</button>
    </form>


<?php
 if (isset($_GET['monthyear'])){
   $monthyear = $_GET['monthyear'];

 ?>
<table class="table" >
  <tr style="border:1px solid black;">
    <th>Salary_ID</th>
    <th>ชื่อพนักงาน</th>
    <th>แผนก</th>
    <th>Dep_ID</th>
    <th>Salary_Money</th>
    <th>Salary_Balance</th>
    <th>Salary_OT15</th>
    <th>Salary_OT20</th>
    <th>Salary_OT30</th>


    <th></th>
  </tr>
<?php

   $sql_salary = 'SELECT * FROM salary INNER JOIN employees ON salary.Salary_ID = employees.Emp_ID WHERE MonthYear = "'.$monthyear.'" ';
   $query_salary = $connect->query($sql_salary);

   $sql_select_time = ' SELECT * FROM time WHERE MonthYear = "'.$monthyear.'" ';
   $query_select_time = $connect->query($sql_select_time);


   while ($select_salary = $query_salary->fetch_assoc() AND $select_time = $query_select_time->fetch_assoc()){



  ?>

    <tr style="border:2px solid black;">
      <td> <?php echo $select_salary['Salary_ID']; ?></td>
      <td> <?php echo $select_salary['Emp_Name']; ?></td>
      <td> <?php echo $select_salary['Dep_ID']; ?></td>
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

        <th>Salary_Vat</th>
        <th>Salary_insurance</th>
        <th>Salary_Paid</th>
        <th>Salary_Fund</th>
        <th>Time_Work</th>
        <th>Time_OT15</th>
        <th>Time_OT20</th>
        <th>Time_OT30</th>
      </tr>
      <tr id="2<?php echo $select_salary['Salary_ID']; ?>" style="display:none; ">

        <td> <?php echo $select_salary['Salary_Vat']; ?></td>
        <td> <?php echo $select_salary['Salary_Insurance']; ?></td>
        <td> <?php echo $select_salary['Salary_Paid']; ?></td>
        <td> <?php echo $select_salary['Salary_Fund']; ?></td>
        <td> <?php echo $select_time['Time_Work']; ?></td>
        <td> <?php echo $select_time['Time_OT15']; ?></td>
        <td> <?php echo $select_time['Time_OT20']; ?></td>
        <td> <?php echo $select_time['Time_OT30']; ?></td>
      </tr>

    </tr>



<?php
   }


 ?>
 </table>

<?php  } ?>
</div>
