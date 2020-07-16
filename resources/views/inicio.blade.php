@extends('layout')

    @section('content')

    <div class="text-center pt-5">

        <img src="{{asset('images/yop.jpg')}}" class="img-fluid rounded-circle " id="imagen_yop">
        <p class="text-center mt-3 h6-responsive font-weight-bold">Misael Gutierrez Lopez.</p>
        <div class="text-justify mx-4">
            <p class="">
                Soy un desarrollador web autodidacta, apasionado por la tecnologías y la seguridad informática,
                 tengo experiencia en backend y frontend utilizando diversas herramientas como Maquetadores en linea,
                 frameworks, CRM's, librerias y actualmente me encuentro practicando con sockets en pusher y algo de vue  
            </p>
          </div>
          <div class="btn-group" role="group" aria-label="Basic example">
            <i class="fab fa-laravel fa-lg "></i>
            <i class="fab fa-vuejs fa-lg mx-2"></i>    
            <i class="fab fa-js fa-lg mx-2 "></i>
            <i class="fab fa-html5 fa-lg mx-2 " ></i>
            <i class="fab fa-css3-alt fa-lg mx-2 "></i>
            <i class="fab fa-wordpress fa-lg mx-2"></i>
            <i class="fas fa-database fa-lg mx-2"></i>
            <i class="fab fa-php fa-lg mx-2"></i>
          </div>
      </div>
     
      
    @endsection
