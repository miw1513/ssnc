  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.css" />
<?php include 'connect.php';

?>
<!-- Nav bar-->
  <nav class="nav has-shadow">
<div class="container">
  <div class="nav-left">
    <a class="nav-item is-tab is-hidden-mobile is-active">SSNC-Civil</a>
    <a class="nav-item is-tab is-hidden-mobile" href="show_employees.php">ข้อมูลพนักงาน</a>
    <a class="nav-item is-tab is-hidden-mobile" href="insert_employees.php">เพิ่มข้อมูลพนักงาน</a>
    <a class="nav-item is-tab is-hidden-mobile">About</a>
  </div>
  <span class="nav-toggle">
    <span></span>
    <span></span>
    <span></span>
  </span>
  <div class="nav-right nav-menu">
    <a class="nav-item is-tab is-hidden-tablet is-active" >SSNC-Civil</a>
    <a class="nav-item is-tab is-hidden-tablet" href="insert_employees.php">ข้อมูลพนักงาน</a>
    <a class="nav-item is-tab is-hidden-tablet" href="insert_employees.php">เพิ่มข้อมูลพนักงาน</a>
    <a class="nav-item is-tab is-hidden-tablet">About</a>
    <a class="nav-item is-tab" href="logout.php">Log out</a>
  </div>
</div>
</nav>
