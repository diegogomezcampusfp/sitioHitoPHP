<?php
$n=$_POST["n"];

    $nb=bindec($n);
    $nh=dechex($nb);
    $no=decoct($nb);

    echo "<h3>El número ".$n." en decimal es: ".$nb."</h3>";
    echo "<h3>El número ".$n." en hexadecinal es: ".$nh."</h3>";
    echo "<h3>El número ".$n." en octal es: ".$no."</h3>";
