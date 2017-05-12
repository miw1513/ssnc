<?php
  session_start();
  if (  $_SESSION['login'] == 'yes'){
    include 'connect.php';
    $ID = $_GET['ID'];
    $sqldele = "DELETE FROM employees WHERE Emp_ID = '$ID'";
    $connect->query($sqldele);
    $sqldels = "DELETE FROM salary WHERE Salary_ID = '$ID'";
    $connect->query($sqldels);
    $sqldelt = "DELETE FROM time WHERE Time_ID = '$ID'";
    $connect->query($sqldelt);
    echo '<script language="javascript">alert(\'ลบสำเร็จ\');</script>' ;
    echo "<script type='text/javascript'>";
    echo "window.location = 'show_employees.php'";
    echo "</script>";
  }
  else {
    echo "<script type='text/javascript'>";
    echo "window.location = 'login.php'";
    echo "</script>";
  }
?>
