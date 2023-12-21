<?php
echo "Hola Mundo";
echo "<br>";

$numero = 45;
echo $numero;
echo "<br>";
echo gettype($numero);
echo "<br>";

$decision = true;
echo $decision;
echo "<br>";
echo gettype($decision);
echo "<br>";

$colores = array("rojo", "verde", "azul");
echo $colores[0];
echo "<br>";
echo gettype($colores);
echo "<br>";

$persona = array("nombre" => "Juan", "apellido" => "Perez", "edad" => 25);
echo $persona["nombre"];
echo "<br>";
echo gettype($persona);
echo "<br>";

$frutas = (object)["fruta1" => "manzana", "fruta2" => "pera"];
echo $frutas->fruta1;
echo "<br>";
echo gettype($frutas);
echo "<br>";

function saludo()
{
    echo "hola";
}

saludo();

echo "<br>";

function despedida($adios)
{
    echo $adios;
}

despedida("adios");
?>