<!-- propriedade NAME = faz referência do elemento para o PHP propriedade ID = faz referência do elemento para: HTML, CSS e JavaScript-->

<script>
    // declara a função
    function possui_filhos(){
        
        /* declara as variáveis que armazenarão os elementos referentes à checkbox e ao select */
        var checkbox = document.getElementById("filhos");
        var select = document.getElementById("numero_filhos");
        
        /* checa se o elemento (checkbox) armazenado na variável "checkbox" está checado */
        if(checkbox.checked){
            /* insere a propriedade "disabled" no elemento do select (assim, desabilitando-o) */
            select.disabled = false;
        }
        else{
            select.disabled = true;
        }
    }
</script>
<form action="cadastrar.php" method="post">
 <p>Nome: <input type="text" name="nome" /></p>
 <p>Endereço: <input type="text" name="endereco" /></p>
 <p>Cidade: <input type="text" name="cidade" /></p>
 <p>Usuário: <input type="text" name="usuario" /></p>
 <p>Senha: <input type="password" name="senha" /></p>
 
 Sexo:
 <!-- Radios referentes ao genero name tem q ser igual nos 2 a unica coisa q muda é o value -->
 <input type="radio" id="radio_masculino" name="sexo" value="masculino" /><label for="radio_masculino">Masculino </label>
 <input type="radio" id="radio_feminino" name="sexo" value="feminino" /><label for="radio_feminino">Feminino </label>
 
 <!-- onclick indica qual função javascript será executada ao clicar no elemento (a checkbox, no caso) -->
 <br>
 <input style="margin-top: 20px;" type="checkbox" id="filhos" name="filhos" onClick="possui_filhos();" />
 <label for="filhos">Possui filhos?</label>
 
 <!-- Select 
 disabled = estará desabilitado quando carregar a página
 options = cada opção com seu respectivo "value" e Texto
 -->
 <select disabled name="numero_filhos" id="numero_filhos">
     <option hidden>Selecione...</option>
     <option value="1">1</option>
     <option value="2">2</option>
     <option value="3">3</option>
     <option value="4">4</option>
     <option value="5">5</option>
 </select>
 
 <p><button type="reset">Limpar</button><input type="submit" value="Enviar" name="enviar" /></p>
</form>