<?php
         header('Content-Type: text/html; charset=UTF8');
         echo "<pre>"; print_r($_REQUEST); echo"</pre>";

         
         $Primeironum=$_REQUEST['PrimeiroNum'];
         $Segundonum=$_REQUEST['SegundoNum'];
         $total=$Primeironum*$Segundonum;
         
         echo "<br/>O valor recibido do campo Primeiro Numero é: ".$Primeironum;
         echo "<br/>O valor recibido do campo Segundo Numero é: ".$Segundonum;
         echo "<br/>O valor recibido da multiplicacion é: ".$total;   

?>