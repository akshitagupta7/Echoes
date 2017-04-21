<?php
if(isset($_POST['name'])&&isset($_POST['number'])){
 $name= ($_POST['name']);
 $num= ($_POST['number']);
$hostname="localhost";
	$username="echoes";
	$password="stargazer";
	$dbname="echoes_satya";
	$usertable="people_spinner";
	
	 mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
	 $number=rand(0,100);
	 if($number>=0&&$number<=25){
		 $prize=1;
	 }
	 else if($number>=25&&$number<=40){
		 $prize=2;
	 }
	 else if($number>=40&&$number<=45){
		 $prize=3;
	 }
	 else if($number>=45&&$number<=55){
		 $prize=5;
	 }
	 else if($number>=55&&$number<=60){
		 $prize=6;
	 }
	 else if($number>=60&&$number<=75){
		 $prize=8;
	 }
	 else if($number>=75&&$number<=85){
		 $prize=9;
	 }
	 else if($number>=85&&$number<=100){
		 $prize=10;
	 }
	 
	 
	 function getToken($length)
	{
    $token = "";
    $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $codeAlphabet.= "0123456789";
    $max = strlen($codeAlphabet); // edited

    for ($i=0; $i < $length; $i++) {
        $token .= $codeAlphabet[rand(0, $max-1)];
    }

    return $token;
	}
$token=getToken(6);

	 $query="INSERT INTO $usertable(name,phone,prize,couponcode) VALUES('$name','$num','$prize','$token')";
	 $query2="SELECT * FROM $usertable WHERE phone='$num'";
	 mysql_select_db($dbname);   
 	$result2=mysql_query($query2);
 	if($result2 && mysql_num_rows($result2) > 0){
		header('Location: http://echoes.stargazer.co.in/events/spin-a-wheel/index.php?tag=fail'); 	
		}
 	else{
 	$result = mysql_query($query);
	 session_start();
	 $_SESSION["name"] = $name;
	 $_SESSION["number"]=$num;
	
	     header('Location: wheel.php');
	     }

	
}
