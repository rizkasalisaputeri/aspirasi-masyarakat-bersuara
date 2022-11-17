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
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Judul Laporan</th>
                                            <th scope="col">Isi Laporan</th>
                                            <th scope="col">Asal Instansi</th>
                                            <th scope="col">file laporan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dtlaporan as $laporan)
                                            <tr>
                                                <td>{{$laporan->id}}</td>
                                                <td>{{$laporan->judul_laporan}}</td>
                                                <td>{{$laporan->isi_laporan}}</td>
                                                <td>{{$laporan->asal_instansi}}</td>
                                                <td>{{$laporan->file_laporan}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    @endsection
