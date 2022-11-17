@extends('layouts.navbarUser')

@section('content')
                    <div class="col-sm-120 col-xl-60">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Laporan Anggaran</h6>
                            <form action="store" method="POST">
                                @csrf
                            <div class="form-floating mb-3">
                                <input type="judul" class="form-control" id="floatingInput"
                                    placeholder="judulLaporan">
                                <label for="floatingInput">Tanggal</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="judul" class="form-control" id="floatingInput"
                                    placeholder="judulLaporan">
                                <label for="floatingInput">Judul Laporan</label>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here"
                                    id="floatingTextarea" style="height: 150px;"></textarea>
                                <label for="floatingTextarea">Rangkuman Isi Laporan</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="judul" class="form-control" id="floatingInput"
                                    placeholder="asal_instansi">
                                <label for="floatingInput">Asal Instansi</label>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Upload Laporan</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
@endsection
