function obtemPreco(cod){
	if(cod) {
		var url="exemplo1.php?cod="+cod;
		requisicaoHTTP("GET",url,true);
	}
}

function trataDados(){
	var preco = ajax.responseText;  // obt�m a resposta como string
	if(preco=="0.00")
		var info = "Pre�o n�o encontrado";
	else
		var info = "O pre�o � R$"+preco;
	document.getElementById("precoProduto").style.backgroundColor="yellow";
	document.getElementById("precoProduto").innerHTML=info;
}