<?php

error_reporting(0);

$login = 'konradz';
$pass = 'okopokop22';
$db = 'konradz_pl';
$dbhost = 'mysql.cba.pl';

$sql = mysqli_connect($dbhost, $login, $pass, $db);

if($sql) {
	echo 'Połączenie z bazą "'.$db.'" udane!';
} else if(!$sql) {
	echo 'Coś poszło nie tak! Kod błędu: <br>';
	echo 'Errno: '.mysqli_connect_errno().PHP_EOL;
	echo 'Error: '.mysqli_connect_error().PHP_EOL;
}

mysqli_close($sql);
?>