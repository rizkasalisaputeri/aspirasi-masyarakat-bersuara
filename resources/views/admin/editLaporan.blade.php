@extends('layouts.navbarAdm')

@section('content')
                    <div class="container-fluid pt-4 px-4">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Laporan</h6>
                                <a href="createlaporan" class="btn btn-primary">Tambah Laporan</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-start align-middle table-bordered table-hover mb-0">
                                    <thead>
                                        <tr class="text-dark">
                                            <th scope="col">id_laporan</th>
                                            <th scope="col">judul_laporan</th>
                                            <th scope="col">kategori_laporan</th>
                                            <th scope="col">tgl_laporan</th>
                                            <th scope="col">file_laporan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pelaporans as $pelaporan)
                                        <tr>
                                            <td>{{$pelaporan->id}}</td>
                                            <td>{{$pelaporan->tanggal}}</td>
                                            <td>{{$pelaporan->judul_laporan}}</td>
                                            <td>{{$pelaporan->rangkuman}}</td>
                                            <td>{{$pelaporan->kategori_laporan}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection
