
<!-- Large menu -->
<div class="navbar-fixed hide-on-med-and-down" style="height: 0px">
  <nav class="teal" style="z-index: 4; height: 100px;" role="navigation" style="background-color: #365593">
    <div class="nav-wrapper w3-display-container" style="background-color: #365593">
      <a href="Home"><img src="{{ asset('img/logos/refel.png') }}" class="hide-on-med-and-down left" style="height: 50px"></a>

      <!-- Icons responsive menu -->
      <img src="{{ asset('img/wtc.png') }}" class="hide-on-large-only nav-logo" style="">
      <a href="#" data-activates="mobile-demo" class="button-collapse">
        <i class="material-icons">menu</i>
      </a>
      <!-- End icons responsive menu -->

      <ul class="hide-on-med-and-down condensed">
        <li class="">
          <a href="Home" class="">Inicio</a>
        </li>
        <li class="">
          <a class="dropdown-button" href="#" data-activates="dropdownAcademics">
            Productos
          </a>
        </li>
        <li class="">
          <a class="dropdown-button" href="#" data-activates="dropdownConsultancy">
            Contacto
          </a>
        </li>
      </ul>
    </div>
  </nav>
</div>

<!-- Menú Academics -->
<ul id="dropdownAcademics" class="dropdown-content">
  <li class=""><a href="#!">WTC Certification</a></li>
  <li class="divider"></li>
  <li class=""><a href="#!">Lean Six Sigma</a></li>
</ul>

<!-- Menú Consultancy -->
<ul id="dropdownConsultancy" class="dropdown-content">
  <li class=""><a href="#!">SoftLanding</a></li>
</ul>

<!-- Menú Discover -->
<ul id="dropdownDiscover" class="dropdown-content">
  <li class=""><a href="Dining">Dining</a></li>
  <li class="divider"></li>
</ul>

<!-- Menú Real Estate -->
<ul id="dropdownRealEstate" class="dropdown-content">
  <li class=""><a href="#!">Coworking</a></li>
  <li class="divider"></li>
  <li class=""><a href="http://grupomomentum.com.mx/project/world-trade-center-queretaro/" target="_blank">Offices</a></li>
</ul>

<!-- Menú Trading -->
<ul id="dropdownTrading" class="dropdown-content">
  <li class=""><a href="https://www.kichink.com/stores/kanpai" target="_blank">Commerce</a></li>
  <li class="divider"></li>
  <li class=""><a href="https://connectamericas.com/company/world-trade-center-queretaro" target="_blank">Connect Americas</a></li>
</ul>


<!-- Mobile menu -->
<div class="navbar-fixed hide-on-large-only" >
  <nav class="white" style="z-index: 4; height: 60px" role="navigation">
    <div class="nav-wrapper valign-wrapper" style="margin-top: auto;">
      <a href="#" data-activates="mobile-demo" class="button-collapse">
        <i class="material-icons">menu</i>
      </a>
      <img src="{{ asset('img/wtc.png') }}" class="hide-on-large-only" style="height: 39px; padding-left: 100px;">
    </div>
  </nav>
</div>

<!-- Collapsible menu -->
<ul class="side-nav collapsible" id="mobile-demo"  data-collapsible="accordion">
    
    <li><a href="Home">Home</a></li>
    <li>
        <div class="collapsible-header">Academics</div>
        <div class="collapsible-body">
            <a href="#!">WTC Certification</a>
            <a href="#!">Lean Six Sigma</a>
        </div>
    </li>
    <li>
        <div class="collapsible-header">Consultancy</div>
        <div class="collapsible-body">
            <a href="#!">Softlanding</a>
        </div>
    </li>
    <li>
        <div class="collapsible-header">Discover Querétaro</div>
        <div class="collapsible-body">
            <a href="Dining">Dining</a>
        </div>
    </li>
    <li>
        <div class="collapsible-header">Real Estate</div>
        <div class="collapsible-body">
            <a href="#!">Coworking</a>
            <a href="http://grupomomentum.com.mx/project/world-trade-center-queretaro/" target="_blank">Offices</a>
        </div>
    </li>
    <li>
        <div class="collapsible-header">Trade</div>
        <div class="collapsible-body">
          <a href="https://www.kichink.com/stores/kanpai" target="_blank">Commerce</a>
          <a href="https://connectamericas.com/company/world-trade-center-queretaro" target="_blank">Connect Americas</a>
        </div>
    </li>
</ul>