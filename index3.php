<?php
$enlace = mysqli_connect("127.0.0.1", "root", "password", "a");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;

echo "<br><br><br>";
$fp = fopen('test.txt', 'w');

include_once ('estados.php');
/*
for ($i=0;$i<100;$i++){
    $e=  floor(nrand(1, .1));
    if ($enlace->query("insert into a values($e)") === TRUE) {
        printf("ok \n");
    }
    echo "| ".($e);
}
echo "<br>";


die();*/


$digits_needed=8;
function multiexplode ($delimiters,$string) {

    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}
fwrite($fp, "1000 7 0\n");

$fila = 1;
if (($gestor = fopen("c.csv", "r")) !== FALSE) {
    while (($datos = fgetcsv($gestor, 1000, ",")) !== FALSE) {
        $fila++;
        /*if ($fila == 500){
            die("salio");
        }
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
        echo "<br>---------------<br> ";*/

        $__PUT ="";
        $__PUT.="$fila ";


        $b =floor(nrand(2.5, .8));
        $bc =floor(nrand(500, 8));

        echo " | 19.".$b.$bc;
        $__PUT.= "19.".$b.$bc;

        $bb1 =floor(nrand(2, .4));
        $bc1 =floor(nrand(500, 8));
        echo " | -99.".$bb1.$bc1;
        $__PUT.= " -99.".$bb1.$bc1;

        $b =floor(nrand(2, .4));
        if ($b!= 1 || $b != 2){
            $b=  rand(1,2);
        }
        echo "| ".$b;
        $__PUT.= " ".$b;



        $e=  floor(nrand(8, 2));
        echo "| ".($e*1000);
        $__PUT.= " ".($e*1000);


        $bb =floor(nrand(2, .4));
        $aa= $bb!=1||$bb!=2?$bb:rand(1,2);
        echo "| ".$aa;
        $__PUT.= " ".$aa;

        $bb1 =floor(nrand(2, .4));
        if ($bb1!= 1 || $bb1 != 2){
            $bb1=  rand(1,2);
        }
        echo "| ".$bb1;
        $__PUT.= " ".$bb1;


        $bb12 =floor(nrand(2, .4));
        if ($bb12!= 1 || $bb12 != 2){
            $bb12=  rand(1,2);
        }
        echo "| ".$bb12;
        $__PUT.= " ".$bb12;

        echo "| ".rand(1,8)."\n";
        //$__PUT.= " ".rand(1,8)."\n";
        $__PUT.= " 0\n";

        fwrite($fp, $__PUT);




        echo "<br> ";

        /*if ($enlace->query($sql) === TRUE) {
            printf("ok \n");
        }*/



        /*for ($c=0; $c < $numero; $c++) {
            echo $datos[$c] . "<br />\n";
        }*/
    }

    fclose($fp);
    fclose($gestor);
    mysqli_close($enlace);



}
?>