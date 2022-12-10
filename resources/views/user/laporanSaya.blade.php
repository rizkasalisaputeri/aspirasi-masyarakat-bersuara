@extends('layouts.navbarUser')

@section('content')
</div>
</div>
</div>
</div>
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 10px;">
<div class="row py-5">
    <div class="col-12 pt-lg-5 mt-lg-5 text-center">
        <h1 class="display-4 text-white animated zoomIn">Laporan Saya</h1>
    </div>
</div>
</div>
</div>

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->
                    <div class="container-fluid pt-4 px-4">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                               {{-- <a> href="createUser" class="btn btn-primary">Tambah User</a> --}}
                            </div>
                            <div class="table-responsive">
                                <table class="table text-start align-middle table-bordered table-hover mb-0">
                                    <thead>
                                        <tr class="text-dark">
                                            <th scope="col">ID_Laporan</th>
                                            <th scope="col">Judul Laporan</th>
                                            <th scope="col">Isi Rangkuman</th>
                                            <th scope="col">Kategori Laporan</th>
                                            <th scope="col">Instansi yang dituju</th>
                                            <th scope="col">Tanggal Pelaporan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dtlaporan as $laporan)
                                            <tr>
                                                <td>{{$laporan->id}}</td>
                                                <td>{{$laporan->judul_laporan}}</td>
                                                <td>{{$laporan->rangkuman}}</td>
                                                <td>{{$laporan->kategori_laporan->nama}}</td>
                                                <td>{{$laporan->instansi->nama}}</td>
                                                <td>{{$laporan->tanggal}}</td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    @endsection
