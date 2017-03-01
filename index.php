
<?php
session_start();
require_once "connect/connec_db.php";
require_once "function/database.php";
require_once "function/proses.php";
require_once "config.php";


if (!isset($_GET['nav'])) {
  $_GET['nav'] = 'index';
}

if ($_GET['nav'] == 'index') {

  $country = getFromDB("SELECT * FROM country");
  $province = getFromDB("SELECT * FROM province");
  $city = getFromDB("SELECT * FROM city");
  $type = getFromDB("SELECT * FROM user_group");

  require('views/register.php');

}
// =========proses register============
if ($_GET['nav'] == 'proses_register') {




  if(isset($_POST['register'])){

    $name     = $_POST['t_nama'];
    $date     = $_POST['t_date'];
    $gender   = $_POST['gender'];
    $email    = $_POST['t_email'];
    $pass     = $_POST['password'];
    $country  = $_POST['op_country'];
    $province = $_POST['op_province'];
    $city     = $_POST['op_city'];
    $phone    = $_POST['t_phone'];
    $addres   = $_POST['t_addres'];
    $user     = $_POST['op_user'];

    $sql = "INSERT INTO `db_users`.`tb_users` (`id`, `full_name`, `birdthday`, `gender`, `email`,  `password`, `number_phone`, `country`, `province`, `city`, `address`, `type_user`, `aktive`)
           VALUES (NULL, '$name', '$date', '$gender', '$email', '$pass', '$phone', '$country', '$province', '$city', '$addres', '$user', 1)";

   if (mysqli_query( $con, $sql)) {
     $echo = "BERHASIL";
   }else {
     $echo = "GAGAL";
   }
  }
    if(require('views/register.php')){
      ?>
      <script>
          $(".main").css("display","none");
          $(".main1").css("display","table");
      </script>
      <?php
    }

}
// ==================================//

// ==========login==================//
if ($_GET['nav'] == 'login') {

  require('views/login.php');

    proses_login();

  }
  // =================================//

// ===============home================//
if ($_GET['nav'] == 'home') {
  if (!isset($_SESSION['user'])) {
    header('location:'.BASE_URL.'?nav=login');
  }
  require('views/home.php');
}
// ==================================//

// ============home admin===============//
if ($_GET['nav'] == 'home_admin') {

  if (!isset($_SESSION['user'])) {
    header('location:'.BASE_URL.'?nav=login');
  }
  require('views/home_admin.php');
}
// =================================//
if ($_GET['nav'] == 'home_admin_member') {
  $type = getFromDB("SELECT * FROM user_group");
  @$src1 = $_POST['src1'];
  @$src2 = $_POST['src2'];
  @$cari = $_POST['search'];
  @$t_cari = $_POST['cari'];
  if ($src2 == 1) {
    $type_src = "full_name";
  }elseif ($src2 == 2) {
    $type_src = "email";
  }elseif ($src2 == 3) {
    $type_src = "number_phone";
  }elseif ($src2 == 4) {
    $type_src = "address";
  }

  if (isset($cari)) {
    if ($src1 == "") {
      if ($t_cari == "") {
            $table = getFromDB('SELECT tb_users.*,user_group.nama AS nama_type_user
              FROM tb_users INNER JOIN user_group
               ON tb_users.`type_user` = user_group.id ORDER BY `tb_users`.`id` ASC ');
        }else {
            $table = getFromDB("SELECT tb_users.*,user_group.nama AS nama_type_user
              FROM tb_users INNER JOIN user_group
              ON tb_users.`type_user` = user_group.id WHERE tb_users.$type_src LIKE '%$t_cari%' ");
            }
    }else {
      $table = getFromDB("SELECT tb_users.*,user_group.nama AS nama_type_user
      FROM tb_users INNER JOIN user_group
      ON tb_users.`type_user` = user_group.id WHERE tb_users.type_user LIKE '%$src1%' ");
    }
  }else {
      $table = getFromDB("SELECT tb_users.*,user_group.nama AS nama_type_user
        FROM tb_users INNER JOIN user_group
        ON tb_users.`type_user` = user_group.id ORDER BY `tb_users`.`id` ASC ");
    }

  require('views/home_admin.php');
}
// ===============proses aktive========//
if ($_GET['nav'] == 'proser_aktive') {
  $id = $_GET['id'];
  $sql = "SELECT * FROM tb_users WHERE id = '$id'";
  $hasil = mysqli_query($con, $sql);
  $data = mysqli_fetch_assoc($hasil);
  $aktiv = $data['aktive'];
  if ($aktiv == 1) {
      $sql = "UPDATE `db_users`.`tb_users` SET `aktive` = NULL WHERE `tb_users`.`id` = $id";
      mysqli_query($con, $sql);
      header('location:'.BASE_URL.'?nav=home_admin_member');

  }else {
    $sql = "UPDATE `db_users`.`tb_users` SET `aktive` = 1 WHERE `tb_users`.`id` = $id";
    mysqli_query($con, $sql);
    header('location:'.BASE_URL.'?nav=home_admin_member');
  }
}
// ====================================//
// ===============update user===============//
if (isset($_POST['update'])) {
  $id = $_GET['id'];

  $name     = $_POST['t_name'];
  $addres   = $_POST['t_addres'];
  $phone    = $_POST['t_phone'];
  $t_type     = $_POST['op_user'];

  $tb_name = "tb_users";
      $array = [
                'full_name' => $name,
                'address' => $addres,
                'number_phone' => $phone,
                'type_user' => $t_type
              ];

if (update($tb_name,$array, $id)) {
    header('location:'.BASE_URL.'?nav=home_admin_member');
  }else {
  }
}elseif(isset($_POST['cencel'])) {
  header('location:'.BASE_URL.'?nav=home_admin_member');
}

if ($_GET['nav']=='edit') {
    $id = $_GET['id'];
    $data = getFromDB("SELECT * FROM tb_users WHERE id = '$id'");
    $type = getFromDB("SELECT * FROM user_group");

  require('views/home_admin.php');

}
// ====================================//


// ===========delet=============//
if ($_GET['nav']=='delete') {
  delete($_GET['id']);
  header('location:'.BASE_URL.'?nav=home_admin_member');
}
// =====================================//


// ===================loguot=========//
if ($_GET['nav'] == 'logout') {
  session_destroy();
  header('location:'.BASE_URL.'?nav=login');
}
// ======================================//
// ============dashboard===============//
  if ($_GET['nav']=='home_admin_dashboard') {
    $count_j_admin = getFromDB("SELECT * FROM tb_users");
    $count_s_admin = getFromDB("SELECT * FROM tb_users WHERE type_user = 4");
    $count_admin = getFromDB("SELECT * FROM tb_users WHERE type_user = 3");
    $count_gold = getFromDB("SELECT * FROM tb_users WHERE type_user = 2");
    $count_silver = getFromDB("SELECT * FROM tb_users WHERE type_user = 1");
    $cont_a = count($count_j_admin);
    $cont_b = count($count_s_admin);
    $cont_c = count($count_admin);
    $cont_d = count($count_gold);
    $cont_e = count($count_silver);


    require('views/home_admin.php');

  }
// =================================//
// =============home=============//
if ($_GET['nav']=='home_ad') {

  require('views/home_admin.php');
}
// ================================//
