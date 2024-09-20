var expressao, confere;

window.onload=function(){
	document.forms[0].onsubmit=function() {
		testaEmail(this.email.value);
		return false;
	};
};

function emailValido(email){
	// n�o pode ser vazio, tem que conter "@", "."
	// e n�o pode conter espa�os
	if (email == null || email.length == 0 ||
		email.indexOf(".") == -1 ||
		email.indexOf("@") == -1 ||
		email.indexOf(" ") != -1)
			return false;

    // testa os caracteres antes do "@"
	// n�o pode come�ar nem terminar com ponto
	// deve ter ao menos dois caracteres word (letras, n�meros, underline)
	// opcionalmente com um ponto entre eles
	expressao=/(^\w{1,}\.?\w{1,})@/;
	confere = expressao.exec(email);
	if (!confere) return false;

	// testa os caracteres depois do "@"
    // deve ter ao menos 2 caracteres seguidos por um ponto, 
	// seguido por zero ou mais ocorr�ncias de ao menos 2 
	// caracteres (terminando com um ponto), seguidos por 2 ou 3 caracteres

	expressao=/@(\w{2,}\.(\w{2,}\.)?[a-zA-Z]{2,3})$/;
	confere = expressao.exec(email);
	if(!confere)
		return false;

	return true;
}

function testaEmail(email){
    if(emailValido(email))
    {
		var url="exemplo14.php?email="+encodeURIComponent(email);
		requisicaoHTTP("GET",url,true);
    }
	else
		alert ("O formato do e-mail digitado � inv�lido!");
}

function trataDados(){
	var valido = ajax.responseText;
	if(valido=="S")
		alert("PARAB�NS! O e-mail � v�lido e foi aceito pelo servidor!");
	else
		alert("OPSSS! Este e-mail j� existe em nosso cadastro!");
}
