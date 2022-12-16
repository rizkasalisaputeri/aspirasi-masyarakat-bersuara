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
                                            <th scope="col">Lampiran Pelaporan</th>
                                            <th scope="col">Status</th>
                                            <th colspan="2" scope="col">Beri Tanggapan</th>
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
                                                <td align="center">
                                                    <a href="storage/{{$laporan->lampiran_user}}"><span style="color:blue" type="button">Download</span></a>
                                                </td>
                                                <td>
                                                    @if($laporan->status == 1)
                                                    <span class="btn btn-danger">Belum Diproses</span>
                                                    @elseif($laporan->status == 2)
                                                    <span class="btn btn-warning">Diproses</span>
                                                    @else
                                                    <a href="{{ asset('storage/'.$laporan->lampiran_adm) }}"><span class="btn btn-success" type="button">Selesai</span>
                                                    @endif
                                                </td>
                                                @if ($laporan->status == 3)
                                                <td align='justify'>{{$laporan->tanggapan}}</td>
                                                <td align='center'><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#beriTanggapan{{$laporan->id}}"><i class="bi bi-reply"></i></button></td>
                                                <form action="/beriTanggapan" method="POST">
                                                    @csrf
                                                    <input type="hidden" value="{{ $laporan->id }}" name="idlaporan">
                                                <div class="modal fade" id="beriTanggapan{{$laporan->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Beri Tanggapan</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row mt-3">
                                                                    <div class="col-sm-4"><strong>Tanggapan</strong></div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" name="tanggapan" class="form-control col-sm-12" value="{{ $laporan->tanggapan }}" >
                                                                    </div>
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                </form>
                                                @endif
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row g-0 mb-3">
                        </div>
                    </div>

                    @endsection
