<?php

require_once ("Gasolinera.php");

$gaso1 = new Gasolinera ("Alburquerque", "GALP");


/*
$c1 = new Cliente ("Juan", "01234567A");
$c2 = new Cliente ("Pepe", "21444874J");


//Llamando a la funcion anadirRepostajeUno
$repo1 = new Repostaje (50, "2018-02-01");
$c1->anadirRepostajeUno ($repo1);

//Llamando a la funcion anadirRepostajeDos
$c1->anadirRepostajeDos (50, "2016-04-02");

$gaso1->altaCliente($c1);
$gaso1->altaCliente($c2);
$gaso1->bajaCliente("01234567A");


$e = new Empleado ("Sandra", 1);
$e1 = new Empleado ("Carmen", 2);
$gaso1->altaEmpleado ($e);
$gaso1->altaEmpleado ($e1);
$gaso1->bajaEmpleado ($e);


*/


$s1 = new SurtidorGasolina (1.40 , "95");
$s2 = new SurtidorGasolina (1.40 , "95");
$s3 = new SurtidorGasolina (1.40 , "95");
$s1 = new SurtidorGasoil (false);
$s2 = new SurtidorGasoil (false);
$s3 = new SurtidorGasoil (false);
$gaso1->anadirSurtidor ($s1);
$gaso1->anadirSurtidor ($s2);
$gaso1->anadirSurtidor ($s3);
$gaso1->anadirSurtidor ($s1);
$gaso1->anadirSurtidor ($s2);
$gaso1->anadirSurtidor ($s3);




$gaso1->mostrar();








//Imprimir lo que esta ocurriendo
echo "<pre>";
print_r ($gaso1);
echo "</pre>";