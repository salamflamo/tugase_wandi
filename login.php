<?php include_once 'header.php';
if (isset($_SESSION['userSession'])) {
	header("Location: profiluser.php");
	exit;
}
elseif (isset($_SESSION['adminSession'])) {
	header("Location: admin.php");
	exit;
}

?>
	<form action="proses.php" method="post">
			<br><br><br><br><br>
			<table width="405" height="169" border="0" cellpadding="0" cellspacing="0" align="center">

    <tr bgcolor="">
      <td height="5" colspan="2"><div align="center"><strong></strong></div></td>
    </tr>

    <tr>
		<center><b> Masuk </b></center>
      <td width="100" height="32" >Email</td>
      <td width="200"><label>:
          <input name="email" type="text" required="">
      </label></td>
    </tr>

    <tr>
      <td height="26">Password</td>
      <td><label>:
          <input name="pass" type="password" required="">
      </label></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align:center"><input type="submit" name="masuk" value="login"></td>

    </tr>


  </table>
</form>
<br><br><br><br><br>

			<footer>
				<center> -Pastikan Anda Masih &hearts;  Makanan Indonesia- </center>
			</footer>
		</div><!-- .wrapper -->
	</body>
</html>
