@extends('layouts.navbarUser')

@section('content')
                    <div class="container-fluid pt-4 px-4">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Laporan Saya</h6>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-start align-middle table-bordered table-hover mb-0">
                                    <thead>
                                        <tr class="text-dark">
                                            <th scope="col">Date</th>
                                            <th scope="col">Jenis Laporan</th>
                                            <th scope="col">Judul Laporan</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($laporans as $laporan)
                                            <tr>
                                                <td>{{$laporan->id}}</td>
                                                <td>{{$crU->asal_instansi}}</td>
                                                <td>{{$crU->nama_depan}}</td>
                                                <td>{{$crU->nama_belakang}}</td>
                                                <td>{{$crU->alamat}}</td>
                                                <td>{{$crU->email}}</td>
                                                <td>{{$crU->password}}</td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    @endsection
