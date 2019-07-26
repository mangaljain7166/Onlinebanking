<?php
$host="localhost";
$user="root";
$pass="";
$db='bank';

$link = mysql_connect($host, $user, $pass);
mysql_select_db($db, $link);


$AcNum = $_POST['AcNum'];
$amt = $_POST['amt'];
$currBal=0;

//get the current balance
$sql="select * from acctbl where accnum='$AcNum'";
$res = mysql_query($sql);
if(mysql_num_rows($res)>0)
{
	while($row = mysql_fetch_array($res))
	{
		$currBal=$row['cblnc'];
	}


	//add the amt in current balance
	$currBal = $currBal + $amt;

	//update the balance in database
	$sql = "update acctbl set cblnc = $currBal WHERE accnum='$AcNum'";
	$res = mysql_query($sql);
	if($res==1)
	{
		//successful deposit
		header("location:case.php?res=1");
	}
	else
	{
		//failed.
		header("location:case.php?res=0");
	}
}
else
header("location:case.php?res=0");
?>
