@extends('layouts.navbarAdm')

@section('content')
<div class="col-sm-120 col-xl-60">
  <div class="bg-light rounded h-100 p-4">
      <h6 class="mb-4">Tambah Kategori</h6>
      <form action="storeKategori" method="POST">
          @csrf
      <div class="form-floating mb-3">
          <input type="nama" name='nama' class="form-control" id="floatingInput"
              placeholder="namaKategori">
          <label for="floatingInput">Nama Kategori</label>
      </div>
      <div class="form-floating mb-3">
          <input type="excerpt" name='excerpt' class="form-control" id="floatingInput"
              placeholder="excerptKategori">
          <label for="floatingInput">Excerpt</label>
      </div>
      <div class="form-floating mb-3">
          <input type="keterangan" name='keterangan' class="form-control" id="floatingInput"
              placeholder="keteranganKategori">
          <label for="floatingInput">Keterangan</label>
      </div>
      <input type="submit" class="btn btn-primary" value="Submit">
</div>
@endsection
