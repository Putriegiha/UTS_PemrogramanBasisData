@extends('admin.layouts.appAdmin')

@section('content')

<div class="pagetitle">
    <h1>Data User</h1>
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
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">user Tables</h5>
                    
                    <!-- Table with stripped rows -->
                    <form action="{{route('user.update',$user->iduser)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="col-12">
                            <label for="inputusername" class="form-label">Username</label>
                            <input type="text" class="form-control" id="inputusername" name="username" value="{{old('username',$user->username)}}" placeholder="cont. putri_eha">
                        </div>
                        <br>
                        <div class="col-12">
                            <label for="inputpassword" class="form-label">Password</label>
                            <input type="text" class="form-control" id="inputpassword" name="password" value="{{old('password',$user->password)}}" placeholder="cont. sbagwydgwudwbdwjbu">
                        </div>
                        <br>
                        <div class="col-12">
                            <label for="inputstatus" class="form-label">Status</label>
                            <input type="text" class="form-control" id="inputstatus" name="status" value="{{old('status',$user->status)}}" placeholder="cont. (1 = aktif) atau (0 = no aktif)">
                        </div>
                        <br>
                        <div class="col-12">
                            <label for="inputidrole" class="form-label">ID Role</label>
                            <input type="text" class="form-control" id="inputidrole" name="idrole" value="{{old('idrole',$user->idrole)}}" placeholder="cont. (1 = Admin) atau (2 = User) atau (3 = Kasir)">
                        </div>
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