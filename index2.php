<?php

echo "Inicio\n <br>";

$enlace = mysqli_connect("127.0.0.1", "root", "password", "banco");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;


echo "Inicio\n <br>";
$pagina_inicio = file('./b.csv', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);






foreach ($pagina_inicio as $line){
    echo "<pre>";
    $line = explode(';',$line);
    var_dump($line[0]);
    var_dump($line[1]);
    var_dump($line[2]);
    var_dump($line[3]);
    echo "</pre>";


}




mysqli_close($enlace);


echo "\nFin\n";



?>