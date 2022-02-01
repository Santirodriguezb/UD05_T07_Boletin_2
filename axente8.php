<?php

    header('Content-Type: text/html; charset=UTF8');
    echo "<pre>"; print_r($_REQUEST); echo"</pre>";

    $horas=$_REQUEST['horas'];
    $sueldototal=($horas*12);
    echo "Cobrará $sueldototal por haber trabajado $horas horas";



?>