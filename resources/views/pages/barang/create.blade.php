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
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Barang Tables</h5>
                    <p>Input sesuai kebutuhanmu</p>
                    
                    <!-- Table with stripped rows -->
                    <form action="{{route('barang.store')}}" method="POST">
                        @csrf
                        <div class="col-12">
                            <label for="inputnama" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" id="inputNanme4" name="nama">
                        </div>
                        <br>
                        <div class="col-12">
                            <label for="inputjenis" class="form-label">Jenis Barang</label>
                            <input type="text" class="form-control" id="inputNanme4" name="jenis">
                        </div>
                        <br>
                        <div class="col-12">
                            <label for="inputharga" class="form-label">Harga Barang</label>
                            <input type="text" class="form-control" id="inputNanme4" name="harga">
                        </div>
                        <br>
                        <div class="col-12">
                            <label for="inputstatus" class="form-label">Status Barang</label>
                            <input type="text" class="form-control" id="inputNanme4" name="status">
                        </div>
                        <br>
                        <div class="col-12">
                            <label for="inputidsatuan" class="form-label">ID Satuan</label>
                            <input type="text" class="form-control" id="inputidsatuan" name="idsatuan">
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

<script>
    document.addEventListener('DOMContentLoaded',function(){
        var resetbutton = document.querySelector('button[type="reset"]');
        var inputnamaBarang = document.querySelector('input[name="nama"]');
        var inputjenisBarang = document.querySelector('input[name="jenis"]');
        var inputhargaBarang = document.querySelector('input[name="harga"]');
        var inputstatusBarang = document.querySelector('input[name="status"]');
        var inputidSatuan = document.querySelector('input[name="idsatuan"]');

        resetbutton.addEventListener('click',function(){
        inputnamaBarang.value = '';
        inputjenisBarang.value = '';
        inputhargaBarang.value = '';
        inputidSatuan.value = '';
        });
    });
</script>
@endsection