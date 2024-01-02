@extends('admin.layouts.appAdmin')

@section('content')

<div class="pagetitle">
  <h1>Retur</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Transaksi</li>
        <li class="breadcrumb-item active">Retur</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title d-flex justify-content-between">Retur
        </h5>
          <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">        
          <form action="" method="POST">
            @csrf
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Retur</label>
                <div class="col-sm-9">
                  <select class="form-select mb-3" aria-label="Default select example" name="email_type_id" required>
                    <option value="" disabled selected hidden>Pilih Retur</option>
                      <option value="">Pilih Retur</option>
                  </select>
                </div>
            </div>
      </div>
    </div>
  </div>
</div>

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        @if(session('success'))
        <div class='alert alert-success'>{{session('success')}}</div>
        @endif
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Detail Retur</h5>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">ID Detail Retur</th>
                    <th scope="col">ID Detail Penerimaan</th>
                    <th scope="col">Barang</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Alasan</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
              </table>
              <!-- End Table with stripped rows -->
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

@endsection