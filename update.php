<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}
?>		
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login-registro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Klvst3r">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body>
<div class="container">
<header class="header">
<div class="row">
	<?php
	include("inc/head.php");
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->

<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="admin.php">Administration Page</a></li>
	
		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		
		</form>
		<ul class="nav pull-right">
		<li><a href="">Welcome <strong><?php echo $_SESSION['user'];?></strong> </a></li>
			  <li><a href="logout.php"> Close Session </a></li>			 
		</ul>
	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->
</div>

<!-- ======================================================================================================================== -->
<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
<!-- ============= Begin Internal Body ============= -->
		<h2> Registred Users Administration</h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>User Edition</h4>
		<div class="row-fluid">
		
		<?php
		extract($_GET);
		require("sql/connect_db.php");

		$sql = "SELECT * FROM login WHERE id=$id";

		$ressql = mysqli_query($mysqli,$sql);
		while ($row = mysqli_fetch_row ($ressql)){
		    	$id = $row[0];
		    	$user = $row[1];
		    	$pass = $row[2];
		    	$email = $row[3];
		    	$pasadmin = $row[4];
		    }

		?>
<center>
<table border="0">
		<form action="makeUpdate.php" method="post">

<tr>
	<td>Id</td>
	<td>&nbsp;</td>
	<td><input type="text" name="id" value= "<?php echo $id ?>" required readonly="readonly" /></td>
</tr>
<tr>
	<td>Usuario</td>
	<td>&nbsp;</td>
	<td><input type="text" name="user" value="<?php echo $user?>" required /></td>
</tr>
<tr>
	<td>Password usuario</td>
	<td>&nbsp;</td>
	<td><input type="text" name="pass" value="<?php echo $pass?>"  /></td>
</tr>
<tr>
	<td>Correo usuario</td>
	<td>&nbsp;</td>
	<td><input type="text" name="email" value="<?php echo $email?>"required /></td>
</tr>
<tr>
	<td>Pssword administrador</td>
	<td>&nbsp;</td>
	<td><input type="text" name="pasadmin" value="<?php echo $pasadmin?>"  /></td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td colspan="3" align="center">
		<input type="submit" value="Guardar" class="btn btn-success btn-primary">
	</td>
</tr>
				 

			</form>
</table>	
</center>
		
		<div class="span8">
		
		</div>	
		</div>	
		<br/>

		
		</div>


<!-- ============= End Internal Body ============= -->
</div>

	</div>
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p>&copy; Klvst3r <br/><br/></p>
 </footer>
</div><!-- /container -->

    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>


