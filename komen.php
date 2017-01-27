<?php
include_once 'dbconnect.php';
if (isset($_POST['komen'])) {
	$nama = $_POST['nama'];
  $email = $_POST['email'];
  $komen = $_POST['comment'];
  $waktu = date("Y-m-d h:i:sa");
    $query = "INSERT INTO komen(namak,emailk,komentar,waktu) VALUES('$nama','$email','$komen','$waktu')";
    if ($DBcon->query($query)) {
      header("location: kontak.php?berhasil");
    } else {
      header("location: kontak.php?gagal");
    }
} else {
  echo "ora bisa";
}



 ?>
