<?php
$host="localhost";
$user="root";
$pass="";
$db='bank';

$link = mysql_connect($host, $user, $pass);
mysql_select_db($db, $link);


$fromacnum = $_POST['fromacnum'];
$toacnum = $_POST['toacnum'];
$amt = $_POST['amt'];
$currBal=0;
$tradate = date('YmdHis');
$flag1=1;
$flag2=1;

//get the current balance of from acc no
$sql="select * from acctbl where accnum='$fromacnum'";
$res = mysql_query($sql);
if(mysql_num_rows($res)>0)
{
	while($row = mysql_fetch_array($res))
	{
		$currBal=$row['cblnc'];
		if($currBal<$amt)
		{
			$flag1=0;
			$flag2=0;
		}
	}
}
else
	$flag1=0;

if($flag1==1)
{
$currBal = $currBal - $amt;
//update the balance in database
$sql = "update acctbl set cblnc = $currBal WHERE accnum='$fromacnum'";
$res = mysql_query($sql);
}
	

//get the current balance of from acc no
$sql="select * from acctbl where accnum='$toacnum'";
$res = mysql_query($sql);
if(mysql_num_rows($res)>0)
{
	while($row = mysql_fetch_array($res))
	{
		$currBal=$row['cblnc'];
	}
}
else
	$flag2=0;
if($flag2==1)
{
$currBal = $currBal + $amt;
//update the balance in database
$sql = "update acctbl set cblnc = $currBal WHERE accnum='$toacnum'";
$res = mysql_query($sql);
}

if($flag1==1 && $flag2==1)
{
//insert query in transacyion table
$sql = "insert into trantbl (acnum, amt, tradate, tratype) VALUES ('$fromacnum', $amt, '$tradate', 0)";
$res = mysql_query($sql);
	
//insert query in transacyion table
$sql = "insert into trantbl (acnum, amt, tradate, tratype) VALUES ('$toacnum', $amt, '$tradate', 1)";
$res = mysql_query($sql);
header("location:moneytransfer.php?res=1");	
}
else
header("location:moneytransfer.php?res=0");	

?>
