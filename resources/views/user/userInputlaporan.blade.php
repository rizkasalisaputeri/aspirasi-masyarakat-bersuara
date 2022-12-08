@extends('layouts.navbarUser')

@section('content')
                    <div class="col-sm-120 col-xl-60">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Buat Laporan</h6>
                            <form action="store" method="post">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="tanggal" class="form-control" id="tanggal"
                                    placeholder="Tanggal Laporan" name="tanggal">
                                <label for="tanggal">Tanggal</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="judul_laporan" class="form-control" id="judul_laporan"
                                    placeholder="judul_laporan" name="judul_laporan">
                                <label for="judul_laporan">Judul Laporan</label>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control"
                                    id="rangkuman" style="height: 150px;" name="rangkuman"></textarea>
                                <label for="rangkuman">Rangkuman Isi Laporan</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="kategori_laporan" class="form-control" id="kategori_laporan"
                                    placeholder="kategori_laporan"  name="kategori_laporan">
                                <label for="kategori_laporan">Kategori Laporan</label>
                            </div>
                            <div class="mb-3">
                                <label for="file" class="form-label">Upload Laporan</label>
                                <input class="form-control" type="file" id="file" name="file">
                            </div>
                            <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
@endsection
