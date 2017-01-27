	<?php include_once 'header.php';
	include_once 'dbconnect.php';
	?>
			<br>
				<center><img src="images/nasikucing.jpg" alt="" width="60%" height="50%" align="center"></center>


				<p style="color:white; background-color:orange" align="center"> &#9786; Cari &rarr; Amati &rarr; Kunjungi &#9786; </p>

			<section class="">

				<?php
					$hasil = $DBcon->query("SELECT * FROM menu");

					while ($data = $hasil->fetch_array()) {
						?>
						<article>
							<figure>
								<img src="<?php echo $data['gambar']; ?>" style="width:270px;height:180px">
							</figure>

							<hgroup>
								<h2><a href="#" target="contant"/>&#1769; <?php echo $data['makanan']; ?></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#9618; </h2>
								<h3>&#9660; <?php echo $data['alamat']; ?></h3>
								<p>&#9733;&#9733;&#9733;&#9734;&#9734;</p>
							</hgroup>
								<p><?php echo $data['deskripsi']; ?></p>

								<font size="1" align="left" ><?php echo $data['tanggal']; ?></a></font>
							</article>
						<?php
					}
				 ?>
				
			</section>


			<footer>
				<center> -Pastikan Anda Masih &hearts;  Makanan Indonesia- </center>
			</footer>
		</div><!-- .wrapper -->
	</body>
</html>
