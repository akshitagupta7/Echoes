<html>
    <head>
        <title>Chill The Wheel</title>
        <link rel="stylesheet" href="../main.css" type="text/css" />
        <script type="text/javascript" src="../js/Winwheel.js"></script>
        <script src="../js/TweenMax.js"></script>
 <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Rubik+Mono+One" rel="stylesheet">


<meta property="og:url" content="http://www.echoes.stargazer.co.in/" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Echoes" />
  <meta property="og:description"   content="Here is the description" />
  <meta property="og:image"         content="http://echoes.stargazer.co.in/events/spin-a-wheel/imgs/fb.png" />

<link href="https://fonts.googleapis.com/css?family=Concert+One|Kalam|Permanent+Marker" rel="stylesheet">
<!--Google Analytics Code-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-97624630-1', 'auto');
  ga('send', 'pageview');

</script>

<!--Ends Here-->
    </head>
    <body>
      <?php
	 session_start();
	 if(isset($_SESSION['name'])){

   $num= ($_SESSION['number']);
    $name= ($_SESSION['name']);
  
	    $hostname="localhost";
	$username="echoes";
	$password="stargazer";
	$dbname="echoes_bangalore";
	$usertable="people_spinner";
	
	 mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
	 $query="SELECT * FROM $usertable where name='$name' AND phone='$num'";
	 mysql_select_db($dbname);
     $result = mysql_query($query);

     if($result){
		while($row = mysql_fetch_array($result)){
			 $prize = $row["prize"];
			if($prize==1){
			$stop=20;}
			else if($prize==2){
			$stop=45;
			}
			else if($prize==3){
			$stop=85;
			}
			else if($prize==4){
			$stop=125;
			}
			else if($prize==5){
			$stop=160;
			}
			else if($prize==6){
			$stop=200;
			}
			else if($prize==7){
			$stop=225;
			}
			else if($prize==8){
			$stop=280;
			}
			else if($prize==9){
			$stop=300;
			}
			else if($prize==10){
			$stop=350;
			}
			
			
			}
		}
	}
 
	else{
	     header('Location: index.php');
	}
	

    

    
        
    ?>
    <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1559578257399904',
      xfbml      : true,
      version    : 'v2.9'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
    
    
    
    <div class="head"><h1 id="lol" style="><span style="font-family: 'Kalam', cursive">#चिल्ल</span><span style="font-family: 'Rubik Mono One', sans-serif"">the</span><span style="font-family: 'Kalam', cursive">वील</span></h1></div>
        <div align="center" id="first">
          
            <table cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td>
                    <div class="">                        <h2 id="lol" style="font-family: 'Rubik Mono One', sans-serif">Try your luck</h2>

                        <br />
                        <br />
                    <table border="1" id="data">
                        <thead><tr>
                            <th>S.no</th>
                            <th>Offer</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1.</td>
                            <td>10% Off on your Bill</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>1 Waffle with 3 Toppings</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Meal for 2 worth Rs.750</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Unlimited shakes for 1 year</td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Better Luck Next Time</td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>Buy 1 pizza Get 1 Pizza Free</td>
                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>Your Meal is on us ;-) </td>
                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>1 Premium Shake Free</td>
                        </tr>
                        <tr>
                            <td>9.</td>
                            <td> 1 Tandoori Momos of ur choice</td>
                        </tr>
                        <tr>
                            <td>10.</td>
                            <td>Better Luck Next Time</td>
                        </tr>
                        </tbody>
                        
                    </table>
                        <br />
                        <img id="spin_button" src="../spin_off.png" alt="Spin" onClick="startSpin();" />
                        <br /><br />
                    </div>
                </td>
                <td width="640" height="849" class="the_wheel" align="center" valign="center">
                    <canvas id="canvas" width="700" height="700">
                        <p style="{color: white}" align="center">Sorry, your browser doesn't support canvas. Please try another.</p>
                    </canvas>
                </td>
            </tr>
        </table>
         
 
        <script>
        
        
            // Create new wheel object specifying the parameters at creation time.
            
                var theWheel = new Winwheel({
                'numSegments'       : 10,                // Specify number of segments.
                'outerRadius'       : 390,              // Set outer radius so wheel fits inside the background.
                'drawText'          : true,             // Code drawn text can be used with segment images.
                'textFontSize'      : 30,               // Set text options as desired.
                'textOrientation'   : 'curved',
                'textAlignment'     : 'outer',
                'textMargin'        : 90,
                'textFontFamily'    : 'monospace',
                'textStrokeStyle'   : 'white',
                'textLineWidth'     : 5,
                'textFillStyle'     : 'black',
                'drawMode'          : 'segmentImage',    // Must be segmentImage to draw wheel using one image per segemnt.
                'segments'          :                    // Define segments including image and text.
                [
                   {'image' : '10percent.png',  'text' : '1'},
                   {'image' : 'waffle.png',   'text' : '2'},
                   {'image' : 'meal2.png',  'text' : '3'},
                   {'image' : 'shake2.png',  'text' : '4'},
                   {'image' : 'sorry.png', 'text' : '5'},
                   {'image' : 'pizza.png', 'text' : '6'},
                   {'image' : 'unlimited.png',  'text' : '7'},
                   {'image' : 'shake.png', 'text' : '8'},
                   {'image' : 'pasta.png', 'text' : '9'},
                   {'image' : 'sorry.png', 'text' : '10'}
                ],
                'animation' :           // Specify the animation to use.
                {
                    'type'     : 'spinToStop',
                    'duration' : 6,
                    'spins'    : 12,
                    'callbackFinished' : 'alertPrize()',
                }
            });

            // Vars used by the code in this page to do power controls.
            var wheelPower    = 0;
            var wheelSpinning = false;

            // -------------------------------------------------------
            // Function to handle the onClick on the power buttons.
            // -------------------------------------------------------
      

            // -------------------------------------------------------
            // Click handler for spin button.
            // -------------------------------------------------------
            function startSpin()
            {
                // Ensure that spinning can't be clicked again while already running.
                if (wheelSpinning == false)
                {
                    // Based on the power level selected adjust the number of spins for the wheel, the more times is has
                    // to rotate with the duration of the animation the quicker the wheel spins.
                    
                        theWheel.animation.spins = 3;
                    
                   theWheel.animation.stopAngle = <?php echo $stop;?>;

                    // Disable the spin button so can't click again while wheel is spinning.
                    // document.getElementById('spin_button').src       = "spin_off.png";
                    // document.getElementById('spin_button').className = "";

                    // Begin the spin animation by calling startAnimation on the wheel object.
                    theWheel.startAnimation();

                    // Set to true so that power can't be changed and spin button re-enabled during
                    // the current animation. The user will have to reset before spinning again.
                    wheelSpinning = true;
                }
            }

            // -------------------------------------------------------
            // Function for reset button.
            // -------------------------------------------------------
            function resetWheel()
            {
                theWheel.stopAnimation(false);  // Stop the animation, false as param so does not call callback function.
                theWheel.rotationAngle = 0;     // Re-set the wheel angle to 0 degrees.
                theWheel.draw();                // Call draw to render changes to the wheel.

                document.getElementById('pw1').className = "";  // Remove all colours from the power level indicators.
                document.getElementById('pw2').className = "";
                document.getElementById('pw3').className = "";

                wheelSpinning = false;          // Reset to false to power buttons and spin can be clicked again.
            }

            // -------------------------------------------------------
            // Called when the spin animation has finished by the callback feature of the wheel because I specified callback in the parameters.
            // -------------------------------------------------------
            function alertPrize()
            {
                // Get the segment indicated by the pointer on the wheel background which is at 0 degrees.
                var winningSegment = theWheel.getIndicatedSegment();

                // Do basic alert of the segment text. You would probably want to do something more interesting with this information.
                               // $('#first').hide();
                                $('#second').show();
                                var t=2*winningSegment.text;
                                	var offered=$('tbody tr td')[t].textContent;
                                	if(winningSegment.text==5||winningSegment.text==10){$('#text_winning').hide();}
                              $("#second h1").text($('tbody tr td')[t].textContent);
                              
	$.post("../dmg.php",{
		number: "<?php echo $num;?>",
		offer: offered
		},
		function(data,status){
		console.log("data"+data);
		});   
                              


            }
            
            
        </script>
        </div>
        <div id="second">
        <div class="container">
        <h1 style="
text-align:center,
font-size:3em
">Winning prize</h1><br><p id="text_winning">You gave it a spin, and ultimately came up with a win. Your SMS Coupon has been released. You can redeem the same at Echoes Satya Niketan/Koramangala.Share your happiness with your friends.Happy Spinning and Winning!</p>
        
        <br>
     <img id="shareBtn" src="../imgs/share.png" width="150px">
  </div>
        </div>
        </div>
        
        <script>                                $('#second').hide();
</script>
<script>
document.getElementById('shareBtn').onclick = function() {
  FB.ui({
    method: 'feed',
    display: 'popup',
    hasthag : 'EEE',
    href: 'https://echoes.stargazer.co.in/events.html',
        picture: 'http://echoes.stargazer.co.in/events/spin-a-wheel/imgs/fb.png',
        name: "Title this is",
        description: "this is the desc",
        caption: "final caption"
  }, function(response){});
}
</script>
    </body>
</html>
