<html>
<head>
<title>Mini Statement</title>
<link href='sofia.css?family=Sofia' rel='stylesheet'/>
</head>
<style>
body{
background-color:white;
}
div[id="test"]{
line-height:50px;
text-align:center;
margin:px auto;
border-radius:5px;
font-family:sofia;
animation: sampleanimation 8s infinite alternate;
}
div{
color:white;}
#objects{
width:100px;
height:100px;
background-color:gray;
line-height:40px;
text-align:center;
margin:px auto;
border-radius:5px;
font-family:sofia;
animation: sampleanimation 0.5s infinite alternate;
}
@keyframes sampleanimation{
0%{border-radius:0px;}
25%{transform:rotate(deg);
font-size:25px
}
50%{background-color:yellow;}
75%{
background-color:blue;}
100%{border-radius:100px;
background-color:#f00;
font-size:22px;
box-shadow:5px 5px 5px gray;
text-shadow:0px 10px 10px blue;
transform:rotate(deg);
}
}
input[type=text],input[type=Password]{
width:50%;
Padding:12px 20px;
margin:8px 0;
display-inline:block;
border:1px solid yellow;
box-sizing:border box;
border-radius:10px;;
}
button {
    background-color:blue;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 40%;
    border-radius:30px;
	font-family:sofia;}
	h2{
	font-family:sofia;
	color:black;}
	div[id="demo"]{
	margin-left:450px;}
	label{
	font-family:sofia;
	color:black;}
	ul {
    list-style-type: none;
    margin: 2px;
    padding: 0;
    overflow: hidden;
    background-color:#00008B;
	border-radius:15px;
}

li {
    float: left;
    border-right:1px solid #bbb;
}

li:last-child {
    border-right: none;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
a[id="test"]{
float:right;
width:500px;
height:50px;
margin-top:-100px;
text-align:right;
}
</style>
<body
background="bank2.jpg">
<div id="objects" >
Online Banking
</div>
 <a id="test"  href="sbiSignUp.php" ><button type="Signup">Add New User</button></a></br>
<div id="test">
Online Banking Of India
</div>
<ul>
<li><a href="nacc.php">Open New Account</a></li>

  <li><a href="case.php">Cash Deposite</a></li>
  <li><a href="moneytransfer.php">Money Transfer</a></li>
  <li><a href="balance.php">Balance Inquiry</a></li>
  <li><a class="active" href="mini.php">Mini Statement</a></li>
  <li><a href="aadhar.php">Aadhar Link</a></li>
  <li><a href="settings.php">Settings</a></li>
</ul>
<div id="demo">
<h2><u>	Mini Statement</u></h2></br>
<div class="container">
<table border>
<tr>
<td>Serial Number</td>
<td>Date</td>
<td>Amount</td>
<td>Transaction type</td>
</tr>

 <?php
$host="localhost";
$user="root";
$pass="";
$db='bank';
$AcNum=$_POST['AcNum'];
$link = mysql_connect($host, $user, $pass);
mysql_select_db($db, $link);

//get the current balance of from acc no
$sql="select * from trantbl where acnum='$AcNum'";
$res = mysql_query($sql);
if(mysql_num_rows($res)>0)
{
	$count=1;
	while($row = mysql_fetch_array($res))
	{
		?>
		<tr>
		<td><?php echo $count;?></td>
		<td><?php echo date('d-M-Y, h:i:s A', strtotime($row['tradate']));?></td>
		<td><?php echo $row['amt']." Rs.";?></td>
		<td><?php echo ($row['tratype']==0?"debit":"credit");?></td>
		</tr>
		<?php
		$count++;
	}
	
}	
?>
</table>
</div>
</body>
</html>