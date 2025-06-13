@extends('layout.layout2')
@section('title', 'Sobre nós-Trabmed')
@section('conteudo')
<div class="main-content" >


    <section id="about-us" class="section about-us">

      <div class="container">

        <div class="row gy-4">
              
                  <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-up" id="imgcomp" data-aos-delay="100">
                
                         <div class="container my-4">
  <div class="row g-0">
    <div class="col-6 d-flex justify-content-start align-items-center">
      <img src="{{ asset('site/imagens/trab.jpeg') }}" class="img-custom img1" alt="Imagem 1">
    </div>
    <div class="col-6 d-flex justify-content-start align-items-center">
      
      <img src="{{ asset('site/imagens/trab.jpeg') }}" class="img-custom img2" alt="Imagem 2">
    </div>
    <div class="col-6 d-flex justify-content-start   ">
      <img src="{{ asset('site/imagens/trab.jpeg') }}" class="img-custom img3" alt="Imagem 3">
    </div>
    <div class="col-6 d-flex justify-content-start align-items-center ">
      <img src="{{ asset('site/imagens/trab.jpeg') }}" class="img-custom img4" alt="Imagem 4">
    </div>
  </div>
</div>
                  </div>
                    
                     
          <div class="col-lg-6 order-1 order-lg-2 content"id="hist" data-aos="fade-up" data-aos-delay="200">
        <div id="para">  <h1 class="hn"><strong>Nossa História</strong></h1>
            <p class="paragraph">
            A Trabmed é uma empresa especializada em Medicina do Trabalho, Higiene e Segurança no Trabalho, certificada pela IGT (Inspeção Geral do Trabalho) e INEFOP para ministrar cursos. Conta com uma equipe multidisciplinar que garante a execução e controle de qualidade dos serviços prestados 
            </p></div>
       
          </div>

        </div>

      </div>

    </section><!-- /About Us Section -->



<div class="container" id="main1"><h1 class="hn"><strong>Missão & Valores</strong></h1></div>
<section id="tabs" class="tabs section align-text-center" >
  
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-3" id="tablist">
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
                    <h3 class="hn">Nossa Missão</h3>
                    <p class="paragraph">Proteger a integridade física dos
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
                    <h3 class="hn">Valorizamos vidas Saúde, segurança e bem-estar em primeiro lugar</h3>
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
 
@endsection