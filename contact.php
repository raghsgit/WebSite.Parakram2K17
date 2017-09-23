<?php
// create short variable names
$name=$_POST['name'];
$college=$_POST['college'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$message=$_POST['message'];
if (!get_magic_quotes_gpc()) {
$name = addslashes($name);
$college = addslashes($college);
$contact= addslashes($contact);
$email = addslashes($email);
$message = addslashes($message);
}
@ $db = new mysqli('localhost', 'root', '', 'contact');
if (mysqli_connect_errno()) {
exit;
}
$query = "insert into contact values
('".$name."', '".$college."', '".$contact."', '".$email."' , '".$message."')";
$result = $db->query($query);
if ($result) {
echo "Your Registration was successful!!";
} else {
echo "An error has occurred. Registration Failed.";
}
$db->close();
if($result)
{
	header('Location: http://localhost/web/thanks.html');
	exit;
}

