<?php
 session_start();

 $run='';
 $row='';
$conn=mysqli_connect("localhost","root","","parakram");
$query='select * from comment';
$run=mysqli_query($conn,$query); 
?>
<!DOCTYPE html>
<html>
<head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<meta http-equiv="refresh" content="15">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
<meta name="robots" content="noindex">
 <title>JS Bin</title>

<style id="jsbin-css">
    .navbar{
        /*background-color:#1ebea5 !important;*/
        background-color:white;
        color:#48B !important;
       box-shadow: 0 2px 12px 2px #48b;
    }
    body{
        
background: linear-gradient(#ffffff 50%, rgba(255,255,255,0) 0) 0 0,
radial-gradient(circle closest-side, #FFFFFF 53%, rgba(255,255,255,0) 0) 0 0,
radial-gradient(circle closest-side, #FFFFFF 50%, rgba(255,255,255,0) 0) 55px 0 #48B;
background-size:110px 200px;
background-repeat:repeat-x;
    }
/* adjust body when menu is open */
    table{
        width:60%;
        margin-top:12px;
        margin-bottom: 20px;
        background-color: #fff; 
        
background-image: 
linear-gradient(90deg, transparent 54px, #f00 54px, #f00 57px, transparent 57px),
linear-gradient(#faa .1em, transparent .1em);
background-size: 100% 1.2em;
        border-radius: 12px;
    }
    .user{
        float:right;
    }
    .name{
        font-weight: bold;
        text-transform: capitalize;
        float:left;
        padding-left:60px !important;
    }
    .message,.dat{
        float:right;
        padding-right:20px;
    }
    .college{
        padding-top:5px;
        padding-left:60px;
        text-transform: capitalize;
    }
    .vis{display: none;}
    @media (max-width: 768px){
        table{
            width:80%;}
        .navbar-nav{
                display: none;
            }
        .vis{
            display: inline;
        }
        }
    .comment{
        padding:10px 15px;
        background-color:white;
        color:#48b;
        position: fixed;
        bottom:35px;
        right:2px;
        border:1px solid white;
    }
    .comment:hover{
        text-decoration: none;
        background-color:white;
        color:#48b;
        border:1px solid navy;
    
    }

</style>
</head>
<body>
  
  
 <div class="navbar navbar-fixed-top" role="navigation" id="slide-nav">
  <div class="container">
   <div class="navbar-header" style="color:#48b">
    <a class="navbar-toggle"> 
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar" style="color:#48b !important"></span>
      <span class="icon-bar" style="color:#48b"></span>
      <span class="icon-bar" style="color:#48b"></span>
     </a>
    <a class="navbar-brand" href="#">PARAKRAM</a>
    <a class="navbar-brand pull-right vis" href="index.html">HOME</a>
    
   </div>
   <div id="slidemenu">
     
    <ul class="nav navbar-nav pull-right">
     <li ><a href="index.html">Home</a></li>
     <li><a href="signup.php">Sign Up</a></li>
     <li><a href="login.php">Login</a></li>
     <li><a href="index.html#contact">Contact Us</a></li>
     
    </ul>
          
   </div>
  </div>
 </div><br/><br/>
  
  
  <!--wrap the page content do not style this-->
 <div id="page-content">
   
  <div class="container" >

     
            <?php
             while($row = $run->fetch_assoc()) {
                 if(isset($_SESSION['email']) && $row['email']==$_SESSION['email']){?>
                <table class="user">
                    <tr class='name'><td><?php echo $row['name']?></td></tr>
                    <tr><td class='college'><?php echo $row['college']?></td></tr>
                    <tr><td class='message'><?php echo $row['message']?></td></tr>
                    <tr><td  class='dat'><?php echo $row['dat']?></td></tr>";
                </table>
             <?php 
                }else{ ?>
                    <table class="other">
                     <tr class='name'><td><?php echo $row['name']?></td></tr>
                    <tr><td class='college'><?php echo $row['college']?></td></tr>
                    <tr><td class='message'><?php echo $row['message']?></td></tr>
                    <tr><td  class='dat'><?php echo $row['dat']?></td></tr>
                    </table>
            <?php
                    }
             }
            ?>
            
       

            
      
    
   </div>
    <a class="comment" href="add.php"><span >Comment Now</span></a>
    </div>
</body>
</html>