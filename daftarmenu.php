<?php
include_once 'dbconnect.php';
session_start();
if (!isset($_SESSION['adminSession'])) {
	header("Location: loginadmin.php");
	exit;
}
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title> NGULINERAN YUK </title>

		<style type="text/css">
			header, section, footer, aside, nav, article, figure, figcaption {
				display: block;}
			body {
				color: #666666;
				background-color: #f9f8f6;
				background-image: url("images/dark-wood.jpg");
				background-position: center;
				font-family: Georgia, Times, serif;
				line-height: 1.4em;
				margin: 0px;}
			.wrapper {
				width: 940px;
				margin: 20px auto 20px auto;
				border: 2px solid #000000;
				background-color: #ffffff;}
			header {
				height: 160px;
				background-image: url(images/header.png);}
			h1 {
				text-indent: -9999px;
				width: 940px;
				height: 130px;
				margin: 0px;}
			nav, footer {
				clear: both;
				color: #ffffff;
				background-color: #aeaca8;
				height: 30px;}
			nav ul {
				margin: 0px;
				padding: 5px 0px 5px 30px;}
			nav li {
				display: inline;
				margin-right: 40px;}
			nav li a {
				color: #ffffff;}
			nav li a:hover, nav li a.current {
				color: #000000;}
			section.courses {
				float: left;
				width: 659px;
				border-right: 1px solid #eeeeee;}
			article {
				clear: both;
				overflow: auto;
				width: 100%;}
			hgroup {
				margin-top: 40px;}
			figure {
				float: left;
				width: 290px;
				height: 220px;
				padding: 5px;
				margin: 20px;
				border: 1px solid #eeeeee;}
			figcaption {
				font-size: 90%;
				text-align: left;}
			aside {
				width: 230px;
				float: left;
				padding: 0px 0px 0px 20px;}
			aside section a {
				display: block;
				padding: 10px;
				border-bottom: 1px solid #eeeeee;}
			aside section a:hover {
				color: #985d6a;
				background-color: #efefef;}
			a {
				color: #de6581;
				text-decoration: none;}
			h1, h2, h3 {
				font-weight: normal;}
			h2 {
				margin: 10px 0px 5px 0px;
				padding: 0px;}
			h3 {
				margin: 0px 0px 10px 0px;
				color: #de6581;}
			aside h2 {
				padding: 30px 0px 10px 0px;
				color: #de6581;}
			footer {
				font-size: 80%;
				padding: 7px 0px 0px 20px;}
		</style>

	</head>

	<body>

<div align="center">
	<a href="logout.php?logout-admin" style="padding: 10px 10px">Keluar</a>
	<a href="index.php" style="padding: 10px 10px">Beranda</a>
	<a href='admin.php' style="padding: 10px 10px">Tambah Menu</a>
	<a href='daftarkomen.php' style="padding: 10px 10px">Daftar Komentar</a>
</div>
<HR WIDTH=100% SIZE=3 NOSHADE>
  <?php
  	if (isset($_GET['berhasil'])) {
  		echo "<h3 style='text-align:center'>Berhasil Dihapus</h3>";
  	} elseif (isset($_GET['gagal'])) {
  		echo "<h3 style='text-align:center'>Gagal Dihapus</h3>";
  	}
   ?>
<center><font color=""><b>Daftar Menu</b></center><br><br>
<table border="2" cellspacing="2" cellpadding="2" align="center">
  <tr>
    <td>Makanan</td>
    <td>Gambar</td>
    <td>Rumah Makan</td>
    <td>Alamat</td>
    <td>Deskripsi</td>
    <td>Aksi</td>
  </tr>
<?php
  $data = $DBcon->query("SELECT * FROM menu");
  while ($baris = $data->fetch_array()) {
    ?>
      <tr>
        <td><?php echo $baris['makanan']; ?></td>
        <td><img src=<?php echo $baris['gambar'] ?> style="width: 200px; height: 120px"></td>
        <td><?php echo $baris['rmakan'] ?></td>
        <td><?php echo $baris['alamat'] ?></td>
        <td><?php echo $baris['deskripsi'] ?></td>
        <td><a href="proses.php?hapus=<?php echo $baris['id'];?>">Hapus</a>
    <?php
  }
 ?>
 </table>
</body>
</html>
