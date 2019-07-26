<?php
$host="localhost";
$user="root";
$pass="";
$db='bank';
$AcNum=$_POST['AcNum'];
$link = mysql_connect($host, $user, $pass);
mysql_select_db($db, $link);

//get the current balance of from acc no
$sql="select * from acctbl where accnum='$AcNum'";
$res = mysql_query($sql);
if(mysql_num_rows($res)>0)
{
	while($row = mysql_fetch_array($res))
	{
		$currBal=$row['cblnc'];
		
	}
}	
	header("location:balance.php?res=$currBal");	
?>