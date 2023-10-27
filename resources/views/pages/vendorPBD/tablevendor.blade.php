@extends('layouts.appAdmin')

@section('content')

<div class="pagetitle">
    <h1>Data Vendors</h1>
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
            @if(session('success'))
            <div class='alert alert-success'>{{session('success')}}</div>
            @endif
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Vendor Tables</h5>
                        <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>
                        <a href="{{route('vendor.create')}}"><button class="btn btn-primary"> + Tambah Data </button></a>
                        <a href="{{route('vendor.trash')}}"><button class="btn btn-success"> Sampah </button></a>
            
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
                                    <td> 
                                        @if($vendor->status == 1)
                                            <h6>Aktif</h6>
                                        @endif 
                                    </td>
                                    
                                    <td>
                                        <a href="{{route('vendor.edit',$vendor->idvendor)}}"> <button type="submit" class="btn btn-success"> Edit </button></a>
                                        <form action="{{route('vendor.delete',$vendor->idvendor)}}" method="POST">
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