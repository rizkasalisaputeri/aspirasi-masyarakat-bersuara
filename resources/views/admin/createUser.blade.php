@extends('layouts.navbarAdm')

@section('content')
    <section class="h-100 h-custom gradient-custom-2">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
                <form action="store" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="asal_instansi" style="color:black" class="form-label">Asal Instansi</label>
                      <input type="asal_instansi" class="form-control"id="asal_instansi">
                    </div>
                    <div class="mb-3">
                        <label for="nama_depan" style="color:black" class="form-label">Nama Depan</label>
                        <input type="nama_depan" class="form-control" id="nama_depan">
                    </div>
                    <div class="mb-3">
                        <label for="nama_belakang" style="color:black" class="form-label">Nama Belakang</label>
                        <input type="nama_belakang" class="form-control" id="nama_belakang">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" style="color:black" class=" form-label">Alamat</label>
                        <input type="alamat" class="form-control" id="alamat">
                    </div>
                    <div class="mb-3">
                        <label for="email" style="color:black" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" style="color:black" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Save">
                  </form>
            </div>
          </div>
        </div>
      </section>
@endsection
