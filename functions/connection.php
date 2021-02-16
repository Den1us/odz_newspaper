<?php
$hostname = '127.0.0.1';
$username = 'root';
$password = 'root';
$basename = 'phpodz';

$link = mysqli_connect($hostname, $username, $password, $basename) or die ('Невозможно открыть базу');
?>