<?php
ini_set('default_charset','UTF-8');
	for($i = 0, $k = 10; $i < 10 ; $i++, $k--)
	{
		echo "\$i vale $i e \$k vale $k";
		if ($i == $k)
		{
			echo " (Os valores são iguais!)";
		}
		echo "<br>";
	}
?>