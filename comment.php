<?php
 session_start();

 $run='';
 $row='';
$conn=mysqli_connect("localhost","root","","parakram");
$query='select * from comment';
$run=mysqli_query($conn,$query); 
?>
<!doctype html>
<html lang="en">
    <head><title>comment</title></head>
    <meta http-equiv="refresh" content="15">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background-color:black;
background-image:
radial-gradient(white, rgba(255,255,255,.2) 2px, transparent 40px),
radial-gradient(white, rgba(255,255,255,.15) 1px, transparent 30px),
radial-gradient(white, rgba(255,255,255,.1) 2px, transparent 40px),
radial-gradient(rgba(255,255,255,.4), rgba(255,255,255,.1) 2px, transparent 30px);
background-size: 550px 550px, 350px 350px, 250px 250px, 150px 150px; 
background-position: 0 0, 40px 60px, 130px 270px, 70px 100px;
        }
    .o{
        background-color: grey;}
        .m{
            background-color:maroon; 
        }
    </style>
    <body>
        
       <nav class="navbar navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">parakram</a>
    </div>
    <ul class="nav navbar-nav pull-right">
      <li><a href="index.html">home</a></li>
      <li><a href="login.php">login</a></li> 
      <li><a href="signup.php">signup</a></li> 
    </ul>
  </div>
</nav>
        <div class="container" style="background-color:">
        <table>
            <?php
             while($row = $run->fetch_assoc()) {
                 if(isset($_SESSION['email']) && $row['email']==$_SESSION['email']){
                 echo " <tr class='m'><td>".$row['name']."</td></tr><tr><td class='em_m m'>".$row['college']."</td></tr><tr><td style='padding-left:16px;' class='message_m m'>".$row['message']."</td></tr><tr><td style='padding-left:16px;' class='message_m m'>".$row['dat']."</td></tr>";
                 
             }else{
                     echo " <tr class='o'><td>".$row['name']."</td></tr><tr><td class='em_o o'>".$row['college']."</td></tr><tr><td style='padding-left:16px;' class='message_o o'>".$row['message']."</td></tr><tr><td style='padding-left:16px;' class='message_o o'>".$row['dat']."</td></tr>";
                 
                 }
                                                                       
             }
            ?>
            
        </table>
            <!--form action="" method ="post">
                <textarea name="message" rows="10" cols="30">
                   add your comment..........
                </textarea>
                    
                <input type="submit" name="comment" value="add comment"!-->
            
        </div>
    </body>
</html>