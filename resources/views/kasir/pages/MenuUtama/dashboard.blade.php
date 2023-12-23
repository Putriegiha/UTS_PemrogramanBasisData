@extends('kasir.layouts.appKasir')

@section('content')

<div class="pagetitle">
  <h1>Dashboard Kasir</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Home</li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">Dashboard Kasir</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title d-flex justify-content-between">
            Penjualan Kasir
            <a href="" class="btn btn-warning">Riwayat Penjualan</a>
          </h5>

          <form action="" method="POST">
            @csrf
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Penjualan Kasir</label>
              <div class="col-sm-9">
                <select class="form-select mb-3" aria-label="Default select example" name="email_type_id" required>
                    <option value="" disabled selected hidden>Pilih Barang</option>
                    {{-- @foreach($listEmailType as $d) Foreach data mu d sini --}}
                        {{-- <option value="ini value dari tabel mu">ini nanti buat tampilan dropdown nya</option> --}}
                        <option value="">Nama dari value 1</option>
                        <option value="">Nama dari value 2</option>
                        <option value="">Nama dari value 3</option>
                    {{-- @endforeach --}}
                    {{-- Inputan yang lain menyesuaikan, mau inputan text/dropdown/number/password --}}
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
                {{-- <input type="number" class="form-control" id="inputPassword"> Ini inputan number --}}
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <label for="inputEmail5" class="form-label">Barang</label>
                <input type="text" class="form-control" id="inputEmail5" name="">
              </div>
              <div class="col-md-2">
                <label for="inputEmail5" class="form-label">Jumlah Keluar</label>
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
            <div>
                <button type="submit" class="btn btn-primary">Cari Barang</button>
                <button type="reset" class="btn btn-success">Masukan Pengeluaran Penjualan</button>
            </div>
          </form>

          <!-- Add content for the second card here -->
        </div>
      </div>
    </div>

    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">

          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">Barang</th>
                <th scope="col">Sumber Dana</th>
                <th scope="col">Mutasi Keluar</th>
                <th scope="col">Satuan</th>
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