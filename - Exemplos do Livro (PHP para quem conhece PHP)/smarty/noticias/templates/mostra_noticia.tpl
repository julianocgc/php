<html>
<head>
<title>{$titulo}</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<p>
	<h1>{$titulo}</h1><br>
	<i>{$data|date_format:"Data: %d/%m/%Y  Hora: %H:%M"}</i>
</p>
<hr>
<p>{$texto}</p>
<p align="center"><a href="javascript:history.back()">Voltar</a></p>
</body>
</html>
