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
                    <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>
                    
                    <!-- Table with stripped rows -->
                    <form action="{{route('barang.store')}}" method="POST">
                        @csrf
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" id="inputNanme4" name="nama">
                        </div>
                        <br>
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Jenis Barang</label>
                            <input type="text" class="form-control" id="inputNanme4" name="jenis">
                        </div>
                        <br>
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Harga Barang</label>
                            <input type="text" class="form-control" id="inputNanme4" name="harga">
                        </div>
                        <br>
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Status Barang</label>
                            <input type="text" class="form-control" id="inputNanme4" name="status">
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

        resetbutton.addEventListener('click',function(){
        inputnamaBarang.value = '';
        inputjenisBarang.value = '';
        inputhargaBarang.value = '';
        inputstatusBarang.value = '';
        });
    });
</script>
@endsection