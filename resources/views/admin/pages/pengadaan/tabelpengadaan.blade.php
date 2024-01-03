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
            
              <!-- Vertically centered Modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                + Tambah
              </button>
              <div class="modal fade" id="verticalycentered" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-body">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title d-flex justify-content-between">Buat Pengadaan Baru
                          </h5>
                            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">        
                            <form action="{{route('pengadaan.create')}}" method="POST">
                              @csrf
                              <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">ID User</label>
                                  <div class="col-sm-9">
                                    <select class="form-select mb-1" aria-label="Default select example" name="users_iduser" required>
                                      <option value="" disabled selected hidden>Pilih User</option>
                                      @foreach($users as $user)
                                      <option value="{{ $user->iduser }}">{{ $user->username }}</option>
                                      @endforeach
                                    </select>
                                  </div>
                              </div>            
                              <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Vendor</label>
                                  <div class="col-sm-9">
                                    <select class="form-select mb-1" aria-label="Default select example" name="vendors_idvendor" required>
                                      <option value="" disabled selected hidden>Pilih Vendor</option>
                                      @foreach($vendors as $vendor)
                                      <option value="{{ $vendor->idvendor }}">{{ $vendor->nama_vendor }}</option>
                                      @endforeach
                                    </select>
                                  </div>
                              </div>
                              <div class="row mb-3">
                                <label for="inputPenerimaan" class="col-sm-3 col-form-label">PPN%</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="inputPenerimaan" name="ppn" required>
                                </div>
                              </div>            
                              <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Barang</label>
                                  <div class="col-sm-9">
                                    <select class="form-select mb-1" aria-label="Default select example" name="barang" required>
                                      <option value="" disabled selected hidden>Pilih Barang</option>
                                      @foreach($barangs as $barang)
                                      <option value="{{ $barang->idbarang }}">{{ $barang->nama }}</option>
                                      @endforeach
                                    </select>
                                  </div>
                              </div>
                              <div class="row mb-3">
                                <label for="inputPenerimaan" class="col-sm-3 col-form-label">Jumlah</label>
                                <div class="col-sm-9">
                                  <input type="number" class="form-control" id="inputPenerimaan" name="jumlah_pengadaan" required>
                                </div>
                              </div> 
                              {{-- <div class="row mb-3">
                                <label for="inputPenerimaan" class="col-sm-3 col-form-label">Harga Satuan</label>
                                <div class="col-sm-9">
                                  <input type="number" class="form-control" id="inputPenerimaan" name="harga_satuan" required>
                                </div>
                              </div> 
                              <div class="row mb-3">
                                <label for="inputPenerimaan" class="col-sm-3 col-form-label">Sub Total</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="inputPenerimaan" name="sub_total" required>
                                </div>
                              </div>   
                              <div class="row mb-3">
                                <label for="inputPenerimaan" class="col-sm-3 col-form-label">Total Nilai</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="inputPenerimaan" name="total_nilai" required>
                                </div>
                              </div>  --}}
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                              </div>
                            </form><!-- Add content for the second card here -->
                            </div>
                        </div>
                      </div>                    
                    </div>
                  </div>
                </div>
              </div><!-- End Vertically centered Modal-->

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">ID Pengadaan</th>
                  <th scope="col">Tanggal</th>
                  <th scope="col">User</th>
                  <th scope="col">Vendor</th>
                  <th scope="col">Barang</th>
                  <th scope="col">Harga Satuan</th>
                  <th scope="col">Jumlah</th>
                  <th scope="col">Sub Total</th>
                  <th scope="col">PPN (%)</th>
                  <th scope="col">Total</th>
                </tr>
              </thead>
              <tbody>
                @foreach($detail_pengadaans as $detail_pengadaan)
                <tr>
                  <th scope="row">{{$detail_pengadaan->idpengadaan}}</th>
                  <td>{{$detail_pengadaan->tanggal_pengadaan}}</td>
                  <td>{{$detail_pengadaan->user_pengadaan}}</td>
                  <td>{{$detail_pengadaan->nama_vendor}}</td>
                  <td>{{$detail_pengadaan->nama_barang}}</td>
                  <td>{{$detail_pengadaan->harga_satuan}}</td>
                  <td>{{$detail_pengadaan->jumlah}}</td>
                  <td>{{$detail_pengadaan->subtotal_nilai}}</td>
                  <td>{{$detail_pengadaan->ppn}}</td>
                  <td>{{$detail_pengadaan->total_nilai}}</td>
                  
                  {{-- <td>
                    <a href="{{route('role.edit',$role->idrole)}}"> <button type="submit" class="btn btn-success"><i class="bi bi-pencil-square"></i></button></a>
                    <form action="{{route('role.delete',$role->idrole)}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit" onclick= "return confirm('Apakah Anda yakin menghapus data ?')"><i class="bi bi-trash3-fill"></i></button>
                    </form>
                  </td> --}}
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