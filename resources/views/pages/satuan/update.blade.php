@extends('layouts.appAdmin')

@section('content')

<div class="pagetitle">
    <h1>Data Satuan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Satuan Tables</li>
            </ol>
        </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Satuan Tables</h5>
                    <p>Input sesuai kebutuhanmu</p>
                    
                    <!-- Table with stripped rows -->
                    <form action="{{route('satuan.update',$satuan->idsatuan)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="col-12">
                            <label for="inputnama_satuan" class="form-label">Nama Satuan</label>
                            <input type="text" class="form-control" id="inputnama_satuan" name="nama_satuan" value="{{old('nama_satuan',$satuan->nama_satuan)}}">
                        </div>
                        <br>
                        <div class="col-12">
                            <label for="inputstatus" class="form-label">Status Satuan</label>
                            <input type="text" class="form-control" id="inputstatus" name="status" value="{{old('status',$satuan->status)}}">
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