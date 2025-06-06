@extends('layout.layout')
@section('title','Trabmed-Serviços')
@section('conteudo')
        <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Conheça os Nossos Serviços</h1>
              <p class="mb-0">Saúde, segurança e bem-estar em primeiro lugar.</p>

            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs ">
        <div class="container" >
          <ol>
              <li id="data"> <h4>Dias e horários de atendimento</h4></li>
              <h4 id="data"><li>Segunda à Sexta-feira das 08:00 às 16:00</h4></li>
          </ol>
        </div>
      </nav>
    </div>
<section id="about" class="about section">
    

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" id="imgcomp" data-aos-delay="200">
   <img src="{{ asset('site/img/trab3.jpeg') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
           <h5><i class="bi bi-check-circle" id="bot"></i>Exames de saúde ocupacional em todas Categorias para sua empresa.</h5>
            <h5><i class="bi bi-check-circle" id="bot"></i>Segurança no Trabalho</h5>
            <h5><i class="bi bi-check-circle" id="bot"></i>Medições Ambientais</h5>
            <h5><i class="bi bi-check-circle" id="bot"></i>Consultoria em SHST (Saúde, Higiene e Segurança no Trabalho)</h5>
            <h5><i class="bi bi-check-circle" id="bot"></i>Formação, Auxílio e Coordenação da CPAT (Comissão de Prevenção contra Acidentes de Trabalho)</h5>
            <h5><i class="bi bi-check-circle" id="bot"></i>Exames Complementares do Diagnóstico</h5>
            <h5><i class="bi bi-check-circle" id="bot"></i>Eptometria</h5>
            <h5><i class="bi bi-check-circle" id="bot"></i>Auditoria de Higiene e Segurança</h5>
             <!--  <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>-->
          </div>

        </div>
        

      </div>
        
    </section>

@endsection