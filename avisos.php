<html>
<head>
	<meta charset="UTF-8">
<link rel="stylesheet" href="css/estilo.css">

	<title>AVISOS</title>
</head>
<footer>
	<a href='maestros.php#marco4' class='boton'>Registrar otro alumno </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='maestros.php' class='boton'>Regresar al menú </a>

</footer>


</body>
</html>

<?php

include("CONEXION.PHP");
if(isset($_POST['titulo']) && !empty($_POST['titulo'])  &&
isset($_POST['anuncio']) && !empty($_POST['anuncio']) &&
isset($_POST['fecha']) && !empty($_POST['fecha']) 

);
 


{
	$con=mysql_connect($host,$user,$pw)
	or die("problemas al conectar con el servidor");

	mysql_select_db($db,$con)
	or die(" problemas al conectar con la base de datos");

	mysql_query("INSERT INTO anuncios (titulo,anuncio,fecha) 
		VALUES ('$_POST[titulo]','$_POST[anuncio]','$_POST[fecha]')",$con);
		echo "<center><h3><kbd> LA Informacion que Acabas de Ingresar es la siguiente:</kbd></h3> <center><br>";

		echo "
		<center><div class='tabla'>
		<table border='1'>
		<tr><td> Titulo:</td><td>".$_POST['titulo']."<br></td>
		 <tr><td>Anuncio:</td><td>".$_POST['anuncio']."<br></td></tr>
		 <tr><td>fecha:</td><td>".$_POST['fecha']."<br></td></tr>
		 


		 
		 
		";
		
         
		


		
	
		
		


}



?>

