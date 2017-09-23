<?php
    session_start();
if(isset($_SESSION['name']))
    $name=$_SESSION['name'];
else
    header('location:login.php');
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
    
    <!-- Modal CSS -->
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
     
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-red.min.css">
    <style>
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
      background-color: #3F51B5;
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
          <a style="text-decoration: none;" href="index.html" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" >Home</a>
            <button style="text-decoration: none; margin-left:15px;" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" id="demo00" href="#animatedModal" >Sign Up</button>
            <button style="text-decoration: none; margin-left:15px;" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" id="demo00" onclick="location.href='logout.php'" >Log out &nbsp;<?php echo $name;?></button>
        </div>
      </header>
        <!--DEMO00-->
        <div id="animatedModal">
            <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
            <div id="btn-close-modal" class="close-animatedModal" style=" text-align: center;"><i class="fa fa-times-circle-o" aria-hidden="true" style="font-size: 50px;"></i>
            </div>
                
            <div class="modal-content" style="background-image: -moz-linear-gradient(#81a8cb, #cde6f9); /* Firefox */
background-image: -webkit-linear-gradient(#81a8cb, #cde6f9); /* Webkit */">
                <!--Your modal content goes here-->
                <h2 style="font-family: gtek; text-align: center; padding-top: 30px;">sign&nbsp;&nbsp;up</h2>
                <form action="register.php" name="registerForm" role="form" method="post" onsubmit="return validateRegisterForm()" id="registerForm" style="text-align: center;">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="name" pattern="[a-zA-Z_ ]{3,30}" name="name">
                    
                    <label class="mdl-textfield__label" for="name" style="font-family: teio; letter-spacing: 2px;" >Name...</label>
                  </div>
                    <br/>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="college" pattern=".{3,30}" name="college">
                    <label class="mdl-textfield__label" for="college" style="font-family: teio; letter-spacing: 2px;">College...</label>
                  </div>
                    <br/>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
                    <input class="mdl-textfield__input" type="text" pattern="\d{10}" id="phone" name="phone">
                    <label class="mdl-textfield__label" for="contact" style="font-family: teio; letter-spacing: 2px;">Contact...</label>
                    <span class="mdl-textfield__error">Input is not a number!</span>
                  </div>
                    <br/>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="email" id="email" name="email">
                    <label class="mdl-textfield__label" for="email" style="font-family: teio; letter-spacing: 2px;">Email...</label>
                    <span class="mdl-textfield__error">Input is not a Email!</span>
                  </div>
                    <br/>
                 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="password" id="pwd" pattern=".{6,30}" name="pwd" style="display:inline">
                    <button title="show password" id="eye" type="button" onclick="if(pwd.type=='password') pwd.type='text';else pwd.type='password';"><i class="fa fa-eye"></i></button>
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
                    <span class="mdl-checkbox__label" style="font-family: instruction; margin-left: 10px;">Subscribe for Regular Updates!!</span>
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1" style="text-align: center; margin-top: -40px; margin-left: 480px;">
                      <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input" checked value="yes" name="check">
                    </label>
                    <br/>
                    <br/>
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" style="margin-bottom: 20px ; text-align: center;">
                      Submit
                    </button>
                    <script>
                   function validateRegisterForm() {
                        var m = document.forms["registerForm"]["name"].value;
                        var n = document.forms["registerForm"]["college"].value;
                        var o = document.forms["registerForm"]["phone"].value;
                        var p = document.forms["registerForm"]["email"].value;
                        var q = document.forms["registerForm"]["password"].value;
                        var r = document.forms["registerForm"]["subscribe"].value;
                        if (m == "" || n == "" || o == "" || p == "" || q == "" || r == "") {
                            alert("Please fill out all fields !!");
                            return false;
                        }
                    }
                </script>
                </form>
                </div>
            </div>
      <div class="demo-ribbon"></div>
      <main class="demo-main mdl-layout__content">
        <div class="demo-container mdl-grid">
          <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
          <div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
            <h3 style="font-family: gtek; text-align: center;">parakram&nbsp;&nbsp;&nbsp;&nbsp;registration&nbsp;&nbsp;&nbsp;&nbsp;form</h3>
              <hr>
            <form action="events.php" name="eventForm" role="form" method="post" id="eventForm">
            <div class="responsive">
                <h4 style="font-family: gtek; text-align: center;">computer&nbsp;&nbsp;&nbsp;&nbsp;science&nbsp;&nbsp;&nbsp;&nbsp;events</h4>
            <div class="col-md-6">
            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
              <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input">
              <span class="mdl-checkbox__label">Checkbox</span>
            </label>
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-3">
              <input type="checkbox" id="checkbox-3" class="mdl-checkbox__input">
              <span class="mdl-checkbox__label">Checkbox</span>
            </label>
            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-4">
              <input type="checkbox" id="checkbox-4" class="mdl-checkbox__input">
              <span class="mdl-checkbox__label">Checkbox</span>
            </label>
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-5">
              <input type="checkbox" id="checkbox-5" class="mdl-checkbox__input">
              <span class="mdl-checkbox__label">Checkbox</span>
            </label>
                </div>
            <div class="col-md-6">
            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-6">
              <input type="checkbox" id="checkbox-6" class="mdl-checkbox__input">
              <span class="mdl-checkbox__label">Checkbox</span>
            </label>
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-7">
              <input type="checkbox" id="checkbox-7" class="mdl-checkbox__input">
              <span class="mdl-checkbox__label">Checkbox</span>
            </label>
            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-8">
              <input type="checkbox" id="checkbox-8" class="mdl-checkbox__input">
              <span class="mdl-checkbox__label">Checkbox</span>
            </label>
            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-9">
              <input type="checkbox" id="checkbox-9" class="mdl-checkbox__input">
              <span class="mdl-checkbox__label">Checkbox</span>
            </label>
                </div>
                <div style="padding-top: 20px ;text-align: center;">
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" >
                      Submit
                    </button>
                </div>
              </div>
              </form>
          </div>
        </div>
        <footer class="demo-footer mdl-mini-footer">
          <div class="mdl-mini-footer--left-section">
            <ul class="mdl-mini-footer--link-list">
              <li><a href="#">Rule Book</a></li>
              <li><a href="#">Events</a></li>
              <li><a href="#">Find Us</a></li>
            </ul>
          </div>
        </footer>
      </main>
    </div>
    <a href="index.html" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">Home</a>
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
