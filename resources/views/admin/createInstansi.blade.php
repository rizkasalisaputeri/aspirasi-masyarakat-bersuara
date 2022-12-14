@extends('layouts.navbarAdm')

@section('content')
<div class="col-sm-120 col-xl-60">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Tambah Instansi</h6>
                            <form action="storeInstansi" method="POST">
                                @csrf
                            <div class="form-flating mb-3">
                                <input type="nama" name='nama' class="form-control" id="floatingInput"
                                    placeholder="namaInstansi">
                                <label for="floatingInput">Nama Instansi</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="alamat" name='alamat' class="form-control" id="floatingInput"
                                    placeholder="alamatInstansi">
                                <label for="floatingInput">Alamat Instansi</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="telp" name='telp' class="form-control" id="floatingInput"
                                    placeholder="telpInstansi">
                                <label for="floatingInput">Telp Instansi</label>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
@endsection
