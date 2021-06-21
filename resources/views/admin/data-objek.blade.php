@extends('admin.layouts.base')
@section('title', 'DATA OBJEK PAJAK')
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
<div class="invoice p-3 mb-3">
   
    <!-- Table row -->
    <div class="row">
    
    <div class="col-md-6"><h4>DAFTAR OBJEK PAJAK</h4></div>
    <div class="col-md-6">
      <div class="dropdown filter">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            FILTER
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">2021</a>
            <a class="dropdown-item" href="#">2020</a>
            <a class="dropdown-item" href="#">2019</a>
          </div>
        </div>
  </div>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>NO</th>
                <th>NOP</th>
                <th>NAMA WP</th>
                <th>ALAMAT WP</th>
                <th>LETAK OP</th>
                <th>OP</th>
                <th>KELAS</th>
                <th>LUAS (M2)</th>
                <th>MJOP/M2 (Rp)</th>
                <th>TGL JATUH TEMPO</th>
                <th>TOTAL NJOP (Rp)</th>
                <th>PBB TERHUTANG (2%/BLN)</th>
                <th>PBB HARUS DIBAYAR</th>
                <th>AKSI</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Call of Duty</td>
                <td>455-981-221</td>
                <td>El snort testosterone trophy driving gloves handsome</td>
                <td>$64.50</td>
                <td>$64.50</td>
                <td>$64.50</td>
                <td>$64.50</td>
                <td>$64.50</td>
                <td>$64.50</td>
                <td>$64.50</td>
                <td>$64.50</td>
                <td>$64.50</td>
                <td>
                    <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                    <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i> </button>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Call of Duty</td>
                <td>455-981-221</td>
                <td>El snort testosterone trophy driving gloves handsome</td>
                <td>$64.50</td>
                <td>$64.50</td>
                <td>$64.50</td>
                <td>$64.50</td>
                <td>$64.50</td>
                <td>$64.50</td>
                <td>$64.50</td>
                <td>$64.50</td>
                <td>$64.50</td>
                <td>
                    <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                    <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i> </button>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Call of Duty</td>
                <td>455-981-221</td>
                <td>El snort testosterone trophy driving gloves handsome</td>
                <td>$64.50</td>
                <td>$64.50</td>
                <td>$64.50</td>
                <td>$64.50</td>
                <td>$64.50</td>
                <td>$64.50</td>
                <td>$64.50</td>
                <td>$64.50</td>
                <td>$64.50</td>
                <td>
                    <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                    <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i> </button>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Call of Duty</td>
                <td>455-981-221</td>
                <td>El snort testosterone trophy driving gloves handsome</td>
                <td>$64.50</td>
                <td>$64.50</td>
                <td>$64.50</td>
                <td>$64.50</td>
                <td>$64.50</td>
                <td>$64.50</td>
                <td>$64.50</td>
                <td>$64.50</td>
                <td>$64.50</td>
                <td>
                    <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                    <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i> </button>
                </td>
              </tr>
              
              </tbody>

          </table>
        </div>
      
      <!-- /.col -->
    </div>
    <!-- /.row -->

  

    <!-- this row will not appear when printing -->
    <div class="row no-print">
      <div class="col-12">
        <button type="button" class="btn btn-success float-right" style="margin-right: 5px;">
          <i class="fas fa-download"></i> INPUT DATA
        </button>
      </div>
    </div>
  </div>
@endsection