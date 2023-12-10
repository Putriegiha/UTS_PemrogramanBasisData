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
      @if(session('success'))
      <div class='alert alert-success'>{{session('success')}}</div>
      @endif
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Role Tables</h5>
            <p>ini adalah tampilan utamamu</p>
            <a href="{{route('role.create')}}"><button class="btn btn-primary"> + Tambah </button></a>
            <a href="{{route('role.trash')}}"><button class="btn btn-success"> Sampah </button></a>
            
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
                    @if($role->STATUS == 1)
                    <h6>Aktif</h6>
                    @endif 
                  </td>
                  
                  <td>
                    <a href="{{route('role.edit',$role->idrole)}}"> <button type="submit" class="btn btn-success">Edit</button></a>
                    <form action="{{route('role.delete',$role->idrole)}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit" onclick= "return confirm('Apakah Anda yakin menghapus data ?')">Delete</button>
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