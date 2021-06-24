@extends('layouts.app')
@section('title', 'PEMBAYARAN PAJAK BUMI DAN BANGUNAN')
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
{{-- PEMBAYARAN --}}
<div class="container-fluid">
    <!-- SELECT2 EXAMPLE -->
    <div class="card card-default ">
      <div class="card-header bg-primary">
        <h3 class="card-title">PEMBAYARAN PAJAK BUMI DAN BANGUNAN</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body" style="display: block;">
          <div class="container">
            <div class="card card-primary">
             
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  
                  
                  <div class="form-group">
                    <label for="exampleInputFile"><i class="fas fa-file-invoice-dollar"></i> MIDTRANS</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <select class="custom-select">
                          <option selected>PILIH BANK</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                      <div class="input-group">
                        <div class="form-group">
                            <label for="exampleInputEmail1">No. Rekening</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">SELESAI</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    
    </div>
  </div>
  {{-- /PEMBAYARAN --}}
  </section>
@endsection