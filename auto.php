<?php
$automovil = (object)["marca" => "Toyota", "modelo" => "Corolla"];
$automovil1 = (object)["marca" => "Honda", "modelo" => "Civic"];

function mostrar($automovil)
{
    echo "<p>Hola! soy un $automovil->marca, modelo $automovil->modelo</p>";
}

mostrar($automovil);
?>