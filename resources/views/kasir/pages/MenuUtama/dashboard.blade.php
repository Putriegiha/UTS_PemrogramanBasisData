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
    <div class="col-lg-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title d-flex justify-content-between">Kasir</h5>
    
          <form action="" method="POST">
            @csrf
            <div class="mb-3">
              <label for="inputIDUser" class="form-label">ID User</label>
              <input type="text" class="form-control" id="inputIDUser" name="userID" required>
            </div>
            
            <div class="mb-3">
              <label for="selectBarang2" class="form-label">Barang</label>
              <select class="form-select" aria-label="Default select example" id="selectBarang2" name="email_type_id" required>
                <option value="" disabled selected hidden>Pilih Barang</option>
                <option value="">Baju</option>
                <option value="">Sapu</option>
                <option value="">Sepatu</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="inputJumlah" class="form-label">Jumlah</label>
              <input type="number" class="form-control" id="inputJumlah" name="jumlah">
            </div>
            <div class="d-flex justify-content-center">
              <button type="reset" class="btn btn-success">Masukan</button>
            </div>
          </form>
          <!-- Add content for the second card here -->
        </div>
      </div>
    </div>
    
    <div class="col-lg-8">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title d-flex justify-content-between">Penjualan</h5>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Harga Satuan</th>
                <th scope="col">Sub Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Baju</td>
                <td>3</td>
                <td>250000</td>
                <td>750000</td>
              </tr>
            </tbody>
          </table>
          <div class="card-header d-flex flex-column align-items-start">
            <span class="text-start">PPN: 11%</span>
            <span class="text-start">Total Pesanan: Rp. 832.500</span>
          </div>                   
      </div>
    </div>
  </div>
</section>
@endsection