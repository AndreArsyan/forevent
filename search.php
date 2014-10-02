<?php include "header.php" ?>
<div class="row" style="margin-top:20px">
	<div class="col-md-3">
		<div class="panel panel-success">
			<div class="panel-heading">Advanced Search</div>
			<div class="panel-body">
				<form role="form">
					<div class="form-group">
						<label for="nama">Nama Produk</label>
						<input type="text" class="form-control" id="nama">
					</div>
					<div class="form-group">
						<label for="kategori">Kategori</label>
						<select class="form-control" id="kategori">
							<option value="volvo">Pernikahan</option>
							<option value="saab">Konser</option>
							<option value="mercedes">Seminar</option>
							<option value="audi">Organisasi</option>
						</select>
					</div>
					
					<button type="submit" class="btn btn-default">Search</button>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-9">
		<form class="form-inline" role="form">
			<div class="form-group">
				<label for="sortby">Sort By : </label>
				<select class="form-control" id="kategori">
					<option value="volvo">Harga Tinggi ke Rendah</option>
					<option value="saab">Harga Rendah ke Tinggi</option>
					<option value="mercedes">Nama A - Z</option>
					<option value="audi">Nama Z - A</option>
				</select>
			</div>
			<div class="form-group">
				<label for="tampilan">Tampilan : </label>
				<span class="glyphicon glyphicon-list"></span>
				<span class="glyphicon glyphicon-th-large"></span>
			</div>
		</form>
		<br>
		<table class="table table-hover">
			<tr>
				<td>
					<div class="col-md-9">
						<div class="media">
							<a class="pull-left" href="#">
							<img class="media-object" src="img/promo1.jpg" alt="..." style="width:100px;height:100px;margin-left:auto;margin-right:auto;display:block">
							</a>
							<div class="media-body">
								<h3 class="media-heading">Asbak Lumayan Keren</h3>
								Asbak unggulan para anak lumayan keren
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<h4><b>Rp.1000,00</b></h4>
						<button class="btn btn-info btn-block"><h4>Lihat</h4></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="col-md-9">
						<div class="media">
							<a class="pull-left" href="#">
							<img class="media-object" src="img/promo1.jpg" alt="..." style="width:100px;height:100px;margin-left:auto;margin-right:auto;display:block">
							</a>
							<div class="media-body">
								<h3 class="media-heading">Asbak Lumayan Keren</h3>
								Asbak unggulan para anak lumayan keren
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<h4><b>Rp.1000,00</b></h4>
						<button class="btn btn-info btn-block"><h4>Lihat</h4></button>
					</div>
				</td>
			</tr>
		</table>
	</div>
</div>
<?php include "footer.php" ?>