@extends('layouts.app')
@section('title', 'DAFTAR PEMBAYARAN')
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


  

  {{-- DAFTAR PEMBAYARAN --}}
  <div class="container-fluid">
    <!-- SELECT2 EXAMPLE -->
    <div class="card card-default ">
      <div class="card-header bg-primary">
        <h3 class="card-title">DAFTAR PEMBAYARAN</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body" style="display: block;">
          <div class="container">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">NO</th>
                  <th scope="col">TAHUN</th>
                  <th scope="col">STATUS BAYAR</th>
                  <th scope="col">DOWNLOAD STTS</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>
                    <button type="button" class="btn btn-success"><i class="fas fa-download"> Download</i></button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>
                    <button type="button" class="btn btn-success"><i class="fas fa-download"> Download</i></button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>
                    <button type="button" class="btn btn-success"><i class="fas fa-download"> Download</i></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    
    </div>
  </div>
  {{-- /DAFTAR PEMBAYARAN --}}

  </section>
@endsection