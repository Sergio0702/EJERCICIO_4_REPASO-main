<?php

// Función que lanza el dado y devuelve el resultado
function lanzarDado(){
    return rand(1, 6); // Generar número aleatorio entre 1 y 6 y devolverlo
}

function mostrarImgDado($numero){
    echo '<img src="img/dado'.$numero.'.svg" alt="">';
}

function numeroDadoEliminar (){
    $numero = rand(1, 6); // Generar número aleatorio entre 1 y 6 y devolverlo
    return $numero;
}

function borrarDados ($array, $numero){
    // Con array_diff usamos los numero que le hayamos dicho.
    $resultado = array_diff($array, array($numero));
    // Con array_ values reindexamos los indices del array.
    $resultado = array_values($resultado);
    return $resultado;
}



// Mostrar por pantalla.
echo 'TIRADA DE 6 DADOS: <br><br>';
$numeroDados=[];
for ($i=0; $i<6; $i++){
    $numeroDados[$i]= lanzarDado();
    mostrarImgDado($numeroDados[$i]);
};
echo '<br><br>';

echo 'DADO A ELIMINAR: <br><br>';
$numeroEliminar = numeroDadoEliminar();
mostrarImgDado($numeroEliminar);
echo '<br><br>';

echo 'DADO  RESTANTES: <br><br>';
$nuevoArraySinDadosBorrados = borrarDados($numeroDados, $numeroEliminar);

for ($i =0; $i<count($nuevoArraySinDadosBorrados); $i++){
    mostrarImgDado($nuevoArraySinDadosBorrados[$i]);
};

?>