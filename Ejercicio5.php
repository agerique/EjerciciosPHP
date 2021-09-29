<?php

class pruebaDestructor
{
    function __construct() {
        print "En el constructor<br>";
    }

    function __destruct() {
        print "Destruyendo " . __CLASS__ . "<br>";
    }
}

$obj = new pruebaDestructor();