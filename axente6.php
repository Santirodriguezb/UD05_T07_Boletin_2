<?php

    header('Content-Type: text/html; charset=UTF8');
    echo "<pre>"; print_r($_REQUEST); echo"</pre>";

    $base=$_REQUEST['Base'];
    $altura=$_REQUEST['Altura'];
    $area=($base*$altura)/2;

    echo "<br/>O valor recibido da base é: ".$base;
    echo "<br/>O valor recibido da altura é: ".$altura;
    echo "<br/>A área do triángulo  é: ".$area;




?>