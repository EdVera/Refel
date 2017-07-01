@extends('site.templates.main')

@section('body-content')

<div id="index-banner" class="parallax-container valign-wrapper w3-display-container" style="height:550px">
  <div class="parallax valign-wrapper"><img src="{{ asset('img/home/fondo.jpg') }}" alt="Unsplashed background img 1"></div>
    <div class="caption left-align" style="padding-left: 10%; z-index: 100;">
        <div class="w3-half right">
          <div class="w3-container transparent w3-padding" style="width: 60%">
            <h6 class="white-text condensed"><b>RESISTENCIAS ELECTRICAS</b></h6>
            <p class="w3-justify w3-large">Diseñadas con dimensiones y capacidades requeridas para su aplicación, garantizando su durabilidad en el intercambio de temperatura.</p>
            <a class="btn w3-border waves-effect waves-light transparent white-text" href="#modal1" >
              HACER PEDIDO
            </a>
          </div>
        </div>
    </div>
    <div class="caption center-align hide-on-large-only">
    </div>
</div>

<div class="grey lighten-4" style=" padding: 5%">
  <h4 style="color: gray">ASESORÍA INSTANTANEA SÓLO PARA TI</h4>
  <p style="color: gray">Llamanos y platicanos de tus necesidades</p>
  <a class="waves-effect waves-light w3-border w3-padding-large" href="#modal1" style="color:gray">
    <i class="material-icons" style="font-size:15px">phone</i> <span class="w3-large"> Llamar ahora</span>
  </a>
</div>

<div class="w3-row w3-padding-16">
  <div class="w3-half w3-right">
    <h4>PRODUCTOS DISEÑADOS A TU MEDIDA</h4>
    <div class="w3-row">
      <div class="w3-col s12 m3">
        <ul>
          <li>- Carbones</li>
          <li>- Aislantes</li>
        </ul>
      </div>
      <div class="w3-col s12 m3">
        <ul>
          <li>- Resistencias eléctricas</li>
          <li>- Termopares</li>
        </ul>
      </div>
    </div>
    <div class="w3-row">
      <div class="w3-col s12 m6">
        <button type="button" name="button" class="w3-button w3-block" style="background-color: #365593; color: white;"> Saber Más </button>
      </div>
    </div>
  </div>
  <div class="w3-half">
    <img src="{{ asset('img/home/calentador.jpg') }}" alt="" class="" style="width: 60%; margin-left: 20%">
  </div>
</div>

<div class="section w3-padding-48" style="background-color: #305c9e">
  <h3 class="letra center condensed"><b>SERVICIOS ESPECIALIZADOS</b></h3>
  <div class="row">
    <div class="col s12 m2 offset-m3 center">
      <img src="{{ asset('img/home/iconos/asesoria.png') }}" class="" style="width: 80%">
      <h5 style="color: white; text-align:left">Desarrollo y asesoría de nuevos proyectos</h5>
      <p class="white-text" style="text-align: justify;">Los nuevos proyectos necesitan expertos que los lleven de la mano, te asesoramos paso a paso.</p>
      <a class="w3-btn w3-block waves-effect waves-light letra" href="#modal1" style="">
        AGENDAR ASESORÍA
      </a>
    </div>
    <div class="col s12 m2 center">
      <img src="{{ asset('img/home/iconos/manejo.png') }}" alt="" style="width: 80%">
      <h5 style="color: white; text-align:left">Asesoría y manejo de refacciones</h5>
      <p class="white-text" style="text-align: justify;">Aprende a darle el mayor rendimiento y calidad de vida a tu inversión, estamos para guìarte.</p>
      <a class="w3-btn w3-block waves-effect waves-light letra" href="#modal1" style="">
        COMENZAR
      </a>
    </div>
    <div class="col s12 m2 center">
      <img src="{{ asset('img/home/iconos/refaccion.png') }}" alt="" style="width: 80%">
      <h5 style="color: white; text-align:left">Refacciones Industriales</h5>
      <p class="white-text" style="text-align: justify;">Diseñamos a la medida de tu maquinaria, detectando especificaciones y requerimientos únicos de la pieza.</p>
      <a class="w3-btn w3-block waves-effect waves-light letra" href="#modal1" style="">
        AGENDAR CITA
      </a>
    </div>
  </div>
</div>


<div class="hide-on-med-and-down">
  <div class="w3-row">
    <div class="w3-half">
      <div id="googleMap" class="" style="width:100%; height: 500px"></div>
    </div>
    <div class="w3-half" style="padding: 50px">
      <div class="w3-container w3-padding">        
        <h5 class="left grey-text w3-padding">UBICANOS Y CONTACTANOS</h5>
      </div>
      <form class="w3-container">
        <div class="w3-row-padding">
          <div class="w3-half">
            <input class="w3-input w3-border w3-light-grey" type="text" placeholder="Nombre / Empresa">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border w3-light-grey" type="text" placeholder="Correo">
          </div>
        </div>
        <div class="w3-padding">
          <textarea class="w3-input w3-border w3-light-grey w3-padding-large" placeholder="Mensaje" style="height: 150px"></textarea>
        </div>
        <div class="w3-row-padding w3-padding-16">
          <div class="w3-half">
          <button class="w3-btn w3-block" style="background-color: #365593; color: white;">Enviar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
