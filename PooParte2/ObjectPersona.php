<?php

include_once('Persona.php');

//creamos el objeto con los valores que se definen en el constructor
$persona = new Persona('Luis', 'Gallego', 17);

//Mostramos por pantalla loa valores
echo $persona->saludar();

//destruimos el objeto
unset($persona);