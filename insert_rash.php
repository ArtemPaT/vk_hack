<?php 
	$con_bd = mysqli_connect('127.0.0.1', 'root', '', 'hackathon');
	$zadrash = $_GET["zadrash"];
	$prodrash = $_GET["prodrash"];
	$dosrash = $_GET["dosrash"];
	$prash = $_GET["prash"];
	$rash = $zadrash + $prodrash + $dosrash + $prash;
	mysqli_query($con_bd, "INSERT INTO rash(obrash, zadrash, prodrash, dosrash, prash) VALUES ('$rash', '$zadrash', '$prodrash', '$dosrash', '$prash')"); //почему
	header('Location: buisness.php')
 ?>;