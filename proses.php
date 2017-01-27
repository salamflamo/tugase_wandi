<?php
include_once 'dbconnect.php';
session_start();
date_default_timezone_set("Asia/Jakarta");
if(isset($_POST['kirim'])) {

	$nama = strip_tags($_POST['depan'])." ".strip_tags($_POST['belakang']);
  $jk = strip_tags($_POST['jk']);
  $tgl = strip_tags($_POST['tahun'])."-".strip_tags($_POST['bulan'])."-".strip_tags($_POST['tgl']);
	$email = strip_tags($_POST['email'])."@".strip_tags($_POST['domain']);
	$pass = strip_tags($_POST['password']);

	$nama = $DBcon->real_escape_string($nama);
  $jk = $DBcon->real_escape_string($jk);
  $tgl = $DBcon->real_escape_string($tgl);
  $email = $DBcon->real_escape_string($email);
	$pass = $DBcon->real_escape_string($pass);

	$pass_en = password_hash($pass, PASSWORD_DEFAULT);

  $check_email = $DBcon->query("SELECT email FROM member WHERE email='$email'");
	$count=$check_email->num_rows;
	if ($count==null) {

		$query = "INSERT INTO member(nama,jk,tgllahir,email,pass) VALUES('$nama','$jk','$tgl','$email','$pass_en')";

		if ($DBcon->query($query)) {
			header("location: daftar.php?berhasil");
		}else {
			header("location: daftar.php?gagal");
		}

	} else {

		header("location: daftar.php?warning");

	}

	$DBcon->close();
}
elseif (isset($_POST['masuk'])) {

	$email = strip_tags($_POST['email']);
	$password = strip_tags($_POST['pass']);

	$email = $DBcon->real_escape_string($email);
	$password = $DBcon->real_escape_string($password);

	$query = $DBcon->query("SELECT * FROM member WHERE email='$email'");
	$row=$query->fetch_array();

	$count = $query->num_rows; // if email/password are correct returns must be 1 row

	if (password_verify($password, $row['pass']) && $count==1) {
		$_SESSION['userSession'] = $row['id'];
		header("Location: profiluser.php");
	} else {
		header("location: login.php?gagal");
	}
	$DBcon->close();
}
elseif (isset($_POST['admin-login'])) {
	$password = strip_tags($_POST['password']);

	$email = "admin@yahoo.com";
	$password = $DBcon->real_escape_string($password);

	$query = $DBcon->query("SELECT * FROM member WHERE email='admin@yahoo.com'");
	$row=$query->fetch_array();

	$count = $query->num_rows; // if email/password are correct returns must be 1 row

	if (password_verify($password,$row['pass'])) {
		$_SESSION['adminSession'] = $row['id'];
		header("Location: admin.php");
	} else {
		header("location: loginadmin.php?gagal");
	}
	$DBcon->close();
}

elseif (isset($_POST['jual'])) {
  $makanan = $_POST['makanan'];
  $rmakan = $_POST['makanan'];
  $alamat = $_POST['alamat'];
  $deskripsi = $_POST['deskripsi'];
  $tanggal = date("Y-m-d");
  if ($_FILES['gambar']['error'] > 0) {
    header("location: admin.php?gagal");
  } else {
    move_uploaded_file($_FILES['gambar']['tmp_name'],'upload/'.$_FILES['gambar']['name']);
    $gambar = "upload/".$_FILES['gambar']['name'];
    $query = "INSERT INTO menu(makanan,gambar,rmakan,alamat,deskripsi,tanggal) VALUES('$makanan','$gambar','$rmakan','$alamat','$deskripsi','$tanggal')";
    if ($DBcon->query($query)) {
      header("location: admin.php?berhasil");
    } else {
      header("location: admin.php?gagal");
    }
  }
}

elseif (isset($_GET['hapus'])) {
  $id = $_GET['hapus'];
  if ($DBcon->query("DELETE FROM menu WHERE id=$id")) {
    header("location: daftarmenu.php?berhasil");
  } else {
    header("location: daftarmenu.php?gagal");
  }
}

elseif (isset($_GET['pesan'])) {
  $id_m = $_GET['pesan'];
  $id_p = $_SESSION['userSession'];
  $waktu = date("Y-m-d h:i:sa");
  if ($DBcon->query("UPDATE `menu` SET `id_pemesan`=$id_p,`tgl_pesan`='$waktu' WHERE `id`=$id_m")) {
    header("location: profiluser.php?berhasil");
  } else {
  	header("location: profiluser.php?gagal");
  }
}

elseif (isset($_POST['komen'])) {
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
}

 ?>
