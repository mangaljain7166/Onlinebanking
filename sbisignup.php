<html>
<head>
<title>SignUp</title>
<link href='sofia.css?family=Sofia' rel='stylesheet'/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 10px 100px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    border-radius:50px;
	
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin:30px 100px 40px;
    border: none;
    cursor: pointer;
    width: 30%;
    border-radius:50px;
	font-family:sofia;
}

button:hover {
    opacity: 5;
}

.cancelbtn {
    width: auto;
    padding: 10px 30px;
    background-color: #f44336;
	font-family:sofia;
	
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
span.psw {
      display: block;
      float: none;
   }
   .cancelbtn {
      width: 100%;
   }
}
label{
font-family:sofia;
}
h2{
font-family:sofia;}
</style>
</head>
<body
background="bank2.jpg">


<h2>SignUp Form</h2>

<form method="POST" action="save_user.php">
 <div class="imgcontainer"
   </div>
   <div class="container">
   <label><b>Username</b></label></br>
   <input maxlength="10" type="text" placeholder="Enter Username" name="uname" required></br>
   
   <label><b>Password</b></label></br>
   <input maxlength="6" type="password" placeholder="Enter Password" name="psw" required></br>
   
   <label><b>Confirm Password</b></label></br>
   <input maxlength="6" type="password" placeholder="Enter Confirm Password" name="cpsw" required></br>
   
   
   <button type="submit">SignUp</button></br>
   <label> <input type="checkbox" checked="checked"> Remember me</br></label>
   </div>
   
   <div class="container" style="background-color:#f1f1f1">
   <a href="nacc.php" ><button type="cancel">Cancel</button></a></br></div>
  <span class="psw">Forgot <a href="#">password?</a></span>
   
   </div>
   </form>
   <?php
   if($_GET)
   {
	   $res = $_GET['res'];
	   if($res==0)
		   echo "<script>
				alert('Invalid Password. PleaseTry Again');
			</script>";
   }
   ?>
   </body>
   </html>
   