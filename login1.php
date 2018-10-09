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
		echo "<h1><center>connected successfully </center></h1>";
	if(isset($_POST['submit']))
	{
		$Email=$_POST['email'];
		$password=$_POST['password1'];
$sql = "SELECT * FROM proj1 where em='$Email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
                echo " <h1> <center>logged in successfully </center></h1>" ;
		header("location:index1.php");

    }
} else {
    echo " <h1><center>Please register first for logging </center></h1>";
}
	}
$conn->close();
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.login{
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
 
<div class="login">
	<div class="header"><div class="user"><img src="login23.png" width=90 alt=""></div><span class="text">login</span></div>
		<form method="POST" action="#">
			<input type="email" name="email"  placeholder="Email" />
			<input type="password" name="password1"  placeholder="password" />
			<input type="submit" name="submit"  value="login" />
		</form>
</div>
 
 
</body>
</html>


