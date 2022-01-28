<?php
             header('Content-Type: text/html; charset=UTF8');
             echo "<pre>"; print_r($_REQUEST); echo"</pre>";

             $Primeironum=$_REQUEST['PrimeiroNum'];
             $Segundonum=$_REQUEST['SegundoNum'];

             $suma=$Primeironum+$Segundonum;
             $resta=$Primeironum-$Segundonum;
             $multiplicacion=$Primeironum*$Segundonum;
             $division=$Primeironum/$Segundonum;

             echo "<br/>O valor recibido do campo Primeiro Numero é: ".$Primeironum;
             echo "<br/>O valor recibido do Segundo Numero é: ".$Segundonum;
             echo "<br/>O valor recibido da suma é: ".$suma;
             echo "<br/>O valor recibido da resta é: ".$resta;  
             echo "<br/>O valor recibido da multiplicacion é: ".$multiplicacion;
             echo "<br/>O valor recibido da division é: ".$division; 







?>