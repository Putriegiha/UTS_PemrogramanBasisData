@extends('admin.layouts.appAdmin')

@section('content')

<div class="pagetitle">
    <h1>Data Vendor</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
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

                    <!-- Table with stripped rows -->
                    <form action="{{route('vendor.update',$vendor->idvendor)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="col-12">
                            <label for="inputnama_vendor" class="form-label">Nama Vendor</label>
                            <input type="text" class="form-control" id="inputnama_vendor" name="nama_vendor" placeholder="cont. Bapak Arman" value="{{old('nama_vendor',$vendor->nama_vendor)}}">
                        </div>
                        <br>
                        <div class="col-12">
                            <label for="inputbadan_hukum" class="form-label">Badan Hukum</label>
                            <input type="text" class="form-control" id="inputbadan_hukum" name="badan_hukum" value="{{old('badan_hukum',$vendor->badan_hukum)}}" placeholder="cont. (D = Dosen) atau (K = Kaprodi) atau (W = Walmur)">
                        </div>
                        <br>
                        <div class="col-12">
                            <label for="inputstatus" class="form-label">Status Vendor</label>
                            <input type="text" class="form-control" id="inputstatus" name="status" value="{{old('status',$vendor->status)}}" placeholder="cont. (1 = aktif) atau (0 = no aktif)">
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