@extends('layout')
    <!--Modal for email -->    
   
    @section('content') 
    <style>
      #btn-slider{
        top: 69% !important;
      }
    </style>
    <div class="text-center pt-5 mb-5">
      <div class="w-75 ml-3  tittle-section input-group d-flex justify-content-between">
        <p class="tittle mt-4 mb-1"><strong>EDUCACION</strong></p>
    </div>    
    
    <div class="slider mt-2 ">      
        <div class="">
          <div class="d-flex flex-row">
            <div class="p-2">
              <p class="mb-0 h6 mt-4 ml-3 title-education">Centro Universitario de la Costa</p>
              <p class="subtitle-education text-left ml-3 mb-0"> Ing. Telematica 2011 - 2015</p>
            </div>            
            <div class="p-2 w-25 mt-2" ><img  src="{{asset('images/UDG.jpg')}}" alt="" ></div>      
            
          </div>
          <div class="mt-1">
            <p class="text-justify mx-4 ">
              Implementar y administrar redes para garantizar las telecomunicaciones con seguridad y responsabilidad.
              Diseñar arquitecturas para sistemas embebidos con el propósito de desarrollar tecnologías
            </p>
          </div> 
        </div>           
     
        <div class="text-center">

          <div class="d-flex flex-row">
            <div class="p-2 ml-2">
              <p class="mb-0 h6 mt-4 ml-2 title-education">Kodemia - Curso </p>
              <p class="subtitle-education text-left ml-2 mb-0"> Full Stack Jr.</p>
            </div>       
            <a href="https://kodemia.mx/" class="ml-4 mt-2 w-50">
              <img src="https://kodemia.mx/static/img/logos/isotipo-negro.png" alt="" class="img-kodemia mt-3" style="height:40px !important;">      
            </a>     
          </div>
          <p class="mx-4 text-justify">
            Construir la capa de datos y procesamiento de información en el servidor utilizando Node JS y 
            Express JS consumiendo datos desde una base de datos no relacional con MongoDB y 
            tu propio API que podrás publicar en línea y hacerlo accesible en internet.
           </p>
       
      </div >        
        
    </div>
    
    </div>
        
    

 

    @endsection


