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
                        <p>Ini adalah tampilan soft delete</p>
                        <a href="{{route('barang.index')}}"><button class="btn btn-primary"> Data Barang </button></a>
            
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
                                            @if($barang->status == 0)
                                            <h6>Non Aktif</h6>
                                            @endif 
                                        </td>
                                        
                                        <td>
                                            <form action="{{route('barang.restore',$barang->idbarang)}}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button class="btn btn-success" type="submit" onclick= "return confirm('Apakah Anda yakin mengembalikan data ?')">Kembalikan</button>
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