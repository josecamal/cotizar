<html>
<head> 
	<meta charset="UTF-8">
<link rel="stylesheet" href="css/estilo.css">


</head>
<title>Tabla de registro</title>
	<body>
		<img src="IMAGENES/escudo_itcampeche.jpg" width="301" height="301"align="right">
    
		<form action="registrar.php" method="post">
    <h1><kbd style="color: #990000;">Bienvenido al Registro de usuario</kbd></h1>
    <fieldset id="form">
    	<legend>Formulario de registro</legend>
    <table width="100%" border="0" cel>
				<tr>
					<td>NOMBRE</td>
					<td><input title="Introduce tus Nombres" type="text" name="nombre" required Placeholder="Escribe tus Nombres"/></td>
					<td>APELLIDOS</td>
					<td><input title="escribe tu apellido o tus apellidos"type="text" name="apellidos"required placeholder="Escribe tus apellidos"/></td>
				</tr>
				
				<tr>
					<td>TELEFONO</td>
					<td><input title="escribe tu numero de celular o de casa "type="text" name="tel"required placeholder="Ejemplo:98100000"/></td>
				    <td>E-MAIL</td>
					<td><input title="escribe tu correo " type="text" name="correo"required placeholder="ejemplo@tutos.com"/></td>
				</tr>
				
				<tr>
					<td>GRUPO</td>
					<td><input title="escribe tu grupo"type="text" name="grupo"required placeholder="Escribe tu grupo"/></td>
					<td>CARRERA</td>
					<td><input title="escribe tu grupo"type="text" name="carrera"required placeholder="Escribe tu carrera"/></td>
				</tr>
				
				<tr>
					<td>FECHA DE NAC.</td>
					<td><input type="date" name="fecha"/></td>
					<td height="24">MATRICULA</td>
				  <td><input title="Es la misma de la de tu credencial "type="text" name="matricula" required placeholder="Escribe tu matricula"/></td>
				</tr>
				<tr> 
					<td>SEXO</td>
					
					<td><input type="radio" name="sexo" title="tu sexo" value="M" required/>&nbsp;<label form="m">masculino</label></td>
					<td width="100"><input type="radio" name="sexo" title="tu sexo" value="F" required/>&nbsp;<label form="f">femenino</label></td>
					
				</tr>
				<tr>

					
			  </tr>			
				<tr>
					
					<table border="3">
						<tr><h2><kbd>Captura de Horario del Alumno</kbd></h2></tr>
						<tr>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lunes</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martes</td><td>&nbsp;&nbsp;&nbsp;Miercoles</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jueves</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Viernes</td>

                         </tr>
                         <tr>
                         	<td><input type="text"name="lunes" style="width:85px"/></td><td><input type="text"name="martes"style="width:85px"/></td><td><input type="text"name="miercoles"style="width:85px"/></td><td><input type="text"name="jueves"style="width:85px"/></td><td><input type="text"name="viernes"style="width:85px"/></td>

                         </tr>


					</table>
					<td></td><br>
					<td><input type="submit" name="Registrar" class="btn"/></td>
				</tr>
			</table>
			</fieldset>
    
    <div align="center"></div>
    <p></p>
    <br>
    <br>
<footer>
 
	<p><h4><kbd style="color: #990000;">Elaborado Por La Alumna De Ing. En Sistemas Computacionales Del Instituto Tecnologico De Campeche:
       <br>Bonny Jhovana Chable</h4> </kbd>

	</p>
	
</footer>
</body>
</html>