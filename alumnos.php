<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
  <link rel="stylesheet" href="css/menu.css">

	<title>ALUMNOS</title>
   	<header><h1 align="center"style="font-family: Arial, Helvetica, sans-serif; font-size: xx-large; color: #3179f5; font-weight: bold;">Sistema De Tutorias Del Instituto Tecnologico De Campeche version 1.1</h1></header>
<style>
.info, .exito, .alerta, .error {
       font-family:Arial, Helvetica, sans-serif; 
       font-size:15px;
       border: 1px solid #00529B;
       margin: 10px 0px;
       padding:15px 10px 15px 50px;
       background-repeat: no-repeat;
       background-position: 10px center;
       cursor:pointer;
       width:180px; height:20px;
       margin:;
       color:white;

}
.info {
       color: ;
       background-color: #BDE5F8;
       background-image: url('./IMAGENES/png/Knob Upload.png');
}


.a{
  text-decoration:none;
  
  


}
</style>
</head>
<body>
	<div class="contenedor">
		
<h2> </h2>
 
<div id="columna">
<h2></h2>
<ul>
  <ul>
  <li class="btn"><a href='#marco0'><span><b>MENÚ</b></span></a></li>
   <li class='btn'><a href='#marco1'><span>Imprimir Horario</span></a></li>
   <li class='btn'><a href='#marco2'><span>Revisar Anuncios</span></a></li>
   <li class='btn'><a href='#marco3'><span>Descarga de Archivos</span></a></li>
</ul>
</div>
</ul>
</div>
 
<div id="contenido">
<div id="marco0">
<h2 class="h2">BIENVENIDO ALUMNO SELECCIONA UNA ACCION DEL MENÚ </h2>
<center>
<img src="IMAGENES/escudo_itcampeche.jpg" width="350" height="350" /></center>


</div>
<div id="marco1"><img src="IMAGENES/escudo_itcampeche.jpg" width="350" height="350"  class="imn"/>

<h2 class="h2">Horario De Tutorias</h2>
<div class="alumno"><br><br>
<form action="horario.php" method="post">
<table align="center">
  <tr>
  	<td> <label><b>MATRICULA</b></label></td><td><input type="text" name="matricula" placeholder="Escribe tu matricula"/></td>
  </tr>
  <tr>
  	<td></td>

  </tr>
</table><center><br>

<input type="submit" name="Buscar" value="Imprimir Horario"/></center>
</form>
</div>
</div>
 
<div id="marco2"><img src="IMAGENES/escudo_itcampeche.jpg" width="350" height="350"  class="imn"/>
<h2 class="h2">Avisos Importantes</h2>
<?php
  /*nos conectamos ala base de datos*/
$conexion= mysql_connect("localhost", "root", "");
if(!$conexion) die ("error al conectar a la base de datos <br/>".mysql_error());
mysql_select_db("tutorias") OR die ("errorde conexion a la abase de datos");
/*realizamos la consulta ala base de datos*/

$sql="select * from anuncios order by id desc limit 1";
$result= mysql_query($sql) or die(mysql_error());
if(mysql_num_rows($result)==0) die ("no hay ningun registro para mostrar");

/*despelegamos los registros uno por uno en la tabla*/
echo "<center><table  WIDTH=100 border=0  cellpadding=5 cellspacing=0 > ";


echo "<tr>
   
   <tr>
   
   </tr>";
   /*los datos*/
   while($row= mysql_fetch_array($result))
   {
    echo"<center><tr>
    
   


    <center><div class='tabla'>
    <table border='1'cellpadding=5 cellspacing=5>
    <tr><td> Titulo:</td><td>".$row['titulo']."<br></td>
     <tr><td>Anuncio:</td><td heigth=200>".$row['anuncio']."<br></td></tr>
     <tr><td>fecha:</td><td>".$row['fecha']."<br></td></tr>
     



     </tr> </center>";


    }


    echo"</table></center>";








?>
<br>
<br><center>
 <input type="button" name="actualizzar" value ="ver nuevos anuncios" onclick="document.location.reload();" class="butonver"/></center>
</div>
<div id="marco3"><img src="IMAGENES/escudo_itcampeche.jpg" width="350" height="350"  class="imn"/>
<h2 class="h2">Descarga de documentos </h2>

<?php
//NOS CONECAMOS A LA BASE DE DATOS
//REMPLAZEN SUS VALOS POR LOS MIOS
mysql_connect("localhost","root","") or die("No se pudo conectar a la base de datos");

//SELECCIONAMOS LA BASE DE DATOS CON LA CUAL VAMOS A TRABAJAR CAMBIEN EL VALOR POR LA SUYA
mysql_select_db("tutorias");

//CONSTRUIMOS EL QUERY PARA OBTENER LOS ARCHIVOS
$qry="select
docs.*,
CASE docs.tipo
WHEN 'image/png' then
'image'
WHEN 'image/jpg' then
'image'
WHEN 'image/gif' then
'image'
WHEN 'image/jpeg' then
'image'
ELSE
'file'
END as display
from tbl_documentos AS docs";

//EJECUTAMOS LA CONSULTA
$res=mysql_query($qry) or die("Query: $qry ".mysql_error());

//RECORREMOS LA CONSULTA
//*********NOTA DONDE DICE alt='$obj-/>titulo' QUITA LA BARRA PARA QUE QUEDE ASI:
// alt='$obj->titulo'
// EL WORDPRESS ME ESTA REMPLAZANDO EL CODIGO

while ($obj=mysql_fetch_object($res)) {
//SI EL TIPO DE DOCUMENTO ES UMAGEN LA MOSTRAMOS SI NO SOLO HACEMOS EL LINK
switch ($obj->display){
case "image":
echo "

<div align='center'>
<a href='verarchivo.php?id_documento={$obj->id_documento}'>
<img alt='$obj->titulo' src='verarchivo.php?id_documento={$obj->id_documento}'/>
</a>
</div> ";
break;
case "file":
echo "

<center>
<a href='verarchivo.php?id_documento={$obj->id_documento}' class='a'><div align='center' class='info'>$obj->titulo</div></a>
</center>
 ";
break;
}

}

//CERRAMOS LA CONEXION
mysql_close();
?>

</div>

</div>

</div>

</div>

</body>
</html>
<footer align="center">
 
	<p><h4><kbd style="color: #3179f5;">Elaborado Por La Alumna De Ing. En Sistemas Computacionales Del Instituto Tecnologico De Campeche:
       <br>Bonny Jhovana Chable</h4> </kbd>

	</p>
	
</footer>