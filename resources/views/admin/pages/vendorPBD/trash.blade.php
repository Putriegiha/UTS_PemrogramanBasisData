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
            @if(session('success'))
            <div class='alert alert-success'>{{session('success')}}</div>
            @endif
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Vendor Tables</h5>
                        <a href="{{route('vendor.index')}}"><button class="btn btn-primary"> Data Vendor </button></a>
                
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                <th scope="col">ID Vendor</th>
                                <th scope="col">Nama Vendor</th>
                                <th scope="col">Badan Hukum</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                            @foreach($vendors as $vendor)
                                <tr>
                                <th scope="row">{{$vendor->idvendor}}</th>
                                <td>{{$vendor->nama_vendor}}</td>
                                <td>{{$vendor->badan_hukum}}</td>
                                <td>
                                    @if($vendor->STATUS == 0)
                                    <h6>Non Aktif</h6>
                                    @endif 
                                </td>

                                <td>
                                    <form action="{{route('vendor.restore',$vendor->idvendor)}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button class="btn btn-success" type="submit" onclick= "return confirm('Apakah Anda yakin mengembalikan data ?')"><i class="bi bi-arrow-clockwise"></i></button>
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