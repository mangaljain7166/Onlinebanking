<?php
$host="localhost";
$user="root";
$pass="";
$db='bank';
$AcNum=$_POST['AcNum'];
$anum=$_POST['anum'];

$link = mysql_connect($host, $user, $pass);
mysql_select_db($db, $link);

//update the balance in database
$sql = "update acctbl set anum='$anum' WHERE accnum='$AcNum'";
$res = mysql_query($sql);

header("location:aadhar.php?res=$res");	
?>
