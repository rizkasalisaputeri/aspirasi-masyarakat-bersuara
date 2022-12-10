@extends('layouts.navbarAdm')
@if (session()->has('success') )
<script>
  alert('{{ session('success') }}')
  </script>
@endif
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
                                            <th scope="col">ID_Laporan</th>
                                            <th scope="col">Judul Laporan</th>
                                            <th scope="col">Isi Rangkuman</th>
                                            <th scope="col">Kategori Laporan</th>
                                            <th scope="col">Instansi yang dituju</th>
                                            <th scope="col">Tanggal Pelaporan</th>
                                            <th colspan="2" scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pelaporans as $laporan)
                                            <tr>
                                                <td>{{$laporan->id}}</td>
                                                <td>{{$laporan->judul_laporan}}</td>
                                                <td>{{$laporan->rangkuman}}</td>
                                                <td>{{$laporan->kategori_laporan->nama}}</td>
                                                <td>{{$laporan->instansi->nama}}</td>
                                                <td>{{$laporan->tanggal}}</td>
                                                <td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editLaporan{{$laporan->id}}"><i class="bi bi-pencil-square"></i></button></td>
                                                <td><button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusLaporan{{$laporan->id}}"><i class="bi bi-trash"></i></button></td>

                                                <!-- Modal -->
                                                <form action="/update-laporan" method="POST">
                                                    @csrf
                                                    <input type="hidden" value="{{ $laporan->id }}" name="idlaporan">
                                                <div class="modal fade" id="editLaporan{{$laporan->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row mt-3">
                                                                    <div class="col-sm-4"><strong>Judul laporan</strong></div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" name="judul_laporan" class="form-control col-sm-12" value="{{ $laporan->judul_laporan }}" >
                                                                    </div>
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Understood</button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                </form>
                                                <form action="/hapus-laporan" method="POST">
                                                    @csrf
                                                    <input type="hidden" value="{{ $laporan->id }}" name="idlaporan">
                                                <div class="modal fade" id="hapusLaporan{{$laporan->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <h1>Apakah anda yakin untuk menghapus ?</h1>
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Yes</button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </form>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection
