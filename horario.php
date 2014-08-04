<html>
<head>
  <meta charset="UTF-8">
<link rel="stylesheet" href="css/estilo.css">
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<style>

table{
  border-radius: 5px;
 
}
table th{
  background: #00557F;
  color:black;
  

}
table td{
  background: #3B93BF;
  color: black;
  text-align: center;
}
h3{
  color: #00557F;
}
.buton{
    padding:3px;
    color:#FFFFFF;
    background-color:#3179f5;
    border:1px solid #000000;
    border-radius: 5px;

}

</style>

  <script>
function imprime(){
//desaparece el boton
document.getElementById("btnImprimir").style.display='none'
//se imprime la pagina
window.print()
//reaparece el boton
document.getElementById("btnImprimir").style.display='inline'
}
  </script>
</head>
<body>

</body>
</html>

<?php
  /*nos conectamos ala base de datos*/
$conexion= mysql_connect("localhost", "root", "");
if(!$conexion) die ("error al conectar a la base de datos <br/>".mysql_error());
mysql_select_db("tutorias") OR die ("errorde conexion a la abase de datos");
/*realizamos la consulta ala base de datos*/
$matricula=$_POST['matricula'];
$sql="select * from tutorados where matricula ='$matricula'";
$result= mysql_query($sql) or die(mysql_error());
if(mysql_num_rows($result)==0) die ("no hay ningun registro para mostrar");

/*despelegamos los registros uno por uno en la tabla*/
echo "<center><table  WIDTH=1000 border=0  cellpadding=5 cellspacing=0 > ";


echo "<tr>
   
   <tr>
   
   </tr>";
   /*los datos*/
   while($row= mysql_fetch_array($result))
   {
    echo"<center><tr>
    
    
    

  
    
<h3>HORARIO DE TUTORIAS</h3>
<table width=500 border=0 cellpadding=5 >
<tr><th>Nombre:".$row['nombre']." &nbsp;&nbsp;".$row['apellidos']."  </th>&nbsp;&nbsp;<th>Carrera:".$row['carrera']."</th></tr>

<tr><th>Grupo:".$row['grupo']."</th>&nbsp;&nbsp;<th>Matricula:".$row['matricula']."</th></tr>
<tr></tr>
</table>
    
   
<table border='1' width=500 cellpadding=5 class='datagrid'>

    <tr><th>Lunes</th><th>Martes</th><th>Miercoles</th><th>Jueves</th><th>Viernes</th></tr>
    <tr><td class=''>".$row['lunes']."<br></td><td>".$row['martes']."<br></td><td>".$row['miercoles']."<br></td><td>".$row['jueves']."<br></td><td>".$row['viernes']."<br></td></tr></table></center></div>




     </tr> </center>";


    }


    echo"</table></center>";








?>





</div>
<?php
  /*nos conectamos ala base de datos*/
$conexion= mysql_connect("localhost", "root", "");
if(!$conexion) die ("error al conectar a la base de datos <br/>".mysql_error());
mysql_select_db("tutorias") OR die ("errorde conexion a la abase de datos");
/*realizamos la consulta ala base de datos*/
$matricula=$_POST['matricula'];
$sql="select * from tutorados where matricula ='$matricula'";
$result= mysql_query($sql) or die(mysql_error());
if(mysql_num_rows($result)==0) die ("no hay ningun registro para mostrar");

/*despelegamos los registros uno por uno en la tabla*/
echo "<center><table  WIDTH=1000 border=0  cellpadding=5 cellspacing=0 > ";


echo "<tr>
   
   <tr>
   
   </tr>";
   /*los datos*/
   while($row= mysql_fetch_array($result))
   {
    echo"<center><tr>
    
    
    

  
    
<h3>HORARIO DE TUTORIAS</h3>
<table width=500 border=0 cellpadding=5 >
<tr><th>Nombre:".$row['nombre']." &nbsp;&nbsp;".$row['apellidos']."</th>&nbsp;&nbsp;<th>Carrera:".$row['carrera']."</th></tr>

<tr><th>Grupo:".$row['grupo']."</th>&nbsp;&nbsp;<th>Matricula:".$row['matricula']."</th></tr>
<tr></tr>
</table>
    
   
<table border='1' width=500 cellpadding=5 class='datagrid'>

    <tr><th>Lunes</th><th>Martes</th><th>Miercoles</th><th>Jueves</th><th>Viernes</th></tr>
    <tr><td>".$row['lunes']."<br></td><td>".$row['martes']."<br></td><td>".$row['miercoles']."<br></td><td>".$row['jueves']."<br></td><td>".$row['viernes']."<br></td></tr></table></center></div>




     </tr> </center>";


    }


    echo"</table></center>";




?>

<br>
<br>
<center>
<div  id="btnImprimir">
<input title='imprimir' value="IMPRIMIR HORARIO" type='button' class="buton" onClick="imprime()"/>
<button onclick=" location.href='alumnos.php' " value="" name="boton" class="buton">MENU PRINCIPAL</button>


</div></center>

