<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thanks to Coding Cage</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>

<div class="signin-form">

	<div class="container">


       <form class="form-signin" action="proses.php" method="post" id="login-form">

        <h2 class="form-signin-heading">Sign In.</h2><hr />

        <?php
		if(isset($_GET['gagal'])){
			echo "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Salah Password !
				</div>";
		}
		?>
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" required />
        </div>

     	<hr />

        <div class="form-group">
            <button type="submit" class="btn btn-default" name="admin-login" id="btn-login">
    		        <span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
			      </button>
            <a class="btn btn-default" href="index.php">Beranda</a> 
        </div>
      </form>
    </div>
</div>
</body>
</html>
