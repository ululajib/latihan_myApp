<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="js/jqueri-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="/myApp/js/main.js"> </script>
  </head>

  <body>
    <div class="menu">
     <a href="#"><img class="" src="images/logo_icon_login.jpg"></a>
    </div>

    <div class="main1">
      <div class="mai">
        <h3>REGISTER <?php echo @$echo; ?> <a href="/myApp/">NEXT</a></h3>
      </div>
    </div>

    <div class="main" >

        <div class="box">
            <h2>Register User</h2>
        </div>

        <form method="post" action="?nav=proses_register">
          <div class="abc">
            <input type="text" name="t_nama" id="txtname" value="" placeholder="full name *"><br>
            <input type="text" id="datepicker" class="data" name="t_date" value="" placeholder="Birdthday *">
            <input type="text" name="t_email" id="email" value="" placeholder="Email *"><br>
            <input type="password" id="pass" name="password" value="" placeholder="password *">
          </div>
          <div class="abc">
            <tr>
              <td>Gender</td>
              <td>:</td>
              <input type="radio" name="gender" value="P" checked> Male
              <input type="radio" name="gender" value="L"> Female
            </tr><br>

            <select class="op" id="option" name="op_country">
                <option value="">Country *</option>
                <?php foreach ($country as $value): ?>
                  <option value='<?= $value['id'] ?>'><?= $value['nama'] ?></option>
                <?php endforeach ?>
            </select>

            <select id="option1" name ="op_province">
               <option value="">Province *</option>
               <?php foreach ($province as $value): ?>
                 <option value='<?= $value['id'] ?>'><?= $value['nama'] ?></option>
               <?php endforeach ?>
            </select>

            <select id="option2" name ="op_city">
               <option value="">City *</option>
               <?php foreach ($city as $value): ?>
                 <option value='<?= $value['id'] ?>'><?= $value['nama'] ?></option>
               <?php endforeach ?>
            </select>

          </div>
          <div class="abc">
            <input type="text" id="phone" name="t_phone" value="" placeholder="Mobile Phone *"><br>
            <input type="text" id="addres" name="t_addres" value="" placeholder="Address *"><br>

            <select id="option3" name ="op_user">
               <option value="">type user *</option>
               <?php foreach ($type as $value): ?>
                 <option value='<?= $value['id']?>'><?= $value['nama'] ?></option>
               <?php endforeach ?>
            </select>
          </div>

          <div class="bux">
            <div class="bax">
              <input type="submit" id="register" name="register" value="Register">
              <input type="submit" id="reset" name="reset" value="Reset">
              <button type="button" id="button" onclick="reg/?nav=login">login</button>
            </div>
          </div>
        </form>


      </div>

      <div class="footer">
        <h3>&copy; 2017 Muhammad ulul ajib</h3>
      </div>
  </body>
</html>
