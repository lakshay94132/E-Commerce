<?php 
session_start();
$siteTitle = "www.fenstoo.com ";
$siteURL = "http://".$_SERVER['HTTP_HOST']."/Fensto";
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = '';
$conn =  mysqli_connect ($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn)
{
	echo"database connection error";
}
?>