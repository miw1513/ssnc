<?php require_once 'connect.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SSNC-Civil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    $(document).ready(function(){
          $("#div1text").fadeIn("slow");
          $("#div1box").fadeIn("slow");
          $("#div2text").fadeIn("slow");
          $("#div2box").fadeIn("slow");
          $("#div3text").fadeIn("slow");
          $("#div3box").fadeIn("slow");


    });

    </script>


  </head>


<body>

<nav class="nav has-shadow">
<div class="container">
  <div class="nav-center">
    <a class="nav-item is-tab is-hidden-mobile is-active" href = "home.php"><i class="fa fa-home"></i>&nbsp; SSNC-Civil</a>
  </div>

  <span class="nav-toggle">
    <span></span>
    <span></span>
    <span></span>
  </span>
  <div class="nav-right nav-menu">
    <!-- <a class="nav-item is-tab is-hidden-tablet is-active" href = "home.php">SSNC-Civil</a>
    <a class="nav-item is-tab is-hidden-tablet" href="insert_employees.php">จัดการข้อมูลพนักงาน</a>
    <a class="nav-item is-tab is-hidden-tablet" href="update_salary.php">จัดการเงินเดือนพนักงาน</a>
    <a class="nav-item is-tab is-hidden-tablet" href="show_bill.php">พิมพ์เงินเดือน</a> -->
    <a class="nav-item is-tab"><i class="fa fa-user"></i> &nbsp;<?php echo $_SESSION['username']; ?></a>
    <a class="nav-item is-tab" href="./logout.php">Log out</a>
  </div>

</div>
</nav>

<!-- Dropdown Structure -->
