<?php
session_start();
//if(!isset($_SESSION['cryptia_event']))
//	header('Location:http://www.ietparakram.in/cryptia/index.php');
$conn=mysqli_connect("localhost","vishalpolley","Raghs@polley9","parakram");
$error1="";
$error2="";
$error3="";
$error4="";
$error5="";
$ans1=$ans2=$ans3=$ans4=$ans5="";
if(isset($_POST['submit1']))	{
	$ans1=$_POST['ans1'];
	if($ans1=="")
		$error1="Empty answer not submitted!!";
	else{
		$user_email=$_SESSION['email'];
		$stmt=$conn->prepare("update cryptia set one =? where email =?");
		$stmt->bind_param('ss', $ans1, $user_email);
		$reg=$stmt->execute();
		if($reg){
		$error1="your answer submitted sucessfully";
		}
	}
}
	
else if(isset($_POST['submit2']))	{
	$ans2=$_POST['ans2'];
	if($ans2=="")
		$error2="Empty answer not submitted!!";
	else{
		$user_email=$_SESSION['email'];
		$stmt=$conn->prepare("update cryptia set two =? where email =?");
		$stmt->bind_param('ss', $ans2, $user_email);
		$reg=$stmt->execute();
		if($reg){
		$error2="your answer submitted sucessfully";
		}
	}
}
if(isset($_POST['submit3']))	{
	$ans=$_POST['ans3'];
	if($ans3=="")
		$error3="Empty answer not submitted!!";
	else{
		$user_email=$_SESSION['email'];
		$stmt=$conn->prepare("update cryptia set three =? where email =?");
		$stmt->bind_param('ss', $ans3, $user_email);
		$reg=$stmt->execute();
		if($reg){
		$error3="your answer submitted sucessfully";
		}
	}
}
if(isset($_POST['submit4']))	{
	$ans=$_POST['ans4'];
	if($ans4=="")
		$error4="Empty answer not submitted!!";
	else{
		$user_email=$_SESSION['email'];
		$stmt=$conn->prepare("update cryptia set four =? where email =?");
		$stmt->bind_param('ss', $ans4, $user_email);
		$reg=$stmt->execute();
		if($reg){
		$error4="your answer submitted sucessfully";
		}
	}
}
if(isset($_POST['submit5']))	{
	$ans5=$_POST['ans5'];
	if($ans5=="")
		$error5="Empty answer not submitted!!";
	else{
		$user_email=$_SESSION['email'];
		$stmt=$conn->prepare("update cryptia set five =? where email =?");
		$stmt->bind_param('ss', $ans5, $user_email);
		$reg=$stmt->execute();
		if($reg){
		$error5="your answer submitted sucessfully";
		}
	}
}
?>
<html>
<head>      <title>Cryptia</title>
            <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico" />
	    <!-- Material Design -->
	    <link rel="stylesheet" href="../css/material.css">
	    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	        <!-- Bootstrap Core CSS -->
            <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<meta http-equiv="refresh" content="900">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
form span{
	color:red;}
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
    input[type=file] {
    margin: 0 auto;
}
</style>
</head>
<body style="background: #ffea00">
<div class="container">
&nbsp;&nbsp;<a style="text-decoration: none;float: right;margin-top: 30px;font-family: instruction;" href="http://www.ietparakram.in" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" >home</a>&nbsp;
        &nbsp;&nbsp;<a style="text-decoration: none;float: right;margin-top: 30px;font-family: instruction;" href="http://www.ietparakram.in/logout.php" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" >Logout</a>
	<h2 style="font-family: instruction;"><img style="width: 100px;" src="cryptia.png">&nbsp;&nbsp;hello <?php echo $_SESSION['name'];?><br/></h2>
	<br/>
	<!--Question 1-->
	<h2 style="font-family: instruction;text-align: center;">Question 1</h2>
	<br/>
	<br/>
	<h3 style="font-family: instruction;text-align: center;">the answer is the name of a person</h3>
	<br/>
	<div style="text-align:center">
	<form action="" method="post">
		
		<span style="font-family: instruction;font-size: 1.2em;">YOUR ANSWER&nbsp;</span>&nbsp;<input type="text" name="ans1">
		<span style="font-family: instruction;"><?php echo $error1; ?></span>
		<input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" type="submit1" name="submit">
	</form>
	</div>
	<div class="container">
		<div class="col-md-6">
			<img style="width: 500px;" src="img/1.1.jpg">
		</div>
		<div class="col-md-6">
			<img style="width: 500px;" src="img/1.2.jpg">
		</div>
	</div>
	
	<!--Question 2-->
	
	<h2 style="font-family: instruction;text-align: center;">Question 2</h2>
	<br/>
	<br/>
	<h3 style="font-family: instruction;text-align: center;">the answer is the name of a team</h3>
	<br/>
	<div style="text-align:center">
	<form action="" method="post">
		
		<span style="font-family: instruction;font-size: 1.2em;">YOUR ANSWER&nbsp;</span>&nbsp;<input type="text" name="ans2">
		<span style="font-family: instruction;"><?php echo $error2; ?></span>
		<input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" type="submit" name="submit2">
	</form>
	</div>
	<div class="container">
		<div class="col-md-6">
			<img style="width: 500px;" src="img/2.1.jpg">
		</div>
		<div class="col-md-6">
			<img style="width: 500px;" src="img/2.2.jpg">
		</div>
	</div>
	
	<!--Question 3-->
	
	<h2 style="font-family: instruction;text-align: center;">Question 3</h2>
	<br/>
	<br/>
	<h3 style="font-family: instruction;text-align: center;">the answer is the name of a person</h3>
	<br/>
	<div style="text-align:center">
	<form action="" method="post">
		
		<span style="font-family: instruction;font-size: 1.2em;">YOUR ANSWER&nbsp;</span>&nbsp;<input type="text" name="ans3">
		<span style="font-family: instruction;"><?php echo $error3; ?></span>
		<input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" type="submit" name="submit3">
	</form>
	</div>
	<div class="container">
		<div class="col-md-12">
			<img style="width: 500px;" src="img/3.jpg">
		</div>
	</div>
	
	<!--Question 4-->
	
	<h2 style="font-family: instruction;text-align: center;">Question 4</h2>
	<br/>
	<br/>
	<h3 style="font-family: instruction;text-align: center;">the answer is the name of a character</h3>
	<br/>
	<div style="text-align:center">
	<form action="" method="post">
		
		<span style="font-family: instruction;font-size: 1.2em;">YOUR ANSWER&nbsp;</span>&nbsp;<input type="text" name="ans4">
		<span style="font-family: instruction;"><?php echo $error4; ?></span>
		<input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" type="submit" name="submit4">
	</form>
	</div>
	<div class="container">
		<div class="col-md-6">
			<img style="width: 500px;" src="img/1.1.jpg">
		</div>
		<div class="col-md-6">
			<img style="width: 500px;" src="img/1.2.jpg">
		</div>
	</div>
	
	<!--Question 5-->
	
	<h2 style="font-family: instruction;text-align: center;">Question 5</h2>
	<br/>
	<br/>
	<h3 style="font-family: instruction;text-align: center;">the answer is not the name of a person or a film</h3>
	<br/>
	<div style="text-align:center">
	<form action="" method="post">
		
		<span style="font-family: instruction;font-size: 1.2em;">YOUR ANSWER&nbsp;</span>&nbsp;<input type="text" name="ans5">
		<span style="font-family: instruction;"><?php echo $error5; ?></span>
		<input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" type="submit" name="submit5">
	</form>
	</div>
	<div class="container">
		<div class="col-md-6">
			<img style="width: 500px;" src="img/1.1.jpg">
		</div>
		<div class="col-md-6">
			<img style="width: 500px;" src="img/1.2.jpg">
		</div>
	</div>
</body>
    <!-- Material Script -->
    <script src="../js/material.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../lib/bootstrap/js/bootstrap.min.js"></script>

</html>