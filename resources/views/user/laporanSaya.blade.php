@extends('layouts.navbarUser')

@section('content')
                    <div class="container-fluid pt-4 px-4">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Laporan Saya</h6>
                               <a> href="createUser" class="btn btn-primary">Tambah User</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-start align-middle table-bordered table-hover mb-0">
                                    <thead>
                                        <tr class="text-dark">
                                            <th scope="col">ID_Laporan</th>
                                            <th scope="col">Tanggal Laporan</th>
                                            <th scope="col">Judul Laporan</th>
                                            <th scope="col">Isi Rangkuman</th>
                                            <th scope="col">Kategori Laporan</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dtlaporan as $laporan)
                                            <tr>
                                                <td>{{$laporan->id}}</td>
                                                <td>{{$laporan->tanggal}}</td>
                                                <td>{{$laporan->judul_laporan}}</td>
                                                <td>{{$laporan->rangkuman}}</td>
                                                <td>{{$laporan->kategori_laporan}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    @endsection
