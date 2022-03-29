<?php
// IMPRIMIR EN PATALLA
echo "Hola mundo";
echo "<br />Hola cruel mundo <br /> <h1>estoy aprendiendo PHP</h1>";

// VARIABLES
$nombre = "Andres";
$Nombre = "Jefferson";

// CONCATENACION DE CADENAS Y VARIABLES
echo $nombre."&nbsp;".$Nombre;
echo "<br/>";

// OPERACIONES ARITMETICAS
$num1= 5;
$num2= 78;

$suma = $num1 + $num2;

echo $suma;

echo "<br/>La variable \$suma tiene el valor de $suma <br/>";

$modulo = $num2 % 2;

// CONDICIONADORES
if($modulo === 0){
    echo "El numero es Par";
} else{
    echo "El numero es Impar";
}

echo "<br/>";


// CICLO DE ITERACION
for($i = 0; $i <= 10; $i++){
    echo $i."<br/>";
}

?>