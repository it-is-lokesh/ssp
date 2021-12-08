<?php
		define('DB_NAME', 'ecell_db1920');
    define('DB_USER', 'ecellkgp');
    define('DB_PASSWORD', 'www-ecell');
    define('DB_HOST', 'mysql.ecell-iitkgp.org');

	$db=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

	if (mysqli_connect_errno())
	{
		die("Could not connect to database.");
	}
?>