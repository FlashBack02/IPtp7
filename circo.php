<?php
/** Función leerDatosCirco, sin parámetro formal, que solicita a un usuario los datos de "nombre", "finicio", 
 * "valorEntrada" y "cantPayasos" de un circo y los almacena en un arreglo asociativo, retornandolos.
 * @return ARRAY */
function leerDatosCirco(){
    //ARRAY $datosCirco
    $datosCirco = [];
    echo "Ingrese el nombre del circo: \n";
    $datosCirco['nombre'] = trim(fgets(STDIN));
    echo "Ingrese el finicio del circo: \n";
    $datosCirco['finicio'] = trim(fgets(STDIN));
    echo "Ingrese el valorEntrada del circo: \n";
    $datosCirco['valorEntrada'] = trim(fgets(STDIN));
    echo "Ingrese el cantPayasos del circo: \n";
    $datosCirco['cantPayasos'] = trim(fgets(STDIN));
    return $datosCirco;
}

// Programa principal que invoca a la función leerDatosCirco y que con la función print_r de php muestra los datos del circo
//ARRAY $circo
$circo = leerDatosCirco();
print_r($circo);

?>