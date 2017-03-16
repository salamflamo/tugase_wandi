<?php include_once 'dbconnect.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Njajal</title>
  </head>
  <body>
    <table border="2" style="padding: 5px 5px">
      <tr>
        <td>
          Nama
        </td>
        <td colspan="6">
          Makanan
        </td>
      </tr>
      <?php
        $data = $DBcon->query("SELECT id,nama FROM member");
        while ($bla = $data->fetch_array()) {
          $id=$bla["id"];
          $anu = $DBcon->query("SELECT makanan FROM menu WHERE id_pemesan=$id");
          ?>
          <tr>
            <td>
              <?php echo $bla["nama"]; ?>
            </td>
            <?php
              while ($itu = $anu->fetch_array()) {
                ?>
                <td>
                  <?php echo $itu["makanan"]; ?>
                </td>
                <?php
              }
             ?>
          </tr>
          <?php
        }
       ?>
    </table>
  </body>
</html>
