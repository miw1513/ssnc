<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" id="bulma" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.3.2/css/bulma.min.css" />
  <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body >
  <form action="#" method="post">
    <div class="login-wrapper columns">
      <div class="column is-8 is-hidden-mobile hero-banner" )>
        <section class="hero is-fullheight "style="background-image :url('https://media.giphy.com/media/IbYboq1wOcYcE/giphy.gif'">
          <div class="hero-body">
            <div class="container section">
              <div class="has-text-right">
                <h1 class="title is-1">Login</h1> <br>
                <p class="title is-3">Secure User Account Login</p>
              </div>
            </div>
          </div>
          <div class="hero-footer">
            <p class="has-text-centered">SSNC-CIVIL.COM</p>
          </div>
        </section>
      </div>
        <div class="column is-4">
          <section class="hero is-fullheight">
            <div class="hero-body">
              <div class="container">
                <div class="columns">
                  <div class="column is-8 is-offset-2">
                    <div class="login-form">
                      <p class="control has-icon has-icon-right">
                        <input class="input email-input" type="text" placeholder="SSNC-CIVIL" name="user">
                        <span class="icon user">
                          <i class="fa fa-user"></i>
                        </span>
                      </p>
                      <p class="control has-icon has-icon-right">
                        <input class="input password-input" type="password" placeholder="●●●●●●●" name="password">
                        <span class="icon user">
                          <i class="fa fa-lock"></i>
                        </span>
                      </p>
                      <p class="control login">
                        <input type="submit" value="เข้าสู่ระบบ" class="button is-primary is-outlined" style="width : 100%">
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </form>
    <?php
    
    if($_POST){
      $username = $_POST['user'];
      $password2 = $_POST['password'];
      include('connect.php');
      $sql = "select * from admin";
      $sql = "SELECT * FROM admin";
      $result = $connect->query($sql);
      while($col = $result->fetch_array()){
        if($col[0]==$username && $col[1]==$password2){
          $valid='yes';

          break;
        }
        else{
          $valid='no';
        }
      }
      if($valid=='yes'){
      echo "<script type='text/javascript'>";
      echo "window.location = 'insert_employees.php'";
      $_SESSION['login'] = 'yes';
      echo "</script>";
      }
      else{
        session_destroy();
        echo '<script language="javascript">alert(\'ใส่รหัสผิด\');</script>' ;
        echo "<script type='text/javascript'>";
        echo "window.location = 'login.php'";
        echo "</script>";
      }
    }
    ?>
  </body>
</html>
