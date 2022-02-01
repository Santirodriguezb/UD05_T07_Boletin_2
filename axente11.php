<?php
    header('Content-Type: text/html; charset=UTF8');
    echo "<pre>"; print_r($_REQUEST); echo"</pre>";

    $Kb=$_REQUEST['Kb'];
    $Mb=$Kb*0.001;
    echo "$Kb Kbs son $Mb Mbs"

?>