<?php
//NOS CONECAMOS A LA BASE DE DATOS

mysql_connect("localhost","root","") or die("No se pudo conectar a la base de datos");

//SELECCIONAMOS LA BASE DE DATOS CON LA CUAL VAMOS A TRABAJAR 
mysql_select_db("tutorias");

//CONSTRUIMOS LA CONSULTA PARA OBTENER EL DOCUMENTO
$qry="Select * from tbl_documentos where id_documento= {$_REQUEST[id_documento] }  order by id_documento desc limit 10";
$res=mysql_query($qry) or die(mysql_error()." qry::$qry");
$obj=mysql_fetch_object($res);

//OBTENEMOS EL TIPO MIME DEL ARCHIVO ASI EL NAVEGADOR SABRA DE QUE SE TRATA
header("Content-type: {$obj->tipo}");

//OBTENEMOS EL NOMBRE DEL ARCHIVO POR SI LO QUE SE REQUIERE ES DESCARGARLO
header('Content-Disposition: attachment; filename="'.$obj->nombre_archivo.'"');

//Y PO ULTIMO SIMPLEMENTE IMPRIMIMOS EL CONTENIDO DEL ARCHIVO
print $obj->contenido;

//CERRAMOS LA CONEXION
mysql_close();
?>