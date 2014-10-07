<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style-ext.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<!--buat mini slider-->
<script src="js/modernizr.custom.63321.js"></script>
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>-->
<script src="js/jquery.catslider.js"></script>
<script>
	$(function() {
		$( '#mi-slider' ).catslider();
	});
</script>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<!--end buat mini slider-->
	<script type="text/javascript" src="js/jquery.sticky.js"></script>
	<script>
    $(window).load(function(){
      $("#search-box").sticky({ topSpacing: 0, center:true, className:"search-class" });
    });
	</script>
<head>
<title>Forevent</title>
</head>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:white">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a href="/forevent" class="navbar-brand" ><img src="img/foreventlogo.png" style="height:auto;max-width:100px; margin-top: -7px;"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<form class="navbar-form navbar-right" role="search">
		<div class="form-group">
		<input type="text" class="form-control" placeholder="Cari produk disini ...">
		</div>
		<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
		</form>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pernikahan<span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="product.php">Produk</a></li>
					<li><a href="search.php">Search</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Seminar<span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="product.php">Produk</a></li>
					<li><a href="search.php">Search</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Konser<span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="product.php">Produk</a></li>
					<li><a href="search.php">Search</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Organisasi<span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="product.php">Produk</a></li>
					<li><a href="search.php">Search</a></li>
				<ul>
			</li>
		</ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<body style="padding-top: 50px;">

<div class="container" >		
