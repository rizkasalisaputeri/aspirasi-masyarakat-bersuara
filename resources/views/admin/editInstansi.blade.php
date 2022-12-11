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
                                <h6 class="mb-0">User</h6>
                                <a href="createInstansi" class="btn btn-primary">Tambah Instansi</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-start align-middle table-bordered table-hover mb-0">
                                    <thead>
                                        <tr class="text-dark">
                                            <th scope="col">ID_Instansi</th>
                                            <th scope="col">Nama Instansi</th>
                                            <th scope="col">Alamat Instansi</th>
                                            <th scope="col">Telp Instansi</th>
                                            <th colspan="2" scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($instansis as $instansi)
                                            <tr>
                                                <td>{{$instansi->id}}</td>
                                                <td>{{$instansi->nama}}</td>
                                                <td>{{$instansi->alamat}}</td>
                                                <td>{{$instansi->telp}}</td>
                                                <td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editInstansi{{$instansi->id}}"><i class="bi bi-pencil-square"></i></button></td>
                                                <td><button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusInstansi{{$instansi->id}}"><i class="bi bi-trash"></i></button></td>

                                                <!-- Modal -->
                                                <form action="/updateInstansi" method="POST">
                                                    @csrf
                                                    <input type="hidden" value="{{ $instansi->id }}" name="idInstansi">
                                                <div class="modal fade" id="editInstansi{{$instansi->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Update Instansi</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row mt-3">
                                                                    <div class="col-sm-4"><strong>Nama Instansi</strong></div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" name="nama" class="form-control col-sm-12" value="{{ $instansi->nama }}" >
                                                                    </div>
                                                                    <div class="col-sm-4"><strong>Alamat Instansi</strong></div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" name="alamat" class="form-control col-sm-12" value="{{ $instansi->alamat }}" >
                                                                    </div>
                                                                    <div class="col-sm-4"><strong>Telp Instansi</strong></div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" name="telp" class="form-control col-sm-12" value="{{ $instansi->telp }}" >
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
                                                <form action="/hapusInstansi" method="POST">
                                                    @csrf
                                                    <input type="hidden" value="{{ $instansi->id }}" name="idinstansi">
                                                <div class="modal fade" id="hapusInstansi{{$instansi->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Perhatian!</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <h1>Apakah anda yakin untuk menghapus ?</h1>
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save</button>
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
