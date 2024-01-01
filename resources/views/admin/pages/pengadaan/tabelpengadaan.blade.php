@extends('admin.layouts.appAdmin')

@section('content')

<div class="pagetitle">
  <h1>Pengadaan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Transaksi</li>
        <li class="breadcrumb-item active">Pengadaan</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="row">
  <div class="col-lg-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title d-flex justify-content-between">Pengadaan
          <a href="" class="btn btn-warning">Riwayat Penjualan</a>
        </h5>
          <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">        
          <form action="" method="POST">
            @csrf
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Penjualan Kasir</label>
                <div class="col-sm-9">
                  <select class="form-select mb-3" aria-label="Default select example" name="email_type_id" required>
                    <option value="" disabled selected hidden>Pilih Barang</option>
                      <option value="">Fakultas Vokasi</option>
                      <option value="">Fakultas Hukum</option>
                      <option value="">Fakultas Kedokteran</option>
                  </select>
                </div>
            </div>
            
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Judul</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" id="inputEmail" name="">
                </div>
            </div>
            
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Vendor</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="inputnama_vendor" name="">
                </div>
            </div>
                    
            <div class="row mb-3">
              <div class="col-md-6">
                <label for="inputEmail5" class="form-label">Barang</label>
                <input type="text" class="form-control" id="inputEmail5" name="">
              </div>
              <div class="col-md-2">
                <label for="inputEmail5" class="form-label">Quantity</label>
                <input type="number" class="form-control" id="inputEmail5" name="">
              </div>
              <div class="col-md-2">
                <label for="inputEmail5" class="form-label">Stock</label>
                <input type="number" class="form-control" id="inputEmail5" name="">
              </div>
              <div class="col-md-2">
                <label for="inputEmail5" class="form-label">Satuan</label>
                <input type="text" class="form-control" id="inputEmail5" name="">
              </div>
            </div>

            <div class="col-sm-12 col-md-6">
              <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries
              </div>
            </div>

            <div class="col-sm-12 col-md-5">
              <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                <ul class="pagination">
                  <li class="paginate_button page-item previous disabled" id="example2_previous">
                    <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                  </li>
                  <li class="paginate_button page-item active">
                    <a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                  </li>
                  <li class="paginate_button page-item ">
                    <a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                  </li>
                  <li class="paginate_button page-item next" id="example2_next">
                    <a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                  </li>
                </ul>
              </div>
            </div>

            <div>
        <!-- Basic Modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
          Cari Barang
        </button>
        <div class="modal fade" id="basicModal" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Cari Barang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th>ID Role</th>
                      <th scope="col">Nama Role</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div><!-- End Basic Modal-->              <button type="reset" class="btn btn-success">Masukan Pengeluaran Penjualan</button>
            </div>
          </form><!-- Add content for the second card here -->
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
              <h5 class="card-title">Pengadaan</h5>
              <a href="#"><button class="btn btn-primary"> + Tambah </button></a>
              <a href="#"><button class="btn btn-success"> Sampah </button></a>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">ID Role</th>
                    <th scope="col">Nama Role</th>
                    <th scope="col">Status</th>
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