<?php
         header('Content-Type: text/html; charset=UTF8');
         echo "<pre>"; print_r($_REQUEST); echo"</pre>";

        $euros=$_REQUEST['Euros'];
        $total=$euros*166;

        echo "<br/>O valor recibido do campo Euros é: ".$euros;
        echo "<br/>O valor recibido da conversión é: ".$total;   




?>