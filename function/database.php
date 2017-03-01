<?php
//-------SELECT OPTION---------//
function getFromDB($sql) {
  global $con;

  $result = mysqli_query($con, $sql);
  $data = array();
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $data[]=$row;
    }
  }
  return $data;
}
// =======cek akun==========/
function cek_acount($user){
  global $con;

  $sql = "SELECT * FROM tb_users WHERE email = '$user'";
  if ($cek=mysqli_query($con, $sql)) {
    if (mysqli_num_rows($cek) != 0) {
      return true;
    }else {
      return false;
      }
  }
}
// ========cek_email========//

function cek_email($email){
  global $con;
  $sql ="SELECT * FROM tb_users WHERE email = '$email'";
  if ($cek = mysqli_query($con, $sql)) {
    if (mysqli_num_rows($cek) == 0) {
      return true;
    }else {
      return false;
    }
  }
}

//==========================/
//==========================/

//---------login----------//
function login($user, $pass){
  global $con;

  $user = mysqli_real_escape_string($con, $user);
  $pass = mysqli_real_escape_string($con, $pass);

  $sql = "SELECT * FROM tb_users where email = '$user'";
  $hasil = mysqli_query($con, $sql);
  $data = mysqli_fetch_assoc($hasil);
  $type_user = $data['type_user'];
  $hass = $data["password"];
  $aktiv = $data['aktive'];

    if ($aktiv == 1) {
      if ($type_user == "1" || $type_user == "2") {
          if (password_verify($pass, $hass)) {
            unset($data['password']);
            $_SESSION['user'] = $data;
            header('location:'.BASE_URL.'?nav=home');
          }else {
            ?>
               <script>
                 sweetAlert("", "Ada masalah denga email atau password", "error");
               </script>
            <?php
          }
      }elseif ($type_user == "3" || $type_user == "4") {
          if (password_verify($pass, $hass)) {
            unset($data['password']);
            $_SESSION['user'] = $data;
            header('location:'.BASE_URL.'?nav=home_admin');
          }else {
            ?>
               <script>
                 sweetAlert("", "Ada masalah denga email atau password", "error");
               </script>
            <?php
           }
      }else {

      }
    }else {
      ?>
         <script>
           sweetAlert("", "Akun anda di Nonaktivkan silahkan hubungi Admin", "error");
         </script>
      <?php
    }
}
// ----------------

function delete($id){
  global $con;

  $sql = "DELETE FROM tb_users WHERE id = $id";
  $delete = mysqli_query($con, $sql);
    if ($delete) {
      return true;
    }else{
      return false;
    }
}

// function register_member($name,$date,$gender,$email,$pass,$phone,$country,$province,$city,$addres,$user){
//   global $con;
//   $pass = password_hash($pass, PASSWORD_DEFAULT);
//
//  $sql = "INSERT INTO `db_users`.`tb_users` (`id`, `full_name`, `birdthday`, `gender`, `email`,  `password`, `number_phone`, `country`, `province`, `city`, `address`, `type_user`, `aktive`)
//         VALUES (NULL, '$name', '$date', '$gender', '$email', '$pass', '$phone', '$country', '$province', '$city', '$addres', '$user', 1)";
//
//             if (mysqli_query( $con, $sql)) {
//                return true;
//             }else{
//               return false;
//             }
// }
// ==========update=========//
function update($tb_name,$array,$id){
  global $con;

  if(count($array) > 0){
      foreach ($array as $key => $value) {
        $value = mysql_real_escape_string($value);
        $value = "'$value'";
        $key = "`$key`";
        $update[] = "$key = $value";
      }
  }
  $implodearray = implode(',', $update);
  $sql = "UPDATE `db_users`.`$tb_name` SET $implodearray WHERE id = $id";
  if(mysqli_query($con, $sql)){
    return true;
  }else {
    return false;
  }
}
// =========================//
