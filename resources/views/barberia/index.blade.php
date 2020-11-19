
@extends('base.index')
@section('title','Barber')
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

    <!-- nuestro_equipo -->
     <section class="main"> 
    @include('barberia.template')
    <section class="nuestro_equipo" id="nuestro_equipo">

        <div class="container">
                    <div class="titulo-seccion ">
                        <i class="fa fa-scissors"></i>
                        <h2> Nuestros Barberos</h2>
                    </div>
                   
                   <div class="team-container">


                       <div class="col">
                            <div class="container-img">
                                    <img src="images/barber2.jpg" alt="">
                            </div>
                            <div class="nombre">
                                <h3>juan aguilar</h3>
                            </div>
                            <div class="comentario">
                                <p>Barber</p>
                            </div>
                            <div class="top-redes">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>

                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>

                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                             </div>
                    </div>

                    <div class="col">
                            <div class="container-img">
                                    <img src="images/barber3.jpg" alt="">
                            </div>
                            <div class="nombre">
                                <h3>andres coronado</h3>
                            </div> 
                            <div class="comentario">
                                <p>Barber</p>
                            </div>
                            <div class="top-redes">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>

                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>

                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                             </div>
                    </div>

                    <div class="col">
                            <div class="container-img">								
                                    <img src="images/barber4.jpg" alt="">
                            </div>
                            <div class="nombre">
                                <h3>felipe ariasr</h3>
                            </div>
                            <div class="comentario">
                                <p>Barber</p>
                            </div>
                            <div class="top-redes">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>

                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>

                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                             </div>
                    </div>


                   </div>

        </div>
        
    </section>  <!--nuestro_equipo -->

    

    <!-- Nuestro menu -->
    <section id="servicios" class="servicios">
        <div class="container">
            <div class="titulo-seccion">
                <i class="fa fa-scissors"></i>
                <h2>Servicios</h2>
            </div>
            <div class="contenedor-menu">
                <ul id="encabezado_menu" class="encabezado">
                    <li class="active"><a href="#postres">Corte de pelo</a></li>
                    <li><a href="#maquillaje">maquillaje</a></li>
                    <li><a href="#depilacion">DEPILACIÓN</a></li>
                    <li><a href="#barba">ESTILO DE BARBA</a></li>

                </ul>
                <div class="contenido" id="contenido_menu">
                    <!-- corte de pelo -->
                    <div id="postres" class="active">
                        <div class="item">
                            <div class="col izq">
                                <h3>CORTE DE PELO CLÁSICO.</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum.</p>
                            </div>
                            <div class="col der">
                                <p class="precio">$15</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col izq">
                                <h3>CORTE DE CLIPPER.</h3>
                                <p>Maecenas iaculis aliquam lectus, in sodales ligula. Nulla facilisis magna.</p>
                            </div>
                            <div class="col der">
                                <p class="precio">$17</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col izq">
                                <h3>recorte de pelo.</h3>
                                <p>Nulla facilisis magna in malesuada dictum. Donec condimentum metus eros.</p>
                            </div>
                            <div class="col der">
                                <p class="precio">$21</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col izq">
                                <h3>AFEITADO LIMPIO.</h3>
                                <p>Vestibulum euismod neque id est ultricies pretium. Sed rutrum risus at congue suscipit.</p>
                            </div>
                            <div class="col der">
                                <p class="precio">$20</p>
                            </div>
                        </div>
                    </div> <!-- corte de pelo -->

                    <!-- Maquillaje -->
                    <div id="maquillaje">
                        <div class="item">
                            <div class="col izq">
                                <h3>LIMPIEZA FACIAL.</h3>
                                <p>Maecenas iaculis aliquam lectus, in sodales ligula. Nulla facilisis magna.</p>
                            </div>
                            <div class="col der">
                                <p class="precio">$4</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col izq">
                                <h3>MAQUILLAJE FACIAL.</h3>
                                <p>Vestibulum euismod neque id est ultricies pretium. Sed rutrum risus at congue suscipit.</p>
                            </div>
                            <div class="col der">
                                <p class="precio">$6</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col izq">
                                <h3>CUIDADO DEL CABELLO.</h3>
                                <p>Etiam aliquet at mi in aliquet. Duis in arcu sodales, gravida lorem quis.</p>
                            </div>
                            <div class="col der">
                                <p class="precio">$5</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col izq">
                                <h3>ALISAR EL CABELLO.</h3>
                                <p>Praesent ac pellentesque urna, ut lacinia erat. Donec in euismod erat. Mauris eu.</p>
                            </div>
                            <div class="col der">
                                <p class="precio">$8</p>
                            </div>
                        </div>
                    </div> <!-- Maquillaje -->

                    <!-- Depilacion -->
                    <div id="depilacion">
                        <div class="item">
                            <div class="col izq">
                                <h3>manicure.</h3>
                                <p>Maecenas iaculis aliquam lectus, in sodales ligula. Nulla facilisis magna.</p>
                            </div>
                            <div class="col der">
                                <p class="precio">$4</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col izq">
                                <h3>hilo.</h3>
                                <p>Vestibulum euismod neque id est ultricies pretium. Sed rutrum risus at congue suscipit.</p>
                            </div>
                            <div class="col der">
                                <p class="precio">$6</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col izq">
                                <h3>PULIDO CORPORAL .</h3>
                                <p>Etiam aliquet at mi in aliquet. Duis in arcu sodales, gravida lorem quis.</p>
                            </div>
                            <div class="col der">
                                <p class="precio">$5</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col izq">
                                <h3>BODY SPA .</h3>
                                <p>Praesent ac pellentesque urna, ut lacinia erat. Donec in euismod erat. Mauris eu.</p>
                            </div>
                            <div class="col der">
                                <p class="precio">$8</p>
                            </div>
                        </div>
                    </div> <!-- Depilacion -->

                    <!-- barba -->
                    <div id="barba">
                        <div class="item">
                            <div class="col izq">
                                <h3>CORTE DE BARBA.</h3>
                                <p>Maecenas iaculis aliquam lectus, in sodales ligula. Nulla facilisis magna.</p>
                            </div>
                            <div class="col der">
                                <p class="precio">$4</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col izq">
                                <h3>ASEO DE BARBA.</h3>
                                <p>Vestibulum euismod neque id est ultricies pretium. Sed rutrum risus at congue suscipit.</p>
                            </div>
                            <div class="col der">
                                <p class="precio">$6</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col izq">
                                <h3>SUAVIZANTE DE BARBA .</h3>
                                <p>Etiam aliquet at mi in aliquet. Duis in arcu sodales, gravida lorem quis.</p>
                            </div>
                            <div class="col der">
                                <p class="precio">$5</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col izq">
                                <h3>AFEITADO.</h3>
                                <p>Praesent ac pellentesque urna, ut lacinia erat. Donec in euismod erat. Mauris eu.</p>
                            </div>
                            <div class="col der">
                                <p class="precio">$8</p>
                            </div>
                        </div>
                    </div> <!-- barba -->
                    

                </div>
            </div>
        </div>
    </section> <!-- Nuestro menu -->


   <!-- Galeria-->
     <div id="galery"  class="galeria" >
             <div class="container">
                <div class="titulo-seccion">
                  <i class="fa fa-scissors"></i>
                  <h2>Galería</h2>
               </div> 

                <div class="rows">
                    
                      <div class="col">

                        <div class="image img1 lightbox">
                            <div class="overlay">
                               <i class="fa fa-plus" aria-hidden="true"></i>
                            </div>
                        </div>				    

                    </div>

                     <div class="col">

                        <div class="image img2 lightbox">
                            <div class="overlay">
                               <i class="fa fa-plus" aria-hidden="true"></i>
                            </div>
                        </div>				    

                    </div>

                    <div class="col">

                        <div class="image img3 lightbox">
                            <div class="overlay">
                               <i class="fa fa-plus" aria-hidden="true"></i>
                            </div>
                        </div>				    

                    </div>


                     <div class="col">

                        <div class="image img4 lightbox">
                            <div class="overlay">
                               <i class="fa fa-plus" aria-hidden="true"></i>
                            </div>
                        </div>				    

                    </div>

                     <div class="col">

                        <div class="image img2 lightbox">
                            <div class="overlay">
                               <i class="fa fa-plus" aria-hidden="true"></i>
                            </div>
                        </div>				    

                    </div>

                     <div class="col">

                        <div class="image img3 lightbox">
                            <div class="overlay">
                               <i class="fa fa-plus" aria-hidden="true"></i>
                            </div>
                        </div>				    

                    </div>

                     <div class="col">

                        <div class="image img4 lightbox">
                            <div class="overlay">
                               <i class="fa fa-plus" aria-hidden="true"></i>
                            </div>
                        </div>				    

                    </div>

                     <div class="col">

                        <div class="image img1 lightbox">
                            <div class="overlay">
                               <i class="fa fa-plus" aria-hidden="true"></i>
                            </div>
                        </div>				    

                    </div>


                </div>

            </div>
     </div>
    <!-- Galeria-->

    
    <!-- Contacto -->
    <section class="cita" id="cita">
        <div class="datos parallax">				
            <div class="container">

                

                <div class="formulario">


                        <div class="titulo-seccion">
                    <i class="fa fa-scissors"></i>
                    <h2> ¡Agenda tu cita! </h2>
                </div>



                        <form action="" class="formulario_contacto" name="formulario_contacto">
                            <div>
                                <div class="input-group">
                                    <input type="text" id="nombre" name="nombre">
                                    <label class="label" for="nombre">Nombre</label>
                                </div>

                                <div class="input-group">
                                    <input type="email" id="email" name="email">
                                    <label class="label" for="email">Correo electrónico</label>
                                </div>

                                <div class="input-group">
                                    <input class="fecha" name="fecha" type="date"  value=""
                                         min="2020-01-01" max="2028-12-31" >										
                                </div>

                                <div class="input-group">
                                    <textarea name="mensaje" id="mensaje"></textarea>
                                    <label class="label" for="mensaje">Mensaje</label>
                                </div>

                                <input type="submit" value="Enviar">
                            </div>
                        </form>
             </div>

                
            </div>
        </div>


        
    </section> 
    <!--Contacto -->
    <section class="localizacion" id="ubicacion"> 
               
              <div class="container">

                  <div class="titulo-seccion">
                    <i class="fa fa-scissors"></i>
                    <h2>Ubícanos </h2>
                 </div>

                  <div class="contenedor">
                      
                      <div class="mapa">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1974.398355228024!2d-75.48245298558892!3d8.223188130553979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e5ba778c3dbc00d%3A0xd660d6dba0c69e5e!2sBuenavista%2C%20C%C3%B3rdoba!5e0!3m2!1ses-419!2sco!4v1605487677964!5m2!1ses-419!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                      </div>

                      <div class="informacion">
                          <div class="text">
                                <h4>dirección</h4>
                                <p><i class="fa fa-map" aria-hidden="true"></i> Cr, Buenavista, </p>
                                <p>Cordoba, Colombia</p>
                                <p><i class="fa fa-phone" aria-hidden="true"></i> +57 301 555 5555</p>
                                <p><i class="fa fa-envelope" aria-hidden="true"></i> mail@example.com</p>
                                

                          </div>

                          <div class="text">
                                <h4>HORARIO DE APERTURA</h4>
                                <p><i class="fa fa-clock-o" aria-hidden="true"></i> Lunes – Viernes : 9am - 6pm</p>
                                <p><i class="fa fa-clock-o" aria-hidden="true"></i> Sabado - domingo : 10am - 4pm</p>
                                
                                
                          </div>
                      </div>

                  </div>


              </div>
    </section>


</section> <!-- Main -->







@endsection