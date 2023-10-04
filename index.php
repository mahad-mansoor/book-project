<!doctype html>
<html lang="en">

<head>
	<title>Sample Website</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<?php
			$srcurl = "includes/";
			$basesurl = "assets/";
			?>
	<?php
			$style = $_SERVER['HTTP_HOST']; 
			$style = $srcurl."style.php"; 
			include($style); 
			
			$urhere = "homepage";
			?>
</head>

<body class="hompg">

	<?php
			$header = $_SERVER['HTTP_HOST']; 
			$header = $srcurl."header.php"; 
			include($header); 
			?>
	<!--start sec1 -->
	<section class="sec1">
		<div class="container">
			<div class="row">
				<div class="col-md-6 m-auto text-center">
					<img src="./assets/images/book1.webp" alt="">
				</div>
				<div class="col-md-6">
					<h4>By Emma Anderson</h4>
					<h1>BUKEE: THE BOOK</h1>
					<h3>A room without books is like a body without soul</h3>
					<p>Lorem ipsum dolor sit amet, in vim quot reque omnesque. An veniam quaeque sit. Vim simul tamquam
						nostrud ex, per quaeque erroribus inciderint no. Vel te error mediocritatem. Eu sed reformidans
						voluptatibus, ut mei euismod periculis disputationi, has legere ceteros eu.</p>
					<p>Mel scripta oblique alienum et, ei platonem qualisque scripserit quo. Ei congue recusabo sed. Ex
						nominavi dignissim est. In modus omnes menandri sed, usu habemus atomorum eu. Id vix duis latine
						labitur. Ut eum vitae offendit. Cu sea porro deleniti.</p>
					<a class="btn1" href="http://">Buy this book-$15.00</a>
				</div>
			</div>
	</section>


	<!-- end sec1 -->
	<!-- timer sec -->
	<section class="timer">
		<div class="container">
			<div class="row">
			<div class="col-md-12">
					<div class="timer">
						<h1 id="headline">Limited Time Offer:</h1>
						<h3>Get a Discount Now!</h3>
						<div id="countdown">
							<div id='tiles'></div>
							<ul class="label">
								<li><span id="days"></span>days</li>
								<li><span id="hours"></span>Hours</li>
								<li><span id="minutes"></span>Minutes</li>
								<li><span id="seconds"></span>Seconds</li>
							</ul>
						</div>

					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- timer sec -->

	<!-- start sec2 -->
	<section class="sec2">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h4>-Book Author</h4>
					<h1>Emma Anderson</h1>
					<h3>A room without books is like a body without soul</h3>
					<p>Lorem ipsum dolor sit amet, in vim quot reque omnesque. An veniam quaeque sit. Vim simul tamquam
						nostrud ex, per quaeque erroribus inciderint no. Vel te error mediocritatem. Eu sed reformidans
						voluptatibus, ut mei euismod periculis disputationi, has legere ceteros eu.</p>
					<p>Mel scripta oblique alienum et, ei platonem qualisque scripserit quo. Ei congue recusabo sed. Ex
						nominavi dignissim est. In modus omnes menandri sed, usu habemus atomorum eu. Id vix duis latine
						labitur. Ut eum vitae offendit. Cu sea porro deleniti.</p>
					<a class="btn1" href="javascript:;">Read Full biography</a>
				</div>
				<div class="col-md-6 text-center">
					<div class="beforeimg">
						<img src="./assets/images/girl.png" alt="">

					</div>

				</div>
			</div>
		</div>
	</section>

	<!-- start counter sec -->
	<section class="countersec text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul>
						<li>
							<h2 class="counter" data-count=12>0</h2>
							<p>Total Published Books</p>
						</li>

						<li>
							<h2 class="counter" data-count=20>0</h2>
							<p>Best Selling Books</p>
						</li>

						<li>
							<h2 class="counter" data-count=150>0</h2>
							<p>Happy Readers</p>
						</li>

					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- end counter sec -->


	<!-- start sec3 -->
	<section class="sec3">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1>BOOK CONTENTS</h1>
					<h3>Lets see what we have covered in the book</h3>
				</div>
				<div class="col-md-6 m-auto">
					<h1>About The Book</h1>
					<p>Lorem ipsum dolor sit amet, in vim quot reque omnesque. An veniam quaeque sit. Vim simul tamquam
						nostrud ex, per quaeque erroribus inciderint no. Vel te error mediocritatem. Eu sed reformidans
						voluptatibus, ut mei euismod periculis disputationi, has legere ceteros eu.</p>
					<h4>Featured in:</h4>
					<ul>
						<li>
							<a href="/"><i class="fa fa-amazon"></i></a>
						</li>
						<li>
							<a href="/"><i class="fa fa-stack-overflow"></i></a>
						</li>

					</ul>



				</div>
				<div class="col-md-6">
					<h1>Table Of Contents</h1>
					<ul class="right">
						<li><i class="fa fa-plus"></i>Lorem ipsum dolor sit amet</li>
						<li><i class="fa fa-plus"></i>Lorem ipsum dolor sit amet</li>
						<li><i class="fa fa-plus"></i>Lorem ipsum dolor sit amet</li>
						<li><i class="fa fa-plus"></i>Lorem ipsum dolor sit amet</li>
						<li><i class="fa fa-plus"></i>Lorem ipsum dolor sit amet</li>
						<li><i class="fa fa-plus"></i>Lorem ipsum dolor sit amet</li>
						<li><i class="fa fa-plus"></i>Lorem ipsum dolor sit amet</li>
						<li><i class="fa fa-plus"></i>Lorem ipsum dolor sit amet</li>

					</ul>

				</div>
				<div class="col-md-12 text-center">
					<a class="btn1" href="/">Read Demo Chapter</a>

				</div>
			</div>
		</div>
	</section>

	<!-- end sec3 -->
	<!-- start sec4 -->
	<section class="sec4">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1>Other Books</h1>
					<h3>Some books you might be interseted in</h3>
					<ul class="bookslider">
						<li>
							<img src="./assets/images/book1.webp" alt="">
							<h4>Daredevils</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
								ut labore et dolore.</p>
							<a href="/"> Read More</a>
						</li>
						<li>
							<img src="./assets/images/book1.webp" alt="">
							<h4>Daredevils</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
								ut labore et dolore.</p>
							<a href="/"> Read More</a>
						</li>
						<li>
							<img src="./assets/images/book1.webp" alt="">
							<h4>Inception</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
								ut labore et dolore.</p>
							<a href="/"> Read More</a>
						</li>
						<li>
							<img src="./assets/images/book1.webp" alt="">
							<h4>Inception</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
									incididunt ut labore et dolore.</p>
								<a href="/"> Read More</a>
						</li>
					</ul>
					<a class="btn1" href="/">Browse All Books</a>
				</div>
			</div>
		</div>
	</section>


	<!-- end sec4 -->
	<!-- start sec5 -->
	<section class="sec5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="testimonial text-center">
						<li>

							<img class=m-auto src="./assets/images/circle-image.png" alt="">
							<i class="fa fa-quote-right"></i>
							<h3>Jonny</h3>
							<h5>calligraphy Expert</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pretium dignissim
								orci ac sagittis. Duis sed eros a tortor aliquet vehicula nec rhoncus erat. Nunc laoreet
								diam sit amet magna fringilla, at lobortis quam luctus. Ut rutrum ipsum in dolor
								suscipit, sit amet egestas lacus malesuada.</p>
						</li>
						<li>

							<img class=m-auto src="./assets/images/circle-image.png" alt="">
							<i class="fa fa-quote-right"></i>
							<h3>Kate Dennings</h3>
							<h5>codding Expert</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pretium dignissim
								orci ac sagittis. Duis sed eros a tortor aliquet vehicula nec rhoncus erat. Nunc laoreet
								diam sit amet magna fringilla, at lobortis quam luctus. Ut rutrum ipsum in dolor
								suscipit, sit amet egestas lacus malesuada.</p>
						</li>
						<li>
							<img class=m-auto src="./assets/images/circle-image.png" alt="">
							<i class="fa fa-quote-right"></i>
							<h3>Devildeads</h3>
							<h5>graphics Designer</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pretium dignissim
								orci ac sagittis. Duis sed eros a tortor aliquet vehicula nec rhoncus erat. Nunc laoreet
								diam sit amet magna fringilla, at lobortis quam luctus. Ut rutrum ipsum in dolor
								suscipit, sit amet egestas lacus malesuada.</p>
						</li>
						<li>

							<img class=m-auto src="./assets/images/circle-image.png" alt="">
							<i class="fa fa-quote-right"></i>
							<h3>John</h3>
							<h5>Web Developer</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pretium dignissim
								orci ac sagittis. Duis sed eros a tortor aliquet vehicula nec rhoncus erat. Nunc laoreet
								diam sit amet magna fringilla, at lobortis quam luctus. Ut rutrum ipsum in dolor
								suscipit, sit amet egestas lacus malesuada.</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>


	<!-- end sec5 -->
	<!-- start sec6 -->
	<section class="sec6">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-center">
					<div class="beforeimg">
						<img src="./assets/images/girlwithbook.jpg" alt="">

					</div>
				</div>
				<div class="col-md-6">
					<h4>-Emma Anderson</h4>
					<h1>Up Coming Events</h1>
					<h2>Some up coming events you might be interseted in</h2>
					<h4>November 21, 2018</h4>
					<h3>Book Signing - San Frisco,CA</h3>
					<p>Lorem ipsum dolor sit amet, in vim quot reque omnesque. An veniam quaeque sit. Vim simul tamquam
						nostrud ex, per quaeque erroribus inciderint no. Vel te error mediocritatem.</p>
					<a class="btn1" href="javascript">Register</a>
					<h4>November 21, 2018</h4>
					<h3>Book Signing - San Frisco,CA</h3>
					<p>Lorem ipsum dolor sit amet, in vim quot reque omnesque. An veniam quaeque sit. Vim simul tamquam
						nostrud ex, per quaeque erroribus inciderint no. Vel te error mediocritatem.</p>
					<a class="btn1" href="javascript">Register</a>
				</div>

			</div>
		</div>
	</section>

	<!-- end sec6 -->
	<!-- start sec7 -->
	<section class="sec7">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1>Latest From Blogs</h1>
					<h3>Some of the Latest posts from my Personal blog</h3>
					<ul class="text-left">
						<li>
							<div class="img">
								<img src="./assets/images/blog1.jpeg" alt="">
							</div>
							<h4 class="pt-3 pb-3">Importance of light in photography</h4>
							<h6>By <span>Emma Anderson -June 25,2018</span></h6>
							<p>Lorem ipsum dolor sit amet, in vim quot reque omnesque. An veniam quaeque sit. Vim simul
								tamquam nostrud ex, per quaeque erroribus inciderint no. Vel te error mediocritatem.</p>
						</li>
						<li>
							<div class="img">
								<img src="./assets/images/blog2.jpg" alt="">
							</div>
							<h4 class="pt-3 pb-3">The Tools you need for perfection</h4>
							<h6>By <span>Emma Anderson -June 22,2018</span></h6>
							<p>Lorem ipsum dolor sit amet, in vim quot reque omnesque. An veniam quaeque sit. Vim simul
								tamquam nostrud ex, per quaeque erroribus inciderint no. Vel te error mediocritatem.</p>
						</li>
						<li>
							<div class="img">
								<img src="./assets/images/blog3.webp" alt="">
							</div>
							<h4 class="pt-3 pb-3">Knowing the difference is important</h4>
							<h6>By <span>Emma Anderson -August 25,2018</span></h6>
							<p>Lorem ipsum dolor sit amet, in vim quot reque omnesque. An veniam quaeque sit. Vim simul
								tamquam nostrud ex, per quaeque erroribus inciderint no. Vel te error mediocritatem.</p>
						</li>
					</ul>

				</div>
				<div class="col-md-12 text-center">
					<a class=btn1 href="javascript">Read More in the Blogs</a>

				</div>
			</div>
		</div>
	</section>

	<!-- end sec7 -->
	<!-- start sec8 -->
	<section class="sec8">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h1>Join Newsletter</h1>
					<p>Lorem ipsum dolor sit amet, in vim quot reque omnesque. An veniam quaeque sit. Vim simul tamquam
						nostrud ex, per quaeque erroribus inciderint no. Vel te error mediocritatem, has legere ceteros
						eu.</p>
				</div>
				<div class="col-md-6">
					<form action="post" class="newsletter">
						<input type="email" placeholder="Enter your email" required>
						<input type="submit" value="Subscribe" class="btn1">

					</form>
				</div>
			</div>
		</div>
	</section>

	<!-- end sec8 -->


	<?php
			$footer = $_SERVER['HTTP_HOST']; 
			$footer = $srcurl."footer.php"; 
			include($footer); 
			?>
</body>

</html>