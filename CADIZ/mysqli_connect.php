<?php
$dbcon = @mysqli_connect('localhost', 'markcadiz', 'markcadiz', 'members_cadiz')
OR die('Could not connect to MySQL. Error in '.mysqli_connect_error());
mysqli_set_charset($dbcon, 'utf8');

?>
