<html>
    <head>
        <link href="css/style_waffle.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>

    <body>
    <?php
    	if(isset($_GET['tag'])){
    	$alert=1;
    	}
    	else{
    	$alert=0;
    	}
    	?>
    	<script>if(<?php echo $alert?>==1){
    		alert("Sorry you are already registered");
    			}
    			</script>

<div class="v-wrap">
    <article class="v-box">
        <h1>Spinner Wheel</h1>

        <p>Register below with your phone number and email id</p>
<form class="form-inline" action="encryption.php" method="post">
  <div class="form-group">
    <label for="exampleInputName2">Name</label>
    <input type="text" class="form-control" id="InputName" placeholder="Jane Doe" name="name">
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail2">Phone Number</label>
    <input type="number" class="form-control" id="InputPhone" placeholder="9999999999" name="number" size="10" pattern=".{9}">
  </div>
  <button type="submit" class="btn btn-default">Send Coupon</button>
</form>
    </article>
</div>
    </body>
</html>