<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style.css">
    
    <style>
    
        .input-border{
            border: 2px solid #CCC;
        }
    </style>
</head>
<body>
    <div id="janela">
    <form style="width:100%; text-align: center" action="atualizar.php" method="POST"> <!-- Inicia o formulário -->
    <table style="width:100%"><!-- Inicia tabela -->
        <tr><!-- Inicia linha da tabela (Table Row) -->
            <td style="width: 40%"><!-- Inicia célula da tabela (Table Data) -->
                Nome:
            </td>
            <td>
                <input class="form-control input-border" style="width:100%" type="text" name="nome" />
            </td>
        </tr>
        <tr>
            <td>
                Sobrenome:
            </td>
            <td>
                <input class="form-control input-border" style="width:100%" type="text" name="sobrenome"/>
            </td>
        </tr>
        <tr>
            <td>
                Endereço:
            </td>
            <td>
                <input class="form-control input-border" style="width:100%" type="text" name="endereco"/>
            </td>
        </tr>
        <tr>
            <td>
                Cidade:
            </td>
            <td>
                <input class="form-control input-border" style="width:100%" type="text" name="cidade"/>
            </td>
        </tr>
        <tr>
            <td>
                Estado:
            </td>
            <td>
                <input class="form-control input-border" style="width:100%" type="text" name="estado"/>
            </td>
        </tr>
        <tr>
            <td>
                Usuário:
            </td>
            <td>
                <input class="form-control input-border" style="width:100%" type="text" name="usuario"/>
            </td>
        </tr>
        <tr>
            <td>
                Senha:
            </td>
            <td>
                <input class="form-control input-border" style="width:100%" type="password" name="senha"/>
            </td>
        </tr>
        <tr>
            <td>
                Confirmar senha:
            </td>
            <td>
                <input class="form-control input-border" style="width:100%" type="password" name="confirmar_senha"/>
            </td>
        </tr>
        </table>
        <button class="btn btn-primary" style="margin-top: 15px" type="submit" name="cadastrar"><b>CADASTRAR</b></button>
    </form>
    </div>
</body>
        
    