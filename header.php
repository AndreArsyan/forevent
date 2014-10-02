<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style-ext.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<!--buat mini slider-->
<script src="js/modernizr.custom.63321.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
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
<body>
<div class="container" >
	<div class="row">		
		<div class="col-md-4">
		<a href="/forevent"><img src="img/foreventlogo.png"></a>
		</div>
		<div class="col-md-8"  style="position: relative; top: 50%;transform: translateY(50%);">
			<ul class="nav nav-pills nav-justified" style=" border: 2px solid #5cb85c;border-radius: 10px;">
				<li><a href="product.php">Pernikahan</a></li>
				<li><a href="search.php">Seminar</a></li>
				<li><a href="#">Konser</a></li>
				<li><a href="#">Organisasi</a></li>
			</ul>
		</div>		
	</div>