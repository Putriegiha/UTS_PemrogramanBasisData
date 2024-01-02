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
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title d-flex justify-content-between">Pengadaan
        </h5>
          <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">        
          <form action="" method="POST">
            @csrf
            <div class="row mb-3">
              <label for="inputPenerimaan" class="col-sm-3 col-form-label">ID User</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="inputPenerimaan" name="penerimaan" required>
              </div>
            </div>            
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Vendor</label>
                <div class="col-sm-9">
                  <select class="form-select mb-1" aria-label="Default select example" name="email_type_id" required>
                    <option value="" disabled selected hidden>Pilih Vendor</option>
                      <option value="">Fakultas Vokasi</option>
                      <option value="">Fakultas Hukum</option>
                      <option value="">Fakultas Kedokteran</option>
                  </select>
                </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Barang</label>
                <div class="col-sm-9">
                  <select class="form-select mb-1" aria-label="Default select example" name="email_type_id" required>
                    <option value="" disabled selected hidden>Pilih Barang</option>
                      <option value="">Buku</option>
                      <option value="">Majalah</option>
                      <option value="">Sapu</option>
                  </select>
                </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah">
              </div>
              <div class="col">
                <label for="stock" class="form-label">Harga Satuan</label>
                <input type="text" class="form-control" id="stock" name="stock">
              </div>
              <div class="col">
                <label for="satuan" class="form-label">Input Nilai</label>
                <input type="text" class="form-control" id="satuan" name="satuan">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPenerimaan" class="col-sm-3 col-form-label">Sub Total</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="inputPenerimaan" name="penerimaan" required>
              </div>
            </div>   
            <div>
        <!-- Basic Modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
          Cari Barang
        </button>
        <div class="modal fade" id="basicModal" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Cari Barang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th>ID Satuan</th>
                      <th scope="col">Nama Barang</th>
                      <th scope="col">Harga Satuan</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div><!-- End Basic Modal-->              
        <button type="reset" class="btn btn-success">Tambah list</button>
            </div>
          </form><!-- Add content for the second card here -->
          </div>
      </div>
    </div>
  </div>
</div>

@endsection