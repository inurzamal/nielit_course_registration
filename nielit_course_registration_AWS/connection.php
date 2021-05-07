<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "Passw0rd";
$dbname = "nielit_registration";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
