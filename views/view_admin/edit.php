
<div class="contain_table_edit">
  <div class="con">
    <h3>Update</h3>
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
      <input type="submit" name="update" value="Update">
      <input type="submit" name="cencel" value="Cancel">
    </div>
  </form>
</div>
