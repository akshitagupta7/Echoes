<?php
$num= ($_POST['number']);
$offer= ($_POST['offer']);
if($offer=="Better Luck Next Time"){
session_start();
session_destroy();
$_SESSION = array();
echo "no sms";
}
else {
session_start();
session_destroy();
$_SESSION = array();

$hostname="localhost";
	$username="echoes";
	$password="stargazer";
	$dbname="echoes_satya";
	$usertable="people_spinner";
	
	 mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
	 $query="SELECT couponcode,DATE(TIMESTAMP) FROM $usertable WHERE phone='$num'";
	 
mysql_select_db($dbname);   
 $result2=mysql_query($query);
  	if($result2 && mysql_num_rows($result2) > 0){
  	$row= mysql_fetch_array($result2);
  	 $coupon= $row['couponcode'];
  	$date=$row['DATE(TIMESTAMP)'];
  	$newdate= date('Y-m-d', strtotime($date. ' + 89 days'));
	 $formatdate = date("d-m-Y", strtotime($newdate));



$api_key = '458F7890E79C0E';
$contacts = $num;
$from = 'ECHOES';
$sms_text = urlencode('Echoes welcomes you to redeem code : '.$coupon.' for offer : '.$offer.' Visit Now! T&C apply #EEE Offer valid till'. $formatdate );

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, "http://user.zygontech.com/app/smsapi/index.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "key=".$api_key."&routeid=261&type=text&contacts=".$contacts."&senderid=".$from."&msg=".$sms_text);
$response = curl_exec($ch);
curl_close($ch);
if($response){echo "sms sent";}
}
else{echo "FAIL";}

}
?>