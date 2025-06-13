@extends('layout.layout3')
@section('title', 'pedido de serviço')
@section('conteudo')


<section id="contact" class="contact section">
    <div class="top text-center">
    <h2 class="hn"><strong>Preencha o formulário</strong></h2>
</div>

      <div class="container" id="form" data-aos="fade-up" data-aos-delay="100">

        

        <div class="row gy-4 ">

          <div class="col-lg-4 ">
            A Trabmed é uma empresa especializada em Medicina do Trabalho,
             Higiene e Segurança no Trabalho, certificada pela IGT (Inspeção Geral do Trabalho) 
             e INEFOP para ministrar cursos. 
            Conta com uma equipe multidisciplinar que garante a 
            execução e controle de qualidade dos serviços prestados

          </div>

          <div class="col-lg-8 ">
            <form action="{{ route('enviar.contato') }}" method="post" class="php-email-form text-center" data-aos="fade-up" data-aos-delay="200">
                @csrf
               
                                 <div class="col-md-6">
                <select name="Serviços" class="form-control" name="cont"id="">
                    <option value=""selected>Selecione<i class="bi bi-chevron-down toggle-dropdown"></i></option>
                    <option value="">Segurança no Trabalho</option>
                    <option value="">Eptometria</option>
                    <option value="">Exames Complementares</option>
                    <option value="">Consultoria em SHST</option>
                    <option value="">Auditoria de Higiene e Segurança</option>
                    <option value="">Exames Ocupacionais</option>
                    <option value="">Exames de saúde ocupacional</option>
                    <option value="">Nos fale o que você precisa</option></select></div>

                <div class="col-md-6">
                  <input type="text" name="nome" class="form-control" placeholder="Seu nome" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Seu email" required="">
                </div>

                <div class="col-md-6">
                  <input type="text" class="form-control" name="cont" placeholder="Contacto" required="">
                </div>


                <div class="col-md-6">
                  <textarea class="form-control" name="message" rows="6" placeholder="Mensagem" required=""></textarea>
                </div>

                <div class="col-md-6 text-center">
                 
                  <button type="submit">Enviar Mensagem</button>

                </div>

         
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section>


@endsection