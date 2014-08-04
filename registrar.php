<html>
<head>
	<meta charset="UTF-8">
<link rel="stylesheet" href="css/estilo.css">

	<title>Registrar</title>
</head>
<body>

</body>
</html>

<?php

include("CONEXION.PHP");
if(isset($_POST['nombre']) && !empty($_POST['nombre'])  &&
isset($_POST['apellidos']) && !empty($_POST['apellidos'])  &&
isset($_POST['tel']) && !empty($_POST['tel'])  &&
isset($_POST['correo']) && !empty($_POST['correo'])  &&
isset($_POST['grupo']) && !empty($_POST['grupo'])  &&
isset($_POST['carrera']) && !empty($_POST['carrera'])  &&
isset($_POST['fecha']) && !empty($_POST['fecha']) && 
isset($_POST['sexo']) && !empty($_POST['sexo'])  &&
isset($_POST['matricula']) && !empty($_POST['matricula'])&&  
isset($_POST['lunes']) && !empty($_POST['lunes'])  &&
isset($_POST['martes']) && !empty($_POST['martes']) && 
isset($_POST['miercoles']) && !empty($_POST['miercoles']) && 
isset($_POST['jueves']) && !empty($_POST['jueves'])&&  
isset($_POST['viernes']) && !empty($_POST['viernes'])  

);
 


{
	$con=mysql_connect($host,$user,$pw)
	or die("problemas al conectar con el servidor");

	mysql_select_db($db,$con)
	or die(" problemas al conectar con la base de datos");

	mysql_query("INSERT INTO tutorados (nombre,apellidos,tel,correo,grupo,carrera,fecha,sexo,matricula,lunes,martes,miercoles,jueves,viernes) 
		VALUES ('$_POST[nombre]','$_POST[apellidos]','$_POST[tel]','$_POST[correo]','$_POST[grupo]','$_POST[carrera]','$_POST[fecha]','$_POST[sexo]','$_POST[matricula]','$_POST[lunes]','$_POST[martes]','$_POST[miercoles]','$_POST[jueves]','$_POST[viernes]')",$con);
		echo "<center><h3><kbd>Los datos que fueron Registrados son:</kbd></h3> <center><br>";

		echo "<center><div class='tabla'>
		<table border='1'>
		<tr><td> Nombre:</td><td>".$_POST['nombre']."<br></td>
		 <tr><td>Apellidos:</td><td>".$_POST['apellidos']."<br></td></tr>
		 <tr><td>Telefono:</td><td>".$_POST['tel']."<br></td></tr>
		 <tr><td>Correo:</td><td>".$_POST['correo']."<br></td></tr>
		 <tr><td>Grupo:</td><td>".$_POST['grupo']."<br></td></tr>
		 <tr><td>Carrera:</td><td>".$_POST['carrera']."<br></td></tr>
		 <tr><td>Fecha de Naci:</td><td>".$_POST['fecha']."<br></td></tr>
		 <tr><td>Sexo:</td><td>".$_POST['sexo']."<br></td></tr>
		 <tr><td>Matricula:</td><td>".$_POST['matricula']."<br></td></tr></table></center></div>

		";
		echo"<br>
		<h3>Horario de tutoria</h3>

		<center><div class='tabla2'>
		<table border='1'>
		<tr><td>Lunes</td><td>Martes</td><td>Miercoles</td><td>Jueves</td><td>Viernes</td></tr>
		<tr><td>".$_POST['lunes']."<br></td><td>".$_POST['martes']."<br></td><td>".$_POST['miercoles']."<br></td><td>".$_POST['jueves']."<br></td><td>".$_POST['viernes']."<br></td></tr></table></center></div>
         <br>
		<a href='maestros.php#marco1' class='boton'>Registrar otro alumno </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='maestros.php' class='boton'>Regresar al menú </a>

		";




		
		
		
		


}



?>
