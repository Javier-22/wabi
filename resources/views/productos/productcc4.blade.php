@extends('vieww.index')

@section('script')
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<!-- //js -->
<!-- countdown -->
<link rel="stylesheet" href="css/jquery.countdown.css" />
<!-- //countdown -->
<!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smooth-scrolling -->
<script type="text/javascript">
jQuery(document).ready(function($) {
    $(".scroll").click(function(event){		
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
});
</script>
@section('title','about')
@include('vieww.nav')
@section('body-content')

<div class="banner9" id="home1">
    <div class="container">
        <h2>Women Sandals<span>up to</span> Flat 40% <i>Discount</i></h2>
    </div>
</div>
@include('productos.categories')
<!-- //banner -->

				<div class="col-md-8 w3ls_dresses_grid_right">
					<div class="col-md-6 w3ls_dresses_grid_right_left">
						<div class="w3ls_dresses_grid_right_grid1">
							<img src="images/75.jpg" alt=" " class="img-responsive" />
							<div class="w3ls_dresses_grid_right_grid1_pos1">
								<h3>Sandals <span>Up To</span> 10% Discount</h3>
							</div>
						</div>
					</div>
					<div class="col-md-6 w3ls_dresses_grid_right_left">
						<div class="w3ls_dresses_grid_right_grid1">
							<img src="images/74.jpg" alt=" " class="img-responsive" />
							<div class="w3ls_dresses_grid_right_grid1_pos">
								<h3>Blue Color <span>Rubber</span> Sandals</h3>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>

					<div class="w3ls_dresses_grid_right_grid2">
						<div class="w3ls_dresses_grid_right_grid2_left">
							<h3>Showing Results: 0-1</h3>
						</div>
						<div class="w3ls_dresses_grid_right_grid2_right">
							<select name="select_item" class="select_item">
								<option selected="selected">Default sorting</option>
								<option>Sort by popularity</option>
								<option>Sort by average rating</option>
								<option>Sort by newness</option>
								<option>Sort by price: low to high</option>
								<option>Sort by price: high to low</option>
							</select>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3ls_dresses_grid_right_grid3">
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
							<div class="agile_ecommerce_tab_left dresses_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/c1.jpg" alt=" " class="img-responsive" />
									<img src="images/c2.jpg" alt=" " class="img-responsive" />
									<img src="images/c3.jpg" alt=" " class="img-responsive" />
									<img src="images/c4.jpg" alt=" " class="img-responsive" />
									<img src="images/c5.jpg" alt=" " class="img-responsive" />
									<img src="images/c6.jpg" alt=" " class="img-responsive" />
									<img src="images/c7.jpg" alt=" " class="img-responsive" />
									<img src="images/c8.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.html">Tan Sandals</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>$420</span> <i class="item_price">$340</i></p>
									<p><a class="item_add" href="#">Add to cart</a></p>
								</div>
								<div class="dresses_grid_pos">
									<h6>New</h6>
								</div>
							</div>
						</div>
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
							<div class="agile_ecommerce_tab_left dresses_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/c2.jpg" alt=" " class="img-responsive" />
									<img src="images/c3.jpg" alt=" " class="img-responsive" />
									<img src="images/c4.jpg" alt=" " class="img-responsive" />
									<img src="images/c5.jpg" alt=" " class="img-responsive" />
									<img src="images/c6.jpg" alt=" " class="img-responsive" />
									<img src="images/c7.jpg" alt=" " class="img-responsive" />
									<img src="images/c8.jpg" alt=" " class="img-responsive" />
									<img src="images/c9.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.html">Bronze Sandals</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>$320</span> <i class="item_price">$250</i></p>
									<p><a class="item_add" href="#">Add to cart</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
							<div class="agile_ecommerce_tab_left dresses_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/c3.jpg" alt=" " class="img-responsive" />
									<img src="images/c4.jpg" alt=" " class="img-responsive" />
									<img src="images/c5.jpg" alt=" " class="img-responsive" />
									<img src="images/c6.jpg" alt=" " class="img-responsive" />
									<img src="images/c7.jpg" alt=" " class="img-responsive" />
									<img src="images/c8.jpg" alt=" " class="img-responsive" />
									<img src="images/c9.jpg" alt=" " class="img-responsive" />
									<img src="images/c1.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.html">Belly Shoes</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>$231</span> <i class="item_price">$200</i></p>
									<p><a class="item_add" href="#">Add to cart</a></p>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3ls_dresses_grid_right_grid3">
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
							<div class="agile_ecommerce_tab_left dresses_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/c4.jpg" alt=" " class="img-responsive" />
									<img src="images/c5.jpg" alt=" " class="img-responsive" />
									<img src="images/c6.jpg" alt=" " class="img-responsive" />
									<img src="images/c7.jpg" alt=" " class="img-responsive" />
									<img src="images/c8.jpg" alt=" " class="img-responsive" />
									<img src="images/c9.jpg" alt=" " class="img-responsive" />
									<img src="images/c1.jpg" alt=" " class="img-responsive" />
									<img src="images/c2.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.html">Black Sandals</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>$323</span> <i class="item_price">$270</i></p>
									<p><a class="item_add" href="#">Add to cart</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
							<div class="agile_ecommerce_tab_left dresses_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/c5.jpg" alt=" " class="img-responsive" />
									<img src="images/c6.jpg" alt=" " class="img-responsive" />
									<img src="images/c7.jpg" alt=" " class="img-responsive" />
									<img src="images/c8.jpg" alt=" " class="img-responsive" />
									<img src="images/c9.jpg" alt=" " class="img-responsive" />
									<img src="images/c1.jpg" alt=" " class="img-responsive" />
									<img src="images/c2.jpg" alt=" " class="img-responsive" />
									<img src="images/c3.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.html">Brown Sandals</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>$233</span> <i class="item_price">$190</i></p>
									<p><a class="item_add" href="#">Add to cart</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
							<div class="agile_ecommerce_tab_left dresses_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/c6.jpg" alt=" " class="img-responsive" />
									<img src="images/c7.jpg" alt=" " class="img-responsive" />
									<img src="images/c8.jpg" alt=" " class="img-responsive" />
									<img src="images/c9.jpg" alt=" " class="img-responsive" />
									<img src="images/c1.jpg" alt=" " class="img-responsive" />
									<img src="images/c2.jpg" alt=" " class="img-responsive" />
									<img src="images/c3.jpg" alt=" " class="img-responsive" />
									<img src="images/c4.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.html">Black Sandals</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>$342</span> <i class="item_price">$270</i></p>
									<p><a class="item_add" href="#">Add to cart</a></p>
								</div>
								<div class="dresses_grid_pos">
									<h6>New</h6>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3ls_dresses_grid_right_grid3">
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
							<div class="agile_ecommerce_tab_left dresses_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/c7.jpg" alt=" " class="img-responsive" />
									<img src="images/c8.jpg" alt=" " class="img-responsive" />
									<img src="images/c9.jpg" alt=" " class="img-responsive" />
									<img src="images/c1.jpg" alt=" " class="img-responsive" />
									<img src="images/c2.jpg" alt=" " class="img-responsive" />
									<img src="images/c3.jpg" alt=" " class="img-responsive" />
									<img src="images/c4.jpg" alt=" " class="img-responsive" />
									<img src="images/c5.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.html">Beige Sandals</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>$312</span> <i class="item_price">$212</i></p>
									<p><a class="item_add" href="#">Add to cart</a></p>
								</div>
								<div class="dresses_grid_pos">
									<h6>New</h6>
								</div>
							</div>
						</div>
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
							<div class="agile_ecommerce_tab_left dresses_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/c8.jpg" alt=" " class="img-responsive" />
									<img src="images/c9.jpg" alt=" " class="img-responsive" />
									<img src="images/c1.jpg" alt=" " class="img-responsive" />
									<img src="images/c2.jpg" alt=" " class="img-responsive" />
									<img src="images/c3.jpg" alt=" " class="img-responsive" />
									<img src="images/c4.jpg" alt=" " class="img-responsive" />
									<img src="images/c5.jpg" alt=" " class="img-responsive" />
									<img src="images/c6.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.html">Brown Sandals</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>$234</span> <i class="item_price">$180</i></p>
									<p><a class="item_add" href="#">Add to cart</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
							<div class="agile_ecommerce_tab_left dresses_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/c9.jpg" alt=" " class="img-responsive" />
									<img src="images/c2.jpg" alt=" " class="img-responsive" />
									<img src="images/c3.jpg" alt=" " class="img-responsive" />
									<img src="images/c4.jpg" alt=" " class="img-responsive" />
									<img src="images/c5.jpg" alt=" " class="img-responsive" />
									<img src="images/c6.jpg" alt=" " class="img-responsive" />
									<img src="images/c7.jpg" alt=" " class="img-responsive" />
									<img src="images/c8.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.html">Nicci Black Sandals</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>$323</span> <i class="item_price">$250</i></p>
									<p><a class="item_add" href="#">Add to cart</a></p>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
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
@include('productos.productrela')


@endsection