  var myWheel = new Winawheel({
        'numSegments'    : 8,
        'outerRadius'    : 170,
        'segments'       :
        [
           {'fillStyle' : '#eae56f', 'text' : 'Prize 1'},
           {'fillStyle' : '#89f26e', 'text' : 'Prize 2'},
           {'fillStyle' : '#7de6ef', 'text' : 'Prize 3'},
           {'fillStyle' : '#e7706f', 'text' : 'Prize 4'},
           {'fillStyle' : '#eae56f', 'text' : 'Prize 5'},
           {'fillStyle' : '#89f26e', 'text' : 'Prize 6'},
           {'fillStyle' : '#7de6ef', 'text' : 'Prize 7'},
           {'fillStyle' : '#e7706f', 'text' : 'Prize 8'}
        ],
        'animation' :
        {
            'type'          : 'spinToStop',
            'duration'      : 5,
            'spins'         : 8,
            'callbackAfter' : 'drawTriangle()',
            'callbackFinished' : 'winAnimation()'

        }    });
    function winAnimation(){
        alert(myWheel.getIndicatedSegmentNumber());
    }
 
    // Function with formula to work out stopAngle before spinning animation.
    // Called from Click of the Spin button.
    function calculatePrize()
    {	        alert("calculating prize");

        // This formula always makes the wheel stop somewhere inside prize 3 at least
        // 1 degree away from the start and end edges of the segment.
        var stopAt = (<?php echo $stop;?>)
 
        // Important thing is to set the stopAngle of the animation before stating the spin.
        myWheel.animation.stopper = stopAt;
 
        // May as well start the spin from here.
        myWheel.startAnimation();
    }
 
    // Usual pointer drawing code.
    drawTriangle();
 
    function drawTriangle()
    {
        // Get the canvas context the wheel uses.
        var ctx = myWheel.ctx;
 
        ctx.strokeStyle = 'navy';     // Set line colour.
        ctx.fillStyle   = 'aqua';     // Set fill colour.
        ctx.lineWidth   = 2;
        ctx.beginPath();              // Begin path.
        ctx.moveTo(170, 5);           // Move to initial position.
        ctx.lineTo(230, 5);           // Draw lines to make the shape.
        ctx.lineTo(200, 40);
        ctx.lineTo(171, 5);
        ctx.stroke();                 // Complete the path by stroking (draw lines).
        ctx.fill();                   // Then fill.
    }
