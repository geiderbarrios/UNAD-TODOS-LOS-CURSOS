// JavaScript Document
function validar_numero(o){
	tecla = (document.all) ? o.keyCode : o.which;		
		//alert(tecla);
//Tecla de retroceso para borrar, siempre la permite
	if (tecla==8 || tecla==0) return true;
	//patron = /\d/;		
	// Patron de entrada, en este caso solo acepta letras
	patron =/[0-9]/; 		
	tecla_final = String.fromCharCode(tecla);
	return patron.test(tecla_final); 
}
function validar_decimal(o) 
{
	tecla = (document.all) ? o.keyCode : o.which;		
	//Tecla de retroceso para borrar, siempre la permite
	if (tecla==8 || tecla==0) return true; 
	//patron = /\d/;		
	// Patron de entrada, en este caso solo acepta letras
	patron =/[0-9 .]/; 		
	tecla_final = String.fromCharCode(tecla);
	return patron.test(tecla_final); 
}
function validar_texto(o) 
{
	tecla = (document.all) ? o.keyCode : o.which;		
		//alert(tecla);
//Tecla de retroceso para borrar, siempre la permite
	if (tecla==8 || tecla==0) return true;
	//patron = /\d/;		
	// Patron de entrada, en este caso solo acepta letras
	patron =/[A-Za-z ]/; 		
	tecla_final = String.fromCharCode(tecla);
	return patron.test(tecla_final); 
}