<html>
<head>
<?php //login.php
error_reporting(E_ALL);

$db_hostname = 'localhost';
$db_database = 'userdata'; 
$db_username = 'root';
$db_password = '';
$db_server = mysql_connect($db_hostname, $db_username, $db_password)
    or die("Unable to connect to MySQL: " . mysql_error());
	mysql_select_db($db_database)
    or die("Unable to select database: " . mysql_error());
	echo"$db_server";
?>
</head>
<body>
</body>
</html>