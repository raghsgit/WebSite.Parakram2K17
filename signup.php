<?php
$conn=mysqli_connect("localhost","root","","parakram");
$unamer=$upassr=$uemailr=$ucolleger=$unumberr="";
 $user_name=$user_pass=$user_email=$user_college=$user_number= $user_check="";
$erc=0;
if(isset($_POST['submit']))
{  
if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $user_name=$_POST['name'];//here getting result from the post array after submitting the form.  
    $user_pass=$_POST['pwd'];//same  
    $user_email=$_POST['email'];//same  
    $user_college=$_POST['college'];
    $user_number=$_POST['phone'];
    $user_check="no";
    if(isset($_POST['check']))
        $user_check="yes";
   // echo "hello";
    if($user_name=='')  
    {  
        //javascript use for input checking  
         //header("Location:register.html");
       // echo"<script>alert('Please enter the name in requested format')</script>";  
        $erc +=1;
       $unamer="Please enter the name ";
      
       //this use if first is not work then other will not show  
    }  
  if(strlen($user_college)<3)  
    {  
        //javascript use for input checking  
         //header("Location:register.html");
       // echo"<script>alert('Please enter the name in requested format')</script>";  
        $erc +=1;
       $ucolleger="college name can not remain empty  ";
      
       //this use if first is not work then other will not show  
    }  
    if(strlen($user_number)<3)  
    {  
        //javascript use for input checking  
         //header("Location:register.html");
       // echo"<script>alert('Please enter the name in requested format')</script>";  
        $erc +=1;
       $unumberr="please enter  10 digit contact number ";
      
       //this use if first is not work then other will not show  
    }  
    if($user_pass=='')  
    {  
       //  header("Location:register.html");
        //echo"<script>alert('Please enter the password atleast 5 character long')</script>";  
          $erc +=1;
        $upassr="Please enter the password atleast 5 character long";
        //exit();  
    }  
    if (empty($user_email)) {
   
        // header("Location:register.html");
         // echo"<script>alert('email field can not remain empty')</script>";
         $erc +=1;
        $uemailr="email field can not remain empty";
        
     //exit();
    } else {
    $user_email = trim($user_email);
    // check if e-mail address is well-formed
    if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
      //echo"<script>alert('Please enter a valid email')</script>";
         $erc +=1;
        $uemailr="Please enter a valid email";
        // header("Location:register.html");
      //exit();
      }
    }
    //here query check weather if user already registered so can't register again.  
    $check_email_query="select * from registration WHERE email='$user_email'";  
    $run_query=mysqli_query($conn,$check_email_query);  
    if(mysqli_num_rows($run_query)>0)  
    {  $erc +=1;
        echo "<script>alert('Email $user_email is already registered. now go to login panel!!')</script>"; 
        $uemailr= $user_email." already exist in our database, Please try another one";
       //  header("Location:signup.php");
        //exit();  
    }  
    //insert the user into the database.  
   
   



       if($erc==0){
        $stmt=$conn->prepare("insert into registration (email,password,college,subscribe,number,name) VALUES (?,?,?,?,?,?)");
    $stmt->bind_param("ssssss",$user_email,$user_pass,$user_college,$user_check,$user_number,$user_name);
    $reg=$stmt->execute();
    if($reg)  
    {  
        
        header("Location:index.html");
       #echo "<script type="text/javascript">location.href = 'index.html'</script>";
    } 
    else{
        echo "<script>alert('some internal problem contact to administrator @ 9519759921')</script>";
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
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Material Design Lite</title>

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
     
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-red.min.css">
    <style>
        .error{
            color:red;
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
      background-color: #fff; 
background-image: 
linear-gradient(90deg, transparent 79px, #abced4 79px, #abced4 81px, transparent 81px),
linear-gradient(#eee .1em, transparent .1em);
background-size: 100% 1.2em;
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
            <a href="index.html" style=" text-decoration: none;"><span class="mdl-layout-title" style="font-family: gtek; color: black;">parakram</span></a>
          <div class="mdl-layout-spacer"></div>
          <a style="text-decoration: none;font-family: instruction;" href="index.html" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" >Home</a>
            <button onclick="location.href = 'login.html';" style="text-decoration: none; margin-left:15px;font-family: instruction;" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Login</button>
        </div>
      </header>
      <div class="demo-ribbon"></div>
      <main class="demo-main mdl-layout__content" style="background-color: #fff; 
background-image: 
linear-gradient(90deg, transparent 79px, #abced4 79px, #abced4 81px, transparent 81px),
linear-gradient(#eee .1em, transparent .1em);
background-size: 100% 1.2em !important">
        <div class="demo-container mdl-grid" >
          <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
          <div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
            <h4 style="font-family: gtek; text-align: center;">parakram&nbsp;&nbsp;&nbsp;&nbsp;signup</h4>
              <hr>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="registerForm" role="form" method="post" id="registerForm">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="name" pattern="[a-zA-Z_ ]{3,30}" name="name" value="<?php echo $user_name;?>" >
                      <span class="error"><?php echo $unamer; ?></span>
                    
                    <label class="mdl-textfield__label" for="name" style="font-family: teio; letter-spacing: 2px;" >Name...</label>
                  </div>
                    <br/>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="college" pattern=".{3,30}" name="college" value="<?php echo $user_college;?>" >
                        <span class="error"><?php echo $ucolleger; ?></span>
                    <label class="mdl-textfield__label" for="college" style="font-family: teio; letter-spacing: 2px;">College...</label>
                  </div>
                    <br/>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
                    <input class="mdl-textfield__input" type="text" pattern="\d{10}" id="phone" name="phone" value="<?php echo $user_number;?>" >
                        <span class="error"><?php echo $unumberr;?></span>
                    <label class="mdl-textfield__label" for="contact" style="font-family: teio; letter-spacing: 2px;">Contact...</label>
                    <span class="mdl-textfield__error">Input is not a number!</span>
                  </div>
                    <br/>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="email" id="email" name="email" value="<?php echo $user_email;?>" >
                        <span class="error" ><?php echo $uemailr; ?></span>
                    <label class="mdl-textfield__label" for="email" style="font-family: teio; letter-spacing: 2px;">Email...</label>
                    <span class="mdl-textfield__error">Input is not a Email!</span>
                  </div>
                    <br/>
                 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="password" id="pwd" pattern=".{6,30}" name="pwd" style="display:inline">
                     <span class="error"><?php echo $upassr; ?></span>
                    <button title="show password" id="eye"type="button" onclick="if(pwd.type=='password') pwd.type='text';else pwd.type='password';"><i class="fa fa-eye"></i></button>
                    <style>
                        #eye{
                            background:none;
                            display: inline;
                            border:none;
                            box-shadow: none;
                            position:absolute;
                            top:20px;
                            left:280px;

                        }
                    </style>

                    <label class="mdl-textfield__label" for="pwd" style="font-family: teio; letter-spacing: 2px;">Password...</label>

                    <span class="mdl-textfield__error">must be atleast 6 character long!</span>
                  </div>
                  <br/>
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1" style="text-align: center; margin-top: 15px;">
                      <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input" checked value="yes" name="check">
                      <span class="mdl-checkbox__label" style="font-family: instruction">Subscribe for Regular Updates!!</span>
                    </label><br/>
                    <br/>
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" style="margin-bottom: 20px ;margin-left: 100px; margin-top: 30px;" name="submit" >
                      Submit
                    </button>
                </div>
             
        </form>
          </div>
        </div>
        <footer class="demo-footer mdl-mini-footer">
          <div class="mdl-mini-footer--left-section">
            <ul class="mdl-mini-footer--link-list">
              <li><a href="files/PARAKRAM-DETAILS.pdf" target="_blank" style="font-family: instruction;">Rule Book</a></li>
              <li><a href="index.html#events" style="font-family: instruction;">Events</a></li>
              <li><a href="https://www.google.co.in/maps/place/Institute+of+Engineering+and+Technology(IET)/@26.9145915,80.9397647,17z/data=!3m1!4b1!4m5!3m4!1s0x3999564d2761d695:0xffaa6ccef8c6ddae!8m2!3d26.9145915!4d80.9419534" target="_blank" style="font-family: instruction;">Reach Us</a></li>
            </ul>
          </div>
        </footer>
      </main>
    </div>
    <a style="text-decoration:none; font-family: instruction;" href="index.html" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">Home</a>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
      
    <!-- Bootstrap Core JavaScript -->
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>
 