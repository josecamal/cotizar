<?php
session_start();
if (isset($_POST['login']) and $_POST['login'] == 'login')
{
include 'db.php';
$user = mysqli_real_escape_string($link, $_POST['user']);
$password = mysqli_real_escape_string($link, $_POST['usrpass']);
//$password = md5($password . 'd64kd87q');

$sql = "select count(*) from tblusers where user='$user' and password='$password'";
$result = mysqli_query($link, $sql);
if (!$result)
{
		echo 'Error Saving Data. ';
		exit();	
}
$row = mysqli_fetch_array($result);
	if ($row[0] > 0)
	{
		$_SESSION['loggedIn'] = true;
		header ('Location: maestros.php');
		exit();
	}
	else
	{		
		$msg = 'Usuario o Contrseña Incorrectos.';
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Principal</title>
	<meta http-equiv="Content-Type"
	content="text/html; charset=UTF-8" />
	<link href="style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/estilo.css">
	<script src="jquery-1.7.1.min.js" ></script>
	<script src="jquery.validate.min.js" ></script>

	<script type="text/javascript">
$(document).ready(function(){
   $("#formularioM").click(function () {
      $("#divformu").each(function() {
        displaying = $(this).css("display");
        if(displaying == "block") {
          $(this).fadeOut('slow',function() {
           $(this).css("display","none");
          });
        } else {
          $(this).fadeIn('slow',function() {
            $(this).css("display","block");
          });
        }
      });
    });
  });
</script>

<script>
$(document).ready(function(){
	$('#login').validate({
		rules: {
			usrpass: {
				required: true
			},
			user: {
				required: true,
			
			}
		},
		messages: {
			usrpass: {
				required: 'Contraseña Requerida.'	
			},
			user: {
				required: 'Usuario Requerido.',
				
			}
		}
	}); // end register validation
});
</script>
</head>
<header><h1 align="center"style="font-family: Arial, Helvetica, sans-serif; font-size: xx-large; color: #3179f5; font-weight: bold;">Sistema De Tutorias Del Instituto Tecnologico De Campeche version 1.1</h1></header>

	<body>
	<div align="center">
	<h3 style="font-family: Arial, Helvetica, sans-serif; font-size: xx-large; color: #3179f5; font-weight: bold;">B I E N V E N I D O S</h3>
  <p><a href="alumnos.php" class="principal">ALUMNOS</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" id="formularioM" value="MAESTROS" class="principal"/>
</p>
	<div id="divformu">
		<div id="DivLogin">
			<form action="" id="login" method="POST">
			
				<table>
				<tr>
					
						<h2 style="color:#3179f5;">INICIO DE SESIÓN</h2>
				</tr>
					<tr>
						<td><label class="label">Usuario:</label></td>
						<td><input type="text" id="usremail" name="user"  placeholder="Usuario"/></td>
					</tr>
					<tr>
						<td><label class="label">Contraseña:</label></td>
						<td><input type="password" id="usrpass" name="usrpass" placeholder="********"/></td>
					</tr>
					<tr>
						<td><input type="hidden" name="login" value="login" /></td>
						<td><input type="submit" id="submit" name="submit" value="Iniciar Sesion" /></td>
					</tr>
					<tr>
						<td colspan="2"><?php echo (isset($msg) ? '<font color="red">'.$msg.'</font>': '');?></td>
					</tr>
				</table>
			</form>
		</div>
		</div>
		</div>
		<br>
<div align="center"><img src="IMAGENES/escudo_itcampeche.jpg" width="299" height="299" /></div>
	</body>
</html>
<br>
<br>

<footer align="center">
 
	<p><h4><kbd style="color: #3179f5;">Elaborado Por La Alumna De Ing. En Sistemas Computacionales Del Instituto Tecnologico De Campeche:
       <br>Bonny Jhovana Chable</h4> </kbd>

	</p>
	
</footer>