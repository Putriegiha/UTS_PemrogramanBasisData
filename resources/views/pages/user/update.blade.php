@extends('layouts.appAdmin')

@section('content')

<div class="pagetitle">
    <h1>Data User</h1>
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
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">user Tables</h5>
                    <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>
                    
                    <!-- Table with stripped rows -->
                    <form action="{{route('user.update',$user->iduser)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Username</label>
                            <input type="text" class="form-control" id="inputNanme4" name="username" value="{{old('username',$user->username)}}">
                        </div>
                        <br>
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Password</label>
                            <input type="text" class="form-control" id="inputNanme4" name="password" value="{{old('password',$user->password)}}">
                        </div>
                        <br>
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Status</label>
                            <input type="text" class="form-control" id="inputNanme4" name="status" value="{{old('status',$user->status)}}">
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