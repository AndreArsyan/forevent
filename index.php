<?php include "header.php"?>
<div class="row" style="margin-top:20px">
	<div class="col-md-12" style="margin:auto">
	<!--masukin slider-->
	<img src="http://forevent.me/image/cache/data/foreventslide-980x280.png" style="margin-left:auto;margin-right:auto;display:block">
	</div>
</div>

<div id="search-box" class="row" style="margin-top:20px;">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="input-group">
			<input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Masukkan Keyword">
			<div class="input-group-btn">
				<button class="btn btn-default" type="button" >Cari!</button>
			</div><!-- /btn-group -->
		</div><!-- /input-group -->
	</div>
	<div class="col-md-3"></div>
</div>
<div class="row" style="margin-top:20px">
	<div class="col-md-12">
		<section class="pagedImages">
			<input id="page1" accesskey="1" type="radio" name="pagedImages1" title="Images page 1" checked="checked" />
			<input id="page2" accesskey="2" type="radio" name="pagedImages1" title="Images page 2" />
			<input id="page3" accesskey="3" type="radio" name="pagedImages1" title="Images page 3" />
			<label for="page1" title="To page 1">1</label>
			<label for="page2" title="To page 2">2</label>
			<label for="page3" title="To page 3">3</label>
			<ul title="This is page 1">
				<li id="image1">
					<a href="#image1"><img alt="" src="http://placekitten.com/400/400" /></a>
					<article>
						<h3>Image 1</h3>
						<p>Have here whatever you like.</p>
						<p><a href="#">Close</a></p>
					</article>
				</li>
				<li id="image2">
					<a href="#image2"><img alt="" src="http://placekitten.com/300/400" /></a>
					<article>
						<h3>Image 2</h3>
						<p>Have here whatever you like.</p>
						<p><a href="#">Close</a></p>
					</article>
					<aside>
						<p>You can have more than one element here and it doesn't need to be article.</p>
					</aside>
				</li>
				<li id="image3">
					<a href="#image3"><img alt="" src="http://placekitten.com/400/300" /></a>
					<article>
						<h3>Image 3</h3>
						<p>Have here whatever you like.</p>
						<p><a href="#">Close</a></p>
					</article>
				</li>
				<li id="image4">
					<a href="#image4"><img alt="" src="http://placekitten.com/250/400" /></a>
					<article>
						<h3>Image 4</h3>
						<p>Have here whatever you like.</p>
						<p><a href="#">Close</a></p>
					</article>
				</li>
			</ul>
			<ul title="This is page 2">
				<li id="image5">
					<a href="#image5"><img alt="" src="http://placekitten.com/400/250" /></a>
					<article>
						<h3>Image 5</h3>
						<p>Have here whatever you like.</p>
						<p><a href="#">Close</a></p>
					</article>
				</li>
				<li id="image6">
					<a href="#image6"><img alt="" src="http://placekitten.com/400/200" /></a>
					<article>
						<h3>Image 6</h3>
						<p>Have here whatever you like.</p>
						<p><a href="#">Close</a></p>
					</article>
				</li>
				<li id="image7">
					<a href="#image7"><img alt="" src="http://placekitten.com/200/400" /></a>
					<article>
						<h3>Image 7</h3>
						<p>Have here whatever you like.</p>
						<p><a href="#">Close</a></p>
					</article>
				</li>
				<li id="image8">
					<a href="#image8"><img alt="" src="http://placekitten.com/275/400" /></a>
					<article>
						<h3>Image 8</h3>
						<p>Have here whatever you like.</p>
						<p><a href="#">Close</a></p>
					</article>
				</li>
			</ul>
			<ul title="This is page 3">
				<li id="image9">
					<a href="#image9"><img alt="" src="http://placekitten.com/400/275" /></a>
					<article>
						<h3>Image 9</h3>
						<p>Have here whatever you like.</p>
						<p><a href="#">Close</a></p>
					</article>
				</li>
				<li id="image10">
					<a href="#image10"><img alt="" src="http://placekitten.com/350/400" /></a>
					<article>
						<h3>Image 10</h3>
						<p><a href="#">Close</a></p>
					</article>
				</li>
			</ul>
		</section>
	</div>
</div>





<?php include "footer.php"?>