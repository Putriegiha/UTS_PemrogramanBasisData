@extends('admin.layouts.appAdmin')

@section('content')

<div class="pagetitle">
    <h1>Data user</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
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
                        <a href="{{route('user.create')}}"><button class="btn btn-primary"> + Tambah </button></a>
                        <a href="{{route('user.trash')}}"><button class="btn btn-success"> Sampah </button></a>
                        
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">ID User</th>
                                    <th scope="col">ID Role</th>
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
                                <td>{{$user->idrole}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->password}}</td>
                                <td>
                                    @if($user->STATUS == 1)
                                        <h6>Aktif</h6>
                                    @endif 
                                </td>
                                
                                <td>
                                <a href="{{route('user.edit',$user->iduser)}}"> <button type="submit" class="btn btn-success"><i class="bi bi-pencil-square"></i></button></a>
                                <form action="{{route('user.delete',$user->iduser)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit" onclick= "return confirm('Apakah Anda yakin menghapus data ?')"><i class="bi bi-trash3-fill"></i></button>
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