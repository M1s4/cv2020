<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"/>
        <!-- Styles -->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        @yield('styles')
    </head>
    <body>
        <!--Modal for email -->
        @include('snippets.email')
        <!--Navbar-->
            <nav class="navbar navbar-light lighten-5 position-absolute w-100" style="box-shadow: none;">

                <!-- Navbar brand -->
                <a class="navbar-brand" href="#">
                    
                    <img src="https://image.flaticon.com/icons/svg/942/942196.svg" width="15%" data-toggle="modal" data-target="#modalContactForm">
                   
                </a>
            
                <!-- Collapse button -->
                <button id="btn-slider" class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
                aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
                    class="fas fa-bars fa-1x"></i></span></button>
            
                <!-- Collapsible content -->
                <div class="collapse navbar-collapse " id="navbarSupportedContent1">
            
                <!-- Links -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="{{url('/inicio') }}">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{url('/experiencia') }}">Experiencia</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{url('/educacion') }}">Educacion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/portafolio') }}">Portafolio</a>
                        </li>
                </ul>
                <!-- Links -->
            
                </div>
                <!-- Collapsible content -->
            
            </nav>
            <!--/.Navbar-->
            @yield('content')
            <div class="text-center mt-3">
                <p class="mb-0 article__content textDownload">DESCARGAR CV</p>
                <i class="fas fa-download fa-sm mx-2 "></i>
              </div>
            

            <!-- Footer -->
            <footer class=" font-small fixed-bottom " id="footerr" style=" background-image: url('{{asset('images/fondo.png')}}'); background-repeat: no-repeat; background-size: cover; ">

                <!-- Footer Elements -->
                <div class="container fixed-bottom">
            
                <!-- Social buttons -->
                <ul class="list-unstyled list-inline text-center mb-0">
                    <li class="list-inline-item">
                    <a class="btn-floating btn-fb mx-1">
                        <i class="fab fa-github-alt"></i>
                    </a>
                    </li>
                    <li class="list-inline-item">
                    <a class="btn-floating btn-tw mx-1">
                        <i class="fab fa-facebook"></i>
                    </a>
                    </li>
                    <li class="list-inline-item">
                    <a class="btn-floating btn-gplus mx-1">
                        <i class="fab fa-google-plus-g"> </i>
                    </a>
                    </li>
                    <li class="list-inline-item">
                    <a class="btn-floating btn-li mx-1">
                        <i class="fab fa-linkedin-in"> </i>
                    </a>
                    </li>
                    <li class="list-inline-item">
                    <a class="btn-floating btn-dribbble mx-1">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    </li>
                </ul>
                <!-- Social buttons -->
                <p class="text-center text-muted mb-0 text-pv text-light">Puerto Vallarta, Jalisco</p>
                </div>
                <!-- Footer Elements -->           
             
               
            </footer>
            <!-- Footer -->
            <!-- JQuery -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <!-- Bootstrap tooltips -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
            <!-- Bootstrap core JavaScript -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
            <!-- MDB core JavaScript -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
                <!-- jQuery CDN -->
            <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
            <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
            <!-- slick Carousel CDN -->
            <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js"></script>   
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.js"></script>
            <script type="text/javascript">
                jQuery(document).ready(function($) {
                $('.slider').slick({
                    dots: true,
                    infinite: true,
                    speed: 500,
                    fade: true,
                    cssEase: 'linear' 
                    });
                });
            </script>
            @stack('scripts')
            
            
          
    </body>
</html>
