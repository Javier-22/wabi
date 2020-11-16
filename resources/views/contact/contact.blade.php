@extends('base.index')
@section('title','about')
@section('body-content')
<!-- banner -->
<div class="banner10" id="home1">
    <div class="container">
        <h2>Mail Us</h2>
    </div>
</div>
<!-- //banner -->

<!-- breadcrumbs -->
<div class="breadcrumb_dress">
    <div class="container">
        <ul>
            <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
            <li>Mail Us</li>
        </ul>
    </div>
</div>
<!-- //breadcrumbs -->

<!-- mail -->
<div class="mail">
    <div class="container">
        <h3>Mail Us</h3>
        <div class="agile_mail_grids">
            <div class="col-md-5 contact-left">
                <h4>Address</h4>
                <p>est eligendi optio cumque nihil impedit quo minus id quod maxime
                    <span>26 56D Rescue,US</span></p>
                <ul>
                    <li>Free Phone :+1 078 4589 2456</li>
                    <li>Telephone :+1 078 4589 2456</li>
                    <li>Fax :+1 078 4589 2456</li>
                    <li><a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>
            <div class="col-md-7 contact-left">
                <h4>Contact Form</h4>
                <form action="#" method="post">
                    <input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                    <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                    <input type="text" name="Telephone" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
                    <textarea name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
                    <input type="submit" value="Submit" >
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>

        <div class="contact-bottom">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1974.398355228024!2d-75.48245298558892!3d8.223188130553979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e5ba778c3dbc00d%3A0xd660d6dba0c69e5e!2sBuenavista%2C%20C%C3%B3rdoba!5e0!3m2!1ses-419!2sco!4v1605487677964!5m2!1ses-419!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</div>
<!-- //mail -->

@endsection