<?php
	$servername="LocalHost";
	$username="root";
	$password="";
	$dbname="project";
	
	$conn=new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error)
	{
		die("connection failed".$conn->connect_error);
	}
	else 
		echo "<h1><center>connected database successfully </center></h1>";
	if(isset($_POST['Submit']))
	{
		$name1=$_POST['firstname'];
		$name2=$_POST['lastname'];
		$Email=$_POST['Email'];
		$Password=$_POST['Password1'];
		
		$sql="insert into proj1 values ('$name1','$name2','$Email','$Password')";
		if ($conn->query($sql) === TRUE) {
				echo "<h1><center>You have successfully registered. THANKYOU </h1></center>";
			} 	
			else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
	}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.su{
text-transform: uppercase;
background-color: #222428;
    font-family: verdana;
	font color= "#F32D0D";
 position:relative;
    border-radius: 3px;
    max-width: 400px;
    margin: 200px auto;
    border: 3px dashed #F32D0D;
 }
form{
	padding:20px;
	}

.header{
		text-align:center; 
		color:#222428 ; 
		padding:25px;
		 background-color:#F32D0D;
		}

input[type=email], input[type=password]{
			padding: 11px;
			border-radius: 3px;
			border: 1px solid #F32D0D;
			width: 100%;
			display: block;
			margin: 15px 0;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			outline: none;
			text-transform: uppercase;
			font-size: 12px;
			font-family: verdana;
			}
	
	input[type=text]
		{
				padding: 11px;
			border-radius: 3px;
			border: 1px solid #F32D0D;
			width: 100%;
			display: block;
			margin: 15px 0;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			outline: none;
			text-transform: uppercase;
			font-size: 12px;
			font-family: verdana;
		}

	input[type=Submit]
		{
			background-color:#F32D0D;
			padding: 8px 15px;
			border-radius: 2px;
			/* border-bottom: 3px solid #F32D0D; */
			color:#FFF;
			font-weight: 600px;
			border: 0;
			border-bottom: 3px solid #F32D0D;
			text-transform: uppercase;
			font-weight: 600;
			font-family: arial;
			margin: 5px 0 0 0
		}

	.user{
		background-color: #F32D0D;
			border-radius: 50%;
			width: 100Px;
			height: 100px;
			position: absolute;
			top: -60px;
			left: 0;
			right: 0;
			margin: auto;
			border: 1px solid #9e9e9e;
		}
 
 span.text{
 margin-top: 25px;
    display: block;}
</style>
</head>
<body bgcolor="#222428">
 
<div class="su">
<div class="header"><div class="user"><img src="login23.png" width=90 alt=""></div><span class="text">SignUp</span></div>

	<center>
		<form method="post" action="#" class="div">
				
				<tr>
					<td><input type="text" name="firstname" placeholder=" Firstname"/></td>
				</tr>
				<tr>
					<td><input type="text" name="lastname" placeholder="Lastname"/></td>
				</tr>
				<tr>
					<td><input type="text" name="Email" placeholder="Email"/></td>
				</tr>
				<tr>
					<td><input type="Password" name="Password1" placeholder=" Password"/></td>
				</tr>
				<input type="Submit" name="Submit"/><br>
				<a href="login1.php">login</a>
			
		</form>
	</center>	
</div>
 
 
</body>
</html>

