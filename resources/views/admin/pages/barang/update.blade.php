@extends('admin.layouts.appAdmin')

@section('content')

<div class="pagetitle">
  <h1>Data Barang</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">Barang Tables</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Barang Tables</h5>
          <p>Input sesuai kebutuhanmu</p>
          
          <!-- Table with stripped rows -->
          <form action="{{route('barang.update',$barang->idbarang)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="col-12">
              <label for="inputnama" class="form-label">Nama Barang</label>
              <input type="text" class="form-control" id="inputnama" name="nama" value="{{old('nama',$barang->nama)}}">
            </div>
            <br>
            <div class="col-12">
              <label for="inputjenis" class="form-label">Jenis Barang</label>
              <input type="text" class="form-control" id="inputjenis" name="jenis" value="{{old('jenis',$barang->jenis)}}">
            </div>
            <br>
            <div class="col-12">
              <label for="inputharga" class="form-label">Harga Barang</label>
              <input type="text" class="form-control" id="inputbarang" name="harga" value="{{old('harga',$barang->harga)}}">
            </div>
            <br>
            <div class="col-12">
              <label for="inputstatus" class="form-label">Status Barang</label>
              <input type="text" class="form-control" id="inputstatus" name="status" value="{{old('status',$barang->status)}}">
            </div>
            <br>
            <div class="col-12">
              <label for="inputidsatuan" class="form-label">ID Satuan</label>
              <input type="text" class="form-control" id="inputidsatuan" name="idsatuan" value="{{old('idsatuan',$barang->idsatuan)}}">
            </div>
            <br>
            <div class='text-center'>
              <button type="submit" class="btn btn-primary">Kirim</button>
              <button type="reset" class="btn btn-secondary">Muat Ulang</button>
            </div>
          </form>
          <!-- End Table with stripped rows -->

        </div>
      </div>
    </div>
  </div>
</section>
@endsection