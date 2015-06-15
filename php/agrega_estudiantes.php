<?php
include('conex.php');

$PHP_documento = $_POST['txtDocumento'];
$PHP_nombre = $_POST['txtNom'];
$PHP_grupo = $_POST['cboGrupo'];
$PHP_foto = $_POST['txtFoto'];

if($inserta = mysql_query("INSERT INTO tbl_estudiantes VALUES ('$PHP_documento', '$PHP_nombre', '$PHP_grupo', '$PHP_foto')"))
{
	echo "El estudiante se ingreso correctamente!!";
}
else
{
	echo "Erro ingresando el estudiante, contacte al administrador!! ".mysql_error();
}

//echo json_encode($res);

?>