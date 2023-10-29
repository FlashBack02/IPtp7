<?php
/** Funcion que crea un arreglo a partir de temperaturas ingresadas por el usuario
 * @param INT $n
 * @return ARRAY
 */
function leerTemperaturas($n){
    //ARRAY $temperaturas
    $temperaturas = [];
    for($i = 0; $i < $n; $i++){
        echo "Ingrese la temperatura ". ($i+1) . "\n";
        $temperaturas[$i] = trim(fgets(STDIN));
    } return $temperaturas;
}
/** Muestra las temperaturas del arreglo en pantalla
 * @param ARRAY $temperaturas
 */
function listarTemperaturas($temperaturas){
    //INT $nTem
    $nTem = count($temperaturas);
    for($i = 0; $i < $nTem; $i++){
        echo "La temperatura ". ($i+1) . " es: ". $temperaturas[$i] . "\n";
    } 
}
/** Da el promedio de temperaturas
 * @param ARRAY $temperaturas
 * @return FLOAT
 */
function promTemperaturas($temperaturas){
    // FLOAT $tempSup, $sumTem
    //INT $nTem,
    $nTem = count($temperaturas);
    $sumTem = 0;
    for($i = 0; $i < $nTem; $i++){
        $sumTem = $sumTem + $temperaturas[$i]; 
    } return ($sumTem/ $nTem);
}
/** Función que según una temperatura superior dada por el usuario proporciona el porcentaje de temperaturas del arreglo la superan.
 * @param ARRAY $temperaturas
 * @return FLOAT
 */
function porcTemperaturasSuperiores($temperaturas){
    // FLOAT $tempSup
    //INT $nTem, $cont
    echo "Ingrese una temperatura superior para saber cual temperatura de la lista la supera \n";
    $tempSup = trim(fgets(STDIN));
    $nTem = count($temperaturas);
    $cont = 0;
    for($i = 0; $i < $nTem; $i++){
        if ($temperaturas[$i] > $tempSup) {
            $cont++;
        }
    } return (($cont * 100)/ $nTem);
}
/** Función que retorna el indice de la menor temperatura
 * @param ARRAY $temperaturas
 * @return INT
 */
function minTemperaturas($temperaturas){
    // FLOAT $maxTemp
    //INT $nTem, $ind
    $nTem = count($temperaturas);
    $menTemp = +9999;
    $ind = 0;
    for($i = 0; $i < $nTem; $i++){
        if ($temperaturas[$i] < $menTemp) {
            $menTemp = $temperaturas[$i];
            $ind = $i;
        }
    } return $ind;
}
/** Función que retorna el indice de la mayor temperatura
 * @param ARRAY $temperaturas
 * @return INT
 */
function maxTemperaturas($temperaturas){
    // FLOAT $maxTemp
    //INT $nTem, $ind
    $nTem = count($temperaturas);
    $maxTemp = -9999;
    $ind = 0;
    for($i = 0; $i < $nTem; $i++){
        if ($temperaturas[$i] > $maxTemp) {
            $maxTemp = $temperaturas[$i];
            $ind = $i;
        }
    } return $ind;
}

/** Función que crea un array con la temperatura menor y mayor
 * @param ARRAY $temperaturas
 * @return ARRAY
 */
function extremosTemperaturas($temperaturas){
    // FLOAT $maxTemp, $menTemp
    //ARRAY $extremo
    //INT $nTem
    $nTem = count($temperaturas);
    $maxTemp = -9999;
    $menTemp = +9999;
    $extremo = [];
    for($i = 0; $i < $nTem; $i++){
        if ($temperaturas[$i] > $maxTemp) {
            $maxTemp = $temperaturas[$i];
            $extremo['max'] = $temperaturas[$i];
        }
        if ($temperaturas[$i] < $menTemp) {
            $menTemp = $temperaturas[$i];
            $extremo['min'] = $temperaturas[$i];
        }
    } return $extremo;
}

/** Función de menu sin parametros formales que retorna la opción elegida por el usuario
 * @return INT */
function menu(){
    // INT $rta
    echo "\n \n Ingrese una opción: \n";
    echo "1- Leer lista de temperaturas. \n";
    echo "2- Sacar el promedio de temperaturas. \n";
    echo "3- Sacar el porcentaje de temperaturas mayores a... \n";
    echo "4- Saber el indice de la menor y mayor temperatura. \n";
    echo "5- Crear un arreglo con la menor y mayor temperatura y listarlo. \n";
    echo "6- Salir. \n";
    $rta = trim(fgets(STDIN));
    return $rta;
}

//Principal
// INT $num, $indMenTem, $indMaxTem, $res
//ARRAY $temp, $extTemp
//FLOAT $supTem, $porTemp
echo "¿Cuantas temperaturas agregará a la lista? \n";
$num = trim(fgets(STDIN));
$temp = leerTemperaturas($num);
if($num > 0){
    $res =  menu();
    while($res != 6){
        switch($res){
            case 1: 
                echo "\n \n Usted a ingresado estas temperaturas: \n \n";
                echo listarTemperaturas($temp);
                echo "\n \n";
            break;
            case 2:
                $porTemp = promTemperaturas($temp);
                echo "\n \n El promedio de temperaturas es: ". $porTemp . "\n \n";
            break;
            case 3:
                $supTem = porcTemperaturasSuperiores($temp);
                echo "\n \n El porentaje de temperaturas que la superan es: " . $supTem . "% \n \n";
            break;
            case 4:
                $indMenTem = minTemperaturas($temp);
                $indMaxTem = maxTemperaturas($temp);
                echo "\n \n El indice de la menor temperatura es: " . $indMenTem . "\n";
                echo " El indice de la mayor temperatura es: " . $indMaxTem . "\n \n";
            break;
            case 5:
                 $extTemp = extremosTemperaturas($temp);
                 echo "\n \n El arreglo con la temperatura menor y mayor tiene: \n";
                 echo "  Menor temperatura: " .  $extTemp['min'] . " \n";
                 echo "  Mayor temperatura: " . $extTemp['max'] . " \n";
            break;
            default:
                echo "\n \n No existe esa opción X_X \n \n";
            break;
        }
        $res =  menu();
    }
}
else {
    echo "ERORR, debe ingresar una o más temperaturas para utilizar el programa. X_X \n";
}

?>