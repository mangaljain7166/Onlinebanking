<html>
<head>
<title>Online Banking Login</title>
<link href='sofia.css?family=Sofia' rel='stylesheet'/>
</head>
<style>
body{
background-color:white;
}
div[id="test"]{
line-height:50px;
text-align:center;
margin:10px auto;
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
margin:10px 10px;
border-radius:5px;
font-family:sofia;
animation: sampleanimation 0.5s infinite alternate;
}
@keyframes sampleanimation{
0%{border-radius:0px;}
25%{transform:rotate(deg);
font-size:25px;
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
width:40%;
Padding:12px 20px;
margin:8px 0;
display-inline:block;
border:1px solid red;
box-sizing:border box;
border-radius:50px;
}
button{
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px;
    border: none;
    cursor: pointer;
    width: 25%;
    border-radius:100px;
	font-family:sofia;
	}

h2{margin-left:150px;
   margin-bottom:0px;
   font-family:sofia;}
   h3{
   margin-left:400px;}
   h4{
   margin-left:465px;
   }
   h1{
   margin-left:500px;
   font-family:sofia;}
   label{
   font-family:sofia;
   color:black;}
   
</style>
<body
background="bank2.jpg">
<div id="objects">	
Online
Banking
</div>
<div id="test">
Online Banking Of India
</div>
<h1><u>Login</u></h1>
<h3><div class="container">
<form method="POST" action="login_back.php">
 <label><b>Username<b></label></br>
 <input maxlength="10" type="text" placeholder="Enter Username" name="uname" required></br>
 
 <label><b>Password</b></label></br>
 <input maxlength="6" type="password" placeholder="Enter Password" name="psw" required></br></h3>
 <h4><button type="submit">Login</button></br>
 <label>
 <input type="checkbox" checked="checked"> Remember me</h4>
 </label>
 </div>
 </form>
    <?php
   if($_GET)
   {
	   if(isset($_GET['res']))
	   {
	   $res = $_GET['res'];
	   if($res==1)
			echo "<script>
				alert('Success.');
			</script>";
	
	if($res==0)
			echo "<script>
				alert('Invalid ID or Password.');
			</script>";
			
	   }
	   if(isset($_GET['passres']))
	   {
			
			 $passres = $_GET['passres'];
	   if($passres==1)
			echo "<script>
				alert('Successfully change password.');
			</script>";
	
	if($passres==0)
			echo "<script>
				alert('Invalid ID or Password.');
			</script>";
	   }
   }
   ?>
   
</body>
</html>