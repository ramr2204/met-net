<?php

//echo 'editar.php?id=1&color=success&descripcion=este es un color verde';

//echo '<br>';
$id = $_GET['id'];
$color = $_GET['nombre'];
$descripcion = $_GET['apellido'];

//echo $id;
//echo'<br>';
//echo $color;
//echo'<br>';
//echo $descripcion;

include_once 'conexion.php';

$sql_editar= 'UPDATE usuario SET name=?,apellido=? WHERE id=?';
$sentencia_editar = $pdo->prepare($sql_editar);
$sentencia_editar->execute(array($nombre,$apellido,$id));

//cerramos conexion base de datos sentencia
$sentencia_agregar = null;
$pdo = null; 
header('location:index.php');