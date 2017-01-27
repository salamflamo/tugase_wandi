<?php include_once 'header.php';
if (isset($_SESSION['userSession'])) {
	header("Location: profiluser.php");
	exit;
}
?>
<form action="proses.php" method="post">

<table border="0" align="center">
<center><font color=""><b>Isikan Disini</b></center><br>
	<?php
if (isset($_GET['berhasil'])) {
	echo "<h2 style='text-align:center'>Berhasil Mendaftar</h2>";
} elseif (isset($_GET['gagal'])) {
	echo "<h2 style='text-align:center'>Gagal Mendaftar</h2>";
} elseif (isset($_GET['warning'])) {
	echo "<h2 style='text-align:center'>Anda Sudah Terdaftar</h2>";
}

?>
	<font face="comic sans MS" size="+3"></font>
		<tr>
			<td>Nama</td>
				<td><input name="depan" type="text" title="Nama Depan" placeholder="nama depan" required>
						<input name="belakang" type="text" title="nama belakang" placeholder="nama belakang" >
				</td>
		</tr>

		<tr>
			<td>Jenis Kelamin</td>
				<td><select name="jk" title="kelamin">
					<option value="none" selected>--pilih salah satu--</option>
						<option value="L">Laki - Laki</option>
						<option value="P">Perempuan</option>
				</select>
			</td>
		</tr>

		<tr>
			<td>Tanggal Lahir</td>
				<td>
					<input type="number" name="tgl" min="1" max="31" placeholder="HH" required="">
					<select name="bulan" title="bulan">
						<option value="none" selected>--pilih salah satu--</option>
							<option value="01">januari</option>
							<option value="02">Februari</option>
							<option value="03">Maret</option>
							<option value="04">April</option>
							<option value="05">Mei</option>
							<option value="06">Juni</option>
							<option value="07">Juli</option>
							<option value="08">Agustus</option>
							<option value="09">September</option>
							<option value="10">Oktober</option>
							<option value="11">November</option>
							<option value="12">Desemeber</option>
					</select>
					<input type="number" name="tahun" min="1890" max="2006" placeholder="YYYY" required="">
				</td>
		</tr>
		<tr>
			<td>Email</td>
				<td>
						<input type="text" name="email" title="email" placeholder="ID email"required>@
						<select name="domain">
						<option value="yahoo.com">yahoo.com</option>
						<option value="yahoo.id">yahoo.co.id</option>
						<option value="gmail.com">gmail.com</option>
						<option value="zoho.com">zoho.com</option>
						<option value="windowslive.com">windowslive.com</option>
						<option value="rocketmail.com">rocketmail.com</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" placeholder="password" required></td>
		</tr>
</table>
<br>

<body>

<center><input type="submit" name="kirim" value="daftar"></center>


</body>

</table>
</form>

<br><br><br><br><br><br>

</body>
</html>

			</section>

			<footer>
				<center> -Pastikan Anda Masih &hearts;  Makanan Indonesia- </center>
			</footer>
		</div><!-- .wrapper -->
	</body>
</html>
