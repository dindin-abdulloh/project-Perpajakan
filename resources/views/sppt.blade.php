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
  <!-- /.card -->

  {{-- SPPT --}}
  <div class="container-fluid">
    <!-- SELECT2 EXAMPLE -->
    <div class="card card-default">
      <div class="card-header bg-primary">
        <h3 class="card-title">SURAT PEMBERITAHUAN PAJAK TERHUTANG</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body" style="display: block;">
        <div class="row">
          <div class="col-md-6">
            <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                 
                    <label for="exampleInputEmail1">NOP</label>
                    <input type="text" class="form-control" placeholder="Enter ..." disabled="">
     
               
                    <label for="exampleInputEmail1">Nama Wajib Pajak</label>
                    <input type="text" class="form-control" placeholder="Enter ..." disabled="">
                
                  
                    <label for="exampleInputPassword1">Alamat Wajib Pajak</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..." disabled=""></textarea>
              
                    <label for="exampleInputEmail1">Objek Pajak</label>
                    <input type="text" class="form-control" placeholder="Enter ..." disabled="">
                
                    <label for="exampleInputEmail1">Luas (M2)</label>
                    <input type="text" class="form-control" placeholder="Enter ..." disabled="">

                    <label for="exampleInputEmail1">Tgl Jatuh Tempo</label>
                    <input type="text" class="form-control" placeholder="Enter ..." disabled="">

                    <label for="exampleInputEmail1">PBB Yang Terhutang</label>
                    <input type="text" class="form-control" placeholder="Enter ..." disabled="">

                    <label for="exampleInputEmail1">PBB Yang Harus Dibayar</label>
                    <input type="text" class="form-control" placeholder="Enter ..." disabled="">

                </div>
                <!-- /.card-body -->
              </form>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-6">
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <label for="exampleInputPassword1">Alamat Wajib Pajak</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..." disabled=""></textarea>

                    <label for="exampleInputEmail1">Kelas</label>
                    <input type="text" class="form-control" placeholder="Enter ..." disabled="">

                    <label for="exampleInputEmail1">NJOP / M2 (Rp)</label>
                    <input type="text" class="form-control" placeholder="Enter ..." disabled="">

                    <label for="exampleInputEmail1">Total NJOP (Rp)</label>
                    <input type="text" class="form-control" placeholder="Enter ..." disabled="">
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">BAYAR</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.col -->
        </div>
      </div>
    
    </div>
  </div>
  {{-- /SPPT --}}

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
                    
                    <label for="exampleInputFile"><i class="fas fa-file-invoice-dollar"></i> MIDTRANS</label>
                    <div class="form-group">
                      <label for="exampleInputEmail1">No. Rekening</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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