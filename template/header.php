<?php require_once 'connect.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SSNC-Civil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.css" />
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Compiled and minified JavaScript -->
    <script type="text/javascript">
    function toggleDiv(divId){
        $("#"+divId).toggle();
        $("#1"+divId).toggle();
        $("#2"+divId).toggle();
    }

    </script>


  </head>


<body>

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
    <a class="nav-item is-tab" href="./login.php">Log out</a>
  </div>

</div>
</nav>

<!-- Dropdown Structure -->
