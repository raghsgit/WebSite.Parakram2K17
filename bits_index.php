<?php
session_start();
$user_email="";
$query='';
$user_name="";
$conn=mysqli_connect("localhost","vishalpolley","Raghs@polley9","parakram");
if(isset($_SESSION['bits_event'])){
	header('location:event.php');
}else{
if(isset($_SESSION['email'])){
	$user_email=$_SESSION['email'];
	
	$query="select * from bits where email= '$user_email'";
	$run=mysqli_query($conn,$query);
	if(mysqli_num_rows($run)>0) {
	$_SESSION['bits_event']=1;
	header('location:event.php');
	}
    }

if(isset($_POST['go']) || isset($_SESSION['bits'])){
	unset($_SESSION[bits]);
	if(!isset($_SESSION['email'])){
	header(	'location:http://www.ietparakram.in/login.php');
	$_SESSION['bits']='2';
	}else{
	$user_email=$_SESSION['email'];
	$user_name=$_SESSION['name'];
	$stmt=$conn->prepare("insert into bits (email,name) values(?,?)");
	$stmt->bind_param("ss",$user_email,$user_name);
	$reg=$stmt->execute();
	if($reg){
	
	header('location:event.php');
	$_SESSION['bits_event']=1;
	
	}
	}
	
}}
?>
<html>
<head>
	<title>Signup Bits & Divs</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico" />
	    <!-- Material Design -->
	    <link rel="stylesheet" href="../css/material.css">
	    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
	max-width:100%;
	overflow:hidden;
    background-image: url('../img/web.jpg');
    background-repeat: repeat;
}
    @font-face {
        font-family: 'space';
        src: url('../fonts/Spac3tech.ttf');
    }
    @font-face {
        font-family: 'teio';
        src: url('../fonts/Teiosolo.ttf');
    }
    @font-face {
        font-family: 'instruction';
        src: url('../fonts/Instruction.otf');}
   form{
   	text-align:center;}
   	
   	.button{
   			background-color:#0d323b;
   			color:white;
   			font-size:18px;
   			padding:10px 20px;
   			text-decoration:none;
   			
   	}
   	.button:hover{cursor:pointer;}
   	
   	nav{
   	 width:90%;
   	 padding:10px 50px;
   	}
   	form input{
   		
   		padding:9px 25px;
   		font-size:18px;
   		color:white;
   		background-color:#FF4081;
   		border:0;}
   		
   	form input:hover{
   		cursor:pointer;
   		}
   	
   	.container{   	width:90%;
		   	
   			
   			margin-top:240px;
   			text-align:center;
   			padding:auto;
   	}
   	form input:hover{
   	color:#FF4081;
   	background-color:white;
   	}
</style>
</head>
<body style="font-family:instruction;">
<div style="width:90%;margin:auto;">
	
		<a href="http://www.ietparakram.in" class="button" style="float:left;margin-top:-190px;">HOME</a>
		<a href="http://www.ietparakram.in/comment.php#footer" class="button" style="float:right;margin-top:-190px;">COMMENT</a>
	
	<div class="container" style="text-align:center;margin:auto;margin-top:200px">
		<div><p style="color:white;font-family: instruction;font-size: 1.5em"><strong>Sign Up for Bits & Divs<br/><br/><small style="color:white;font-family: instruction;font-size: 0.4em;">A great start for your journey in the field of web development</small></strong><br/><small style="color:white;font-family: instruction;font-size: 0.4em;">The event will be live at 6 pm.</small></p></div>
		<form action="" method="post">	
 			<input  type="submit" name="go" value="Sign Up">
		</form>
	</div>
</div>
</body>
    
</html>