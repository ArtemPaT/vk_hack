<?php 
	$con_bd = mysqli_connect('127.0.0.1', 'root', '', 'hackathon');
	$zardohod = $_GET["zardohod"];
	$dopdohod = $_GET["dopdohod"];
	$obdohod = $zardohod + $dopdohod;
	mysqli_query($con_bd, "INSERT INTO dohod(obdohod, zardohod, dopdohod) VALUES ('$obdohod', '$zardohod', '$dopdohod')"); 
	header('Location: buisness.php')
 ?>;