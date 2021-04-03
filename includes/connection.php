<?php
$host = 'localhost';
$database = 'test_table';
$user = 'root';
$password = 'root';

$link = mysqli_connect($host,$user,$password,$database) or die("Error".mysqli_error($link));
mysqli_set_charset($link,'utf8');
//mysqli_close($link);