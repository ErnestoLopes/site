@extends('layout.layout')
@section('title', 'Trabmed')
@section('conteudo')

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="{{ asset('site/img/trab.jpeg') }}" alt="" data-aos="fade-in">

      <div class="container">
        <h2 data-aos="fade-up" data-aos-delay="100">Ofereça,<br>Melhores Condições de trabalho <br>Para sua Equipe</h2>
        <p data-aos="fade-up" data-aos-delay="200">Somos Especialistas em Saúde e Segurança no trabalho</p>
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
          <!--  <a href="courses.html" class="btn-get-started">Get Started</a>-->
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" id="imgcomp"data-aos-delay="100">
            <img src="{{ asset('site/img/about.jpg') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
            <h3>Exames de Saúde Ocupacional</h3>
           <h4></h4>
            <ul>
              <li><i class="bi bi-check-circle" id="bot"></i> <span>Admissional</span></li>
              <li><i class="bi bi-check-circle"id="bot"></i> <span>Periódico</span></li>
              <li><i class="bi bi-check-circle"id="bot"></i> <span>Demissional</span></li>
                <li><i class="bi bi-check-circle"id="bot"></i> <span>Retorno de Trabalho</span></li>
                  <li><i class="bi bi-check-circle"id="bot"></i> <span>Mudança de Função</span></li>
            </ul>
             <!--  <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>-->
          </div>

        </div>
        

      </div>
      <div class="container" id="ecomp">
        <div class="row gy-4">

          <div class="col-lg-6 order-1 order-lg-1" data-aos="fade-up" id="imgcomp" data-aos-delay="100">
            <img src="{{ asset('site/img/trab3.jpeg') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 order-2 order-lg-2 content" data-aos="fade-up" data-aos-delay="200">
            <h3>Exames Complementares</h3>
           <h4></h4>
            <ul>
              <li><i class="bi bi-check-circle" id="bot"></i> <span> Audiometria</span></li>
              <li><i class="bi bi-check-circle" id="bot"></i> <span>Espirometria</span></li>
              <li><i class="bi bi-check-circle" id="bot"></i> <span>Eletrocardiograma</span></li>
                <li><i class="bi bi-check-circle" id="bot"></i> <span>Visioteste</span></li>
                  <li><i class="bi bi-check-circle" id="bot"></i> <span>Exames Laboratoriais</span></li>
            </ul>
           <!-- End Stats Item  <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>-->
          </div>

        </div>
      </div>

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