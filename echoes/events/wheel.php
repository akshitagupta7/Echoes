<?php
session_start();
if($_POST['loginbutton']=='echoeseee'){
$_SESSION['loggedin']="hey";
}
session_start();

if(isset($_SESSION['loggedin'])){
 $hostname="localhost";
	$username="echoes";
	$password="stargazer";
	$dbname="echoes_satya";
	$usertable="people_spinner";
	
	 mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
	 $query="SELECT id,name,prize FROM $usertable";
	 mysql_select_db($dbname);
     $result = mysql_query($query);
     echo "<html><meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>";
    echo " <meta http-equiv='refresh' content='5; URL=http://www.echoes.stargazer.co.in/events/wheel.php'>";
     echo "<style>tr,td{border-bottom:1px solid #ddd;}table{width:100%;}tr:nth-child(even){background-color: #f2f2f2}thead{font-weight:bold;}</style>";
     echo "<table  style='border-collapse:collapse;border:1px solid black'><thead><td>S.No</td><td>NAME</td><td>PRIZE</td></thead>";
     while($row=mysql_fetch_assoc($result)){
     $prize=$row['prize'];
     if($prize==1)$gift="10%off";
     if($prize==2)$gift="waffle";
     if($prize==3)$gift="mealfor2";

     if($prize==4)$gift="shakes for 1 year";
     if($prize==5)$gift="Sorry";
     if($prize==6)$gift="buy 1 get 1 pizza";
     if($prize==7)$gift="Meal is on us";
     if($prize==8)$gift="1 premium shake";
     if($prize==9)$gift="1 pasta";
     if($prize==10)$gift="Sorry";

	echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$gift."</td></tr>";
     }
     echo "</table>";
     }
     else{
     echo"<form action='wheel.php' method='post'><input length=10 type='password' name='loginbutton'>  <input type='submit' value='Submit'></form>";
    } ?>
     