@extends('layouts.appAdmin')

@section('content')

<div class="pagetitle">
  <h1>Data Roles</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">Role Tables</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Role Tables</h5>
          <p>Silahkan input data sesuai</p>
          
          <!-- Table with stripped rows -->
          <form action="{{route('role.store')}}" method="POST">
            @csrf
            <div class="col-12">
              <label for="inputNanme4" class="form-label">Nama Role</label>
              <input type="text" class="form-control" id="inputNanme4" name="nama_role">
            </div>
            <br>
            <div class="col-12">
              <label for="inputNanme4" class="form-label">Status</label>
              <input type="text" class="form-control" id="inputNanme4" name="status">
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
    var inputnamaRole = document.querySelector('input[name="nama_role"]');

    resetbutton.addEventListener('click',function(){
    inputnamaRole.value = '';
    });
  });
</script>
@endsection