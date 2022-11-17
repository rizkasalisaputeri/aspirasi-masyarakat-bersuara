@extends('layouts.navbarAdm')

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
                                            <th scope="col">ID_Laporan</th>
                                            <th scope="col">User_id</th>
                                            <th scope="col">Kategori_id</th>
                                            <th scope="col">Jenis_id</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($laporans as $laporan)
                                            <tr>
                                                <td>{{$laporan->id}}</td>
                                                <td>{{$laporan->User_id}}</td>
                                                <td>{{$laporan->Kategori_id}}</td>
                                                <td>{{$laporan->Jenis_id}}</td>
                                                <td>{{$laporan->Status}}</td>

                                            </tr>
                                        @endforeach --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection
