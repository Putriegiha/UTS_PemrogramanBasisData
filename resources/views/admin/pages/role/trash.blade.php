@extends('admin.layouts.appAdmin')

@section('content')

<div class="pagetitle">
  <h1>Data Roles</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">Role Tables</li>
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
            <h5 class="card-title">Role Tables</h5>
            <a href="{{route('role.index')}}"><button class="btn btn-primary"> Data Role </button></a>
            
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">ID Role</th>
                  <th scope="col">Nama Role</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              
              <tbody>
                @foreach($roles as $role)
                <tr>
                  <th scope="row">{{$role->idrole}}</th>
                  <td>{{$role->nama_role}}</td>
                  <td>
                    @if($role->status == 0)
                    <h6>Non Aktif</h6>
                    @endif 
                  </td>
                  
                  <td>
                    <form action="{{route('role.restore',$role->idrole)}}" method="POST">
                      @csrf
                      @method('PUT')
                      <button class="btn btn-success" type="submit" onclick= "return confirm('Apakah Anda yakin mengembalikan data ?')">Restore</button>
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