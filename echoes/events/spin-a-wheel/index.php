<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style_waffle.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <title>Chill The Wheel: Get amazing food coupons at Echoes</title>
<meta name=”description” content=”Gamify your food cravings, and seize the opportunity to win some fingerlicious delicacies now! Spin some, win some!”>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Concert+One|Kalam|Permanent+Marker" rel="stylesheet">
    <link rel="icon" href="../../imgs/favicon.ico">
<meta property="og:url" content="http://www.echoes.stargazer.co.in/events/spin-a-wheel" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Echoes" />
  <meta property="og:description"   content="Gamify your food cravings, and seize the opportunity to win some fingerlicious delicacies now! Spin some, win some!" />
  <meta property="og:image"         content="http://echoes.stargazer.co.in/events/spin-a-wheel/imgs/fb.png" />
    <link rel="icon" href="../../imgs/favicon.ico">

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
    	if(isset($_GET['tag'])){
    	$alert=1;
    	}
    	else{
    	$alert=0;
    	}
    	
    	
    	$name=$_GET['ref'];
$hostname="localhost";
	$username="echoes";
	$password="stargazer";
	$dbname="mytestdbms";
	$usertable="refferal";
	
	 mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
	 $query="SELECT * FROM $usertable where name='$name'";
	 mysql_select_db($dbname);
     $result = mysql_query($query);
	if(mysql_fetch_assoc($result)){
	$query2="UPDATE $usertable SET count=count+1 WHERE name='$name'";
	$result2 = mysql_query($query2);

		}
	else{
	$query2="INSERT INTO $usertable(name,count) VALUES('$name','1')";
	$result2 = mysql_query($query2);

	}
    	
    	
    	?>
    	<script>if(<?php echo $alert?>==1){
    		alert("Sorry you are already registered");
    			}
    			</script>

<div class="v-wrap">
    <article class="v-box">
        <h1><span style="font-family: 'Kalam', cursive">#चिल्ल</span><span style="font-family: 'Rubik Mono One', sans-serif"">the</span><span style="font-family: 'Kalam', cursive">वील</span></h1>

        <p>Register below with your phone number </p>
<form class="form-inline" action="log.php" method="post" id="myform">
  <div class="form-group">
    <label for="exampleInputName2">Name</label>
    <input type="text" class="form-control" id="InputName" placeholder="Jane Doe" name="name" data-validation="length" pattern="[a-zA-Z][a-zA-Z0-9\s]*" data-validation-length="min2" >
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail2">Phone Number</label>
    <input type="number" class="form-control" id="InputPhone" pattern="(7|8|9)\d{9}" placeholder="9999999999" name="number" size="10" data-validation="number length" data-validation-length="10" range="[70000000000,9999999999]">

  </div>
  <div class="checkbox">
  <label><input type="checkbox" value="" class="checkbox" id="agree" name="agree" required></label>
  <label for="agree" class="error block">Agree to our <a href="tnc.html">Terms!</a></label>

</div>
  
  <button type="submit" class="btn btn-default">Register Now</button>
</form>Terms and conditions for #चिल्लtheवील<br>
1. Cannot be clubbed with any other offer.<br>
2. Offers can be Redeemed from 24th April, Monday.<br>
3. Only valid on Weekdays<br>
    </article>
</div>



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
  $.validate({
    lang: 'en'
  });

</script>

    </body>
</html>