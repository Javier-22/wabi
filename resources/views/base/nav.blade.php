@include('base.template')
<!-- header -->
<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                &times;</button>
            <h4 class="modal-title" id="myModalLabel">
                Don't Wait, Login now!</h4>
        </div>
        <div class="modal-body modal-body-sub">
            <div class="row">
                <div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
                    <div class="sap_tabs">	
                        <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                            <ul>
                                <li class="resp-tab-item" aria-controls="tab_item-0"><span>Iniciar sesíon</span></li>
                                <li class="resp-tab-item" aria-controls="tab_item-1"><span>Registrate</span></li>
                            </ul>
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                <div class="facts">
                                    <div class="register">
                                        <form action="#" method="post">
                                            <input name="Email" placeholder="Email Address" type="text" required="">
                                            <input name="Password" placeholder="Password" type="password" required="">
                                            <div class="sign-up">
                                                <input type="submit" value="Sign in"/>
                                            </div>
                                        </form>
                                    </div>
                                </div> 
                            </div>	

                            <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
                                <div class="facts">
                                    <div class="register">
                                        <form action="#" method="post">			
                                            <input placeholder="Name" name="Name" type="text" required="">
                                            <input placeholder="Email Address" name="Email" type="email" required="">	
                                            <input placeholder="Password" name="Password" type="password" required="">	
                                            <input placeholder="Confirm Password" name="Password" type="password" required="">
                                            <div class="sign-up">
                                                <input type="submit" value="Create Account"/>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> 			        					            	      
                        </div>	
                    </div>
                    <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#horizontalTab').easyResponsiveTabs({
                                type: 'default', //Types: default, vertical, accordion           
                                width: 'auto', //auto or any width like 600px
                                fit: true   // 100% fit in a container
                            });
                        });
                    </script>
                    <div id="OR" class="hidden-xs">
                        OR</div>
                </div>
                <div class="col-md-4 modal_body_right modal_body_right1">
                    <div class="row text-center sign-with">
                        <div class="col-md-12">
                            <h3 class="other-nw">
                                Sign in with</h3>
                        </div>
                        <div class="col-md-12">
                            <ul class="social">
                                <li class="social_facebook"><a href="#" class="entypo-facebook"></a></li>
                                <li class="social_dribbble"><a href="#" class="entypo-dribbble"></a></li>
                                <li class="social_twitter"><a href="#" class="entypo-twitter"></a></li>
                                <li class="social_behance"><a href="#" class="entypo-behance"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
{{-- <script>
$('#myModal88').modal('show');
</script> --}}
<div class="header">
<div class="container">
    <div class="w3l_login">
        <a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
     </div>
   <div class="w3l_logo">
       <h1><img src="images/fondo.png" class="img-responsive" alt="" style="width:250px; heigth:100px;"></h1>
     {{--    <h1><a href="index.html">Wabisabi<span>cosmetics</span></a></h1>   --}}

    </div> 
    <div class="search">
        <input class="search_box" type="checkbox" id="search_box">
        <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
      
        <div class="search_form">
            <form action="#" method="post">
                <input type="text" name="Search" placeholder="Search...">
                <input type="submit" value="Send">
            </form>
        </div>
    </div>
    <div class="cart box_1">
        <a href="{{ route('car') }}">
            <div class="total">
            <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
            <img src="images/bag.png" alt="" />
        </a>
        <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
        <div class="clearfix"> </div>
    </div>	
    <div class="clearfix"> </div>
</div>
</div>
<div class="navigation">
<div class="container">
    <nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header nav_2">
            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div> 
        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ route('welcome') }}" class="act">Home</a></li>	
                <!-- Mega Menu -->
                <li class="dropdown">
                    <a href="{{ route('product') }}" class="dropdown-toggle" data-toggle="dropdown">PRODUCTOS<b class="caret"></b></a>
                    <ul class="dropdown-menu multi-column columns-3">
                        <div class="row">
                            <div class="col-sm-3">
                                <ul class="multi-column-dropdown">
                                    <h6><a href="#" {{ route('welcome') }}" class="act"> BARBER SHOP</a> </h6>
                                    <li><a href="{{ route('barberia.index') }}">SERVICIOS{{-- <span>New</span> --}}</a></li>
                                   {{--  <li><a href="{{ route('productos.productca2') }}">Sweaters</a></li>
                                    <li><a href="{{ route('productos.productca3') }}">Shorts & Skirts</a></li>
                                    <li><a href="{{ route('productos.productca4') }}">Jeans</a></li>
                                    <li><a href="{{ route('productos.productca5') }}">Shirts & Tops<span>New</span></a></li> --}}
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <ul class="multi-column-dropdown">
                                    <h6><a href="#" {{ route('welcome') }}" class="act"> SALON</a> </h6>
                                    <li><a href="{{ route('productos.productcb1') }}">Servicios</a></li>
                                  {{--   <li><a href=""{{ route('productos.productcb2') }}">Sarees<span>New</span></a></li>
                                    <li><a href="{{ route('productos.productcb1') }}">Salwars</a></li>
                                    <li><a href=""{{ route('productos.productcb2') }}">Sarees<span>New</span></a></li>
                                    <li><a href="{{ route('productos.productcb1') }}">Salwars</a></li>
                                    <li><a href=""{{ route('productos.productcb2') }}">Sarees<span>New</span></a></li>
                                    <li><a href="{{ route('productos.productcb1') }}">Salwars</a></li>
                                    <li><a href=""{{ route('productos.productcb2') }}">Sarees<span>New</span></a></li> --}}
                                    {{-- <li><a href="{{ route('product') }}"><i>Summer Store</i></a></li> --}}
                                </ul>
                            </div>
                            <div class="col-sm-2">
                                <ul class="multi-column-dropdown">
                                    <h6><a href="#" {{ route('welcome') }}" class="act"> COSMETICS</a> </h6>
                                    <li><a href="{{ route('productos.productcc1') }}">Comesticos</a></li>
                                    <li><a href="{{ route('productos.productcc2') }}">Cabello</a></li>
                                    <li><a href="{{ route('productos.productcc3') }}">Cuerpo & baño</a></li>
                                    <li><a href="{{ route('productos.productcc4') }}">Perfumeria</a></li>
                                    <li><a href="{{ route('productos.productcc3') }}">Rostro</a></li>
                                    <li><a href="{{ route('productos.productcc4') }}">Otro</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <div class="w3ls_products_pos">
                                    <h4>20%<i>Off/-</i></h4>
                                    <img src="images/ad.jpg" alt=" " class="img-responsive" />
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </ul>
                </li>
                <li><a href="{{ route('about.about') }}">Quienes somos</a></li>
               {{--  <li><a href="{{ route('welcome') }}" >Tics de belleza</a></li> --}}
                <li><a href="{{ route('contact.contact') }}" >Contactenos</a></li>
            </ul>
        </div>
    </nav>
</div>
</div> 
<!-- //header --> 