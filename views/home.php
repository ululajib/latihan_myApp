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

    <div class="menu_scroll" style="display:none">
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
            <form class="" action="" method="post">
              <input type="search" name="" value="" placeholder="Search....">
              <input type="submit" name="" value="Search">
            </form>
          </div>
      </div>
        <img src="images/slider/s1.jpg" alt="">
        <img src="images/slider/s6.jpg" alt="">
        <img src="images/slider/s3.jpg" alt="">
        <img src="images/slider/s4.png" alt="">
        <img src="images/slider/s5.jpg" alt="">
    </div>
    <div class="contain_moto">
      <div class="txt_spn">
        <span>MOTO</span>
        <h4>Melayani dengan seganjil Hati</h4>
      </div>
      <div class="moto">
        <div class="moto_isi">
          <div class="moto_img">
            <img src="images/home/b2.png" alt="">
          </div>
          <div class="moto_txt">
            <h2>Fast</h2>
            <p>
              Waktu adalah prioritas dalam pelayanan,
              dimana pengguna tidak banyak menghabiskan waktu untuk membuat sebuah website
            </p>
          </div>
        </div>
        <div class="moto_isi">
          <div class="moto_img">
            <img src="images/home/b1.png" alt="">
          </div>
          <div class="moto_txt">
            <h2>Simple</h2>
            <p>Tidak banyak yang harus diatur, tidak harus banyak berfikir, <br>
              Pengguna hanya harus mendaftar dan website siap digunakan.
            </p>
          </div>
        </div>
        <div class="moto_isi">
          <div class="moto_img">
            <img src="images/home/b3.png" alt="">
          </div>
          <div class="moto_txt">
            <h2>Easy</h2>
            <p>
              Memudahkan pengguna yang masih baru berkenalan dengan dunia website,
              sehingga pengguna tidak banyak mengalami kesusahan dalam membuat website.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="contain_isi_home">
      <h1>PELAYANAN</h1>
      <h4>Melayani segenap kemampuan kami</h4>
      <div class="cont_isi_home">
        <div class="cont_isi">
          <div class="cont_table_isi">
            <table>
              <tr>
                <td><img src="images/isi/a1.png" alt=""></td>
                <td>
                  <h2>Sewa Hosting</h2>
                  <p>Kami melayani sewa hosting dengan harga paket yang kami sediakan.</p>
                </td>
              </tr>
              <tr>
                <td><img src="images/isi/a2.png" alt=""></td>
                <td>
                  <h2>Web Instan</h2>
                  <p>Kami melayani buat website dengan mudah, cepat dan simple.</p>
                </td>
              </tr>
              <tr>
                <td><img src="images/isi/a3.png" alt=""></td>
                <td>
                  <h2>Pembelian Domain</h2>
                  <p>Kami melayani pengguna yang ingin mendaftarkan nama domain sendiri.</p>
                </td>
              </tr>
              <tr>
                <td><img src="images/isi/a4.png" alt=""></td>
                <td>
                  <h2>System Reseller</h2>
                  <p>Kami melayani pengguna dengan System Reseller.</p>
                </td>
              </tr>
            </table>
          </div>
        </div>
        <div class="cont_isi">
          <div class="con_img_isi">
            <img src="images/isi/computer.png" alt="">
          </div>
        </div>
      </div>
    </div>

    <div class="contain_suport">
      <h1>Awesome Clients</h1>
      <p>Pelayanan yang ramah.</p>
      <div class="contain_suport_isi">
        <div class="suport_isi_img">
          <img src="images/isi/log1.png" alt="">
        </div>
        <div class="suport_isi_img">
          <img src="images/isi/log2.png" alt="">
        </div>
        <div class="suport_isi_img">
          <img src="images/isi/log3.png" alt="">
        </div>
        <div class="suport_isi_img">
          <img src="images/isi/log1.png" alt="">
        </div>
        <div class="suport_isi_img">
          <img src="images/isi/log2.png" alt="">
        </div>
        <div class="suport_isi_img">
          <img src="images/isi/log3.png" alt="">
        </div>
      </div>
    </div>

    <div class="footer_home">
      <div class="menu_footer">
        <div class="isi_footer">
          <p>Kontak</p>
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2943.586412059926!2d110.40042298044892!3d-7.849164352764922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a56e81bd2d675%3A0x6ec66c410756df9e!2sAirbinder!5e1!3m2!1sid!2sid!4v1488174965400" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <span>E-mail : ajib@ajib.com</span>
        </div>
        <div class="isi_footer">
          <p>Link</p>
          <div class="menu_footer">
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contac</a></li>
              <li><a href="#">Profil</a></li>
            </ul>
            <ul>
              <li><a href="#">loguot</a></li>
            </ul>
          </div>
        </div>
        <div class="isi_footer">
          <p>Update Info Kami</p>
          <div class="sosial_footer">
            <ul id="me_footer">
              <li><a href="#"><img src="images/fb.png"></a></li>
              <li><a href="#"><img src="images/tw.png"></a></li>
              <li><a href="#"><img src="images/google.png"></a></li>
              <li><a href="#"><img src="images/wa.png"></a></li>
              <li><a href="#"><img src="images/git.png"></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="copyright">
        <h5>&copy; Airbinder 2017/2018</h5>
      </div>
    </div>
  </body>
</html>
