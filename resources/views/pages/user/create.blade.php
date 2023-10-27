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
                    <p>Input sesuai kebutuhanmu</p>
                    
                    <!-- Table with stripped rows -->
                    <form action="{{route('user.store')}}" method="POST">
                        @csrf
                        <div class="col-12">
                            <label for="inputusername" class="form-label">Username</label>
                            <input type="text" class="form-control" id="inputUsername" name="username">
                        </div>
                        <br>
                        <div class="col-12">
                            <label for="inputpassword" class="form-label">Password</label>
                            <input type="text" class="form-control" id="inputPassword" name="password">
                        </div>
                        <br>
                        <div class="col-12">
                            <label for="inputstatus" class="form-label">Status</label>
                            <input type="text" class="form-control" id="inputStatus" name="status">
                        </div>
                        <br>
                        <div class="col-12">
                            <label for="inputidrole" class="form-label">ID Role</label>
                            <input type="text" class="form-control" id="inputidrole" name="idrole">
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