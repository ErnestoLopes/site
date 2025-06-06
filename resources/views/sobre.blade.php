@extends('layout.layout')
@section('title', 'Sobre nós-Trabmed')
@section('conteudo')
<div class="main-content">

<div class="sobre">
  <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Sobre Nós<br></h1>
              <p class="mb-0"> Somos uma empresa angolana prestadora de serviços de
Segurança Higiene e Saúde no trabalho e que preenche os
requisitos exigidos pela legislação Angolana (Dec. Lei 31/94)
sobre a obrigatoriedade, para todos os empregadores, de
terem estes serviços organizados para a cobertura dos seus
trabalhadores.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container" id="SbIn">
          <ol>
            <li><a href="{{ url('/') }}">Início</a></li>
            <li class="current">Sobre Nós<br></li>
          </ol>
        </div>
      </nav>
    </div>
    <section id="about-us" class="section about-us">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" id="imgcomp" data-aos-delay="100">
            <img src="{{asset('site/imagens/trab2.jpeg')}} " class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
            <h3>O que fazemos?</h3>
            <p class="">
              A Trabmed é uma empresa de prestação de serviços de
             Somos especialistas em Medicina no Trabalho, Higiene e Segurança no
Trabalho, temos a certificação da IGT (Inspecção Geral do Trabalho) e
também certificação do INEFOP para a realização de Cursos. Temos uma
equipa multidisciplinar, que executa e controla a qualidade de serviços
realizados. Esta equipa de coordenação e execução do trabalho, reúne
um Médico do Trabalho, um Técnico de Segurança, um Gestor
Operacional e um Gestor de Cliente como núcleo base de todos os
elementos envolvidos.

            </p>
       
          </div>

        </div>

      </div>

    </section><!-- /About Us Section -->

    <!-- Counts Section -->
    <section id="counts" class="section counts light-background">

<section id="about-us" class="section about-us">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 order-1 order-lg-1" data-aos="fade-up" id="imgcomp"data-aos-delay="100">
            <img src="{{asset('site/imagens/vant.jpeg')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 order-2 order-lg-2 content" data-aos="fade-up" data-aos-delay="200">
            <h3>Vantagens em ser nosso cliente</h3>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Manutenção de boa imagem da empresa a nível Nacional e Internacional de
organizações como OIT e OMS.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Aumento da Produtividade e redução de absentismo.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Redução de Custos com seguros</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Redução de custos associados a acidentes e doenças profissionais</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Criação de mão de obra mais competente e mais saudável</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Satisfação dos trabalhadores aumentando o nível de comprometimento com a
empresa</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Redução de Doenças Profissionais</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Redução de Morte Súbita</span></li>
              
            </ul>
          </div>

        </div>

      </div>

    </section><!-- /About Us Section -->

    <!-- Counts Section -->
    <section id="counts" class="section counts light-background">

<section id="tabs" class="tabs section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Missão</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Valores</a>
              </li>
            
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content position-center">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Nossa Missão</h3>
                    <p>Proteger a integridade física dos
trabalhadores, a Trabmed analisa, com técnicas
específicas de estudo, os fatores que podem ser
causa de doenças ou acidentes de trabalho. Dessa
forma, a nossa missão é, evitar situações que
afetem a saúde e qualidade de vida dos
colaboradores</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/tabs/tab-1.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane " id="tab-3">
                <div class="row">
                  <div  class="col-lg-8 details order-2 order-lg-1">
                    <h3>Valorizamos vidas Saúde, segurança e bem-estar em primeiro lugar</h3>
                    <p class="fst-italic"></p>
                    <p></p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/tabs/tab-3.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>

</div>
</div>

    <!-- Testimonials Section
    <section id="testimonials" class="testimonials section">

      <!-- Section Title 
      <div class="container section-title" data-aos="fade-up">
        <h2>Testemunhos</h2>
        <p>O que os nossos clientes dizem</p>
      </div><!-- End Section Title 

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 2,
                  "spaceBetween": 20
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset('site/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item 

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset('site/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset('site/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item 

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset('site/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item>

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset('site/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item 
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>-->


    </section>
@endsection