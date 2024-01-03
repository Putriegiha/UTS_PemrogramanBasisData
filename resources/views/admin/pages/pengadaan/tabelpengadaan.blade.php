@extends('admin.layouts.appAdmin')

@section('content')

<div class="pagetitle">
  <h1>Table Pengadaan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">Pengadaan Tables</li>
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
            <h5 class="card-title">Tabel Pengadaan</h5>
            <a href="#"><button class="btn btn-primary"> + Tambah </button></a>
            
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">ID Pengadaan</th>
                  <th scope="col">User</th>
                  <th scope="col">Vendor</th>
                  <th scope="col">Sub Total</th>
                  <th scope="col">Total Nilai</th>
                  <th scope="col">PPN</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
            </table>
            <!-- End Table with stripped rows -->

        </div>
      </div>
    </div>
  </div>
</section>
@endsection