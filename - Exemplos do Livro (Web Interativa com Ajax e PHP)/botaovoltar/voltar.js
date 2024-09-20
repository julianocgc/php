// Defini��o de vari�veis
var v_cache = new Array;
var v_cont = 0;
var v_indiceAtual = "";
var v_depurar = true;
var v_iframeCarregado = false;
var v_divSaida = "";

// Exibe informa��es de depura��o (se v_depurar estiver habilitado)
function v_depuracao (str) {
	if (v_depurar) {
		var divInformacao = document.getElementById("divInformacao");
		divInformacao.innerHTML = divInformacao.innerHTML + "<br>" + str;
	}
}

// L� o �ndice armazenado no IFRAME. Se ele for diferente do �ndice atual 
// da cache, significa que o bot�o Voltar foi pressionado. Nesse caso,
// obt�m o conte�do da cache e atualiza a p�gina
function v_checaEstado () {
	if (v_iframeCarregado == false)
		return;
	var doc =  window.frames['frameAuxiliar'].document;
	var novoIndice = doc.getElementById('divContagem').innerHTML;

	if (novoIndice != v_indiceAtual) {
			var msgDepuracao = "IFRAME alterado. Passou de " + v_indiceAtual + " para " + novoIndice;
	
		// Carrega o estado anterior da cache (se houver)
		if (v_cache[novoIndice]) {
			var divPrincipal = document.getElementById("divPrincipal");
			divPrincipal.innerHTML = v_cache[novoIndice];
			msgDepuracao += " (acessei a posi��o " + novoIndice + " da cache)";
		}
	
		v_indiceAtual = novoIndice;
		v_depuracao (msgDepuracao);
	}
}

// Fun��o chamada ap�s o carregamento do IFRAME
function v_carregado () {
	v_iframeCarregado = true;
}

// Atualiza o IFRAME invis�vel
function v_carregaFrame () {
	var frameAuxiliar = document.getElementById("frameAuxiliar");
	v_iframeCarregado = false;
	frameAuxiliar.src = "contagem.php?contador=" + v_cont;
}

// Salva o estado corrente na cache
function v_salvaEstado () {
	var conteudoCache = document.getElementById(v_divSaida);
	v_cont++;
	v_cache[v_cont] = conteudoCache.innerHTML;
	v_depuracao ("Adicionei " + v_cont + " � cache");
	v_carregaFrame ();
	v_indiceAtual = v_cont;
}

// Carrega o IFRAME invis�vel e inicia o timer
function v_inicia (nomeDiv) {
	v_divSaida = nomeDiv;
	v_carregaFrame ();
	window.setInterval ('v_checaEstado()', 1000);
	v_salvaEstado ();
}

// Cria��o do objeto XMLHttpRequest
function iniciaAjax() {
	var ajax;
	if(window.XMLHttpRequest){	  // Mozilla, Safari,...
		ajax = new XMLHttpRequest();
	} 
	else if (window.ActiveXObject){	// IE
		ajax = new ActiveXObject("Msxml2.XMLHTTP");
		if (!ajax) {
			ajax = new ActiveXObject("Microsoft.XMLHTTP");
		}
    }      
	return ajax;
}
