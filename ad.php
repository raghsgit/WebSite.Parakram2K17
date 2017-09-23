<?php
$conn=mysqli_connect("localhost","root","","parakram");
    date_default_timezone_set('Asia/Kolkata');
    $message='';
    $user_name='';
    $user_email='';
    $dat = date('Y/m/d H:i:s');
    $user_college='';
 session_start();
if(!isset($_SESSION['name']))
    header("location:login.php?v=1");
else{
    if(isset($_POST['comment'])){
    $message=$_POST['message'];
    $user_name=$_SESSION['name'];
    $user_email=$_SESSION['email'];
    $query="select college from registration where email = '$user_email'";
    $result=mysqli_query($conn,$query);
    $row=$result->fetch_assoc();
    $user_college=$row['college'];
    $ins_query="insert into comment (name,email,dat,message,college) values (?,?,?,?,?)";
    $reg=$conn->prepare($ins_query);
    $reg->bind_param("sssss",$user_name,$user_email,$dat,$message,$user_college);
    $ereg=$reg->execute();
    if($ereg){
        header("location:comment.php");
    }    
    }
}
?>
<html>
    <head>
        <title>comment</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <meta http-equiv="refresh" content="15">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

 <title>JS Bin</title>
        <style>
            .sma{
                display:none;
            }
            @media(max-width:768px){
                .sma{
                    display:inline;
                    float:right;
                    padding-right:10px;
                }
                .nav{
                    display: none;
                   
                }
            }
        </style>
</head>
    <body>
        <nav class="navbar navbar">
            <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="index.html">parakram</a>
            <a class="navbar-brand sma" href="welcome.php"><?php echo $_SESSION['name'];?></a>
            </div>
            <ul class="nav navbar-nav pull-right">
                <li><a href="index.html">home</a></li>
                <li><a href="welcome.php"><?php echo $_SESSION['name'];?></a></li> 
                <li><a href="logout.php">Log Out</a></li> 
            </ul>
            </div>
</nav>
        <div class="container" style="text-align:center">
        <form method="post" action="">
            <div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" id="comment" name="message"></textarea>
</div>
            
            <input type="submit" value="add" name="comment">
        </form>
        </div>
    </body>
</html>