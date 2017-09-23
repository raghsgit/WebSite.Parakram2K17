<?php
session_start();
if(!isset($_SESSION['email']))
      header("Location:login.php");
$conn=mysqli_connect("localhost","root","","parakram");
 $user_email=$_SESSION['email'];
    $user_number=$_SESSION['number'];
    $user_name=$_SESSION['name'];

//computer science
$ciphertech=$techquiz=$cryptia=$googler=$langaming=$codeasm=$bitsanddivs=$ietdialogue=0;
#mechanical
$spotlightquiz=$foodadulteration=$patentpresentation=$frugal=$industrialdesignproblem=0;
#civil  engineering  events
$underwaterproject=$bridgebuildinganddesigning=$macrocosm=$picturesque=$finalyearslot=0;
#electrical  engineering  events
$spark=$electriation=$stoptowin=$innovationandyou=0;
#cosmos
$astroquiz=$fakeresearch=$minethesky=0;
#electronics  engineering  events
$circuitrix=$quizomania=$techpaperpresentation=$kontrivence=$kickobot=$soicourier=0;
#mechanical  engineering  events
$mechavquiz=$automobilequiz=$meevent=0;
#mba
$ecellsummit=0;
#miscellaneous
$workshop=0;
$message='Please Register For the Events!!';
$abl=1;
$cost=0;
 $events='';
$check_email_query="select * from event WHERE email='$user_email'";  
    $run_query=mysqli_query($conn,$check_email_query);  
    if(mysqli_num_rows($run_query)>0)  
    { 
        $result=$run_query->fetch_assoc();
       
        $message= $result['status'];
        $cost=$result['cost'];
        $abl=0;
    }
   if(isset($_POST['view'])){
    $query="select * from event where email='$user_email'";
   
    $run_query=mysqli_query($conn,$query);
        if(mysqli_num_rows($run_query)<1){
          
            $events="<table ><tr><td>Currently You are not registered for any events.</td></tr></table>";
        }else{
            $res=$run_query->fetch_assoc();
            $events="<table ><tr ><th style='text-align:center;padding:10px'>Events</th></tr>";
            if($res['ciphertech']==1)
                 $events=$events."<tr><td>Cipher Tech</td></tr>";
            if($res['techquiz']==1)
                 $events=$events."<tr><td>Techquiz</td></tr>";
            if($res['cryptia']==1)
                $events=$events."<tr><td>Cryptia</td></tr>";
            if($res['googler']==1)
                $events=$events."<tr><td>Googler </td></tr>";
            if($res['langaming']==1)
                $events=$events."<tr><td>Langaming </td></tr>";
            if($res['codeasm']==1)
                $events=$events."<tr><td>Codeasm </td></tr>";
            if($res['bitsanddivs']==1)
                $events=$events."<tr><td> Bits & Divs</td></tr>";
            if($res['ietdialogue']==1)
                $events=$events."<tr><td>IET Dialogue </td></tr>";
            if($res['spotlightquiz']==1)
                $events=$events."<tr><td>SpotLight quiz </td></tr>";
            if($res['foodadulteration']==1)
                $events=$events."<tr><td> Food adulteration</td></tr>";
            if($res['patentpresentation']==1)
                $events=$events."<tr><td>Patent Presentation </td></tr>";
            if($res['frugal']==1)
                $events=$events."<tr><td>Frugal </td></tr>";
            if($res['industrialdesignproblem']==1)
                $events=$events."<tr><td>Industrial design Problem </td></tr>";
#civil  engineering  events
            if($res['underwaterproject']==1)
                $events=$events."<tr><td> Underwater Project</td></tr>";
            if($res['bridgebuildinganddesigning']==1)
                    $events=$events."<tr><td> Bridgebuilding and Designing</td></tr>";
            if($res['macrocosm']==1)
                $events=$events."<tr><td> Macrocosm</td></tr>";
            if($res['picturesque']==1)
                $events=$events."<tr><td> Picturesque</td></tr>";
            if($res['finalyearslot']==1)
                $events=$events."<tr><td> Final Year Slot</td></tr>";
#electrical  engineering  events
            if($res['spark']==1)
                $events=$events."<tr><td> Spark </td></tr>";
            if($res['electriation']==1)
                $events=$events."<tr><td>Electriation </td></tr>";
            if($res['stoptowin']==1)
                $events=$events."<tr><td>Stop to Win </td></tr>";
            if($res['innovationandyou']==1)
                $events=$events."<tr><td> Innovation and You</td></tr>";
#cosmos
            if($res['astroquiz']==1)
                $events=$events."<tr><td> Astroquiz</td></tr>";
            if($res['fakeresearch']==1)
                $events=$events."<tr><td>Fake Research Paper </td></tr>";
            if($res['minethesky']==1)
                $events=$events."<tr><td> Mine the Sky</td></tr>";
#electronics  engineering  events

if($res['circuitrix']==1)
    $events=$events."<tr><td> Circuitrix</td></tr>";
if($res['quizomania']==1)
    $events=$events."<tr><td>Quizomania </td></tr>";
if($res['techpaperpresentation']==1)
    $events=$events."<tr><td> Tech Paper Presentation</td></tr>";
if($res['kontrivence']==1)
    $events=$events."<tr><td> Kon Trivence</td></tr>";
if($res['kickobot']==1)
    $events=$events."<tr><td> Kick-o-bot</td></tr>";
if($res['soicourier']==1)
    $events=$events."<tr><td> soi-courier</td></tr>";
#mechanical  engineering  events
if($res['mechavquiz']==1)
    $events=$events."<tr><td> Mechavquiz</td></tr>";
if($res['automobilequiz']==1)
    $events=$events."<tr><td>Automobile Quiz</td></tr>";
if($res['meevent']==1)
    $events=$events."<tr><td> ME Event</td></tr>";
#mba
if($res['ecellsummit']==1)
    $events=$events."<tr><td> e-cell Summit</td></tr>";
if($res['workshop']==1)
    $events=$events."<tr><td> Kon Workshop</td></tr>";
$events=$events."</table>";
            
        }
}

if(isset($_POST['register'])){
if($_SERVER['REQUEST_METHOD'] === 'POST'){
   
    
      
    if($abl==0)  
    { 
        echo "<script>alert('You are already registred for the events!!');</script>"; 
        $message="Registration not done!! As You are already registered for the events";
        //header("Location:welcome.php");
        //exit();  
    }  else{
    if(isset($_POST['c1']))
       {$ciphertecch=1; $cost += (int)$_POST['c1'];}
    if(isset($_POST['c2']))
       {$techquiz=1; $cost += (int)$_POST['c2'];}
    if(isset($_POST['c3']))
      {$cryptia=1; $cost += (int)$_POST['c3'];}
    if(isset($_POST['c4']))
       {$googler=1; $cost += (int)$_POST['c4'];}
    if(isset($_POST['c5']))
       {$langaming=1; $cost += (int)$_POST['c5'];}
    if(isset($_POST['c6']))
       {$codeasm=1; $cost += (int)$_POST['c6'];}
    if(isset($_POST['c7']))
       {$bitsanddivs=1; $cost += (int)$_POST['c7'];}
    if(isset($_POST['c8']))
       {$ietdialogue=1; $cost += (int)$_POST['c8'];}
    if(isset($_POST['c9']))
       {$spotlightquiz=1; $cost += (int)$_POST['c9'];}
    if(isset($_POST['c10']))
       {$foodadulteration=1; $cost += (int)$_POST['c10'];}
    if(isset($_POST['c11']))
       {$patentpresentation=1; $cost += (int)$_POST['c11'];}
    if(isset($_POST['c12']))
       {$frugal=1; $cost += (int)$_POST['c12'];}
    if(isset($_POST['c13']))
       {$industrialdesignproblem=1; $cost += (int)$_POST['c13'];}
    if(isset($_POST['c14']))
       {$underwaterproject=1; $cost += (int)$_POST['c14'];}
    if(isset($_POST['c15']))
       {$bridgebuildinganddesigning=1; $cost += (int)$_POST['c15'];}
    if(isset($_POST['c16']))
       {$macrocosm=1; $cost += (int)$_POST['c16'];}
    if(isset($_POST['c17']))
       {$picturesque=1; $cost += (int)$_POST['c17'];}
    if(isset($_POST['c18']))
      {$finalyearslot=1; $cost += (int)$_POST['c18'];}
    if(isset($_POST['c19']))
       {$spark=1; $cost += (int)$_POST['c19'];}
    if(isset($_POST['c20']))
       {$electriation=1; $cost += (int)$_POST['c20'];}
    if(isset($_POST['c21']))
       {$stoptowin=1; $cost += (int)$_POST['c21'];}
    if(isset($_POST['c22']))
      {$innovationandyou =1; $cost += (int)$_POST['c22'];}
    if(isset($_POST['c23']))
       {$astroquiz=1; $cost += (int)$_POST['c23'];}
    if(isset($_POST['c24']))
       {$fakeresearch=1; $cost += (int)$_POST['c24'];}
    if(isset($_POST['c25']))
       {$minethesky=1; $cost += (int)$_POST['c25'];}
    if(isset($_POST['c26']))
      {$circuitrix=1; $cost += (int)$_POST['c26'];}
    if(isset($_POST['c27']))
       {$quizomania=1; $cost += (int)$_POST['c27'];}
    if(isset($_POST['c28']))
       {$techpaperpresentation=1; $cost += (int)$_POST['c28'];}
    if(isset($_POST['c29']))
       {$kontrivence=1; $cost += (int)$_POST['c29'];}
    if(isset($_POST['c39']))
       {$kickobot=1; $cost += (int)$_POST['c39'];}
    if(isset($_POST['c30']))
       {$soicourier=1; $cost += (int)$_POST['c30'];}
    if(isset($_POST['c31']))
       {$mechavquiz=1; $cost += (int)$_POST['c31'];}
    if(isset($_POST['c32']))
       {$automobilequiz=1; $cost += (int)$_POST['c32'];}
    if(isset($_POST['c33']))
       {$meevent=1; $cost += (int)$_POST['c33'];}
    if(isset($_POST['c34']))
       {$ecellsummit=1; $cost += (int)$_POST['c34'];}
     if(isset($_POST['c35']))
       {$workshop=1; $cost += (int)$_POST['c35'];}
        
    $stmt=$conn->prepare("insert into event (email,name,number,cost,ciphertech,techquiz,cryptia,googler,langaming,codeasm,bitsanddivs,ietdialogue,spotlightquiz,foodadulteration,patentpresentation,frugal,industrialdesignproblem,underwaterproject,bridgebuildinganddesigning,macrocosm,picturesque,finalyearslot,spark,electriation,stoptowin,innovationandyou,astroquiz,fakeresearch,minethesky,circuitrix,quizomania,techpaperpresentation,kontrivence,kickobot,soicourier,mechavquiz,automobilequiz,meevent,ecellsummit,workshop) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii",$user_email,$user_name,$user_number,$cost,$ciphertech,$techquiz,$cryptia,$googler,$langaming,$codeasm,$bitsanddivs,$ietdialogue,$spotlightquiz,$foodadulteration,$patentpresentation,$frugal,$industrialdesignproblem,$underwaterproject,$bridgebuildinganddesigning,$macrocosm,$picturesque,$finalyearslot,$spark,$electriation,$stoptowin,$innovationandyou,$astroquiz,$fakeresearch,$minethesky,$circuitrix,$quizomania,$techpaperpresentation,$kontrivence,$kickobot,$soicourier,$mechavquiz,$automobilequiz,$meevent,$ecellsummit,$workshop);
    $reg=$stmt->execute();
    if($reg)  
    {  
       echo "<script type='text/javascript'>alert('You have registred for the events for any query contact us');</script>";
       $message='You Have been registered sucessfully !!';
       
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
    <title>Parakram Registration</title>
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
     #view{
            position: fixed;
            top:100px;
            right:2px;
        }
      table{
            width:500px;
            margin:auto;
            text-align:left;
            padding-left:10px;
            font-size:17px;
            font-family:sans-serif;
        }
         tr {
            width:100%}
        .content tr td{ width:100% !important;}
       .content td{padding: 12px!important;}
        .content tr:nth-child(even) {background: #CCC}
.content tr:nth-child(odd) {background: #efbfbf}
     @media only screen and (max-width: 500px){
             h4{
             font-size:14px;
             color:navy;
		}
 	     table{
  	      width:260px !important;
  	     }
             #b{
             font-size:12px !important;
             }
        }
        .demo-ribbon {
      width: 100%;
      height: 40vh;
      background-color: #fff;  
      background-image: -webkit-repeating-linear-gradient(135deg, rgba(0,0,0,.3), rgba(0,0,0,.3) 1px, transparent 2px, transparent 2px, rgba(0,0,0,.3) 3px);
  background-image: -moz-repeating-linear-gradient(135deg, rgba(0,0,0,.3), rgba(0,0,0,.3) 1px, transparent 2px, transparent 2px, rgba(0,0,0,.3) 3px);
  background-image: -o-repeating-linear-gradient(135deg, rgba(0,0,0,.3), rgba(0,0,0,.3) 1px, transparent 2px, transparent 2px, rgba(0,0,0,.3) 3px);
  background-image: repeating-linear-gradient(135deg, rgba(0,0,0,.3), rgba(0,0,0,.3) 1px, transparent 2px, transparent 2px, rgba(0,0,0,.3) 3px);
  -webkit-background-size: 4px 4px;
  -moz-background-size: 4px 4px;
  background-size: 4px 4px;
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
        .mdl-checkbox__label {
            font-family: instruction;
        }
    </style>
  <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/5CD8DD6C-C0F2-F447-BB23-FCEA2F5B2176/main.js" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="http://gc.kis.v2.scr.kaspersky-labs.com/6712B5F2AECF-32BB-744F-2F0C-C6DD8DC5/abn/main.css"/></head>
  <body>
    <div class="demo-layout mdl-layout mdl-layout--fixed-header mdl-js-layout mdl-color--grey-100">
      <header class="demo-header mdl-layout__header mdl-layout__header--scroll mdl-color--grey-100 mdl-color-text--grey-800">
        <div class="mdl-layout__header-row">
            <a href="index.html" style=" text-decoration: none;"><span class="mdl-layout-title" style="font-family: gtek; color: black;">parakram</span></a>
          <div class="mdl-layout-spacer"></div>
          <a style="text-decoration: none;" href="index.html" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" >Home</a>
          <a style="text-decoration: none;margin-left:15px !important" href="logout.php" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" >logout</a>
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
linear-gradient(90deg, transparent 79px, #abced4 79px, #abced4 81px, transparent 81px),
linear-gradient(#eee .1em, transparent .1em);
background-size: 100% 1.2em;">
            <h4 style="font-family: gtek; text-align: center;" id="b">parakram&nbsp;&nbsp;registration&nbsp;&nbsp;form<br/>
            <span style="text-align:center;color:green;font-family:instruction"><?php echo $message."<br/> Total Cost - &#8377; " .$cost; ?></span><br/>
            <span style="text-align:center;color:#ff6666;font-family:instruction;font-size:0.6em;">For Team events only one team member is required to register and pay for that event.</span></h4>
             <div class=""><?php echo $events ; ?></div>
              <hr>
              <style>
                  .tip{
                     background:none;
                    display: inline;
                    border:none;
                    box-shadow: none;
                    position:absolute;
                    margin-top: 5px;
                  }
              </style>
            <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="eventForm" role="form" method="post" id="eventForm">
            <div class="responsive">
                <div class="row">
                <h4 style="font-family: instruction; text-align: center;">Computer&nbsp;&nbsp;Science&nbsp;&nbsp;Events</h4>
               <div class="col-md-1"></div>
            <div class="col-md-5">
            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-11">
              <input type="checkbox" id="checkbox-11" value="0" class="mdl-checkbox__input" name="c1">
              <span class="mdl-checkbox__label">ciphertech&nbsp;&nbsp;</span>
                <div class="tip" id="ques"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques" style="font-size: 0.8em;">
                        Team size - 2. Registration amount - Free 
		    </div>
            </label>
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-12">
              <input type="checkbox" id="checkbox-12" value="25" class="mdl-checkbox__input" name="c2">
              <span class="mdl-checkbox__label">tech quiz&nbsp;&nbsp;</span>
                    <div class="tip" id="ques1"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques1" style="font-size: 0.8em;">
			Team size - 2. Registration amount - 25/- Per Team
		    </div>
            </label>
            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-13">
              <input type="checkbox" id="checkbox-13" value="0" class="mdl-checkbox__input" name="c3">
              <span class="mdl-checkbox__label">cryptia&nbsp;&nbsp;</span>
                <div class="tip" id="ques2"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques2" style="font-size: 0.8em;">
			Team size - 2. Registration amount - Free
		    </div>
            </label>
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-14">
              <input type="checkbox" id="checkbox-14" value="20" class="mdl-checkbox__input" name="c4">
              <span class="mdl-checkbox__label">googler&nbsp;&nbsp;</span>
                    <div class="tip" id="ques3"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques3" style="font-size: 0.8em;">
			Team size - 2. Registration amount - 20/- Per Team
		    </div>
            </label>
                </div>
            <div class="col-md-6">
            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-15">
              <input type="checkbox" id="checkbox-15" value="100" class="mdl-checkbox__input" name="c5">
              <span class="mdl-checkbox__label">lan gaming&nbsp;&nbsp;</span>
                <div class="tip" id="ques4"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques4" style="font-size: 0.8em;">
			Registration amount - For CS 1.6 - 500/- Per Team and For Fifa 15 and NFS - 100/- Per Person
		    </div>
            </label>
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-16">
              <input type="checkbox" id="checkbox-16" value="0" class="mdl-checkbox__input" name="c6">
              <span class="mdl-checkbox__label">codeasm&nbsp;&nbsp;</span>
                    <div class="tip" id="ques5"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques5" style="font-size: 0.8em;">
			Team size - Individual. Registration amount - Free
		    </div>
            </label>
            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-17">
              <input type="checkbox" id="checkbox-17" value="0" class="mdl-checkbox__input" name="c7">
              <span class="mdl-checkbox__label">bits &amp; divs&nbsp;&nbsp;</span>
                <div class="tip" id="ques6"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques6" style="font-size: 0.8em;">
			Team size - Individual. Registration amount - Free
		    </div>
            </label>
            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-18">
              <input type="checkbox" id="checkbox-18" value="0" class="mdl-checkbox__input" name="c8">
              <span class="mdl-checkbox__label">iet dialogue&nbsp;&nbsp;</span>
                <div class="tip" id="ques7"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques7" style="font-size: 0.8em;">
			Team size - Individual. Registration amount - Free
		    </div>
            </label>
                </div>
                </div>
                <br/>
                <div class="row">
                <h4 style="font-family: instruction; text-align: center;">chemical&nbsp;&nbsp;engineering&nbsp;&nbsp;events</h4>
                <div class="col-md-1"></div>
            <div class="col-md-5">
            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-21">
              <input type="checkbox" id="checkbox-21" value="20" class="mdl-checkbox__input" name="c9">
              <span class="mdl-checkbox__label">spotlight quiz&nbsp;&nbsp;</span>
                <div class="tip" id="ques8"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques8" style="font-size: 0.8em;">
			Team size - 2. Registration amount - 20/- Per Team
		    </div>
            </label>
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-22">
              <input type="checkbox" id="checkbox-22" value="10" class="mdl-checkbox__input" name="c10">
              <span class="mdl-checkbox__label">food adulteration&nbsp;&nbsp;</span>
                    <div class="tip" id="ques9"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques9" style="font-size: 0.8em;">
			Team size - 5(Max). Registration amount - 10/- Per Person
		    </div>
            </label>
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-23">
              <input type="checkbox" id="checkbox-23" value="0" class="mdl-checkbox__input" name="c11">
              <span class="mdl-checkbox__label">patent presentation&nbsp;&nbsp;</span>
                    <div class="tip" id="ques10"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques10" style="font-size: 0.8em;">
			Team size - 5. Registration amount - Free
		    </div>
            </label>
                </div>
            <div class="col-md-6">
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-24">
              <input type="checkbox" id="checkbox-24" value="10" class="mdl-checkbox__input" name="c12">
              <span class="mdl-checkbox__label">frugal&nbsp;&nbsp;</span>
                    <div class="tip" id="ques11"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques11" style="font-size: 0.8em;">
			Team size - 5(Max). Registration amount - 10/- Per Person
		    </div>
            </label>
            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-25">
              <input type="checkbox" id="checkbox-25" value="10" class="mdl-checkbox__input" name="c13">
              <span class="mdl-checkbox__label">industrial design problem&nbsp;&nbsp;</span>
                <div class="tip" id="ques12"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques12" style="font-size: 0.8em;">
			Team size - 5(Max). Registration amount - 10/- Per Person
		    </div>
            </label>
                </div>
                </div>
                <br/>
                <div class="row">
                <h4 style="font-family: instruction; text-align: center;">civil&nbsp;&nbsp;engineering&nbsp;&nbsp;events</h4>
                <div class="col-md-1"></div>
            <div class="col-md-5">
            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-31">
              <input type="checkbox" id="checkbox-31" value="50" class="mdl-checkbox__input" name="c14">
              <span class="mdl-checkbox__label">underwater project&nbsp;&nbsp;</span>
                <div class="tip" id="ques13"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques13" style="font-size: 0.8em;">
			Team size - 5(Max). Registration amount - 50/- Per Team
		    </div>
            </label>
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-32">
              <input type="checkbox" id="checkbox-32" value="80" class="mdl-checkbox__input" name="c15">
              <span class="mdl-checkbox__label">bridgebuilding&designing&nbsp;&nbsp;</span>
                    <div class="tip" id="ques14"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques14" style="font-size: 0.8em;">
			Team size - 5(Max). Registration amount - 80/- Per Team
		    </div>
            </label>
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-33">
              <input type="checkbox" id="checkbox-33" value="20" class="mdl-checkbox__input" name="c16">
              <span class="mdl-checkbox__label">macrocosm&nbsp;&nbsp;</span>
                    <div class="tip" id="ques15"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques15" style="font-size: 0.8em;">
			Team size - 2. Registration amount - 20/- Per Team
		    </div>
            </label>
                </div>
            <div class="col-md-6">
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-34">
              <input type="checkbox" id="checkbox-34" value="0" class="mdl-checkbox__input" name="c17">
              <span class="mdl-checkbox__label">picturesque&nbsp;&nbsp;</span>
                    <div class="tip" id="ques16"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques16" style="font-size: 0.8em;">
			Team size - Individual. Registration amount - Free
		    </div>
            </label>
            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-35">
              <input type="checkbox" id="checkbox-35" value="0" class="mdl-checkbox__input" name="c18">
              <span class="mdl-checkbox__label">final year slot&nbsp;&nbsp;</span>
                <div class="tip" id="ques17"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques17" style="font-size: 0.8em;">
			Team size - Individual. Registration amount - Free
		    </div>
            </label>
                </div>
                </div>
                <div class="row">
                <h4 style="font-family: instruction; text-align: center;">electrical&nbsp;&nbsp;engineering&nbsp;&nbsp;events</h4>
                <div class="col-md-1"></div>
            <div class="col-md-5">
            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-41">
              <input type="checkbox" id="checkbox-41" value="10" class="mdl-checkbox__input" name="c19">
              <span class="mdl-checkbox__label">spark&nbsp;&nbsp;</span>
                <div class="tip" id="ques18"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques18" style="font-size: 0.8em;">
			Team size - Individual. Registration amount - 10/- Per Person
		    </div>
            </label>
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-42">
              <input type="checkbox" id="checkbox-42" value="30" class="mdl-checkbox__input" name="c20">
              <span class="mdl-checkbox__label">electriation&nbsp;&nbsp;</span>
                    <div class="tip" id="ques19"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques19" style="font-size: 0.8em;">
			Team size - 3. Registration amount - 30/- Per Team
		    </div>
            </label>
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-43">
              <input type="checkbox" id="checkbox-43" value="20" class="mdl-checkbox__input" name="c21">
              <span class="mdl-checkbox__label">stop to win&nbsp;&nbsp;</span>
                    <div class="tip" id="ques20"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques20" style="font-size: 0.8em;">
			Team size - 2. Registration amount - 20/- Per Team
		    </div>
            </label>
                </div>
            <div class="col-md-6">
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-44">
              <input type="checkbox" id="checkbox-44" value="80" class="mdl-checkbox__input" name="c22">
              <span class="mdl-checkbox__label">innovation and you&nbsp;&nbsp;</span>
                    <div class="tip" id="ques21"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques21" style="font-size: 0.8em;">
			Team size - 4. Registration amount - 80/- Per Team
		    </div>
            </label>
                </div>
                </div>
                <div class="row">
                <h4 style="font-family: instruction; text-align: center;">cosmos</h4>
                <div class="col-md-1"></div>
            <div class="col-md-5">
            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-51">
              <input type="checkbox" id="checkbox-51" value="20" class="mdl-checkbox__input" name="c23">
              <span class="mdl-checkbox__label">astro quiz&nbsp;&nbsp;</span>
                 <div class="tip" id="ques22"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques22" style="font-size: 0.8em;">
			Team size - Individual. Registration amount - 20/- Per Person
		    </div>
            </label>
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-52">
              <input type="checkbox" id="checkbox-52" value="20" class="mdl-checkbox__input" name="c24">
              <span class="mdl-checkbox__label">fake research&nbsp;&nbsp;</span>
                     <div class="tip" id="ques23"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques23" style="font-size: 0.8em;">
			Team size - 2. Registration amount - 20/- Per Person
		    </div>
            </label>
                </div>
            <div class="col-md-6">
            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-53">
              <input type="checkbox" id="checkbox-53" value="20" class="mdl-checkbox__input" name="c25">
              <span class="mdl-checkbox__label">mine the sky&nbsp;&nbsp;</span>
                 <div class="tip" id="ques24"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques24" style="font-size: 0.8em;">
			Team size - 4. Registration amount - 20/- Per Person
		    </div>
            </label>
                </div>
                </div>
                <div class="row">
                <h4 style="font-family: instruction; text-align: center;">electronics&nbsp;&nbsp;engineering&nbsp;&nbsp;events</h4>
                <div class="col-md-1"></div>
            <div class="col-md-5">
            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-61">
              <input type="checkbox" id="checkbox-61" value="20" class="mdl-checkbox__input" name="c26">
              <span class="mdl-checkbox__label">circuitrix&nbsp;&nbsp;</span>
                 <div class="tip" id="ques25"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques25" style="font-size: 0.8em;">
			Team size - Individual. Registration amount - 20/- Per Person
		    </div>
            </label>
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-62">
              <input type="checkbox" id="checkbox-62" value="20" class="mdl-checkbox__input" name="c27">
              <span class="mdl-checkbox__label">quiz o mania&nbsp;&nbsp;</span>
                     <div class="tip" id="ques26"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques26" style="font-size: 0.8em;">
			Team size - Individual. Registration amount - 20/- Per Person
		    </div>
            </label>
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-63">
              <input type="checkbox" id="checkbox-63" value="0" class="mdl-checkbox__input" name="c28">
              <span class="mdl-checkbox__label">tech paper presentation&nbsp;&nbsp;</span>
                     <div class="tip" id="ques27"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques27" style="font-size: 0.8em;">
			Team size - 4. Registration amount - Free
		    </div>
            </label>
                </div>
            <div class="col-md-6">
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-64">
              <input type="checkbox" id="checkbox-64" value="500" class="mdl-checkbox__input" name="c29">
              <span class="mdl-checkbox__label">kon trivence&nbsp;&nbsp;</span>
                     <div class="tip" id="ques28"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques28" style="font-size: 0.8em;">
			Team size - 5 (Max). Combined Registration amount for all the events - 500/- Per Team 
		    </div>
            </label>
            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-65">
              <input type="checkbox" id="checkbox-65" value="500" class="mdl-checkbox__input" name="c39">
              <span class="mdl-checkbox__label">kick-o-bot&nbsp;&nbsp;</span>
                 <div class="tip" id="ques29"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques29" style="font-size: 0.8em;">
			Team size - 5 (Max). Combined Registration amount for all the events - 500/- Per Team
		    </div>
            </label>
            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-66">
              <input type="checkbox" id="checkbox-66" value="500" class="mdl-checkbox__input" name="c30">
              <span class="mdl-checkbox__label">soi-courier&nbsp;&nbsp;</span>
                 <div class="tip" id="ques30"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques30" style="font-size: 0.8em;">
			Team size - 5 (Max). Combined Registration amount for all the events - 500/- Per Team
		    </div>
            </label>
                </div>
                </div>
            <div class="row">
                <h4 style="font-family: instruction; text-align: center;">mechanical&nbsp;&nbsp;engineering&nbsp;&nbsp;events</h4>
                <div class="col-md-1"></div>
            <div class="col-md-5">
            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-71">
              <input type="checkbox" id="checkbox-71" value="20" class="mdl-checkbox__input" name="c31">
              <span class="mdl-checkbox__label">mech av quiz&nbsp;&nbsp;</span>
                <div class="tip" id="ques31"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques31" style="font-size: 0.8em;">
			Team size - 2. Registration amount - 20/- Per Team
		    </div>
            </label>
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-72">
              <input type="checkbox" id="checkbox-72" value="10" class="mdl-checkbox__input" name="c32">
              <span class="mdl-checkbox__label">automobile quiz&nbsp;&nbsp;</span>
                    <div class="tip" id="ques32"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques32" style="font-size: 0.8em;">
			Team size - Individual. Registration amount - 10/- Per Person
		    </div>
            </label>
                </div>
            <div class="col-md-6">
            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-73">
              <input type="checkbox" id="checkbox-73" value="50" class="mdl-checkbox__input" name="c33">
              <span class="mdl-checkbox__label">me event&nbsp;&nbsp;</span>
                <div class="tip" id="ques33"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques33" style="font-size: 0.8em;">
			Team size - 5 (Max). Registration amount - 50/- Per Team
		    </div>
            </label>
                </div>
                </div>
            <div class="row">
                <h4 style="font-family: instruction; text-align: center;">mba</h4>
                <div class="col-md-1"></div>
            <div class="col-md-5">
            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-81">
              <input type="checkbox" id="checkbox-81" value="0" class="mdl-checkbox__input" name="c34">
              <span class="mdl-checkbox__label">e-cell summit&nbsp;&nbsp;</span>
                <div class="tip" id="ques34"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques34" style="font-size: 0.8em;">
			Team size - Individual. Registration amount - Free
		    </div>
            </label>
                </div>
                </div>
                <div class="row">
                <h4 style="font-family: instruction; text-align: center;">miscellaneous</h4>
                <div class="col-md-1"></div>
            <div class="col-md-5">
            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-91">
              <input type="checkbox" id="checkbox-91" value="0" class="mdl-checkbox__input" name="c35">
              <span class="mdl-checkbox__label">workshop&nbsp;&nbsp;</span>
                <div class="tip" id="ques35"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="ques35" style="font-size: 0.8em;">
			Details will be Updated Soon.
		    </div>
            </label>
                </div>
                </div>
                <div style="padding-top: 20px ;text-align: center;">
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="register">
                      Submit
                    </button>
                     <button   style="text-decoration: none;" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast" id="view" name="view">Registered Events</button>
                </div>
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
    
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
      
    <!-- Bootstrap Core JavaScript -->
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>
