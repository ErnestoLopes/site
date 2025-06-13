@extends('layout.layout')
@section('title', 'Trabmed')
@section('conteudo')

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background"  >

      <img src="{{ asset('site/img/trab.jpeg') }}" alt="" id="gg" data-aos="fade-in">

      <div class="container">
        <h2 data-aos="fade-up" data-aos-delay="100">Ofereça as melhores <br>condições de trabalho <br>para sua equipe</h2>
        <p data-aos="fade-up" data-aos-delay="200">Invista em Saúde e Segurança no trabalho <br>com a Trabmed</p>
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
          <!--  <a href="courses.html" class="btn-get-started">Get Started</a>-->
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about"  class="about section justify-content-center align-text-center">

      <div class="container d-flex justify-content-center align-items-center" style="min-height: 200px;">
  <h1 class="hn text-center"><strong>Especialidades</strong></h1>
</div>
<section id="espec">
<div class="container my-5" >
  <div class="row justify-content-center">
    <div class="col-md-4 mb-4">
      <div class="info-box p-4 position-relative bg-white rounded shadow h-100">
        <i class="bi bi-heart-pulse-fill position-absolute top-0 start-0 m-3 fs-2 text-primary"></i>
        <h5 class="mt-5 hn"><strong>Medicina do Trabalho</strong></h5>
        <p>Serviços especializados para garantir a saúde ocupacional dos colaboradores.</p>
        <a href="{{ url('/pedido') }}" class="linkp">Solicitar uma proposta</a>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="info-box p-4 position-relative bg-white rounded shadow h-100">
        <i class="bi bi-shield-check position-absolute top-0 start-0 m-3 fs-2 text-success"></i>
        <h5 class="mt-5 hn"><strong>Segurança do Trabalho</strong></h5>
        <p>Consultoria e treinamentos para ambientes de trabalho mais seguros.</p>
        <a href="#" class="linkp">Solicitar uma proposta</a>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="info-box p-4 position-relative bg-white rounded shadow h-100">
        <i class="bi bi-people-fill position-absolute top-0 start-0 m-3 fs-2 text-warning"></i>
        <h5 class="mt-5 hn"><strong>Treinamentos</strong></h5>
        <p>Cursos e capacitações reconhecidos pelo INEFOP e IGT.</p>
       <a href="#" class="linkp">Solicitar uma proposta</a>
      </div>
    </div>
  </div>
</div>
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-4 mb-4">
      <div class="info-box p-4 position-relative bg-white rounded shadow h-100">
        <i class="bi bi-heart-pulse-fill position-absolute top-0 start-0 m-3 fs-2 text-primary"></i>
        <h5 class="mt-5 hn"><strong>Consultoria em SHST</strong></h5>
        <p>Um serviço especializado que auxilia empresas a implementar, melhorar e manter sistemas de gestão de segurança e saúde ocupacional, garantindo conformidade legal, prevenção de acidentes e promoção de um ambiente de trabalho saudável.</p>
        <a href="#" class="linkp">Solicitar uma proposta</a>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="info-box p-4 position-relative bg-white rounded shadow h-100">
        <i class="bi bi-heart-pulse-fill position-absolute top-0 start-0 m-3 fs-2 text-primary"></i>
        <h5 class="mt-5 hn" ><strong>Exames Complementares do Diagnóstico</strong></h5>
        <p>Ferramentas essenciais para confirmar, descartar ou monitorar condições de saúde, incluindo aquelas relacionadas ao trabalho. Eles complementam a avaliação clínica e ajudam a identificar riscos ocupacionais, doenças profissionais ou agravos à saúde.</p>
        <a href="#" class="linkp">Solicitar uma proposta</a>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="info-box p-4 position-relative bg-white rounded shadow h-100">
        <i class="bi bi-people-fill position-absolute top-0 start-0 m-3 fs-2 text-warning"></i>
        <h5 class="mt-5 hn"><strong>Auditoria de Higiene e Segurança</strong>s</h5>
        <p>Um processo sistemático e documentado para avaliar a conformidade e eficácia do sistema de gestão de segurança e saúde no trabalho (SST) de uma organização</p>
      <a href="#" class="linkp">Solicitar uma proposta</a>
      </div>
    </div>
  </div>
</div>


</section>
    </section><!-- /About Section -->

    
    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2></h2>
        <p>Parceiros</p>
      </div><!-- End Section Title -->

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
                  <img src="{{ asset('site/img/trainers/unisaude.png') }}" class="testimonial-img" alt="">
                  <h3>Unisaúde</h3>
                  <h4></h4>
                 
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Parceiros há mais de 8 anos</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset('site/img/trainers/ensa.png') }}" class="testimonial-img" alt="">
                  <h3>Ensa Seguros</h3>
                  <h4></h4>
                
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                   <span>Parceiros há mais de 8 anos</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset('site/img/trainers/shalina.jpeg') }}" class="testimonial-img" alt="">
                  <h3>Shalina</h3>
                  <h4></h4>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Parceiros há mais de 8 anos</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset('site/imagens/vecauto.jpeg') }}" class="testimonial-img" alt="">
                  <h3>Vecauto</h3>
                 
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
              <span>Parceiros há mais de 8 anos</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                
              </div>
               </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset('site/imagens/bni.png') }}" class="testimonial-img" alt="">
                  <h3>BNI</h3>
                 
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                  <span>Parceiros há mais de 8 anos</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
           </div>
           
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section>
@endsection