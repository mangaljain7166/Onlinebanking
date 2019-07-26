<?php
$host="localhost";
$user="root";
$pass="";
$db='bank';

$link = mysql_connect($host, $user, $pass);
mysql_select_db($db, $link);


$uname=$_POST['uname'];
$psw=$_POST['psw'];

$sql="SELECT * FROM signuptbl WHERE username='".$uname."' and password='".$psw."'";
$res = mysql_query($sql);
$numrows = mysql_num_rows($res);
if($numrows>=1)
{
	//successful login
	header("location:nacc.php");
}
else
{
	//login failed.
	header("location:index.php?res=0");
}
?>