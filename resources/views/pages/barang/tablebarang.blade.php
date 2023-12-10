@extends('layouts.appAdmin')

@section('content')

<div class="pagetitle">
  <h1>Data Barang</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">Barang Tables</li>
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
            <h5 class="card-title">Barang Tables</h5>
            <p>Ini adalah tampilan utamanmu</p>
            <a href="{{route('barang.create')}}"><button class="btn btn-primary"> + Tambah </button></a>
            <a href="{{route('barang.trash')}}"><button class="btn btn-success"> Sampah </button></a>
            
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">ID Barang</th>
                  <th scope="col">ID Satuan</th>
                  <th scope="col">Nama Barang</th>
                  <th scope="col">Jenis Barang</th>
                  <th scope="col">Harga Barang</th>
                  <th scope="col">Status Barang</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>

              <tbody>
                @foreach($barangs as $barang)
                <tr>
                  <th scope="row">{{$barang->idbarang}}</th>
                  <td>{{$barang->idsatuan}}</td>
                  <td>{{$barang->nama}}</td>
                  <td>{{$barang->jenis}}</td>
                  <td>{{$barang->harga}}</td>
                  <td>
                    @if($barang->STATUS == 1)
                    <h6>Aktif</h6>
                    @endif 
                  </td>
                  
                  <td>
                    <a href="{{route('barang.edit',$barang->idbarang)}}"> <button type="submit" class="btn btn-success"> Edit </button></a>
                    <form action="{{route('barang.delete',$barang->idbarang)}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit" onclick= "return confirm('Apakah Anda yakin menghapus data ?')">Hapus</button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

        </div>
      </div>
    </div>
  </div>
</section>
@endsection