<?php

class Surtidor {
    static $contadorObjetos = 0;

    function __construct () {
        self::$contadorObjetos++;
    }

    function mostrar () {
        echo self::$contadorObjetos;
        echo "<br>";
    }
}