<?php
  include 'connect.php';
  $MonthYear = "June-2017";
  $sql = "SELECT * FROM salary INNER JOIN time ON Salary_ID = Time_ID INNER JOIN employees ON Emp_ID = Salary_ID";
  $result = $connect->query($sql);
  while ($row = $result->fetch_array()){
      $Salary_ID = $row['Salary_ID'];
      $Salary_Money = $row['Salary_Money'];
      $Salary_Balance = $row['Salary_Balance'];
      $Time_ID = $row['Time_ID'];
      $Emp_Work = $row['Emp_Work'];
      if($Emp_Work == "รายวัน"){
        $sqlsalary = "INSERT INTO salary (Salary_ID,MonthYear,Salary_Money) VALUES ('$Salary_ID','$MonthYear','$Salary_Money')";
        $connect->query($sqlsalary);
        $sqltime = "INSERT INTO time (Time_ID,MonthYear) VALUES ('$Time_ID','$MonthYear')";
        $connect->query($sqltime);
      }
      else {
        $sqlsalary = "INSERT INTO salary (Salary_ID,MonthYear,Salary_Money,Salary_Balance) VALUES ('$Salary_ID','$MonthYear','$Salary_Money','$Salary_Money')";
        $connect->query($sqlsalary);
        $sqltime = "INSERT INTO time (Time_ID,MonthYear,Time_Work) VALUES ('$Time_ID','$MonthYear','1')";
        $connect->query($sqltime);
      }
  }
 ?>
