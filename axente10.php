<?php
    header('Content-Type: text/html; charset=UTF8');
    echo "<pre>"; print_r($_REQUEST); echo"</pre>";

    $Mb=$_REQUEST['Mb'];
    $Kb=$Mb*1000;
    echo "$Mb Mbs son $Kb Kbs";
?>