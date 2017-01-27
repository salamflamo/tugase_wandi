<?php

	 $DBhost = "localhost";
	 $DBuser = "root";
	 $DBpass = "salam123";
	 $DBname = "kuliner";

	 $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);

     if ($DBcon->connect_errno) {
         die("ERROR : -> ".$DBcon->connect_error);
     }
