@extends('base.index')
@section('title','home')
{{-- <script>
    $('#myModal88').modal('show');
    </script> --}}
@section('body-content')
<div class="container">
	<!-- Carousel -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">

	  <ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	  </ol>
 
	  <div class="carousel-inner">
  
		<div class="item active">
		  <img src="images/prueba6.png" alt="Los Angeles" style="width:100%;">
		  <div class="carousel-caption">
			<h3>Los Angeles</h3>
			<p>LA is always so much fun!</p>
		  </div>
		</div>
  
		<div class="item">
		  <img src="images/prueba6.png" alt="Chicago" style="width:100%;">
		  <div class="carousel-caption">
			<h3>Chicago</h3>
			<p>Thank you, Chicago!</p>
		  </div>
		</div>
	  
		<div class="item">
		  <img src="images/prueba6.png" alt="New York" style="width:100%;">
		  <div class="carousel-caption">
			<h3>New York</h3>
			<p>We love the Big Apple!</p>
		  </div>
		</div>
		<div class="item">
			<img src="images/prueba6.png" alt="New York" style="width:100%;">
			<div class="carousel-caption">
			  <h3>New York</h3>
			  <p>We love the Big Apple!</p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/prueba6.png" alt="New York" style="width:100%;">
			<div class="carousel-caption">
			  <h3>New York</h3>
			  <p>We love the Big Apple!</p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/prueba6.png" alt="New York" style="width:100%;">
			<div class="carousel-caption">
			  <h3>New York</h3>
			  <p>We love the Big Apple!</p>
			</div>
		  </div>
	  </div>

	  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div>
  </div>
  
{{-- ############################################################################################################## --}}
{{-- <div class="banner" id="home1"> --}}
<div class="container">

<div class="row p-3 categ">
	<div class="col-sm-6 col-md-3">
	  <div class="img-responsive">
		<img class="img-categ" src="images/barber.png" alt="..." >
		<div class="caption">
		  <h3 class="titulo-tiendas"><strong>Barber Shop</strong></h3> <br>
		  <p class="texto-tiendas">En Barber Shop Wabi Sabi,  ofrecemos servicios para el cuidado del cabello, rostro y barba de aquellos hombres que desean renovar o mantener su imagen.</p> <br>
		  <p><a href="{{route('barberia.index')}}" class="buton-tienda">Visitar</a></p>
		</div>
	  </div>
	</div>
	<div class="col-sm-6 col-md-6">
		<div class="img-responsive">
		  <img class="img-categ" src="images/prueba3.png" alt="...">
		  <div class="caption">
			<h3 class="titulo-tiendas"><strong>SALON</strong></h3> <br>
			<p class="texto-tiendas">Un espacio dedicado a la mujer donde podrán acceder a los más altos estándares de belleza y calidad, con las últimas tendencias..</p> <br>
			<p><a href="#" class="buton-tienda">Visitar</a></p>
		  </div>
		</div>
	  </div>
	  <div class="col-sm-6 col-md-3">
		<div class="img-responsive ">
		  <img class="img-categ" src="images/salon.png" alt="...">
		  <div class="caption">
			<h3 class="titulo-tiendas"><strong>COSMETICS</strong></h3> <br>
			<p class="texto-tiendas">Wabi Sabi Cosmetics es una marca que despierta pasión en los amantes de la belleza, debido a que pone a disposición los productos y la asesoría para llevar su belleza a otro nivel.</p> <br>br
			<p><a href="#" class="buton-tienda">Visitar</a></p>
		  </div>
		</div>
	  </div>
  </div>
  
</div>
</div>

	{{-- <div class="banner" id="home1">
		<div class="container">
			<h3>fashions fade, <span>style is eternal</span></h3>
		</div>
	</div> --}}
<!-- //banner -->

<!-- banner-bottom -->
	{{-- <div class="banner-bottom">
		<div class="container">
			<div class="col-md-5 wthree_banner_bottom_left">
				<div class="video-img">
					<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
						<span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
					</a>
				</div>
				<!-- pop-up-box -->
						<link href="css/popuo-box.css" rel="stylesheet" type="text/css" property="" media="all" />
						<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!--//pop-up-box -->
					<div id="small-dialog" class="mfp-hide">
						<iframe src="https://player.vimeo.com/video/23259282?title=0&byline=0&portrait=0"></iframe>
					</div>
					<script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
						});
					</script>
			</div> --}}
			{{-- <div class="col-md-7 wthree_banner_bottom_right">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home">T-shirts</a></li>
						<li role="presentation"><a href="#skirts" role="tab" id="skirts-tab" data-toggle="tab" aria-controls="skirts">Skirts</a></li>
						<li role="presentation"><a href="#watches" role="tab" id="watches-tab" data-toggle="tab" aria-controls="watches">Watches</a></li>
						<li role="presentation"><a href="#sandals" role="tab" id="sandals-tab" data-toggle="tab" aria-controls="sandals">Sandals</a></li>
						<li role="presentation"><a href="#jewellery" role="tab" id="jewellery-tab" data-toggle="tab" aria-controls="jewellery">Jewellery</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/6.jpg" alt=" " class="c" />
										<img src="images/4.jpg" alt=" " class="img-responsive" />
										<img src="images/5.jpg" alt=" " class="img-responsive" />
										<img src="images/3.jpg" alt=" " class="img-responsive" />
										<img src="images/7.jpg" alt=" " class="img-responsive" />
										<img src="images/3.jpg" alt=" " class="img-responsive" />
										<img src="images/5.jpg" alt=" " class="img-responsive" />
										<img src="images/6.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">T-Shirt</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$320</span> <i class="item_price">$250</i></p>
										<p><a class="item_add" href="#">Add to cart</a></p>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/4.jpg" alt=" " class="img-responsive" />
										<img src="images/6.jpg" alt=" " class="img-responsive" />
										<img src="images/5.jpg" alt=" " class="img-responsive" />
										<img src="images/3.jpg" alt=" " class="img-responsive" />
										<img src="images/7.jpg" alt=" " class="img-responsive" />
										<img src="images/3.jpg" alt=" " class="img-responsive" />
										<img src="images/5.jpg" alt=" " class="img-responsive" />
										<img src="images/6.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">T-Shirt</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$320</span> <i class="item_price">$250</i></p>
										<p><a class="item_add" href="#">Add to cart</a></p>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/5.jpg" alt=" " class="img-responsive" />
										<img src="images/6.jpg" alt=" " class="img-responsive" />
										<img src="images/4.jpg" alt=" " class="img-responsive" />
										<img src="images/3.jpg" alt=" " class="img-responsive" />
										<img src="images/7.jpg" alt=" " class="img-responsive" />
										<img src="images/3.jpg" alt=" " class="img-responsive" />
										<img src="images/5.jpg" alt=" " class="img-responsive" />
										<img src="images/6.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">T-Shirt</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$320</span> <i class="item_price">$250</i></p>
										<p><a class="item_add" href="#">Add to cart</a></p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="skirts" aria-labelledby="skirts-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/8.jpg" alt=" " class="img-responsive" />
										<img src="images/9.jpg" alt=" " class="img-responsive" />
										<img src="images/10.jpg" alt=" " class="img-responsive" />
										<img src="images/8.jpg" alt=" " class="img-responsive" />
										<img src="images/9.jpg" alt=" " class="img-responsive" />
										<img src="images/10.jpg" alt=" " class="img-responsive" />
										<img src="images/8.jpg" alt=" " class="img-responsive" />
										<img src="images/9.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Skirt</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$320</span> <i class="item_price">$250</i></p>
										<p><a class="item_add" href="#">Add to cart</a></p>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/9.jpg" alt=" " class="img-responsive" />
										<img src="images/8.jpg" alt=" " class="img-responsive" />
										<img src="images/10.jpg" alt=" " class="img-responsive" />
										<img src="images/8.jpg" alt=" " class="img-responsive" />
										<img src="images/9.jpg" alt=" " class="img-responsive" />
										<img src="images/10.jpg" alt=" " class="img-responsive" />
										<img src="images/8.jpg" alt=" " class="img-responsive" />
										<img src="images/9.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Skirt</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$320</span> <i class="item_price">$250</i></p>
										<p><a class="item_add" href="#">Add to cart</a></p>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/10.jpg" alt=" " class="img-responsive" />
										<img src="images/8.jpg" alt=" " class="img-responsive" />
										<img src="images/9.jpg" alt=" " class="img-responsive" />
										<img src="images/8.jpg" alt=" " class="img-responsive" />
										<img src="images/9.jpg" alt=" " class="img-responsive" />
										<img src="images/10.jpg" alt=" " class="img-responsive" />
										<img src="images/8.jpg" alt=" " class="img-responsive" />
										<img src="images/9.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Skirt</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$320</span> <i class="item_price">$250</i></p>
										<p><a class="item_add" href="#">Add to cart</a></p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="watches" aria-labelledby="watches-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/11.jpg" alt=" " class="img-responsive" />
										<img src="images/12.jpg" alt=" " class="img-responsive" />
										<img src="images/13.jpg" alt=" " class="img-responsive" />
										<img src="images/11.jpg" alt=" " class="img-responsive" />
										<img src="images/12.jpg" alt=" " class="img-responsive" />
										<img src="images/13.jpg" alt=" " class="img-responsive" />
										<img src="images/11.jpg" alt=" " class="img-responsive" />
										<img src="images/12.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Watch</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$320</span> <i class="item_price">$250</i></p>
										<p><a class="item_add" href="#">Add to cart</a></p>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/12.jpg" alt=" " class="img-responsive" />
										<img src="images/11.jpg" alt=" " class="img-responsive" />
										<img src="images/13.jpg" alt=" " class="img-responsive" />
										<img src="images/11.jpg" alt=" " class="img-responsive" />
										<img src="images/12.jpg" alt=" " class="img-responsive" />
										<img src="images/13.jpg" alt=" " class="img-responsive" />
										<img src="images/11.jpg" alt=" " class="img-responsive" />
										<img src="images/12.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Watch</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$320</span> <i class="item_price">$250</i></p>
										<p><a class="item_add" href="#">Add to cart</a></p>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/13.jpg" alt=" " class="img-responsive" />
										<img src="images/11.jpg" alt=" " class="img-responsive" />
										<img src="images/12.jpg" alt=" " class="img-responsive" />
										<img src="images/11.jpg" alt=" " class="img-responsive" />
										<img src="images/12.jpg" alt=" " class="img-responsive" />
										<img src="images/13.jpg" alt=" " class="img-responsive" />
										<img src="images/11.jpg" alt=" " class="img-responsive" />
										<img src="images/12.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Watch</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$320</span> <i class="item_price">$250</i></p>
										<p><a class="item_add" href="#">Add to cart</a></p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="sandals" aria-labelledby="sandals-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/14.jpg" alt=" " class="img-responsive" />
										<img src="images/15.jpg" alt=" " class="img-responsive" />
										<img src="images/16.jpg" alt=" " class="img-responsive" />
										<img src="images/14.jpg" alt=" " class="img-responsive" />
										<img src="images/15.jpg" alt=" " class="img-responsive" />
										<img src="images/16.jpg" alt=" " class="img-responsive" />
										<img src="images/14.jpg" alt=" " class="img-responsive" />
										<img src="images/15.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Sandal</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$320</span> <i class="item_price">$250</i></p>
										<p><a class="item_add" href="#">Add to cart</a></p>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/15.jpg" alt=" " class="img-responsive" />
										<img src="images/14.jpg" alt=" " class="img-responsive" />
										<img src="images/16.jpg" alt=" " class="img-responsive" />
										<img src="images/14.jpg" alt=" " class="img-responsive" />
										<img src="images/15.jpg" alt=" " class="img-responsive" />
										<img src="images/16.jpg" alt=" " class="img-responsive" />
										<img src="images/14.jpg" alt=" " class="img-responsive" />
										<img src="images/15.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Sandal</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$320</span> <i class="item_price">$250</i></p>
										<p><a class="item_add" href="#">Add to cart</a></p>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/16.jpg" alt=" " class="img-responsive" />
										<img src="images/14.jpg" alt=" " class="img-responsive" />
										<img src="images/15.jpg" alt=" " class="img-responsive" />
										<img src="images/14.jpg" alt=" " class="img-responsive" />
										<img src="images/15.jpg" alt=" " class="img-responsive" />
										<img src="images/16.jpg" alt=" " class="img-responsive" />
										<img src="images/14.jpg" alt=" " class="img-responsive" />
										<img src="images/15.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Sandal</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$320</span> <i class="item_price">$250</i></p>
										<p><a class="item_add" href="#">Add to cart</a></p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="jewellery" aria-labelledby="jewellery-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/17.jpg" alt=" " class="img-responsive" />
										<img src="images/18.jpg" alt=" " class="img-responsive" />
										<img src="images/19.jpg" alt=" " class="img-responsive" />
										<img src="images/17.jpg" alt=" " class="img-responsive" />
										<img src="images/18.jpg" alt=" " class="img-responsive" />
										<img src="images/19.jpg" alt=" " class="img-responsive" />
										<img src="images/17.jpg" alt=" " class="img-responsive" />
										<img src="images/18.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Jewellery</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$320</span> <i class="item_price">$250</i></p>
										<p><a class="item_add" href="#">Add to cart</a></p>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/18.jpg" alt=" " class="img-responsive" />
										<img src="images/17.jpg" alt=" " class="img-responsive" />
										<img src="images/19.jpg" alt=" " class="img-responsive" />
										<img src="images/17.jpg" alt=" " class="img-responsive" />
										<img src="images/18.jpg" alt=" " class="img-responsive" />
										<img src="images/19.jpg" alt=" " class="img-responsive" />
										<img src="images/17.jpg" alt=" " class="img-responsive" />
										<img src="images/18.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Jewellery</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$320</span> <i class="item_price">$250</i></p>
										<p><a class="item_add" href="#">Add to cart</a></p>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/19.jpg" alt=" " class="img-responsive" />
										<img src="images/17.jpg" alt=" " class="img-responsive" />
										<img src="images/18.jpg" alt=" " class="img-responsive" />
										<img src="images/17.jpg" alt=" " class="img-responsive" />
										<img src="images/18.jpg" alt=" " class="img-responsive" />
										<img src="images/19.jpg" alt=" " class="img-responsive" />
										<img src="images/17.jpg" alt=" " class="img-responsive" />
										<img src="images/18.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Jewellery</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$320</span> <i class="item_price">$250</i></p>
										<p><a class="item_add" href="#">Add to cart</a></p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div> --}}
					<!--modal-video-->
				<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_left">
										<img src="images/20.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="col-md-7 modal_body_right">
										<h4>a good look women's shirt</h4>
										<p>Ut enim ad minim veniam, quis nostrud 
											exercitation ullamco laboris nisi ut aliquip ex ea 
											commodo consequat.Duis aute irure dolor in 
											reprehenderit in voluptate velit esse cillum dolore 
											eu fugiat nulla pariatur. Excepteur sint occaecat 
											cupidatat non proident, sunt in culpa qui officia 
											deserunt mollit anim id est laborum.</p>
										<div class="rating">
											<div class="rating-left">
												<img src="images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="modal_body_right_cart simpleCart_shelfItem">
											<p><span>$320</span> <i class="item_price">$250</i></p>
											<p><a class="item_add" href="#">Add to cart</a></p>
										</div>
										<h5>Color</h5>
										<div class="color-quality">
											<ul>
												<li><a href="#"><span></span>Red</a></li>
												<li><a href="#" class="brown"><span></span>Yellow</a></li>
												<li><a href="#" class="purple"><span></span>Purple</a></li>
												<li><a href="#" class="gray"><span></span>Violet</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</section>
						</div>
					</div>
				</div>
				<div class="modal video-modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_left">
										<img src="images/63.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="col-md-7 modal_body_right">
										<h4>a good look black women's jeans</h4>
										<p>Ut enim ad minim veniam, quis nostrud 
											exercitation ullamco laboris nisi ut aliquip ex ea 
											commodo consequat.Duis aute irure dolor in 
											reprehenderit in voluptate velit esse cillum dolore 
											eu fugiat nulla pariatur. Excepteur sint occaecat 
											cupidatat non proident, sunt in culpa qui officia 
											deserunt mollit anim id est laborum.</p>
										<div class="rating">
											<div class="rating-left">
												<img src="images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="modal_body_right_cart simpleCart_shelfItem">
											<p><span>$320</span> <i class="item_price">$250</i></p>
											<p><a class="item_add" href="#">Add to cart</a></p>
										</div>
										<h5>Color</h5>
										<div class="color-quality">
											<ul>
												<li><a href="#"><span></span>Red</a></li>
												<li><a href="#" class="brown"><span></span>Yellow</a></li>
												<li><a href="#" class="purple"><span></span>Purple</a></li>
												<li><a href="#" class="gray"><span></span>Violet</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</section>
						</div>
					</div>
				</div>
				<div class="modal video-modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_left">
										<img src="images/23.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="col-md-7 modal_body_right">
										<h4>a good look women's Watch</h4>
										<p>Ut enim ad minim veniam, quis nostrud 
											exercitation ullamco laboris nisi ut aliquip ex ea 
											commodo consequat.Duis aute irure dolor in 
											reprehenderit in voluptate velit esse cillum dolore 
											eu fugiat nulla pariatur. Excepteur sint occaecat 
											cupidatat non proident, sunt in culpa qui officia 
											deserunt mollit anim id est laborum.</p>
										<div class="rating">
											<div class="rating-left">
												<img src="images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="modal_body_right_cart simpleCart_shelfItem">
											<p><span>$320</span> <i class="item_price">$250</i></p>
											<p><a class="item_add" href="#">Add to cart</a></p>
										</div>
										<h5>Color</h5>
										<div class="color-quality">
											<ul>
												<li><a href="#"><span></span>Red</a></li>
												<li><a href="#" class="brown"><span></span>Yellow</a></li>
												<li><a href="#" class="purple"><span></span>Purple</a></li>
												<li><a href="#" class="gray"><span></span>Violet</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</section>
						</div>
					</div>
				</div>
				<div class="modal video-modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModal3">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_left">
										<img src="images/24.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="col-md-7 modal_body_right">
										<h4>a good look women's Sandal</h4>
										<p>Ut enim ad minim veniam, quis nostrud 
											exercitation ullamco laboris nisi ut aliquip ex ea 
											commodo consequat.Duis aute irure dolor in 
											reprehenderit in voluptate velit esse cillum dolore 
											eu fugiat nulla pariatur. Excepteur sint occaecat 
											cupidatat non proident, sunt in culpa qui officia 
											deserunt mollit anim id est laborum.</p>
										<div class="rating">
											<div class="rating-left">
												<img src="images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="modal_body_right_cart simpleCart_shelfItem">
											<p><span>$320</span> <i class="item_price">$250</i></p>
											<p><a class="item_add" href="#">Add to cart</a></p>
										</div>
										<h5>Color</h5>
										<div class="color-quality">
											<ul>
												<li><a href="#"><span></span>Red</a></li>
												<li><a href="#" class="brown"><span></span>Yellow</a></li>
												<li><a href="#" class="purple"><span></span>Purple</a></li>
												<li><a href="#" class="gray"><span></span>Violet</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</section>
						</div>
					</div>
				</div>
				<div class="modal video-modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModal4">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_left">
										<img src="images/22.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="col-md-7 modal_body_right">
										<h4>a good look women's Necklace</h4>
										<p>Ut enim ad minim veniam, quis nostrud 
											exercitation ullamco laboris nisi ut aliquip ex ea 
											commodo consequat.Duis aute irure dolor in 
											reprehenderit in voluptate velit esse cillum dolore 
											eu fugiat nulla pariatur. Excepteur sint occaecat 
											cupidatat non proident, sunt in culpa qui officia 
											deserunt mollit anim id est laborum.</p>
										<div class="rating">
											<div class="rating-left">
												<img src="images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="modal_body_right_cart simpleCart_shelfItem">
											<p><span>$320</span> <i class="item_price">$250</i></p>
											<p><a class="item_add" href="#">Add to cart</a></p>
										</div>
										<h5>Color</h5>
										<div class="color-quality">
											<ul>
												<li><a href="#"><span></span>Red</a></li>
												<li><a href="#" class="brown"><span></span>Yellow</a></li>
												<li><a href="#" class="purple"><span></span>Purple</a></li>
												<li><a href="#" class="gray"><span></span>Violet</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</section>
						</div>
					</div>
				</div>
				<div class="modal video-modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModal5">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_left">
										<img src="images/35.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="col-md-7 modal_body_right">
										<h4>a good look women's Jacket</h4>
										<p>Ut enim ad minim veniam, quis nostrud 
											exercitation ullamco laboris nisi ut aliquip ex ea 
											commodo consequat.Duis aute irure dolor in 
											reprehenderit in voluptate velit esse cillum dolore 
											eu fugiat nulla pariatur. Excepteur sint occaecat 
											cupidatat non proident, sunt in culpa qui officia 
											deserunt mollit anim id est laborum.</p>
										<div class="rating">
											<div class="rating-left">
												<img src="images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="modal_body_right_cart simpleCart_shelfItem">
											<p><span>$320</span> <i class="item_price">$250</i></p>
											<p><a class="item_add" href="#">Add to cart</a></p>
										</div>
										<h5>Color</h5>
										<div class="color-quality">
											<ul>
												<li><a href="#"><span></span>Red</a></li>
												<li><a href="#" class="brown"><span></span>Yellow</a></li>
												<li><a href="#" class="purple"><span></span>Purple</a></li>
												<li><a href="#" class="gray"><span></span>Violet</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</section>
						</div>
					</div>
				</div>
				<div class="modal video-modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModal6">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_left">
										<img src="images/39.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="col-md-7 modal_body_right">
										<h4>a good look women's Long Skirt</h4>
										<p>Ut enim ad minim veniam, quis nostrud 
											exercitation ullamco laboris nisi ut aliquip ex ea 
											commodo consequat.Duis aute irure dolor in 
											reprehenderit in voluptate velit esse cillum dolore 
											eu fugiat nulla pariatur. Excepteur sint occaecat 
											cupidatat non proident, sunt in culpa qui officia 
											deserunt mollit anim id est laborum.</p>
										<div class="rating">
											<div class="rating-left">
												<img src="images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="modal_body_right_cart simpleCart_shelfItem">
											<p><span>$320</span> <i class="item_price">$250</i></p>
											<p><a class="item_add" href="#">Add to cart</a></p>
										</div>
										<h5>Color</h5>
										<div class="color-quality">
											<ul>
												<li><a href="#"><span></span>Red</a></li>
												<li><a href="#" class="brown"><span></span>Yellow</a></li>
												<li><a href="#" class="purple"><span></span>Purple</a></li>
												<li><a href="#" class="gray"><span></span>Violet</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</section>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //banner-bottom -->

<!-- banner-bottom1 -->
	<div class="banner-bottom1">
		<div class="agileinfo_banner_bottom1_grids">
			<div class="col-md-7 agileinfo_banner_bottom1_grid_left">
				<h3>Grand Opening Event With flat<span>20% <i>Discount</i></span></h3>
				<a href="products.html">Shop Now</a>
			</div>
			<div class="col-md-5 agileinfo_banner_bottom1_grid_right">
				<h4>hot deal</h4>
				<div class="timer_wrap">
					<div id="counter"> </div>
				</div>
				<script src="js/jquery.countdown.js"></script>
				<script src="js/script.js"></script>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //banner-bottom1 -->

<!-- special-deals -->
	<div class="special-deals">
		<div class="container">
			<h2>Special Deals</h2>
			<div class="w3agile_special_deals_grids">
				<div class="col-md-7 w3agile_special_deals_grid_left">
					<div class="w3agile_special_deals_grid_left_grid">
						<img src="images/26.jpg" alt=" " class="img-responsive" />
						<div class="w3agile_special_deals_grid_left_grid_pos1">
							<h5>30%<span>Off/-</span></h5>
						</div>
						<div class="w3agile_special_deals_grid_left_grid_pos">
							<h4>We Offer <span>Best Products</span></h4>
						</div>
					</div>
					<div class="wmuSlider example1">
						<div class="wmuSliderWrapper">
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_left_grid1">
										<img src="images/1.png" alt=" " class="img-responsive" />
										<p>Quis autem vel eum iure reprehenderit qui in ea voluptate 
											velit esse quam nihil molestiae consequatur, vel illum qui dolorem 
											eum fugiat quo voluptas nulla pariatur</p>
										<h4>Laura</h4>
									</div>
								</div>
							</article>
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_left_grid1">
										<img src="images/2.png" alt=" " class="img-responsive" />
										<p>Quis autem vel eum iure reprehenderit qui in ea voluptate 
											velit esse quam nihil molestiae consequatur, vel illum qui dolorem 
											eum fugiat quo voluptas nulla pariatur</p>
										<h4>Michael</h4>
									</div>
								</div>
							</article>
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_left_grid1">
										<img src="images/3.png" alt=" " class="img-responsive" />
										<p>Quis autem vel eum iure reprehenderit qui in ea voluptate 
											velit esse quam nihil molestiae consequatur, vel illum qui dolorem 
											eum fugiat quo voluptas nulla pariatur</p>
										<h4>Rosy</h4>
									</div>
								</div>
							</article>
						</div>
					</div>
						<script src="js/jquery.wmuSlider.js"></script> 
						<script>
							$('.example1').wmuSlider();         
						</script> 
				</div>
				<div class="col-md-5 w3agile_special_deals_grid_right">
					<img src="images/25.jpg" alt=" " class="img-responsive" />
					<div class="w3agile_special_deals_grid_right_pos">
						<h4>Women's <span>Special</span></h4>
						<h5>save up <span>to</span> 30%</h5>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //special-deals -->
<!-- new-products -->
	<div class="new-products">
		<div class="container">
			<h3>New Products</h3>
			<div class="agileinfo_new_products_grids">
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="images/27.jpg" alt=" " class="img-responsive" />
							<img src="images/28.jpg" alt=" " class="img-responsive" />
							<img src="images/29.jpg" alt=" " class="img-responsive" />
							<img src="images/30.jpg" alt=" " class="img-responsive" />
							<img src="images/27.jpg" alt=" " class="img-responsive" />
							<img src="images/28.jpg" alt=" " class="img-responsive" />
							<img src="images/29.jpg" alt=" " class="img-responsive" />
							<img src="images/30.jpg" alt=" " class="img-responsive" />
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="single.html">Skirts</a></h5>
						<div class="simpleCart_shelfItem">
							<p><span>$320</span> <i class="item_price">$250</i></p>
							<p><a class="item_add" href="#">Add to cart</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="images/31.jpg" alt=" " class="img-responsive" />
							<img src="images/32.jpg" alt=" " class="img-responsive" />
							<img src="images/33.jpg" alt=" " class="img-responsive" />
							<img src="images/34.jpg" alt=" " class="img-responsive" />
							<img src="images/31.jpg" alt=" " class="img-responsive" />
							<img src="images/32.jpg" alt=" " class="img-responsive" />
							<img src="images/33.jpg" alt=" " class="img-responsive" />
							<img src="images/34.jpg" alt=" " class="img-responsive" />
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#myModal5"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="single.html">Jackets</a></h5>
						<div class="simpleCart_shelfItem">
							<p><span>$320</span> <i class="item_price">$250</i></p>
							<p><a class="item_add" href="#">Add to cart</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="images/37.jpg" alt=" " class="img-responsive" />
							<img src="images/30.jpg" alt=" " class="img-responsive" />
							<img src="images/36.jpg" alt=" " class="img-responsive" />
							<img src="images/38.jpg" alt=" " class="img-responsive" />
							<img src="images/37.jpg" alt=" " class="img-responsive" />
							<img src="images/30.jpg" alt=" " class="img-responsive" />
							<img src="images/36.jpg" alt=" " class="img-responsive" />
							<img src="images/38.jpg" alt=" " class="img-responsive" />
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="single.html">Dresses</a></h5>
						<div class="simpleCart_shelfItem">
							<p><span>$320</span> <i class="item_price">$250</i></p>
							<p><a class="item_add" href="#">Add to cart</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="images/40.jpg" alt=" " class="img-responsive" />
							<img src="images/41.jpg" alt=" " class="img-responsive" />
							<img src="images/42.jpg" alt=" " class="img-responsive" />
							<img src="images/43.jpg" alt=" " class="img-responsive" />
							<img src="images/40.jpg" alt=" " class="img-responsive" />
							<img src="images/41.jpg" alt=" " class="img-responsive" />
							<img src="images/42.jpg" alt=" " class="img-responsive" />
							<img src="images/43.jpg" alt=" " class="img-responsive" />
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="single.html">Jeans</a></h5>
						<div class="simpleCart_shelfItem">
							<p><span>$320</span> <i class="item_price">$250</i></p>
							<p><a class="item_add" href="#">Add to cart</a></p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //new-products -->
<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3>Top Brands</h3>
			<div class="sliderfig">
				<ul id="flexiselDemo1">			
					<li>
						<img src="images/4.png" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/5.png" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/6.png" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/7.png" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/46.jpg" alt=" " class="img-responsive" />
					</li>
				</ul>
			</div>
					<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 4,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
							});
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		</div>
	</div>
<!-- //top-brands -->
  </section>
@endsection
