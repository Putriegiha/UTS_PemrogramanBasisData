@extends('admin.layouts.appAdmin')

@section('content')

<div class="pagetitle">
  <h1>Table Pengadaan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">Pengadaan Tables</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      @if(session('success'))
      <div class='alert alert-success'>{{session('success')}}</div>
      @endif
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Tabel Pengadaan</h5>
            
              <!-- Vertically centered Modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                + Tambah
              </button>
              <div class="modal fade" id="verticalycentered" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-body">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title d-flex justify-content-between">Buat Pengadaan Baru
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
                                <label for="inputPenerimaan" class="col-sm-3 col-form-label">PPN%</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="inputPenerimaan" name="penerimaan" required>
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
                                <label for="inputPenerimaan" class="col-sm-3 col-form-label">Jumlah</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="inputPenerimaan" name="penerimaan" required>
                                </div>
                              </div> 
                              <div class="row mb-3">
                                <label for="inputPenerimaan" class="col-sm-3 col-form-label">Harga Satuan</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="inputPenerimaan" name="penerimaan" required>
                                </div>
                              </div> 
                              <div class="row mb-3">
                                <label for="inputPenerimaan" class="col-sm-3 col-form-label">Sub Total</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="inputPenerimaan" name="penerimaan" required>
                                </div>
                              </div>   
                              <div class="row mb-3">
                                <label for="inputPenerimaan" class="col-sm-3 col-form-label">Total Nilai</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="inputPenerimaan" name="penerimaan" required>
                                </div>
                              </div> 
                            </form><!-- Add content for the second card here -->
                            </div>
                        </div>
                      </div>                    
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div><!-- End Vertically centered Modal-->

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">ID Pengadaan</th>
                  <th scope="col">Tanggal</th>
                  <th scope="col">User</th>
                  <th scope="col">Vendor</th>
                  <th scope="col">ID Detail Pengadaan</th>
                  <th scope="col">Barang</th>
                  <th scope="col">Harga Satuan</th>
                  <th scope="col">Jumlah</th>
                  <th scope="col">Sub Total</th>
                  <th scope="col">PPN (%)</th>
                  <th scope="col">Total</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
            </table>
            <!-- End Table with stripped rows -->

        </div>
      </div>
    </div>
  </div>
</section>
@endsection