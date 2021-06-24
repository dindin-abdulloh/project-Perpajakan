@extends('layouts.app')
@section('title', 'HOME')
    @push('custom-css')
        <style>
            body {
                font-family: 'Nunito';
            }
            .fa-edit{
              width: 14px;
            }
            .btn-primary{
              margin-bottom: 10px;
              margin-top: 30px;
            }
            .no-print{
              margin-top: 20px;
            }
            .filter {
                float: right;
                margin-bottom: 10px;
            }
           
        </style>
    @endpush

@section('content')
<section class="content">
      

  <!-- Default box -->
  <div class="card">
    <div class="card-header bg-primary">
      <h3 class="card-title">HOME</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="http://127.0.0.1:8000/assets/dist/img/slide1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="http://127.0.0.1:8000/assets/dist/img/slide2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="http://127.0.0.1:8000/assets/dist/img/slide3.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  <!-- /.card -->

  </section>
@endsection