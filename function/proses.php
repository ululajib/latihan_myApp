<?php
// ================regisster============//
function proses_register_member(){
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

    if(register_member($name,$date,$gender,$email,$pass,$phone,$country,$province,$city,$addres,$user)){
      return true;
    }else {
      return false;
    }
  }
}
// ============================//
// ===========login-===========//
function proses_login(){
  if (isset($_POST['login'])) {

    $user = $_POST['email'];
    $pass = $_POST['pass'];

    if ( !empty(trim($user)) && !empty(trim($pass)) ) {
      if (cek_acount($user)) {
        login($user, $pass);
        }else {
         ?>
          <script>
          sweetAlert("", "Email belum terdaftar", "error");
          </script>
         <?php
       }
      }else{
        ?>
           <script>
             sweetAlert("", "Text Tidak Boleh Kosong", "error");
           </script>
        <?php
      }
    }
}
// ===============================//
// =========table dan cari===========//
function table_cari(){

}
// ================================//
// =========aktive============//
function update_admin(){
  if (isset($_POST['update'])) {
    $id = $_GET['id'];

    $name     = $_POST['t_name'];
    $addres   = $_POST['t_addres'];
    $phone    = $_POST['t_phone'];
    $t_type     = $_POST['op_user'];

    $sql = "UPDATE `db_users`.`tb_users`
            SET `full_name` = '$name', `number_phone` = '$phone', `address` = '$addres', `type_user` = '$t_type'
            WHERE `tb_users`.`id` = $id";

            if (mysqli_query($con, $sql)) {
              header('location:'.BASE_URL.'?nav=home_admin');
              echo "berhasil di update";
            }else {
              echo "GAGAL";
            }


  }else {
  }
}
// ========================//
function konfir(){
?>
  <script>
  swal({
      title: "Are you sure?",
      text: "You will not be able to recover this imaginary file!",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Yes, delete it!",
      closeOnConfirm: false
      },
      function(){
      swal("Deleted!", "Your imaginary file has been deleted.", "success");
      });
  </script>

<?php
}
