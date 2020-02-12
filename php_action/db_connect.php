<?php

$sername = "localhost";
$username = "havoc";
$password = "venicio007";
$db_name = "crud";

$connect = mysqli_connect($sername,$username,$password,$db_name);
mysqli_set_charset($connect,"utf-8");

if (mysqli_connect_error()) {
	echo "Erro na conexão".mysqli_connect_erro();
}