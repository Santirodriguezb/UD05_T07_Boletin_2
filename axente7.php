<?php

        header('Content-Type: text/html; charset=UTF8');
        echo "<pre>"; print_r($_REQUEST); echo"</pre>";

        $total = $_REQUEST['total'];
        $baseimponible=($total*0.21);
        echo "La base imponible es $baseimponible"

?>