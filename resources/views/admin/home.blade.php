@extends('admin.layouts.base')
@section('title', 'HOME')
    @push('custom-css')
        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    @endpush

@section('content')


    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        

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
              <img class="d-block w-100" src="{{asset('/assets/dist/img/slide1.jpg')}}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{asset('/assets/dist/img/slide2.jpg')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{asset('/assets/dist/img/slide3.jpg')}}" alt="Third slide">
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
      <!-- /.card-body -->
      
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

 
@endsection