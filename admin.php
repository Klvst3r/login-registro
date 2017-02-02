<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
	header("Location:index2.php");
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login-Registro</title>
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
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<?php
	//include("include/cabecera.php");
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
			<li class=""><a href="admin.php"> Administration Page</a></li>
	
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

<!-- ================================================================================== -->
<div class="row">
	<div class="span12">
		<div class="caption">
<!-- ============= Begin Internal Boby ============= -->
		<h2> Admin Users</h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Users</h4>
		<div class="row-fluid">

			<?php

				require("sql/connect_db.php");

				$sql = "SELECT * FROM login";
	
				$query = mysqli_query($mysqli, $sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<th>Id</th>";
						echo "<th>User</th>";
						echo "<th>Password</th>";
						echo "<th>Email</th>";
						echo "<th>Admin Password</th>";
						echo "<th>Edit</th>";
						echo "<th>Delete</th>";
					echo "</tr>";
			    
		
				 while($arreglo = mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[3]</td>";
				    	echo "<td>$arreglo[4]</td>";

				    	echo "<td><a href='update.php?id=$arreglo[0]'><img src='img/update.gif' height='32' width='32' class='img-rounded'></td>";
						echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='img/delete.png' height='32' width='32' class='img-rounded'/></a></td>";

					echo "</tr>";
				}

				echo "</table>";

					extract($_GET);
					if(@$idborrar==2){
		
						$sqlborrar = "DELETE FROM login WHERE id=$id";
						$resborrar = mysqli_query($mysqli, $sqlborrar);
						
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						//header('Location: proyectos.php');
						echo "<script>location.href='admin.php'</script>";
					}

			?>

		<div class="span8">
		
		</div>	
		</div>	
		<br/>

		<!--Begin Slide-->
		
		 <!--End Slide-->

		</div>

<!-- ============= End Internal Boby ============= -->
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

    <!-- The javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>