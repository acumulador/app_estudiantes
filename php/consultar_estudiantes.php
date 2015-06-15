<?php
include('conex.php');

$PHP_grupo = $_POST["txtGrupo"];
// $PHP_grupo = $_GET["txtGrupo"];

$datos=mysql_query("SELECT * FROM tbl_estudiantes WHERE grupo ='$PHP_grupo'");

$arrDatos = array();
while ($rs=mysql_fetch_array($datos))
{
        $arrDatos[] = array_map('utf8_encode', $rs);
}

echo json_encode($arrDatos);

?>
