<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
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
    
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    
    <script src="bootstrap/js/bootstrap.min.js"></script>

  </head>
<body >
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
<?php

include("inc/menu.php");

?>
<!-- ======================================================================================================================== -->

<div id="" class="">
		<div class="img-inner" style="border-top:5px solid #222; border-bottom:1px solid #222; border-radius:4px;">
		  <div class="item active">
			<img src="img/it.jpg" alt="" style="min-height:250px; max-width:100%"/>
		  </div>
		</div>
</div>


<h3>Content</h3>
<div class="row" style="text-align:center">
			<div class="span2">
				<div class="well well-small">
					<h4>Div Content</h4>
					<a href="#"><small>Show Details</small></a>
				</div>
			</div>
			
</div>
<h3>Information</h3>
<div class="row">

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Principal Content</h3>	
	<img src="img/write.jpeg" alt=""/>
	<div class="caption">
	<h4>Tittle</h4>	
	<p align="justify">
	
	Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
	</p>
	<a class="pull-right" href="al.php">Show Details</a>
	<br/>
	</div>
	</div>
	</div>

	
</div>
<hr/>
<div class="row">
	<div class="span6">
	<div class="well well-small">
		<h3>Footer</h3>	
		<p>
		Ultricies ut ligula fermentum ipsum sit mi, tempor eget quisque orci sapien tristique lectus, eleifend nunc aenean laoreet, a sodales quis fusce turpis quis nec, hendrerit orci venenatis at dolor. Pellentesque sodales, commodo massa pellentesque felis vel quam, duis sem. Luctus in magna, dui accumsan nostra sem erat eleifend, aenean aliquam amet.<br><br></b></b>
		Magna pretium in saepe et wisi sed, aenean venenatis quam. Bibendum phasellus ac, iaculis lobortis libero, ante libero sapien sem urna et justo, scelerisque morbi placerat mauris natus pede praesent.
		</p>
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
    
	</style>
  </body>
</html>