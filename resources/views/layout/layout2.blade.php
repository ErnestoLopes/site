<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="{{asset('site/imagens/ícone.png')}}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link  href="{{ asset('site/css/main.css')}}" rel="stylesheet">
    
    
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('site/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('site/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('site/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('site/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('site/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('site/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('site/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('site/plugins/summernote/summernote-bs4.min.css') }}">
</head>
<body class="index-page">
 <header id="header2" class="header  align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-center" id="cll" >
      <!-- Uncomment the line below if you also wish to use an image logo -->

    <!-- Uncomment the line below if you also wish to use an image logo -->
    <img src="{{asset('site/img/flyer-CERTO.png')}}" class="logo"alt="logo" > 

      
     

      <nav id="navmenu1" class="navmenu">
        <ul>
          <li>   <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Início</a></li>
          <li><a href="{{ url('/sobre') }}" class="{{ request()->is('sobre') ? 'active' : '' }}">Sobre Nós</a></li>
          <li class="{{ request()->is('serviços') ? 'active' : '' }} dropdown"><a href="#"><span>Serviços</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Segurança no Trabalho<i class="bi bi-chevron-down toggle-dropdown"></i></a></li>
              <li><a href="#">Eptometria <strong><i class="bi bi-chevron-down toggle-dropdown"></i></strong></a></li>
              <li><a href="#">Consultoria em SHST </a></li>
              <li><a href="#">Formação, Auxílio e Coordenação da CPAT </a></li>
              <li><a href="#">Exames Complementares do Diagnóstico</a></li>
              <li><a href="#">Auditoria de Higiene e Segurança</a></li>
              <li><a href="#">Exames Ocupacionais</a></li>
              <li><a href="#">Exames de saúde ocupacional</a></li>
            </ul>
          </li>
          <li class="{{ request()->is('parceiros') ? 'active' : '' }} dropdown"><a href="#"><span>Parceiros</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#" class="">Ensa<i class="bi bi-chevron-down toggle-dropdown"></i></a></li>
              <li><a href="#">Vecauto<strong><i class="bi bi-chevron-down toggle-dropdown"></i></strong></a></li>
              <li><a href="#">Shalina</a></li>
            </ul>
          </li>

          <li><a href="#"></a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

       <div class="btn-getstarted" style="color:#ffffff;">
        <a href="https://wa.me/244944884849" target="_blank"  >Fale Connosco</a>
      </div>
    </div> 
    <h1><strong>Sobre Nós</strong></h1>
  </header>
    <main class="main-content">
       
    @yield('conteudo')
    </main>
     <footer >
    
</footer>
<script>
document.getElementById('menu-select').addEventListener('change', function() {
    if(this.value) {
        window.location.href = this.value;
    }
});
</script>
<script>
document.getElementById('menu-toggle').addEventListener('click', function() {
    var menu = document.getElementById('menu');
    menu.classList.toggle('show');
});
</script>
 <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('site/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('site/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('site/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('site/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('site/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('site/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('site/js/main.js') }}"></script>
  
</body>
</html>