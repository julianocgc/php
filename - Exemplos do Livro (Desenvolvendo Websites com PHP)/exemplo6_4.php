<?php

   function clubes ( )
   {
         $clubes [ ] = "Gr�mio";
         $clubes [ ] = "Palmeiras";
         $clubes [ ] = "Flamengo";
         $clubes [ ] = "Atl�tico Mineiro";
         $clubes [ ] = "Bahia";

         return $clubes;
   }

   // in�cio do programa principal

   $nomes = clubes( );

   for ($i=0 ; $i < sizeof($nomes) ; $i++)
   {
        echo "\$nomes[$i] vale $nomes[$i] <br>";
   }

?>
