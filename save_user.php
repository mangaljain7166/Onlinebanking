<?php

$host="localhost";
$user="root";
$pass="";
$db='bank';

$link = mysql_connect($host, $user, $pass);
mysql_select_db($db, $link);


$uname=$_POST['uname'];
$psw=$_POST['psw'];
$cpsw=$_POST['cpsw'];

if($psw==$cpsw)
{
	$sql="INSERT INTO signuptbl (username, password) VALUES ('$uname', '$psw')";
	$res = mysql_query($sql);
	$url = "index.php?res=".$res;
	header("location:".$url);
}
else
{
	$url = "sbisignup.php?res=0";
	header("location:".$url);
}


?>