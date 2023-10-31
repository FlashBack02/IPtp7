<?php
// ALGORITMO de una VETERINARIA
 /** Función cargarMascotas sin parámetros formales, que retorna un arreglo Multimensional  
  * @return ARRRAY */
function cargarMascotas(){
    $misMascotas  = [];
    $misMascotas[0] = ['nombre'=> "Gonzalo", 'edad'=> 9, 'tipo'=> "perro"];
    $misMascotas[1] = ['nombre'=> "Peggy", 'edad'=> 3, 'tipo'=> "puerco"];
    $misMascotas[2] = ['nombre'=> "Harry", 'edad'=> 4, 'tipo'=> "hanster"];
    return $misMascotas;
}

/** Función cuyo parámetro es un arreglo Multidimensional de Mascotas y, utilizando estructura repetitiva, muestra los datos en pantalla de todas las mascotas (nombre, edad y tipo)
 * @param ARRAY $misMascotas */
function listarMascotas($misMascotas){
    // INT $cantMasc, $i
    $cantMasc = count($misMascotas);
    for ($i = 0; $i < $cantMasc; $i++){
        echo $misMascotas[$i]['nombre'] . " es ". $misMascotas[$i]['tipo'] . " de ". $misMascotas[$i]['edad']. " años. \n";
    }
}


/** Función buscarPrimerMenorA, cuyos dos parámetros de entrada formal son: un arreglo Multidimensional
 * de mascotas y un entero que representan la edad. La función debe retornar -1 si no existe una mascota menor a la 
 * edad ingresada. Si existe una mascota menor a dicha edad, la función debe retorna la primer mascota que cumpla con dicha condición.
 * @param ARRAY $misMascotas
 * @param INT $edad
 * @return STRING */
function buscarPrimerMenorA($misMascotas, $edad){
    // $INT $i, $cantMasc
    //STRING $menorM
    $i = 0;
    $cantMasc = count($misMascotas);
    $menorM = "-1";
    while($menorM == "-1" && $i < $cantMasc){
        if($misMascotas[$i]['edad'] < $edad) {
            $menorM = $misMascotas[$i]['nombre'];
        }
        $i++;
    }
    return $menorM;
    
}

//Principal
// ARRAY $masc
//INT $edadM
//STRING $mascMen
$masc = cargarMascotas();
echo "Las mascotas en la lista son: \n \n";
$lista = listarMascotas($masc);

//Llamar función buscarPrimerMenorA
echo "\n \n Ingrese una edad: \n ";
$edadM = trim(fgets (STDIN));
$mascMen = buscarPrimerMenorA($masc, $edadM);
if($mascMen != "-1"){
    echo "\n " . $mascMen . " es la primer máscota menor a ". $edadM. " años. \n \n";
}else{
    echo " \n No hay mascotas menores a ". $edadM. "\n \n";
}

?>
