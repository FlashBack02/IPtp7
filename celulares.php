<?php

//Creación de los ARRAY
$celulares = ['Moto G6', 'Samsum J7', 'LG K9', 'iPhone SE','Galaxy A9'];
$valor = [22030.90, 10500.00, 27999.00, 38105.00, 17000.80];

/** Función que recibe por parámetro el arreglo de valores y retorno la suma de todos los celulares 
 * @param ARRAY $val
 * @return FLOAT */
function sumaValor($val){
    //INT $cant
    //FLOAT $sumaVal
    $cant = count($val);
    $sumaVal = 0;
    for($i = 0; $i < $cant; $i++){
        $sumaVal = $sumaVal + $val[$i];
    } return $sumaVal;
}

// Solicitar a un usuario que indique un número de celular a mostrar y muestre el nombre y el valor del celular
// INT $ind
echo "Ingrese el indice del celular a mostrar (0-4) \n";
$ind = trim(fgets(STDIN));
if ($ind <= 4 && $ind > -1){
    echo "El nombre del celular es: ". $celulares[$ind] . "\n";
    echo "El valor del celular es: ". $valor[$ind] . "$ \n \n";
}
else {
    echo "Indice no valido X_X \n";
}


//Programa principal invoca a la función y muestra el costo total de los celulares
//FLOAT $sumVal
$sumaVal = sumaValor($valor);
echo "El valor de la suma de todos los celulares es: ". $sumaVal . "$ \n \n"


?>