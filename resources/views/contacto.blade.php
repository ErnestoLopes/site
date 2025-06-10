    @extends('layout.layout')
@section('title', 'Trabmed-Contactos')
    @section('conteudo')
    <!-- Contact Section -->
    <section id="contact" class="contact section">
            <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Contacto</h1>
                 <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="600">
              <i class="bi bi-clock flex-shrink-0"></i>
              <div>
                <h3>Horário</h3>
                <p>Seg-Sex: 08h00 - 17h00</p>
              </div>
            </div>
              <p class="mb-0"></p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{ url('/') }}">Início</a></li>
            <li class="current">Contacto</li>
          </ol>
        </div>
      </nav>
    </div>

      <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
        <iframe style="border:0; width: 100%; height: 300px;" src="https://www.google.com/maps?q=-8.814682,13.234964&hl=pt-PT&z=17&output=embed" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div><!-- End Google Maps -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Endereço</h3>
                <p>Município das Ingombotas, Bairro Kinaxixi, Rua da Avenida Lenine Nº7/9</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Telefone</h3>
                <p>(+244) 944 88 48 49</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>recepção@trabmed.net</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="{{ route('enviar.contato') }}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                @csrf
                <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="nome" class="form-control" placeholder="Seu nome" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Seu email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="cont" placeholder="Contacto" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Mensagem" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                 
                  <button type="submit">Enviar Mensagem</button>

                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section>
    @endsection