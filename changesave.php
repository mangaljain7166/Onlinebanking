<?php
$host="localhost";
$user="root";
$pass="";
$db='bank';
$opass=$_POST['opass'];
$opassindb='';

$npass=$_POST['npass'];
$cpass=$_POST['cpass'];

$link = mysql_connect($host, $user, $pass);
mysql_select_db($db, $link);

//select the balance in database
$sql="select * from signuptbl where password='$opass'";
$res = mysql_query($sql);
if(mysql_num_rows($res)==1)
{
	//update the balance in database
	$sql = "update signuptbl set password='$npass' WHERE password='$opass'";
	$res = mysql_query($sql);
	header("location:index.php?passres=$res");
}
else
	header("location:index.php?passres=0");	
?>
