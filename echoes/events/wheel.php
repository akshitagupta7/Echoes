<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width", initial-scale="1">
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css?family=Rubik+Mono+One" rel="stylesheet">
   
   
   
   
    <title>Wheel of Fortune </title>
    <style type="text/css">
    @font-face {
    font-family: 'echoes_font';
    src: url("../fonts/font.ttf") ;
}
    text{
        font-family:Helvetica, Arial, sans-serif;
        font-size:11px;
        pointer-events:none;
    }
	body{
     background:url('../imgs/ep_naturalblack.png');
	 
	}
    #chart{
        width:610px;
        height:610px;
       
    }
    #question{
        position: absolute;
        width:400px;
        height:500px;
        top:0;
        left:520px;
	    color:white;
	
    }
    #heading p{
    font-family:echoes_font;
    font-size:10em;
    color:white;
    margin-top:40px;
    
    }
    #question h1{
        font-size: 20px;
        font-weight: bold;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        position: absolute;
        padding: 0;
        margin: 0;
        top:50%;
        -webkit-transform:translate(0,-50%);
                transform:translate(0,-50%);
    }
	button{background-color:black;
	color:white;
	padding:25px;
	border-width:3px;
	border-style:dashed;
	font-weight:bold;
	position:absolute;
	top:80%;
	left:85%;
	}
	a:link{color:white;}
	a:visited{color:white;}
	
/*==================================================
=            Bootstrap 3 Media Queries             =
==================================================*/




    /*====== Mobile First Method  ==========*/

    /* Custom, iPhone Retina */ 
    @media only screen and (min-width : 320px) {
        #heading p{
    font-size:6em;
    }
    }

    /* Extra Small Devices, Phones */ 
    @media only screen and (min-width : 480px) {


    /* Small Devices, Tablets */
    @media only screen and (min-width : 768px) {

    }

    /* Medium Devices, Desktops */
    @media only screen and (min-width : 992px) {

    }

    /* Large Devices, Wide Screens */
    @media only screen and (min-width : 1200px) {

    }
    </style>
    
</head>
<body>
<?php
	 session_start();
	 if(isset($_SESSION['name'])){

   $num=$_SESSION['number'];
    $name=$_SESSION['name'];
  
	    $hostname="localhost";
	$username="echoes";
	$password="stargazer";
	$dbname="echoes_satya";
	$usertable="people_spinner";
	
	 mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
	 $query="SELECT * FROM $usertable where name='$name' AND phone='$num'";
	 mysql_select_db($dbname);
     $result = mysql_query($query);

     if($result){
		while($row = mysql_fetch_array($result)){
			 $prize = $row["prize"];
			if($prize==1){
			$stop=5;}
			else if($prize==2){
			$stop=330;
			}
			else if($prize==3){
			$stop=280;
			}
			else if($prize==4){
			$stop=260;
			}
			else if($prize==5){
			$stop=210;
			}
			else if($prize==6){
			$stop=180;
			}
			else if($prize==7){
			$stop=150;
			}
			else if($prize==8){
			$stop=100;
			}
			else if($prize==9){
			$stop=70;
			}
			else if($prize==10){
			$stop=40;
			}
			
			
			}
		}
	}
 
	else{
	     header('Location: waffle.php');
	}
	

    

    
        
    ?>
    <div class="container-fluid">
    <div class="row">
        <div id="chart" class="col-xs-6"></div>

    <div id="heading" class="col-xs-6"><span><p>Spin The Wheel</p></span></div>
    </div>
    </div>
    
    <script src="https://d3js.org/d3.v3.min.js" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">
        var padding = {top:10, right:40, bottom:0, left:0},
            w = 610 - padding.left - padding.right,
            h = 610 - padding.top  - padding.bottom,
            r = Math.min(w, h)/2,
            rotation = 0,
            oldrotation = 0,
            picked = 100000,
            oldpick = [],
            color = d3.scale.category20();//category20c()
            //randomNumbers = getRandomNumbers();

        //http://osric.com/bingo-card-generator/?title=HTML+and+CSS+BINGO!&words=padding%2Cfont-family%2Ccolor%2Cfont-weight%2Cfont-size%2Cbackground-color%2Cnesting%2Cbottom%2Csans-serif%2Cperiod%2Cpound+sign%2C%EF%B9%A4body%EF%B9%A5%2C%EF%B9%A4ul%EF%B9%A5%2C%EF%B9%A4h1%EF%B9%A5%2Cmargin%2C%3C++%3E%2C{+}%2C%EF%B9%A4p%EF%B9%A5%2C%EF%B9%A4!DOCTYPE+html%EF%B9%A5%2C%EF%B9%A4head%EF%B9%A5%2Ccolon%2C%EF%B9%A4style%EF%B9%A5%2C.html%2CHTML%2CCSS%2CJavaScript%2Cborder&freespace=true&freespaceValue=Web+Design+Master&freespaceRandom=false&width=5&height=5&number=35#results

        var data = [
                    {"label":"Premium Shake",  "value":1,  "question":"ques1"}, //252
                    {"label":"1 Waffle with 3 Toppings",  "value":1,  "question":"ques2"}, //10
                    {"label":"Buy 1 Get 1 Free Pizza",  "value":1,  "question":"ques3"}, //90
                    {"label":"Sorry! No Luck.",  "value":1,  "question":"ques4"}, //25
                    {"label":"1 Pasta of your choice",  "value":1,  "question":"ques5"}, //4
                    {"label":"Meal for 2 upto Rs.600",  "value":1,  "question":"ques6"}, //Amin is the terrorist
                    {"label":"Your Bill is on Us",  "value":1,  "question":"ques7"}, //oracle
                    {"label":"10% off on Bill",  "value":1,  "question":"ques8"},
                    {"label":"Sorry! No Luck",  "value":1,  "question":"ques9"},
                    {"label":"1 Year Shakes on Us",  "value":1,  "question":"ques10"}, //sheryl sandberg
                   
				
					
					
		  ];


        var svg = d3.select('#chart')
            .append("svg")
            .data([data])
            .attr("width",  w + padding.left + padding.right)
            .attr("height", h + padding.top + padding.bottom);

        var container = svg.append("g")
            .attr("class", "chartholder")
            .attr("transform", "translate(" + (w/2 + padding.left) + "," + (h/2 + padding.top) + ")");

        var vis = container
            .append("g");
            
        var pie = d3.layout.pie().sort(null).value(function(d){return 1;});

        // declare an arc generator function
        var arc = d3.svg.arc().outerRadius(r);

        // select paths, use arc generator to draw
        var arcs = vis.selectAll("g.slice")
            .data(pie)
            .enter()
            .append("g")
            .attr("class", "slice");
            

        arcs.append("path")
            .attr("fill", function(d, i){ return color(i); })
            .attr("d", function (d) { return arc(d); });

        // add the text
        arcs.append("text").attr("transform", function(d){
                d.innerRadius = 0;
                d.outerRadius = r*(99/100);
                d.angle = (d.startAngle + d.endAngle)/2;
                return "rotate(" + (d.angle * 180 / Math.PI - 90) + ")translate(" + (d.outerRadius -10) +")";
            })
            .attr("text-anchor", "end")
            .attr("font-weight","bold")
            .text( function(d, i) {
                return data[i].label;
            });

        container.on("click", spin);


        function spin(d){
            
            container.on("click", null);

            //all slices have been seen, all done
            console.log("OldPick: " + oldpick.length, "Data length: " + data.length);
            if(oldpick.length == data.length){
                console.log("done");
                container.on("click", null);
                return;
            }

            var  ps       = 360/data.length,
                 pieslice = Math.round(1440/data.length),
                 rng      = Math.floor((Math.random() * 1440) + 360);
                
            rotation = 360*5 + <?php echo $stop?>;
            
            picked = Math.round(data.length - (rotation % 360)/ps);
            picked = picked >= data.length ? (picked % data.length) : picked;


            if(oldpick.indexOf(picked) !== -1){
                d3.select(this).call(spin);
                return;
            } else {
                oldpick.push(picked);
            }

            rotation += 90 - Math.round(ps/2);

            vis.transition()
                .duration(3000)
                .attrTween("transform", rotTween)
                .each("end", function(){

                    //mark question as seen
                    d3.select(".slice:nth-child(" + (picked + 1) + ") path")
                        .attr("fill", "#111");

                    //populate question
                    //d3.select("#question h1")
                      //  .text(data[picked].question);
                      
alert(data[picked].question);
  $.ajax({url: "logout.php", success: function(result){
  console.log("done");
        }});
		
location.reload();
                    oldrotation = rotation;
                
                    container.on("click", spin);
                });
        }

        //make arrow
        svg.append("g")
            .attr("transform", "translate(" + (w + padding.left + padding.right) + "," + ((h/2)+padding.top) + ")")
            .append("path")
            .attr("d", "M-" + (r*.15) + ",0L0," + (r*.05) + "L0,-" + (r*.05) + "Z")
            .style({"fill":"white"});

        //draw spin circle
        container.append("circle")
            .attr("cx", 0)
            .attr("cy", 0)
            .attr("r", 50)
            .style({"fill":"white","cursor":"pointer"});

        //spin text
        container.append("text")
            .attr("x", 0)
            .attr("y", 15)
            .attr("text-anchor", "middle")
            .text("SPIN")
            .style({"font-weight":"bold", "font-size":"30px"});
            
        container.append("text")
            .attr("x", 0)
            .attr("y", 30)
            .attr("text-anchor", "middle")
            .text("Click here")
            .style({"font-weight":"bold", "font-size":"12px"});
            
            
        
        
        function rotTween(to) {
          var i = d3.interpolate(oldrotation % 360, rotation);
          return function(t) {
            return "rotate(" + i(t) + ")";
          };
        }
        
        
        
   
    
    </script>


</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

</body>
</html>