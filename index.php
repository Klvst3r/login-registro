<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Login-Registro</title>
</head>
<body>

<center><div class="tit"><h2 style="color: #0000FF; ">Inicio de sesión</h2>
    <center><div class="Ingreso">

<form action="validar.php" method="post">
<center>
	<table border="0" width="350">

		<tr><td><label style="font-size: 14pt"><b>Correo: </b></label></td>
			<td width=80> <input class="form-group has-success" style="border-radius:15px;" type="text" name="mail"></td></tr>
		<tr><td><label style="font-size: 14pt"><b>Contraseña: </b></label></td>
			<td witdh=80><input style="border-radius:15px;" type="password" name="pass"></td></tr>
      <tr>
          <td colspan="2"> &nbsp;</td>
          
        </tr>

		<tr><td colspan="3">
        <center>
        <input class="btn btn-primary" type="submit" value="Aceptar">
        </center>
        </td>
        
	  </tr></table>
</center>

</form>
        
<br/><br/>    

<!-- formulario registro -->       
<form method="post" action="" >
<fieldset>
    <legend  style="font-size: 18pt"><b>Registro</b></legend>

<table height="150" width="350" border="0" align="center" valign="middle">
		<tr>
		<td>

    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa tu nombre</b></label>
      <input type="text" name="realname" class="form-control" placeholder="Ingresa tu nombre" />
    </div>
    
    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa tu email</b></label>
      <input type="text" name="nick" class="form-control"  required placeholder="Ingresa mail"/>
    </div>

    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa tu Password</b></label>
      <input type="password" name="pass" class="form-control"  placeholder="Ingresa contraseña" />
    </div>

    <div class="form-group">
      <label style="font-size: 14pt"><b>Repite tu contraseña</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="repite contraseña" />
    </div>

    <div>
   <center>
    <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>
    </center>
    </div>

<?php

if(isset($_POST['submit'])){
      require("registro.php");
    }

 ?>


    </td>

		</tr>
		</table>
      
<!--Fin formulario registro -->
 </fieldset>
 </form>

</body>
</html>
