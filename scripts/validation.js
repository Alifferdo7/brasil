/* ================================================================ */

function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;
    if((tecla > 47 && tecla < 58)) return true;
    else{
    if (tecla != 8) return false;
    else return true;
    }
}

/* ================================================================ */

	function maskTrak(format, field)
{
	var result = "";
	var maskIdx = format.length - 1;
	var error = false;
	var valor = field.value;
	var posFinal = false;
	if( field.setSelectionRange ) 
	{
    	if(field.selectionStart == valor.length)
    		posFinal = true;
    }
	valor = valor.replace(/[^0123456789Xx]/g,'')
	for (var valIdx = valor.length - 1; valIdx >= 0 && maskIdx >= 0; --maskIdx)
	{
		var chr = valor.charAt(valIdx);
		var chrMask = format.charAt(maskIdx);
		switch (chrMask)
		{
		case '#':
			if(!(/\d/.test(chr)))
				error = true;
			result = chr + result;
			--valIdx;
			break;
		case '@':
			result = chr + result;
			--valIdx;
			break;
		default:
			result = chrMask + result;
		}
	}

	field.value = result;
	field.style.color = error ? 'red' : '';
	if(posFinal)
	{
		field.selectionStart = result.length;
		field.selectionEnd = result.length;
	}
	return result;
}

/* ================================================================ */

function mascaraTelefone( campo ) {
			
function trata( valor,  isOnBlur ) {
					
	valor = valor.replace(/\D/g,"");             			
	valor = valor.replace(/^(\d{2})(\d)/g,"($1)$2"); 		
					
	if( isOnBlur ) {
						
	valor = valor.replace(/(\d)(\d{4})$/,"$1-$2");   
					} else {

						valor = valor.replace(/(\d)(\d{3})$/,"$1-$2"); 
					}
					return valor;
				}
				
				campo.onkeypress = function (evt) {
					 
					var code = (window.event)? window.event.keyCode : evt.which;	
					var valor = this.value
					
					if(code > 57 || (code < 48 && code != 8 ))  {
						return false;
					} else {
						this.value = trata(valor, false);
					}
				}
				
				campo.onblur = function() {
					
					var valor = this.value;
					if( valor.length < 13 ) {
						this.value = ""
					}else {		
						this.value = trata( this.value, true );
					}
				}
				
				campo.maxLength = 14;
			}
			
/* ================================================================ */