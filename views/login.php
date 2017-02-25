<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>form login</title>
    <link rel="stylesheet" href="css/style_login.css">
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
    <script type="text/javascript" src="/myApp/js/sweetalert.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="/myApp/js/main.js"> </script>
  </head>
  <body>
    <div class="con">
      <div class="login">
        <img class="logo_login" src="images/logo_icon_login.jpg" alt="logo login">
        <form class="" action="?nav=login" method="post">
            <input type="text" id="email1" name="email" value="" placeholder="Username or Email">
            <input type="password" id="pass1" name="pass" value="" placeholder="Password">
            <input type="submit" class = "btn"id="login" name="login" value="login">
          <div class="login-extra">
            Tidak mempunyai akun? <a href="/myApp/">Daftar Di Sini</a><br>
            <a href="">Lupa Password</a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
