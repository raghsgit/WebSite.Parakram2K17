<?php
	$run='';
	$row='';
	$fevent='';
	$query='';
	$eve['ciphertech']="Ciphertech";
	$eve['techquiz']="Techquiz";
	$eve['cryptia']="Cryptia";
	$eve['googler']="Googler";
	$eve['langaming']="LanGaming";
	$eve['codeasm']="Codeasm";
	$eve['bitsanddivs']="Bits & Divs";
        $eve['ietdialogue']="IET Dialogue";
	$eve['spotlightquiz']="Spot Light Quiz";
	$eve['foodadulteration']="Food adultration";
	$eve['patentpresentation']="Patent Presentation";
	$eve['frugal']="frugal";
 	$eve['industrialdesignproblem']="Industrial Design Problem";
	$eve['underwaterproject']="Under Water Project";
	$eve['bridgebuildinganddesigning']="Bridge Building and Designing";
        $eve['macrocosm']="Macrocosm";
        $eve['picturesque']="Pictures Que";
	$eve['finalyearslot']="Final Year Slot";
	$eve['spark']="Spark";
	$eve['electriation']="Electriation";
	$eve['stoptowin']="Stop to win";
	$eve['innovationandyou']="Innovation and You ";
	$eve['astroquiz']="Astro Quiz";
	$eve['fakeresearch']="Fake Research";
	$eve['minethesky']="Mind The Sky";
	$eve['circuitrix']="Circuitrix";
	$eve['quizomania']="Quiz O Mania";
	$eve['techpaperpresentation']="Tech Paper Presentation";
	$eve['kontrivence']="Kon Trivencce";
	$eve['kickobot']="Kick-O-Bot";
	$eve['soicourier']="Soi Courier";
	$eve['mechavquiz']="Mech av quiz";
	$eve['automobilequiz']="Automobile Quiz";
	$eve['meevent']="Me event";
	$eve['ecellsummit']="E cell Summit";
	$eve['workshop']="workshop";

	$conn=mysqli_connect("localhost","vishalpolley","Raghs@polley9","parakram");
	session_start();
	if(!isset($_SESSION['email']) || (isset($_SESSION['email']) && $_SESSION['email']!="admin@ietparakram.in")){
		header("Location:http://www.ietparakram.in");}
	else{
      		if(isset($_POST['search'])){
		$fevent=$_POST['event'];
		
        $query="select event.name,event.number,registration.college from event inner join registration on event.email=registration.email where $fevent.codeasm=1";
		$run=mysqli_query($conn,$query); 
	} 
	
	


?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Parakram Admin</title>
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
          .mdl-select {
          position: relative;
          font-size: 16px;
          display: inline-block;
          box-sizing: border-box;
          width: 300px;
          max-width: 100%;
          margin: 0;
          padding: 20px 0;
        }

        .mdl-select__input {
          border: none;
          border-bottom: 1px solid rgba(0,0,0, 0.12);
          display: inline-block;
          font-size: 16px;
          margin: 0;
          padding: 4px 0;
          width: 100%;
          background: 16px;
          text-align: left;
          color: inherit;
        }

        .mdl-select.is-focused .mdl-select__input {	outline: none; }
        .mdl-select.is-invalid .mdl-select__input { 
          border-color: rgb(222, 50, 38);
            box-shadow: none;
          }

        .mdl-select.is-disabled .mdl-select__input {
          background-color: transparent;
          border-bottom: 1px dotted rgba(0,0,0, 0.12);
        }

        .mdl-select__label {
          bottom: 0;
          color: rgba(0,0,0, 0.26);
          font-size: 16px;
          left: 0;
          right: 0;
          pointer-events: none;
          position: absolute;
          top: 24px;
          width: 100%;
          overflow: hidden;
          white-space: nowrap;
          text-align: left; 
        }

        .mdl-select.is-dirty .mdl-select__label { visibility: hidden; }

        .mdl-select--floating-label .mdl-textfield__label {
          -webkit-transition-duration: 0.2s;
          transition-duration: 0.2s;
          -webkit-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
          transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        }

        .mdl-select--floating-label.is-focused .mdl-select__label,
        .mdl-select--floating-label.is-dirty .mdl-select__label {
          color: rgb(63,81,181);
          font-size: 12px;
          top: 4px;
          visibility: visible;
        }

        .mdl-select--floating-label.is-focused .mdl-select__expandable-holder .mdl-select__label,
        .mdl-select--floating-label.is-dirty .mdl-select__expandable-holder .mdl-select__label {
          top: -16px;
        }

        .mdl-select--floating-label.is-invalid .mdl-select__label {
          color: rgb(222, 50, 38);
          font-size: 12px;
        }

        .mdl-select__label:after {
          background-color: rgb(63,81,181);
          bottom: 20px;
          content: '';
          height: 2px;
          left: 45%;
          position: absolute;
          -webkit-transition-duration: 0.2s;
          transition-duration: 0.2s;
          -webkit-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
          transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
          visibility: hidden;
          width: 10px;
        }

        .mdl-select.is-focused .mdl-select__label:after {
          left: 0;
          visibility: visible;
          width: 100%; 
        }

        .mdl-select.is-invalid .mdl-select__label:after {
          background-color: rgb(222, 50, 38); 
        }

        .mdl-select__error {
          color: rgb(222, 50, 38);
          position: absolute;
          font-size: 12px;
          margin-top: 3px;
          visibility: hidden;
        }

        .mdl-select.is-invalid .mdl-select__error {
          visibility: visible;
        }

        .mdl-select__expandable-holder {
          display: inline-block;
          position: relative;
          margin-left: 32px;
          -webkit-transition-duration: 0.2s;
          transition-duration: 0.2s;
          -webkit-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
          transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
          display: inline-block;
          max-width: 0.1px; 
        }

        .mdl-select.is-focused .mdl-select__expandable-holder, .mdl-select.is-dirty .mdl-select__expandable-holder {
          max-width: 600px; 
        }

        .mdl-select__expandable-holder .mdl-select__label:after {
          bottom: 0;
        }
        #event * {
            font-family: instruction;
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
            <button onclick="location.href = 'logout.php';" style="text-decoration: none; margin-left:15px;font-family: instruction;" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Log Out</button>
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
            <h4 style="letter-spacing:2px;font-family: gtek; text-align: center;">parakram&nbsp;&nbsp;&nbsp;admin</h4>
              <hr>
            <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" name="loginform" role="form" method="post">
            <div class="responsive">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                <div class="mdl-select mdl-js-select mdl-select--floating-label">
                <select class="mdl-select__input" id="event" name="event" style="font-family: instruction;">
                  <option value="" disabled selected hidden></option>
                  <option value="ciphertech">Ciphertech</option>
                  <option value="techquiz">Techquiz</option>
                  <option value="cryptia">Cryptia</option>
                  <option value="googler">Googler</option>
                  <option value="langaming">Lan Gaming</option>
                  <option value="codeasm">Codeasm</option>
                  <option value="bitsanddivs">Bits &amp; Divs</option>
                  <option value="ietdialogue">IET Dialogue</option>
                  <option value="spotlightquiz">SpotLight Quiz</option>
                  <option value="foodadulteration">Food Adulteration</option>
                  <option value="patentpresentation">Patent Presentation</option>
                  <option value="frugal">Frugal</option>
                  <option value="industrialdesignproblem">Industrial Design Problem</option>
                  <option value="underwaterproject">UnderWater Project</option>
                  <option value="bridgebuildinganddesigning">Bridge Building and Designing</option>
                  <option value="macrocosm">Macrocosm</option>
                  <option value="picturesque">Picturesque</option>
                  <option value="finalyearslot">Final Year Slot</option>
                  <option value="spark">Spark</option>
                  <option value="electriation">Electriation</option>
                  <option value="stoptowin">Stop to Win</option>
                  <option value="innovationandyou">Innovation and You</option>
                  <option value="astroquiz">AstroQuiz</option>
                  <option value="fakeresearch">Fake Research</option>
                  <option value="minethesky">Mine the Sky</option>
                  <option value="circuitrix">Circuitrix</option>
                  <option value="quizomania">Quiz O Mania</option>
                  <option value="techpaperpresentation">Tech Paper Presentation</option>
                  <option value="kontrivence">Kon Trivence</option>
                  <option value="kickobot">Kick O Bot</option>
                  <option value="soicourier">Soi Courier</option>
                  <option value="mechavquiz">Mech AV Quiz</option>
                  <option value="automobilequiz">Automobile Quiz</option>
                  <option value="meevent">ME Event</option>
                  <option value="ecellsummit">E-Cell Summit</option>
                  <option value="workshop">Workshop</option>
                    
                </select>
                <label class="mdl-select__label" for="professsion" style="font-family: instruction">Event</label>
              </div>
                
              
                <div style="padding-top: 20px ;text-align: center;">
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="search" >
                      Search
                    </button>
                    </div>
                    <div class="col-md-3"></div>
                </div>
              </div>
              </form>
                
 </div>
            
        </div>
        
                <style>
                    table {
                        border-collapse: collapse;
                        width: 100%;
                    }

                    th, td {
                        text-align: left;
                        padding: 8px;
                    }

                    tr:nth-child(even){background-color: #f2f2f2}

                    th {
                        background-color: #4CAF50;
                        color: white;
                    }
                    tcaption{
                    background-color:green;
                    color:#fff;
                    padding:15px;
                    text-align:center;
                    }
                    table{
                    border:2px solid #4CAF50;}
                    
                </style>
        
        <div class="container">
        	<table>
        		<?php
        		
        			$i=1;
	        		if($run!=""){
	        			if(mysqli_num_rows($run)){
	        			
	        			echo "<tcaption style='text-align: center; font-family: instruction;'>Entries for ".$eve[$fevent]."</tcaption><br/>";
	        			echo "<tr><th style='text-align: center; font-family: instruction;'>Serial number</th><th style='text-align: center; font-family: instruction;'>Name</th><th style='text-align: center; font-family: instruction;'>College</th><th style='text-align: center; font-family: instruction;'>Contact number</th></tr>";
	        			while($row=$run->fetch_assoc()){
                           
	        			
	        				echo "<tr><td style='text-align: center; font-family: instruction;'>".$i."</td><td style='text-align: center; font-family: instruction;'>".$row[ 'event.name']."</td><td style='text-align: center; font-family: instruction;'>".$res['event.email']."</td><td style='text-align: center; font-family: instruction;'>".$row['event.number']."</td><td style='text-align: center; font-family: instruction;'>".$row['registrastion.college']."</td></tr>";
	        				$i++;
	        			}
	        			}
	        			else{
                            echo "<tcaption style='text-align: center; font-family: instruction;'>Entries for ".$eve[$fevent]."</tcaption><br/>";
	        				echo "<tr style=' background-color: #4CAF50;'><td style='text-align: center; font-family: instruction; color: white;'>no entries for this event<td></tr>";
	        			}
	        		}
	        		
	        		}	
        		?>
        	</table>
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
          function MaterialSelect(element) {
  'use strict';

  this.element_ = element;
  this.maxRows = this.Constant_.NO_MAX_ROWS;
  // Initialize instance.
  this.init();
}

MaterialSelect.prototype.Constant_ = {
  NO_MAX_ROWS: -1,
  MAX_ROWS_ATTRIBUTE: 'maxrows'
};

MaterialSelect.prototype.CssClasses_ = {
  LABEL: 'mdl-textfield__label',
  INPUT: 'mdl-select__input',
  IS_DIRTY: 'is-dirty',
  IS_FOCUSED: 'is-focused',
  IS_DISABLED: 'is-disabled',
  IS_INVALID: 'is-invalid',
  IS_UPGRADED: 'is-upgraded'
};

MaterialSelect.prototype.onKeyDown_ = function(event) {
  'use strict';

  var currentRowCount = event.target.value.split('\n').length;
  if (event.keyCode === 13) {
    if (currentRowCount >= this.maxRows) {
      event.preventDefault();
    }
  }
};

MaterialSelect.prototype.onFocus_ = function(event) {
  'use strict';

  this.element_.classList.add(this.CssClasses_.IS_FOCUSED);
};

MaterialSelect.prototype.onBlur_ = function(event) {
  'use strict';

  this.element_.classList.remove(this.CssClasses_.IS_FOCUSED);
};

MaterialSelect.prototype.updateClasses_ = function() {
  'use strict';
  this.checkDisabled();
  this.checkValidity();
  this.checkDirty();
};

MaterialSelect.prototype.checkDisabled = function() {
  'use strict';
  if (this.input_.disabled) {
    this.element_.classList.add(this.CssClasses_.IS_DISABLED);
  } else {
    this.element_.classList.remove(this.CssClasses_.IS_DISABLED);
  }
};

MaterialSelect.prototype.checkValidity = function() {
  'use strict';
  if (this.input_.validity.valid) {
    this.element_.classList.remove(this.CssClasses_.IS_INVALID);
  } else {
    this.element_.classList.add(this.CssClasses_.IS_INVALID);
  }
};

MaterialSelect.prototype.checkDirty = function() {
  'use strict';
  if (this.input_.value && this.input_.value.length > 0) {
    this.element_.classList.add(this.CssClasses_.IS_DIRTY);
  } else {
    this.element_.classList.remove(this.CssClasses_.IS_DIRTY);
  }
};

MaterialSelect.prototype.disable = function() {
  'use strict';

  this.input_.disabled = true;
  this.updateClasses_();
};

MaterialSelect.prototype.enable = function() {
  'use strict';

  this.input_.disabled = false;
  this.updateClasses_();
};

MaterialSelect.prototype.change = function(value) {
  'use strict';

  if (value) {
    this.input_.value = value;
  }
  this.updateClasses_();
};

MaterialSelect.prototype.init = function() {
  'use strict';

  if (this.element_) {
    this.label_ = this.element_.querySelector('.' + this.CssClasses_.LABEL);
    this.input_ = this.element_.querySelector('.' + this.CssClasses_.INPUT);

    if (this.input_) {
      if (this.input_.hasAttribute(this.Constant_.MAX_ROWS_ATTRIBUTE)) {
        this.maxRows = parseInt(this.input_.getAttribute(
            this.Constant_.MAX_ROWS_ATTRIBUTE), 10);
        if (isNaN(this.maxRows)) {
          this.maxRows = this.Constant_.NO_MAX_ROWS;
        }
      }

      this.boundUpdateClassesHandler = this.updateClasses_.bind(this);
      this.boundFocusHandler = this.onFocus_.bind(this);
      this.boundBlurHandler = this.onBlur_.bind(this);
      this.input_.addEventListener('input', this.boundUpdateClassesHandler);
      this.input_.addEventListener('focus', this.boundFocusHandler);
      this.input_.addEventListener('blur', this.boundBlurHandler);

      if (this.maxRows !== this.Constant_.NO_MAX_ROWS) {
        // TODO: This should handle pasting multi line text.
        // Currently doesn't.
        this.boundKeyDownHandler = this.onKeyDown_.bind(this);
        this.input_.addEventListener('keydown', this.boundKeyDownHandler);
      }

      this.updateClasses_();
      this.element_.classList.add(this.CssClasses_.IS_UPGRADED);
    }
  }
};

MaterialSelect.prototype.mdlDowngrade_ = function() {
  'use strict';
  this.input_.removeEventListener('input', this.boundUpdateClassesHandler);
  this.input_.removeEventListener('focus', this.boundFocusHandler);
  this.input_.removeEventListener('blur', this.boundBlurHandler);
  if (this.boundKeyDownHandler) {
    this.input_.removeEventListener('keydown', this.boundKeyDownHandler);
  }
};

// The component registers itself. It can assume componentHandler is available
// in the global scope.
componentHandler.register({
  constructor: MaterialSelect,
  classAsString: 'MaterialSelect',
  cssClass: 'mdl-js-select',
  widget: true
});

     </script>
  </body>
</html>