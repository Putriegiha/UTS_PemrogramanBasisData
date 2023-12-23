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
                    <form action="{{route('user.store')}}" method="POST">
                        @csrf
                        <div class="col-12">
                            <label for="inputusername" class="form-label">Username</label>
                            <input type="text" class="form-control" id="inputUsername" name="username" placeholder="cont. putri_eha">
                        </div>
                        <br>
                        <div class="col-12">
                            <label for="inputpassword" class="form-label">Password</label>
                            <input type="text" class="form-control" id="inputPassword" name="password" placeholder="cont. sbagwydgwudwbdwjbu">
                        </div>
                        <br>
                        <div class="col-12">
                            <label for="inputstatus" class="form-label">Status</label>
                            <input type="text" class="form-control" id="inputStatus" name="status" placeholder="cont. (1 = aktif) atau (0 = no aktif)">
                        </div>
                        <br>
                        <div class="col-12">
                            <label for="inputidrole" class="form-label">ID Role</label>
                            <input type="text" class="form-control" id="inputidrole" name="idrole" placeholder="cont. (1 = Admin) atau (2 = User) atau (3 = Kasir)">
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
        var inputUsername = document.querySelector('input[name="username"]');
        var inputPassword = document.querySelector('input[name="password"]');
        var inputStatus = document.querySelector('input[name="status"]');

        resetbutton.addEventListener('click',function(){
        inputUsername.value = '';
        inputPassword.value = '';
        inputStatus.value = '';
        });
    });
</script>
@endsection