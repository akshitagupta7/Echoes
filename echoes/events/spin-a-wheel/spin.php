
<html>
    <head>
        <title>HTML5 Canvas Winning Wheel</title>
        <link rel="stylesheet" href="main.css" type="text/css" />
        <script type="text/javascript" src="js/Winwheel.js"></script>
        <script src="js/TweenMax.js"></script>
    </head>
    <body>
        <div align="center">
          
            <table cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td>
                    <div class="">
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
                            <td>Meal for 2 worth Rs.600</td>
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
                            <td>1 Pasta of your choice</td>
                        </tr>
                        <tr>
                            <td>10.</td>
                            <td>Better Luck Next Time</td>
                        </tr>
                        </tbody>
                        
                    </table>
                        <br />
                        <img id="spin_button" src="spin_off.png" alt="Spin" onClick="startSpin();" />
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
                    
                   theWheel.animation.stopAngle = 10;

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
                alert(winningSegment.text + ' says Hi');
            }
        </script>
    </body>
</html>
