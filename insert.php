<?php 
$connect = mysqli_connect("127.0.0.1","root","","hackathon"); 
$zapros_vstavit = "INSERT INTO fran (name,descrip,price,loc,img,okup) VALUES('{$_GET['title']}', '{$_GET['descrip']}', '{$_GET['price']}', '{$_GET['loc']}', '{$_GET['img']}', '{$_GET['okup']}')";
$zapros_new = mysqli_query($connect,$zapros_vstavit);
header("Location: index.php")
 ?>