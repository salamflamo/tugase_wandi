<?php include_once 'header.php';
if (isset($_SESSION['adminSession'])) {
	header("Location: daftarkomen.php");
	exit;
}

?>
			<br><br><br>
			<?php
				if (isset($_GET['berhasil'])) {
					echo "<h3 style='text-align:center'>Berhasil Komentar</h3>";
				} elseif (isset($_GET['gagal'])) {
					echo "<h3 style='text-align:center'>Gagal Komentar</h3>";
				}
			 ?>
				<center><font color=""><b>Isikan Disini</b></center>
			<section class="">



			<form action="proses.php" method="post">
				<table BORDER="0" CELLSPACING="0" CELLPADDING="0" WIDTH="90%">

					<tr><td width="30%"><div align="right">

						<p>Nama:</div>
							<td width="40%"><input type="text" name="nama" >
							</td></tr>
								<tr><td><div align="right">

						<p>Email:</div></td>
							<td><input type="email" name="email" required=""></TD></TR>
								<tr><td><div align="right">

						<p>Komentar:</div></td>
							<td><textarea name="comment" required="" rows="4" ></textarea></td></tr>
								<tr><td>&nbsp;</td>
									<td>
										<br>
										<input type="submit" name="komen" value="komen">
										<input type="reset" name="reset" value="Reset">
									</td>
								</tr>

	</table>
</form>
<br><br><br><br>


			</section>

			<footer>
				<center> -Pastikan Anda Masih &hearts;  Makanan Indonesia- </center>
			</footer>
		</div><!-- .wrapper -->
	</body>
</html>
