@extends('layout.layout')
@section('title', 'Notícias-Trabmed')
@section('conteudo')
 <main class="main-content">







      <!--section id="events" class="events section">
            <div class="container" data-aos="fade-up">

        <div class="row gy-4">
             @foreach ($informations as $informations)
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="{{asset('site/imagens/'.$informations->image )}}" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">{{ Str::limit($informations->title) }}</a></h5>
                <p class="fst-italic text-center"><span class="card_price"> Data: {{ Str::limit($informations->created_at) }} </span></p>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
              </div>
            </div>
          </div>
          @endforeach
          </div>
           </div>
        </!--section>

      </div>

    </section><!-- /Events Section -->

 </main>
@endsection