
<div class="search">
  <div class="">
    <form class="" action="" method="post">
      <ul>
        <li><img src="images/search-icon.png" alt=""></li>
        <li>
          <select class="option_search" name="src1">
            <option value="">type user</option>
            <?php foreach ($type as $value): ?>
              <?php  if ($value['nama'] == 'silver') : ?>
                <option value='<?= $value['id']?>' selected ><?= $value['nama'] ?></option>
              <?php else: ?>
                <option value='<?= $value['id']?>'><?= $value['nama'] ?></option>
              <?php endif ?>
            <?php endforeach ?>
          </select>
        </li>
        <li>
          <select id="op_src" class="option_search" name="src2">
            <option value="1">Full name</option>
            <option value="2" selected>Email</option>
            <option value="3">Phone</option>
            <option value="4">Address</option>
          </select>
        </li>
        <li><input id="txt" type="text" name="cari" value="" placeholder="Search ..."></li>
        <li><input type="submit" name="search" value="Search"></li>
        <li><input type="submit" name="Reset" value="Reset  "></li>
      </ul>
    </form>
  </div>
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
