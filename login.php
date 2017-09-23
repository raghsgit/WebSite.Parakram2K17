<?php
session_start();
$x='';
 echo $x;
if(isset($_GET['v']))
 $x=$_GET['v'];
if(isset($_SESSION['email'])){
	if($_SESSION['email']=="admin@ietparakram.in"){
		header("Location:admin.php");}
		
      		else{
      			header("Location:welcome.php");
      }
      }
      
$conn=mysqli_connect("localhost","root","","parakram");
$error=$user_email=$user_pass='';
if(isset($_POST['login'])){
        if($_SERVER['REQUEST_METHOD'] === 'POST')
    {  
    $user_email=$_POST['email'];  
    $user_pass=$_POST['pwd'];  
    if( $user_email=="" or $user_pass==""){
          $error="please enter credentials to login";
    }else{
    $check_user="select * from registration WHERE email='$user_email' AND password='$user_pass'";  
    $run=mysqli_query($conn,$check_user);  
    if(mysqli_num_rows($run))  
    {   if($user_email=="admin@ietparakram.in"){
    		$_SESSION['email']=$user_email;
    		
    		header("Location:admin.php");}
    		else{
               
    		
            if($x=="1"){
		header("Location:admin.php");}
		
      		else if($x=="0"){
      			header("Location:welcome.php");
      }
       		 
         $row= $run->fetch_assoc();
         $_SESSION['email']=$user_email;
         $_SESSION['name']=$row['name'];
         $_SESSION['number']=$row['number'];
         //mysql_close($conn);
         if(isset($_POST['remember']))
           {
            setcookie("asdfg",$user_email,time()+60*60*7);
            setcookie("asdfp",$user_pass,time()+60*60*7); 
        }
        }}
      
    else  
    {  
        $error="Email or password is incorrect!";    
    }
    
    }
    }
   }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Parakram Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">
      
    <!-- Bootstrap Core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->
    
    <!-- Modal CSS -->
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
     
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-red.min.css">
    <style>
    @media only screen and (max-width: 500px){
    h4 {
    	font-size:14px;
    	color:navy}
    }
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
        .demo-ribbon {
      width: 100%;
      height: 40vh;
     background-image: -webkit-repeating-linear-gradient(135deg, rgba(0,0,0,.3), rgba(0,0,0,.3) 1px, transparent 2px, transparent 2px, rgba(0,0,0,.3) 3px);
  background-image: -moz-repeating-linear-gradient(135deg, rgba(0,0,0,.3), rgba(0,0,0,.3) 1px, transparent 2px, transparent 2px, rgba(0,0,0,.3) 3px);
  background-image: -o-repeating-linear-gradient(135deg, rgba(0,0,0,.3), rgba(0,0,0,.3) 1px, transparent 2px, transparent 2px, rgba(0,0,0,.3) 3px);
  background-image: repeating-linear-gradient(135deg, rgba(0,0,0,.3), rgba(0,0,0,.3) 1px, transparent 2px, transparent 2px, rgba(0,0,0,.3) 3px);
  -webkit-background-size: 4px 4px;
  -moz-background-size: 4px 4px;
  background-size: 4px 4px;
      -webkit-flex-shrink: 0;
          -ms-flex-negative: 0;
              flex-shrink: 0;
    }

    .demo-main {
      margin-top: -35vh;
      -webkit-flex-shrink: 0;
          -ms-flex-negative: 0;
              flex-shrink: 0;
    }

    .demo-header .mdl-layout__header-row {
      padding-left: 40px;
    }

    .demo-container {
      max-width: 1600px;
      width: calc(100% - 16px);
      margin: 0 auto;
    }

    .demo-content {
      border-radius: 2px;
      padding: 80px 56px;
      margin-bottom: 80px;
    }

    .demo-layout.is-small-screen .demo-content {
      padding: 40px 28px;
    }

    .demo-content h3 {
      margin-top: 48px;
    }

    .demo-footer {
      padding-left: 40px;
    }

    .demo-footer .mdl-mini-footer--link-list a {
      font-size: 13px;
    }
    @font-face {
    font-family: 'gtek';
        src: url('../fonts/GtekTechnology.ttf');
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
        src: url('../fonts/Instruction.otf');
    }
    </style>
  </head>
  <body>
    <div class="demo-layout mdl-layout mdl-layout--fixed-header mdl-js-layout mdl-color--grey-100">
      <header class="demo-header mdl-layout__header mdl-layout__header--scroll mdl-color--grey-100 mdl-color-text--grey-800">
        <div class="mdl-layout__header-row">
            <a href="http://www.ietparakram.in" style=" text-decoration: none;"><span class="mdl-layout-title" style="font-family: gtek; color: black;">parakram</span></a>
          <div class="mdl-layout-spacer"></div>
          <a style="text-decoration: none;" href="http://www.ietparakram.in" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" >Home</a>
            <button onclick="location.href = 'signup.php';" style="text-decoration: none; margin-left:15px;font-family: instruction;" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Sign Up</button>
        </div>
      </header>
       
      <div class="demo-ribbon"></div>
      <main class="demo-main mdl-layout__content" style="background-color: #fff; 
background-image: -webkit-repeating-linear-gradient(135deg, rgba(0,0,0,.3), rgba(0,0,0,.3) 1px, transparent 2px, transparent 2px, rgba(0,0,0,.3) 3px);
  background-image: -moz-repeating-linear-gradient(135deg, rgba(0,0,0,.3), rgba(0,0,0,.3) 1px, transparent 2px, transparent 2px, rgba(0,0,0,.3) 3px);
  background-image: -o-repeating-linear-gradient(135deg, rgba(0,0,0,.3), rgba(0,0,0,.3) 1px, transparent 2px, transparent 2px, rgba(0,0,0,.3) 3px);
  background-image: repeating-linear-gradient(135deg, rgba(0,0,0,.3), rgba(0,0,0,.3) 1px, transparent 2px, transparent 2px, rgba(0,0,0,.3) 3px);
  -webkit-background-size: 4px 4px;
  -moz-background-size: 4px 4px;
  background-size: 4px 4px; !important">
        <div class="demo-container mdl-grid">
          <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
          <div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col" style="background-color: #fff; 
background-image: 
linear-gradient(90deg, transparent 79px, #abced4 79px, #abced4 82px, transparent 81px),
linear-gradient(#eee .1em, transparent .1em);
background-size: 100% 2em;">
            <h4 style="letter-spacing:2px;font-family: gtek; text-align: center;">parakram&nbsp;&nbsp;&nbsp;login</h4>
              <hr>
            <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" name="loginform" role="form" method="post">
            <div class="responsive">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="email" id="email" name="email">
                <label class="mdl-textfield__label" style="font-family: instruction;" for="email">Email</label>
              </div>
                <br/>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="password" id="pwd" name="pwd" >
                <label class="mdl-textfield__label" style="font-family: instruction;" for="pwd">Password</label>
              </div>
                
               <div class="checkbox">
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" style="font-family: instruction;"><input type="checkbox" class="mdl-checkbox__input" value="yes" name="remember" >Remember&nbsp;Me</label>
               </div>
                
              
                <div style="padding-top: 20px ;text-align: center;">
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="login" >
                      Login
                    </button>
                    </div>
                    <div class="col-md-3"></div>
                </div>
              </div>
              </form>
                <div style="text-align:center;padding:10px;clear:both;margin-top:10px"><span style="color:red" id="er"> <?php echo $error ;?> </span></div>
 </div>
            
        </div>
         <footer class="demo-footer mdl-mini-footer">
          <div class="mdl-mini-footer--left-section">
            <ul class="mdl-mini-footer--link-list">
              <li><a href="files/PARAKRAM-DETAILS.pdf" target="_blank" style="font-family: instruction;">Rule Book</a></li>
              <li><a href="http://www.ietparakram.in#events" style="font-family: instruction;">Events</a></li>
              <li><a href="https://www.google.co.in/maps/place/Institute+of+Engineering+and+Technology(IET)/@26.9145915,80.9397647,17z/data=!3m1!4b1!4m5!3m4!1s0x3999564d2761d695:0xffaa6ccef8c6ddae!8m2!3d26.9145915!4d80.9419534" target="_blank" style="font-family: instruction;">Reach Us</a></li>
            </ul>
          </div>
        </footer>
      </main>
    </div>
    <a style="text-decoration:none; font-family: instruction;" href="http://www.ietparakram.in" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">Home</a>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
      
    <!-- Bootstrap Core JavaScript -->
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
      
    <!-- Modal js-->
    <script src="js/jquery.min.js"></script>
    <script src="js/animatedModal.min.js"></script>
    <script>

            //demo 00
            $("#demo00").animatedModal({
                color:'#3498db',
            });

     </script>
  </body>
</html>
  <?php
    if(isset($_COOKIE['asdfg']) and isset($_COOKIE['asdfp'])){
     $email=$_COOKIE['asdfg'];
     $pass=$_COOKIE['asdfp'];
     echo "<script>document.getElementById('email').value = '$email';document.getElementById('pwd').value = '$pass';</script>";
    }
?>