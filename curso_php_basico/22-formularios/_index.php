<hrml>
<body>
<!-- método $_POST= dados são processados pelo script (arquivo) em action -->
<form action="dados.php" method="POST">
Nome: <input type="text" name="nome"><br>
Email: <input type="email" name="email"><br>
<!-- <input type="submit" name="enviar" value="Enviar"> -->
<button type="submit"> Enviar </button>

<hr>

<!-- método $_GET= dados são processados e exibidos na URL -->
<form action="dados.php" method="GET">
Nome: <input type="text" name="nome"><br>
Email: <input type="email" name="email"><br>
<!-- <input type="submit" name="enviar" value="Enviar"> -->
<!-- <button type="submit"> Enviar </button><br> -->

<a href="dados.php?idade=25&sobrenome=Santos">Enviar dados</a>
</form>

</body>
</hrml>