
<div class="data_admin">
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
