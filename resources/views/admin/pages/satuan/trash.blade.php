@extends('admin.layouts.appAdmin')

@section('content')

<div class="pagetitle">
    <h1>Data Satuan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Satuan Tables</li>
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
                        <h5 class="card-title">Satuan Tables</h5>
                        <a href="{{route('satuan.index')}}"><button class="btn btn-primary"> Data Satuan </button></a>
            
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">ID Satuan</th>
                                    <th scope="col">Nama Satuan</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                @foreach($satuans as $satuan)
                                <tr>
                                    <th scope="row">{{$satuan->idsatuan}}</th>
                                    <td>{{$satuan->nama_satuan}}</td>
                                    <td>
                                        @if($satuan->status == 0)
                                        <h6>Non Aktif</h6>
                                        @endif 
                                    </td>
                                    
                                    <td>
                                        <form action="{{route('satuan.restore',$satuan->idsatuan)}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button class="btn btn-success" type="submit" onclick= "return confirm('Apakah Anda yakin mengembalikan data ?')">Pulihkan</button>
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