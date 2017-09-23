<?php
session_start();
$user_email="";
$query='';
$conn=mysqli_connect("localhost","vishalpolley","Raghs@polley9","parakram");
if(isset($_SESSION['email'])){
	$user_email=$_SESSION['email'];
	$query="select * from cryptia where email= '$user_email'";
	$run=mysqli_query($conn,$query);
	if(mysqli_num_rows($run)>0) {
	header('location:event.php');
	}
    }

if(isset($_POST['go']) || isset($_SESSION['cryptia'])){
	unset($_SESSION[cryptia]);
	if(!isset($_SESSION['email'])){
	header(	'location:http://www.ietparakram.in/login.php');
	$_SESSION['cryptia']='2';
	}else{
	$user_email=$_SESSION['email'];
	$stmt=$conn->prepare("insert into cryptia email values(?)");
	$stmt->bind_param("s",$user_email);
	$reg=$stmt->execute();
	if($reg){
	header('location:event.php');
	
	}
	}
	
}
?>
<html>
<head>
	<title>signup cryptia</title>
</head>
<body>
	<form action="" method="post">
	<input type="submit" name="go" value="sign up for cryptia">
	</form>
</body>
</html>