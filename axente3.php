<?php
         header('Content-Type: text/html; charset=UTF8');
         echo "<pre>"; print_r($_REQUEST); echo"</pre>";

        $pesetas=$_REQUEST['Pesetas'];
        $total=$pesetas/166;

        echo "<br/>O valor recibido do campo Pesetas é: ".$pesetas;
        echo "<br/>O valor recibido da conversión é: ".$total; 




?>