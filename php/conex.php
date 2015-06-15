<?php

$servidor="localhost"; 
$usuario="root"; 
$clave=""; 
$bd="edusoftg_estudiantes";

// $servidor="localhost"; 
// $usuario="edusoftg_jklos"; 
// $clave="jk71218532"; 
// $bd="edusoftg_estudiantes";

mysql_connect("$servidor","$usuario","$clave");	
mysql_select_db("$bd");

?>