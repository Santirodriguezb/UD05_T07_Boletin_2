<?php
    header('Content-Type: text/html; charset=UTF8');
    echo "<pre>"; print_r($_REQUEST); echo"</pre>";

    $radio=$_REQUEST['radio'];
    $altura=$_REQUEST['altura'];
    $volumen=(1/3)*pi()*pow($radio,2)*altura;
    echo "El volumen del cono va a ser $volumen cm3";



?>