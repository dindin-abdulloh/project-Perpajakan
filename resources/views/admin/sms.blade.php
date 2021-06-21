@extends('admin.layouts.base')
@section('title', 'SHORT MESSAGE SERVICE')
    @push('custom-css')
        <style>
            body {
                font-family: 'Nunito';
            }
            .btn-send{
                float: right;
            }
            .input-text{
                height: 200px;
            }
        </style>
    @endpush

@section('content')


    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">SHORT MESSAGE SERVICE</h3>

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
        <div class="input-group input-text">
            <textarea class="form-control " aria-label="With textarea" placeholder="Tulis Pesan..."></textarea>
          </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="button" class="btn btn-primary btn-send">KIRIM</button>
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

 
@endsection