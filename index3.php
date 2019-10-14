<?php

include_once ('estados.php');
$digits_needed=8;
function multiexplode ($delimiters,$string) {

    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}


$fila = 1;
if (($gestor = fopen("c.csv", "r")) !== FALSE) {
    while (($datos = fgetcsv($gestor, 1000, ",")) !== FALSE) {
        $random_number='55';
        $count=0;
        $numero = count($datos);
        $fila++;
        $ee =$estados[rand(1,32)];
        echo $fila.": ".$datos[0]." ".$datos[1]." ".$datos[2];
        echo " |  ".$datos[4];
        echo " | ".$ee;
        echo " | ".$edo[rand(1,2)];
        $f = explode('/',$datos[4]);
        $gen=  substr(trim($datos[0]), -1)=='A'?'M':'H';
        echo  " | ".$datos[1][0].$datos[1][1].$datos[2][0].$datos[0][0].$f[2][2].$f[2][3].$f[1].$f[0].$gen.$ee[0].$datos[0][2].$datos[1][2].$datos[2][2].$datos[1][2].rand(0,5).rand(5,9);
        $gg = $gen=='H'?'masculino':'femenino';
        echo " | ".$gg;
        echo " | ".$dd[rand(1,4)];
        while ( $count < $digits_needed ) {
            $random_digit = mt_rand(0, 9);
            $random_number .= $random_digit;
            $count++;
        }
        echo " | ".$random_number;
        echo  " | ".$datos[1][0].$datos[1][1].$datos[2][0].$datos[0][0].$f[2][2].$f[2][3].'@email.com';
        echo " | ".$edoe[rand(1,2)];

        echo "<br> ";

        $exploded = multiexplode(array("NO","NO.","No","no",'#'),$datos[3]);
        echo " | ".$exploded[0];
        echo " | ";echo $exploded[1]?$exploded[1]:1231;
        echo " | "."0";
        echo " | ".$datos[5];
        echo " | ".$datos[6];
        echo " | ".$datos[7];
        echo " | ".$estados[9];
        echo " | ".$datos[8];
        echo " | ".$datos[9];
        echo "<br>---------------<br> ";



        /*for ($c=0; $c < $numero; $c++) {
            echo $datos[$c] . "<br />\n";
        }*/
    }
    fclose($gestor);
}
?>