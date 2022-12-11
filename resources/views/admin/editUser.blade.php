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
                                <a href="createUser" class="btn btn-primary">Tambah User</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-start align-middle table-bordered table-hover mb-0">
                                    <thead>
                                        <tr class="text-dark">
                                            <th scope="col">ID_User</th>
                                            <th scope="col">Nama Depan</th>
                                            <th scope="col">Nama Belakang</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Password</th>
                                            <th scope="col">Tipe User</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->nama_depan}}</td>
                                                <td>{{$user->nama_belakang}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->alamat}}</td>
                                                <td>{{$user->password}}</td>
                                                <td>{{$user->utype}}</td>
                                                <td><button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusUser{{$user->id}}"><i class="bi bi-trash"></i></button></td>

                                                <!-- Modal -->
                                                <form action="/hapusUser" method="POST">
                                                    @csrf
                                                    <input type="hidden" value="{{ $user->id }}" name="idUser">
                                                <div class="modal fade" id="hapusUser{{$user->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
