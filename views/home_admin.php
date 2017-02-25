<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style_home.css">
    <link rel="stylesheet" href="css/style_home_admin.css">
    <link rel="stylesheet" href="js/jqueri-ui.css">
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
    <script type="text/javascript" src="/myApp/js/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="/myApp/js/main.js"> </script>
  </head>

  <body>

    <div class="" id="menu_admin">
        <div id="menu_main">
          <ul id="mee">
            <li><a href="#"></a></li>
            <li><a href="?nav=logout">Loguot</a></li>
          </ul>
        </div>
    </div>

  <div class="menu_control">
    <a href="#"><img class="" src="images/logo_icon_login.jpg"></a>
    <div class="menu_vertikal">
      <ul>
        <a href="?nav=home_ad"><img id="pp" src="images/menu/pp.png" alt=""><?php echo $_SESSION['user']['full_name']; ?></a>
        <div class="menu_box">
          <li><a id="tp_home" href="?nav=home_admin" class="a">Home</a></li>
          <li><a href="?nav=home_admin_dashboard" class="a">Dashboard</a></li>
          <li><a id="tp_member" href="?nav=home_admin_member" class="a">Membership</a></li>
          <li><a href="#" class="a">Status Member</a></li>
        </div>
      </ul>
    </div>
  </div>

  <div class="contain_a">


    <?php
      $nav = $_GET['nav'];
      if ($nav == 'home_admin') {
        include "views/view_admin/home_admin.php";
      }elseif ($nav == 'home_admin_member') {
        include "views/view_admin/view_data.php";
      }elseif ($nav == 'edit') {
        include "views/view_admin/edit.php";
      }elseif ($nav == 'home_admin_dashboard') {
        include "views/view_admin/dashboard.php";
      }elseif ($nav == 'home_ad') {
        include"views/view_admin/data_admin.php";
      }

     ?>

  </div>
  </body>
</html>
