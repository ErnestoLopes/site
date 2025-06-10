<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
 
  <meta name="description" content="">
  <meta name="keywords" content="">
    <meta charset="UTF-8">
    
  <!-- Favicons -->
  <link href="{{asset('site/img/flyer CERTO.png')}}" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
     <link  href="{{ asset('site/css/main.css')}}" rel="stylesheet">
       <!-- Vendor CSS Files -->
  <link href="{{ asset('site/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('site/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('site/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('site/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('site/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
</head>
<body class="index-page">

       <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="#" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
         <img src="{{asset('site/img/flyer CERTO.png')}}" alt="logo" width="100" height="50"> 
        
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li>   <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Início</a></li>
          <li><a href="{{ url('/sobre') }}" class="{{ request()->is('sobre') ? 'active' : '' }}">TrabMed</a></li>
          <li><a href="{{ url('/servicos') }}" class="{{ request()->is('servicos') ? 'active' : '' }}">Serviços</a></li>

       <!--  <li class="dropdown"><a href="#"><span>Serviços</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Segurança no Trabalho</a></li>
              <li><a href="#">Eptometria</a></li>
              <li><a href="#">Exames Ocupacionais</a></li>
              <li><a href="#">Exames Complementares</a></li>
            </ul>
          </li>
          <li><a href="#" class="{{ request()->is('noticias') ? 'active' : '' }}">Contacto</a></li>
          --><li><a href="{{ url('/noticias') }}" class="{{ request()->is('noticias') ? 'active' : '' }}">Notícias</a></li>
          <!--<li><a href="trainers.html">Trainers</a></li>
          <li><a href="events.html">Events</a></li>
          <li><a href="pricing.html">Pricing</a></li>
        <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>-->
          
          <li><a href="#"></a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="{{ url('/contacto') }}">Fale Connosco</a>

    </div>
  </header> 
  <main class="main-content">
       <div class="conteiner-fluid">
        <div class="row">
@if(session('msg'))
<p class="msg"> {{ session('msg') }}</p>
@endif



    @yield('conteudo')
        </div>
       </div>

    </main>

   
  <footer id="footer" class="footer position-relative light-background">

    <div class="container footer-top col-md-12">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">
              <img src="{{ ('site/img/flyer CERTO.png') }}" alt="Logo">
            </span>
          </a>
          <div class="footer-contact pt-3">
            <p>Município das Ingombotas, Bairro Kinaxixi,
Rua da Avenida Lenine Nº7/9</p>
            <p>Benfica Business Park via expressa</p>
             <p>Talatona edifício do Mix Center</p>
            <p class="mt-3"><strong>Telefone:</strong> <span>(+244) 944 88 48 49</span></p>
            <p><strong>Email:</strong> <span>recepção@trabmed.net</span></p>
          </div>
          <!--div class="social-links d-flex mt-4" id="social">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div-->
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Use os links</h4>
          <ul>
          <li>   <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Início</a></li>
          <li><a href="{{ url('/sobre') }}" class="{{ request()->is('sobre') ? 'active' : '' }}">Sobre nós</a></li>
          <li><a href="{{ url('/noticias') }}" class="{{ request()->is('noticias') ? 'active' : '' }}">Notícias</a></li>
          </ul>
        </div>

     

      

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Trabmed</strong> <span>Todos os direitos reservados</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://Responserv.ao/" target="_blank">Responserv</a> Distributed by <a href="https://Responserv.ao/" target="_blank">Responserv
      </div>
    </div>

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