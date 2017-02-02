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

<center><div class="tit"><h2>Inicio de sesión</h2>
    <center><div class="contenido">

<form action="validate.php" method="post">
<center>
	<table border="0" width="350">

		<tr><td><label><b>Correo: </b></label></td>
			<td width=80> 
      <input type="text" name="mail" class="form-group round-border">
      
      </td></tr>
		<tr><td><label><b>Contraseña: </b></label></td>
			<td witdh=80><input type="password" name="pass" class="form-group round-border" ></td></tr>
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

<!-- form register -->       
<form method="post" action="" >
<fieldset>
    <legend><b>Registro</b></legend>

<table height="150" width="350" border="0" align="center" valign="middle">
		<tr>
		<td>

    <div class="form-group">
      <label><b>Ingresa tu nombre</b></label>
      <input type="text" name="realname" class="form-control" required placeholder="Ingresa tu nombre" />
    </div>
    
    <div class="form-group">
      <label><b>Ingresa tu email</b></label>
      <input type="text" name="nick" class="form-control"  required placeholder="Ingresa tu email"/>
    </div>

    <div class="form-group">
      <label><b>Ingresa tu Password</b></label>
      <input type="password" name="pass" class="form-control"  required placeholder="Ingresa contraseña" />
    </div>

    <div class="form-group">
      <label><b>Repite tu contraseña</b></label>
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
      
<!--End Form Register -->
 </fieldset>
 </form>

</body>
</html>
