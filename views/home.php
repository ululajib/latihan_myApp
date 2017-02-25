<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style_home.css">
    <link rel="stylesheet" href="js/jqueri-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="/myApp/js/main.js"> </script>
  </head>

  <body>
    <div class="" id="menu">
      <a href="#"><img class="" src="images/logo_icon_login.jpg"></a>
        <div id="men_main">
          <ul id="me">
            <li><a href="#"><img src="images/fb.png"></a></li>
            <li><a href="#"><img src="images/tw.png"></a></li>
            <li><a href="#"><img src="images/google.png"></a></li>
            <li><a href="#"><img src="images/wa.png"></a></li>
          </ul>
        </div>
    </div>


    <div class="contain_slider">
      <div class="main_menu">
          <ul id="menu_a">
            <li><a href="#">Hi <?php echo $_SESSION['user']['full_name']; ?></a></li>
            <li><a href="?nav=logout">Logout</a></li>
          </ul>
          <ul id="menu_a">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contac</a></li>
            <li><a href="#">Profil</a></li>
          </ul>
          <span>Jasa Pembuatan Website<br> dan menyewakan sistem Aplkasi</span>
          <div class="serc">
            <input type="search" name="" value="" placeholder="Search....">
            <input type="submit" name="" value="">
          </div>
      </div>
        <img src="images/slider/s1.jpg" alt="">
        <img src="images/slider/s2.jpg" alt="">
        <img src="images/slider/s3.jpg" alt="">
        <img src="images/slider/s4.jpg" alt="">
        <img src="images/slider/s5.jpg" alt="">
    </div>
    <div class="contain_moto">
      <div class="txt_spn">
        <span>MOTO</span>
        <h2>Melayani dengan seganjil Hati</h2>
      </div>
      <div class="moto">
        <div class="moto_isi">

        </div>
        <div class="moto_isi">

        </div>
        <div class="moto_isi">

        </div>
      </div>
    </div>

  </body>
</html>
