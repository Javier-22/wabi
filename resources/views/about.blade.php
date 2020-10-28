<!-- //team-bottom -->
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

<div class="banner10" id="home1">
<div class="container">
    <h2>About Us</h2>
</div>
</div>
<!-- //banner -->

<!-- breadcrumbs -->
<div class="breadcrumb_dress">
<div class="container">
    <ul>
        <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
        <li>About Us</li>
    </ul>
</div>
</div>
<!-- //breadcrumbs -->

<!-- about -->
<div class="about">
<div class="container">	
    <div class="w3ls_about_grids">
        <div class="col-md-6 w3ls_about_grid_left">
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse 
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
                cupidatat non proident, sunt in culpa qui officia deserunt mollit 
                anim id est laborum.</p>
            <div class="col-xs-2 w3ls_about_grid_left1">
                <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
            </div>
            <div class="col-xs-10 w3ls_about_grid_left2">
                <p>Sunt in culpa qui officia deserunt mollit 
                    anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse 
                cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="clearfix"> </div>
            <div class="col-xs-2 w3ls_about_grid_left1">
                <span class="glyphicon glyphicon-flash" aria-hidden="true"></span>
            </div>
            <div class="col-xs-10 w3ls_about_grid_left2">
                <p>Sunt in culpa qui officia deserunt mollit 
                    anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse 
                cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="col-md-6 w3ls_about_grid_right">
            <img src="images/77.jpg" alt=" " class="img-responsive" />
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
</div>
<!-- //about -->

<!-- team -->
<div class="team">
<div class="container">
    <h3>Meet Our Team</h3>
    <div class="wthree_team_grids">
        <div class="col-md-3 wthree_team_grid">
            <img src="images/8.png" alt=" " class="img-responsive" />
            <h4>Smith Allen <span>Fashion Designer</span></h4>
            <div class="agileits_social_button">
                <ul>
                    <li><a href="#" class="facebook"> </a></li>
                    <li><a href="#" class="twitter"> </a></li>
                    <li><a href="#" class="google"> </a></li>
                    <li><a href="#" class="pinterest"> </a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 wthree_team_grid">
            <img src="images/9.png" alt=" " class="img-responsive" />
            <h4>Laura James <span>Fashion Designer</span></h4>
            <div class="agileits_social_button">
                <ul>
                    <li><a href="#" class="facebook"> </a></li>
                    <li><a href="#" class="twitter"> </a></li>
                    <li><a href="#" class="google"> </a></li>
                    <li><a href="#" class="pinterest"> </a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 wthree_team_grid">
            <img src="images/10.png" alt=" " class="img-responsive" />
            <h4>Crisp Doe <span>Fashion Designer</span></h4>
            <div class="agileits_social_button">
                <ul>
                    <li><a href="#" class="facebook"> </a></li>
                    <li><a href="#" class="twitter"> </a></li>
                    <li><a href="#" class="google"> </a></li>
                    <li><a href="#" class="pinterest"> </a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 wthree_team_grid">
            <img src="images/11.png" alt=" " class="img-responsive" />
            <h4>Linda Rosy <span>Fashion Designer</span></h4>
            <div class="agileits_social_button">
                <ul>
                    <li><a href="#" class="facebook"> </a></li>
                    <li><a href="#" class="twitter"> </a></li>
                    <li><a href="#" class="google"> </a></li>
                    <li><a href="#" class="pinterest"> </a></li>
                </ul>
            </div>
        </div>
        <div class="clearfix"> </div>
        <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
            voluptatibus maiores alias consequatur aut perferendis doloribus asperiores 
            repellat.</p>
    </div>
</div>
</div>
<!-- //team -->
<!-- team-bottom -->
<div class="team-bottom">
<div class="container">
    <h3>Are You Ready For Awesomeness? Flat <span>50% Offer</span> For Women's</h3>
    <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
        voluptatibus maiores alias consequatur aut perferendis doloribus asperiores 
        repellat.</p>
    <a href="dresses.html">Shop Now</a>
</div>
</div>

@endsection