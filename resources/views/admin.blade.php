@extends('layout.layout2')
@section('title', 'Trabmed-Administração')
@section('conteudo')

<main class="main-contente">






      <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('site/img/flyer CERTO.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" id="logo" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
     

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Publicações

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver Site</p>
                </a>
              </li>
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
 <div class="content-wrapper">

 <section class="content">
  <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
             <a href="#"> <div class="inner">
                <h3>Publicar</h3>

                <p>Notícias</p>
              </div>
              <div class="icon">
                <i class="fas fa-comment-dots"></i>
              </div></a>
              <a href="#" class="small-box-footer">Criar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <a href="#"> <div class="inner">
                <h3>Visualizar<sup style="font-size: 20px"></sup></h3>

                <p>Publicações</p>
              </div>
              <div class="icon">
                <i class="fas fa-comments"></i>
              </div></a>
              <a href="#" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning" >
             <a href="#"> <div class="inner" >
                <h3 color="white">Editar</h3>

                <p>Publicação</p>
              </div>
              <div class="icon">
                <i class="fas fa-edit"></i>
              </div></a>
              <a href="#" class="small-box-footer">Editar<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
             <a href="#"> <div class="inner">
                <h3>Eliminar</h3>

                <p>Publicação</p>
              </div>
              <div class="icon">
                <i class="fas fa-trash"></i>
              </div></a>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
            </div>
        </section>
 </div>
</main>





@endsection