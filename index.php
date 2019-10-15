<?php

echo "Inicio\n";

$enlace = mysqli_connect("127.0.0.1", "root", "password", "cendi_2");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;



$pagina_inicio = file('/home/charly/git/KNN/classification/_prediction.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$anio = 2019;
?>
<!--<table>-->
<?php
echo "<pre>";
foreach ($pagina_inicio as $line){

    $sql= "";

    $items = explode('---',$line);
    $id = intval($items[2]);
    $cal  = number_format($items[1], 4, '.', '');
    $cendi = $items[0];
    $sql .= "insert into result values (null,$id,$cendi,$cal,$anio,'2019-10-06 19:16:29','2019-10-06 19:16:29')";
    print_r([$id,$cal,$cendi]);
    echo $sql;

    //print_r([$items[1],$cal]);
    if ($enlace->query($sql) === TRUE) {
    printf("ok \n");
    }else{
        printf("no \n");
    }
    echo "<br>";
}
echo "</pre>";



mysqli_close($enlace);
?>
<!--</table>-->


<?php

echo "\nFin\n";



?>