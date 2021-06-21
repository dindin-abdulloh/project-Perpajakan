@extends('admin.layouts.base')
@section('title', 'SURAT TANDA TERIMA SETORAN')
    @push('custom-css')
        <style>
            body {
                font-family: 'Nunito';
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
    
    <div class="col-md-6"><h4>SURAT TANDA TERIMA SETORAN</h4></div>
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
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>NO</th>
            <th>NOP</th>
            <th>NAMA WP</th>
            <th>ALAMAT WP</th>
            <th>FILE STSS</th>
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
            <td>
                <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i>Edit</button>
                <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i> Hapus</button>
            </td>
          </tr>
          <tr>
            <td>1</td>
            <td>Need for Speed IV</td>
            <td>247-925-726</td>
            <td>Wes Anderson umami biodiesel</td>
            <td>$50.00</td>
            <td>
                <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i>Edit</button>
                <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i> Hapus</button>
            </td>
          </tr>
          <tr>
            <td>1</td>
            <td>Monsters DVD</td>
            <td>735-845-642</td>
            <td>Terry Richardson helvetica tousled street art master</td>
            <td>$10.70</td>
            <td>
                <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i>Edit</button>
                <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i> Hapus</button>
            </td>
          </tr>
          <tr>
            <td>1</td>
            <td>Grown Ups Blue Ray</td>
            <td>422-568-642</td>
            <td>Tousled lomo letterpress</td>
            <td>$25.99</td>
            <td>
                <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i>Edit</button>
                <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i> Hapus</button>
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
          <i class="fas fa-download"></i> INPUT STSS
        </button>
      </div>
    </div>
  </div>
@endsection