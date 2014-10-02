<?php include "header.php"?>
<div class="row" style="margin-top:20px;">
	<div class="col-md-12">
		<ol class="breadcrumb">
		  <li><a href="#">Home</a></li>
		  <li><a href="#">Products</a></li>
		  <li class="active">asbak</li>
		</ol>
	</div>
</div>
<div class="row" style="margin-top:20px;">
	<div class="col-md-5">
	<!-- start carousel-->
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<!--<li data-target="#carousel-example-generic" data-slide-to="2"></li>-->
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="img/promo1.jpg" style="width:300px;height:300px;margin-left:auto;margin-right:auto;display:block" alt="slide1">
				</div>
				<div class="item">
					<img src="img/promo3.jpg" style="width:300px;height:300px;margin-left:auto;margin-right:auto;display:block" alt="slide2">
				</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
	<!--end  carousel-->
	</div>
	<div class="col-md-4">
		<div class="panel panel-primary">
			<div class="panel-heading"><h4>Asbak luar biasa keren</h4></div>
			<div class="panel-body">
				<ul class="nav nav-tabs" role="tablist" id="myTab">
					<li class="active"><a href="#deskripsi" role="tab" data-toggle="tab">Deskripsi</a></li>
					<li><a href="#harga" role="tab" data-toggle="tab">Harga</a></li>
					<li><a href="#kustomisasi" role="tab" data-toggle="tab">Kustomisasi</a></li>
				</ul>

				<div class="tab-content">
					<div class="tab-pane active" id="deskripsi">
						<br>
						<p>Deskripsi dari barang ini adalah sebagai berikut ...</p>
					</div>
					<div class="tab-pane" id="harga">
						
						<div class="table-responsive">
							<table class="table">
								<tr>
									<td>Jumlah Pembelian</td>
									<td>Harga</td>
								</tr>
								<tr class="success">
									<td>lebih dari 300 item</td>
									<td>1500</td>
								</tr>
								<tr class="warning">
									<td>101 - 300 item</td>
									<td>1700</td>
								</tr>							
								<tr class="danger">
									<td>kurang dari 100 item</td>
									<td>2000</td>
								</tr>								
							</table>
						</div>
					</div>
					<div class="tab-pane" id="kustomisasi">
						<div class="table-responsive">
							<table class="table table-hover">
								<tr>
									<td>Jenis Tambahan</td>
									<td>Harga</td>
									<td>Keterangan</td>
								</tr>
								<tr>
									<td>Kotak Mika + Pita</td>
									<td>500</td>
									<td>
										<ul>
											<li>Minimal Pesanan 100 Item</li>
											<li>Pita boleh pilih warna</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>Plastik</td>
									<td>250</td>
									<td>
										<ul>
											<li>Minimal Pesanan 100 Item</li>
										</ul>
									</td>
								</tr>							
								<tr>
									<td>Tulis Nama</td>
									<td>200</td>
									<td>
										<ul>
											<li>Minimal Pesanan 100 Item</li>
											<li>Lihat katalog gambar <a>disini</a></li>
										</ul>
									</td>
								</tr>							
							</table>
						</div>
					</div>
				</div>
				<script>
				$(function () {
				$('#myTab a:last').tab('show')
				})
				</script>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="panel panel-success">
			<div class="panel-heading">Related</div>
				<div class="panel-body">
					<div class="media">
						<a class="pull-left" href="#">
							<img class="media-object" src="img/promo1.jpg" alt="..." style="width:64px;height:64px;margin-left:auto;margin-right:auto;display:block">
						</a>
						<div class="media-body">
							<h4 class="media-heading">Asbak Lumayan Keren</h4>
							Asbak unggulan para anak lumayan keren
						</div>
					</div>
					<div class="media">
						<a class="pull-left" href="#">
							<img class="media-object" src="img/promo1.jpg" alt="..." style="width:64px;height:64px;margin-left:auto;margin-right:auto;display:block">
						</a>
						<div class="media-body">
							<h4 class="media-heading">Asbak Paling Keren</h4>
							Asbak punya Andre keren bet
						</div>
					</div>
				</div>
		</div>
	
	</div>
	
</div>
<?php include "footer.php"?>