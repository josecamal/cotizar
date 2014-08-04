<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="css/estilo.css">


       
</head>
<body>
<footer>
	<a href='maestros.php#marco5' class='boton'>Subir otro archivo </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='maestros.php' class='boton'>Regresar al menú </a>
</footer>
	
</body>
</html>



<?php
//ESTA FUNCION LA USAREMOS PARA OBTENER EL TAMAÑO DE NUESTRO ARCHIVO
function filesize_format($bytes, $format = '', $force = ''){
$bytes=(float)$bytes;
if ($bytes < 1024){
$numero=number_format($bytes, 0, '.', ',');
return array($numero,"B");
}
if ($bytes< 1048576){
$numero=number_format($bytes/1024, 2, '.', ',');
return array($numero,"KBs");
}
if ($bytes>= 1048576){
$numero=number_format($bytes/1048576, 2, '.', ',');
return array($numero,"MB");
}
}
//VERIFICAMOS QUE SE SELECCIONO ALGUN ARCHIVO
if(sizeof($_FILES)==0){
echo "No se puede subir el archivo";
exit();
}
// EN ESTA VARIABLE ALMACENAMOS EL NOMBRE TEMPORAL QU SE LE ASIGNO ESTE NOMBRE ES GENERADO POR EL SERVIDOR

$archivo = $_FILES["archivo"]["tmp_name"];
//Definimos un array para almacenar el tamaño del archivo
$tamanio=array();
//OBTENEMOS EL TAMAÑO DEL ARCHIVO
$tamanio = $_FILES["archivo"]["size"];
//OBTENEMOS EL TIPO DE ARCHIVO
$tipo = $_FILES["archivo"]["type"];
//OBTENEMOS EL NOMBRE REAL DEL ARCHIVO 
$nombre_archivo = $_FILES["archivo"]["name"];

extract($_REQUEST);
//VERIFICAMOS DE NUEVO QUE SE SELECCIONO ALGUN ARCHIVO
if ( $archivo != "none" ){
//ABRIMOS EL ARCHIVO EN MODO SOLO LECTURA
// VERIFICAMOS EL TAÑANO DEL ARCHIVO
$fp = fopen($archivo, "rb");
//LEEMOS EL CONTENIDO DEL ARCHIVO
$contenido = fread($fp, $tamanio);
//CON LA FUNCION addslashes AGREGAMOS UN \ A CADA COMILLA SIMPLE ' PORQUE DE OTRA MANERA
//NOS MARCARIA ERROR A LA HORA DE REALIZAR EL INSERT EN NUESTRA TABLA
$contenido = addslashes($contenido);
//CERRAMOS EL ARCHIVO
fclose($fp);
// VERIFICAMOS EL TAÑANO DEL ARCHIVO
if ($tamanio <1048576){
//HACEMOS LA CONVERSION PARA PODER GUARDAR SI EL TAMAÑO ESTA EN b ó MB
$tamanio=filesize_format($tamanio);
}

//CREAMOS NUESTRO INSERT
$qry = "INSERT INTO tbl_documentos ( titulo,nombre_archivo, descripcion, contenido, tamanio,tamanio_unidad, tipo ) VALUES
('$titulo','$nombre_archivo', '$descripcion','$contenido','{$tamanio[0]}','{$tamanio[1]}', '$tipo')";

//NOS CONECAMOS A LA BASE DE DATOS

mysql_connect("localhost","root","") or die("No se pudo conectar a la base de datos");

//SELECCIONAMOS LA BASE DE DATOS CON LA CUAL VAMOS A TRABAJAR
mysql_select_db("tutorias");

//EJECUTAMOS LA CONSULTA
mysql_query($qry) or die("Query: $qry <br />Error: ".mysql_error());

//CERRAMOS LA CONEXION
mysql_close();
echo "<center><h3><kbd> LA Informacion que Acabas de Ingresar es la siguiente:</kbd></h3> <center><br>";

echo "
		<center><div class='tabla'>
		<table border='1'>
		<tr><td> Titulo:</td><td>".$_POST['titulo']."<br></td>
		 <tr><td>descripcion:</td><td>".$_POST['descripcion']."<br></td></tr>
		 ";
		

}else{
echo "<h2>No fue posible subir el archivo</h2>";
 
}
?>
