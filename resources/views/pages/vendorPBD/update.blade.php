@extends('layouts.appAdmin')

@section('content')

<div class="pagetitle">
    <h1>Data Vendor</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Vendor Tables</li>
            </ol>
        </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Vendor Tables</h5>
                    <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>

                    <!-- Table with stripped rows -->
                    <form action="{{route('vendor.update',$vendor->idvendor)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Nama Vendor</label>
                            <input type="text" class="form-control" id="inputNanme4" name="nama_vendor" value="{{old('nama_vendor',$vendor->nama_vendor)}}">
                        </div>
                        <br>
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Badan Hukum</label>
                            <input type="text" class="form-control" id="inputNanme4" name="badan_hukum" value="{{old('badan_hukum',$vendor->badan_hukum)}}">
                        </div>
                        <br>
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Status Vendor</label>
                            <input type="text" class="form-control" id="inputNanme4" name="status" value="{{old('status',$vendor->status)}}">
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