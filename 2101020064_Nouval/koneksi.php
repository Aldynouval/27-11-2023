<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "nim_nama";

$con = mysqli_connect($host, $user, $pass);
mysqli_select_db($con, $db);