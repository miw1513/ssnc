<form  action="#" method="post">
    <input type="text" name="user" value="">
    <input type="text" name="password" value="">
    <input type="submit" name="" >
</form>
<?php
session_start();
if($_POST){
  $user = $_POST['user'];
  $password = $_POST['password'];
  include('connect.php');
  $sql = "SELECT * FROM admin";
  $result = $connect->query($sql);
  while($col = $result->fetch_array()){
    echo "$col[0]$col[1]";
    echo "$user$password";
    if($col[0]==$user && $col[1]==$password){
      $valid='yes';
      break;
    }
    else{
      $valid='no';
    }
  }
  if($valid=='yes'){
  echo "<script type='text/javascript'>";
  echo "window.location = 'insert_employee.php'";
  echo "</script>";
  $_SESSION['login'] = 'yes';
  }
  // else{
  //   session_destroy();
  //   echo '<script language="javascript">alert(\'ใส่รหัสผิด\');</script>' ;
  //   echo "<script type='text/javascript'>";
  //   echo "window.location = 'login.php'";
  //   echo "</script>";
  // }
}
?>
