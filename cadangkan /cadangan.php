<!-- versi lama dari myApp  -->

 <!-- perloginnan  -->
		<?php
		if (login($user, $pass)) {

		       if (!preg_match("/[a-zA-Z0-9_]+@[a-zA-Z]+\.(com|co.id|net)$/",$user)) {
		         ?>
               <script>
               sweetAlert("", "Isi Email dengan benar !!!", "error");
               </script>
              <?php
            }else {
              header('location:'.BASE_URL.'?nav=home');
            }

          }else {
            ?>
             <script>
             sweetAlert("", "Email atau Password ada yang salah !!!", "error");
             </script>
            <?php
           }


               // login lama
// function login($user, $pass){
//   global $con;
//   $query = "SELECT * FROM tb_users WHERE email ='$user' ";
//   $hasil = mysqli_query($con, $query);
//   $data =  mysqli_fetch_assoc($hasil);
//   $hash = $data["password"];
//     if (password_verify($pass, $hash)) {
//       unset($data['password']);
//       $_SESSION['user'] = $data;
//       return true;
//     }else {
//       return false;
//     }
// }
      // -----
http://ordodev.com/preview
https://www.youtube.com/watch?v=63C45soHbmc
http://stackoverflow.com/questions/5250128/updating-mysql-record-with-imploded-array-php

<div class="home">
	<div class="con">
		<h3>Detail Admin</h3>
	</div>
	<form class="" action="" method="post">
		<table>
			<tr>
				<td width="200px">Full Name</td>
				<td><?php echo $_SESSION['user']['full_name']; ?></td>
				<td rowspan="4" width="300px"><img id="pp" src="images/menu/pp.png" alt=""></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><?php echo $_SESSION['user']['address']; ?></td>
			</tr>
			<tr>
				<td>Mobail Phone</td>
				<td><?php echo $_SESSION['user']['number_phone']; ?></td>
			</tr>
			<tr>
				<td>Type User</td>
				<td><?php echo $_SESSION['user']['type_user']; ?></td>
			</tr>
		</table>
		<div class="bux">
			<input type="submit" name="" value="Edit">
			<input type="submit" name="" value="Cange password">
		</div>
	</form>

</div>






<div class="menu_control">
	<a href="#"><img class="" src="images/logo_icon_login.jpg"></a>
	<div class="menu_vertikal">
		<ul>
			<a href="#"><img id="pp" src="images/menu/pp.png" alt=""><?php echo $_SESSION['user']['full_name']; ?></a>
			<div class="menu_box">
				<li><a href="#" class="a">Home</a></li>
				<li><a href="#" class="a">Dashboard</a></li>
				<li><a href="#" class="a">Membership</a></li>
				<li><a href="#" class="a">Status Member</a></li>
			</div>
		</ul>
	</div>
</div>


https://www.youtube.com/watch?v=0KiOU50-ceM




+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
<div class="home">
	<div class="con">
		<h3>Detail Admin</h3>
	</div>
	<form class="" action="" method="post">
		<table>
			<tr>
				<td width="200px">Full Name</td>
				<td><?php echo $_SESSION['user']['full_name']; ?></td>
				<td rowspan="4" width="300px"><img id="pp" src="images/menu/pp.png" alt=""></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><?php echo $_SESSION['user']['address']; ?></td>
			</tr>
			<tr>
				<td>Mobail Phone</td>
				<td><?php echo $_SESSION['user']['number_phone']; ?></td>
			</tr>
			<tr>
				<td>Type User</td>
				<td><?php echo $_SESSION['user']['type_user']; ?></td>
			</tr>
		</table>
		<div class="bux">
			<input type="submit" name="" value="Edit">
			<input type="submit" name="" value="Cange password">
		</div>
	</form>

</div>

<div class="contain_table">
	<div class="con">
		<h3>Data User</h3>
	</div>
	<form class="" action="" method="post">
		<table>
			<tr>
				<th>No</th>
				<th>Full Name</th>
				<th>Address</th>
				<th>Mobail Phone</th>
				<th>Type User</th>
				<th>Option</th>
			</tr>

				<?php $no = 1;
				 foreach ($table as $value):
				$on = !$value['aktive'] ? 'display:none' : '';
				// if ($value = false) {
				//   $on = 'display:none';
				// } else {
				//   $on = '';
				// }
				$off = $value['aktive'] ? 'display:none' : '';
				?>

				<?php if($no%2==1){ ?>
				<tr id="td1">
					<td><?= $no ?></td>
					<td><?= $value['full_name'] ?></td>
					<td><?= $value['address'] ?></td>
					<td><?= $value['number_phone'] ?></td>
					<td><?= $value['nama_type_user'] ?></td>
					<td>
						<a href="?nav=edit&id=<?= $value['id']?>"><img src="images/edit.png" alt=""></a>
						<a href="?nav=proser_aktive&id=<?= $value['id']?>"><img class="on" src="images/on.png" alt="ON" style='<?= $on ?>;'>
																															 <img class="off" src="images/off.png" alt="OFF"  style='<?= $off ?>;'>
						</a>
						<a class="delete-link" href="?nav=delete&id=<?= $value['id']?>"><img src="images/delete.png" alt=""></a>
					</td>
				</tr>
			<?php }else{ ?>
				<tr>
					<td><?= $no ?></td>
					<td><?= $value['full_name'] ?></td>
					<td><?= $value['address'] ?></td>
					<td><?= $value['number_phone'] ?></td>
					<td><?= $value['nama_type_user'] ?></td>
					<td>
						<a href="?nav=edit&id=<?= $value['id']?>"><img src="images/edit.png" alt=""></a>
						<a href="?nav=proser_aktive&id=<?= $value['id']?>"><img class="on" src="images/on.png" alt="ON" style='<?= $on ?>;'><img class="off" src="images/off.png" alt="OFF"  style='<?= $off ?>;'></a>
						<a class="delete-link" href="?nav=delete&id=<?= $value['id']?>"><img src="images/delete.png" alt=""></a>
					</td>
				</tr>
				<?php  }$no++; ?>

			<?php endforeach ?>
		</table>
	</form>
</div>
<div class="contain_table_edit">
	<div class="con">
		<h3>Update File</h3>
	</div>
	<form class="" action="" method="post">
		<?php foreach ($data as $value): ?>
		<table>
			<tr>
				<td>Full Name</td>
				<td><input type="text" name="t_name" value="<?= $value['full_name'] ?>"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" name="t_addres" value="<?= $value['address'] ?>"></td>
			</tr>
			<tr>
				<td>Mobail Phone</td>
				<td><input type="text" name="t_phone" value="<?= $value['number_phone']?>"></td>
			</tr>
			<tr>
				<td>Type User</td>
				<td>
					<select id="option3" name ="op_user">
						 <option value='<?= $value['type_user'] ?>'><?= $value['type_user'] ?></option>
						 <?php foreach ($type as $value): ?>
							 <option value='<?= $value['id']?>'><?= $value['nama'] ?></option>
						 <?php endforeach ?>
					</select>
				</td>
			</tr>
		</table>
		<?php endforeach ?>
		<div class="bux">
			<input type="submit" class="confirm" name="update" value="Update">
			<input type="submit" name="cencel" value="Cancel">
		</div>
	</form>
</div>
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
