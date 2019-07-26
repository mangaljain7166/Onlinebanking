<?php
$accnum=$_POST['accnum'];
$name=$_POST['name'];
$fname=$_POST['fname'];
$mblnum=$_POST['mblnum'];
$city=$_POST['city'];
$anum=$_POST['anum'];



error_reporting(E_ALL);
$host="localhost";
$db_user="root";
$db_password="";
$db="bank";
$link = mysql_connect($host,$db_user,$db_password);
mysql_select_db($db, $link);


echo $sql="insert into acctbl (accnum,name,fname,mblnum,city,cblnc,anum) values ('$accnum','$name','$fname','$mblnum','$city',0,'$anum')";

$res = mysql_query($sql);
if($res)
{
	//successful Created your account
	header("location:nacc.php?res=1");
}
else
{
	//failed.
	header("location:sbimenu.php?res=0");
}
?>