@extends('layouts.navbarAdm')

@section('content')
    <section class="h-100 h-custom gradient-custom-2">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
                <form action="storeInstansi" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="asal_instansi" style="color:black" class="form-label">Asal Instansi</label>
                        @error('asal_instansi')
                          <div class='invalid-feedback'>
                              {{ $message }}
                          </div>
                        @enderror
                        <input type="text" class="form-control"name="asal_instansi" @error('asal_instansi') is-invalid
                        @enderror id="asal_instansi">
                      </div>
                      <div class="mb-3">
                          <label for="nama_depan" style="color:black" class="form-label">Nama Depan</label>
                          <input type="text" class="form-control" name="nama_depan" @error('nama_depan') is-invalid
                          @enderror id="nama_depan">
                      </div>
                      <div class="mb-3">
                          <label for="nama_belakang" style="color:black" class="form-label">Nama Belakang</label>
                          @error('nama_belakang')
                          <div class='invalid-feedback'>
                              {{ $message }}
                          </div>
                        @enderror
                          <input type="text" class="form-control" name="nama_belakang" @error('nama_belakang') is-invalid
                          @enderror id="nama_belakang">
                      </div>
                      <div class="mb-3">
                          <label for="alamat" style="color:black" class=" form-label">Alamat</label>
                          @error('alamat')
                          <div class='invalid-feedback'>
                              {{ $message }}
                          </div>
                        @enderror
                          <input type="text" class="form-control" name="alamat" @error('alamat') is-invalid
                          @enderror id="alamat">
                      </div>
                      <div class="mb-3">
                          <label for="email" style="color:black" class="form-label">Email</label>
                          @error('email')
                          <div class='invalid-feedback'>
                              {{ $message }}
                          </div>
                        @enderror
                          <input type="email" class="form-control" name="email" @error('email') is-invalid
                          @enderror id="email">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" style="color:black" class="form-label">Password</label>
                        @error('password')
                          <div class='invalid-feedback'>
                              {{ $message }}
                          </div>
                        @enderror
                        <input type="password" class="form-control" name="password" @error('password') is-invalid
                        @enderror id="password">
                      </div>
                    <input type="submit" class="btn btn-primary" value="Save">
                  </form>
            </div>
          </div>
        </div>
      </section>
@endsection
