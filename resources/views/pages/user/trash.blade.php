@extends('layouts.appAdmin')

@section('content')

<div class="pagetitle">
    <h1>Data Users</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">User Tables</li>
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
                        <h5 class="card-title">User Tables</h5>
                        <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>
                        <a href="{{route('user.index')}}"><button class="btn btn-primary"> Data user </button></a>
                        
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                        <thead>
                            <tr>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                            <th scope="row">{{$user->iduser}}</th>
                            <td>{{$user->username}}</td>
                            <td>
                                @if($user->status == 0)
                                    <h6>Non Aktif</h6>
                                @endif 
                            </td>

                            <td>
                                <form action="{{route('user.restore',$user->iduser)}}" method="POST">
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