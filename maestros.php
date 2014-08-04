<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
  <link rel="stylesheet" href="css/menu.css">
  <link rel="stylesheet" href="css/estilo.css">
  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>

  <script  type="text/javascript" charset="utf-8" async defer>
  $(function(){
    $(".custom-input-file input:file").change(function(){
        $(this).parent().find(".archivo").html($(this).val());
    }).css('border-width',function(){
        if(navigator.appName == "Microsoft Internet Explorer")
            return 0;
    });
});  
  </script>
	<title>MAESTROS</title>
   	<header><h1 align="center"style="font-family: Arial, Helvetica, sans-serif; font-size: xx-large; color: #3179f5; font-weight: bold;">Sistema De Tutorias Del Instituto Tecnologico De Campeche version 1.1</h1></header>

</head>
<body>
	<div class="contenedor"></div>
		
<h2> </h2>
 
<div id="columna2">
<h2></h2>
<ul>
  <ul>
  <li class="btn"><a href='#marco0'><span><b>MENÚ</b></span></a></li>
   <li class='btn'><a href='#marco1'><span>Registrar Alumnos</span></a></li>
   <li class='btn'><a href='#marco2'><span>Bajas de alumnos</span></a></li>
   <li class='btn'><a href='#marco3'><span>Modificar</span></a></li>
   <li class='btn'><a href='#marco4'><span>Subir Anuncios</span></a></li>
   <li class='btn'><a href='#marco5'><span>Subir Archivos</span></a></li>
</ul>
</div>
</ul>
</div>
 
<div id="contenido2">

<div id="marco0">
<h2 class="h2">BIENVENIDO MAESTRO SELECCIONA UNA ACCION DEL MENÚ </h2>
<center>
<img src="IMAGENES/escudo_itcampeche.jpg" width="350" height="350" /></center>


</div>
<div id="marco1"><img src="IMAGENES/escudo_itcampeche.jpg" width="350" height="350"  class="imn"/>

<h2 class="h2">Registrar Alumnos</h2>
<form action="registrar.php" method="post">
  
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
          
          <table border="3">
            <tr><h2><kbd>Captura de Horario del Alumno</kbd></h2></tr>
            <tr>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lunes</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martes</td><td>&nbsp;&nbsp;&nbsp;Miercoles</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jueves</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Viernes</td>

                         </tr>
                         <tr>
                          <td><input type="text"name="lunes" style="width:85px"/></td><td><input type="text"name="martes"style="width:85px"/></td><td><input type="text"name="miercoles"style="width:85px"/></td><td><input type="text"name="jueves"style="width:85px"/></td><td><input type="text"name="viernes"style="width:85px"/></td>

                         </tr>


          </table>
          <td></td>
          <td><input type="submit" name="Registrar" class="buton" value="Registrar"/></td>
        </tr>
      </table>
      </form>
      </fieldset>
    
</div>
 
<div id="marco2"><img src="IMAGENES/escudo_itcampeche.jpg" width="350" height="350"  class="imn"/>
<h2 class="h2">Bajas de Alumnos</h2>
<div class="alumno"><br><br>

<table align="center">
  <tr>
    <td> <label><b> MATRICULA</b></label></td><td><input type="text" name="matricula" placeholder="Escribe la matricula"/></td>
  </tr>
  <tr>
    <td></td>

  </tr>
</table><center><br>

<input type="submit" name="Buscar" value="SIGUIENTE"/></center>

</div>
 
</div>
<div id="marco3"><img src="IMAGENES/escudo_itcampeche.jpg" width="350" height="350"  class="imn"/>
<h2 class="h2">Modificar </h2>
<div class="alumno"><br><br>

<table align="center">
  <tr>
    <td> <label><b>MATRICULA</b></label></td><td><input type="text" name="matricula" placeholder="Escribe la matricula"/></td>
  </tr>
  <tr>
    <td></td>

  </tr>
</table><center><br>

<input type="submit" name="Buscar" value="Siguiente"/></center>

</div>

</div>
<div id="marco4"><img src="IMAGENES/escudo_itcampeche.jpg" width="350" height="350"  class="imn"/>
<h2 class="h2"> Subir Anuncios</h2>
<div class="aviso"><br><br>
<form action="avisos.php" method="post" accept-charset="utf-8">
 
<table align="center">
  <tr>
    <td> <label><b>Titulo Del Anuncio</b></label></td>
    
  </tr>
  <tr>
    <td><input type="text" name="titulo" placeholder="Escribe el Titulo del anuncio"/></td>

  </tr>
  <tr >
    <td><input type="date" name="fecha" placeholder=""/></td>
  </tr>
  <tr>
    <td><textarea name="anuncio" id="aviso" cols="50" rows="8"></textarea></td>
  </tr>

</table><center>

<input type="submit" name="Buscar" value="Publicar Anuncio"/></center>
</form>
</div>
</div>

<div id="marco5"><img src="IMAGENES/escudo_itcampeche.jpg" width="350" height="350"  class="imn"/>
<h2 class="h2"> Subir Archivos</h2>
<div class="aviso"><br><br>
<form id="test_upload" name="test_upload" action="upload.php" enctype="multipart/form-data" method="post" accept-charset="utf-8">
 
<table align="center">
  <tr>
    <td> <center><label><b>Titulo Del Archivo</b></label></center></td>
    
  </tr>
  <tr>
    <td><input type="text" name="titulo" placeholder="Escribe el Titulo del archivo"/></td>

  </tr>
  <tr><td><center><label><b>Descripcion</b></label></center></td>
  </tr>
  <tr>
  <td><textarea id="descripcion" name="descripcion" cols="22" rows="2"></textarea></td>
  </tr>
  <tr>
    <td><br><br><div class="custom-input-file"><input type="file" class="input-file"  name="archivo"/>
Examinar
    <div class="archivo">...</div>
</div></td>
  </tr>
</table><center>
<br><br>
<input type="submit" name="Buscar" value="Subir Archivos"/></center>
</form>
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