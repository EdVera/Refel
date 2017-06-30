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

<div class="gray lighten-1" style=" padding: 5%">
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

<div class="section w3-padding" style="background-color: #305c9e">
  <h3 class="letra center condensed"><b>SERVICIOS ESPECIALIZADOS</b></h3>
  <div class="w3-row-padding">
    <div class="w3-col s12 m4 w3-panel center">
      <img src="{{ asset('img/home/iconos/asesoria.png') }}" class="" style="width: 40%">
      <h4 style="color: white; text-align:left">Desarrollo y asesoría de nuevos proyectos</h4>
      <span class="white-text w3-justify">Los nuevos proyectos necesitan expertos que los lleven de la mano, te asesoramos paso a paso</span>
    </div>
      <div class="w3-col s12 m4 w3-panel center">
        <img src="{{ asset('img/home/iconos/manejo.png') }}" alt="" style="width: 40%">
        <h4 style="color: white; text-align:left">Asesoría y manejo de refacciones</h4>
        <span class="white w3-justify"></span>
      </div>
        <div class="w3-col s12 m4 w3-panel center">
          <img src="{{ asset('img/home/iconos/refaccion.png') }}" alt="" style="width: 40%">
          <h4 style="color: white; text-align:left">Refacciones Industriales</h4>
          <span class="white w3-justify"></span>
        </div>
  </div>
</div>

<div class="white" style="height: 200px">

</div>
@endsection
