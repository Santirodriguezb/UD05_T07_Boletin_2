<?php
         header('Content-Type: text/html; charset=UTF8');
         echo "<pre>"; print_r($_REQUEST); echo"</pre>";

         echo "<br/>O valor recibido do campo Primeiro Numero é: ".$_REQUEST["Primeironum"];
         echo "<br/>O valor recibido do campo Segundo Numero é: ".$_REQUEST["Segundonum"];
         echo "<br/>O valor recibido da multiplicacion é: ".$_REQUEST["total"];   

         $Primeironum=($_REQUEST["Primeironum"]);
         $Segundonum=($_REQUEST["Segundonum"]);
         $total=($_REQUEST["$Primeironum" * "$Segundonum"]);

?>