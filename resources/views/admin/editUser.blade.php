@extends('layouts.navbarAdm')

@section('content')
                    <div class="container-fluid pt-4 px-4">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Data User</h6>
                                <a href="createUser" class="btn btn-primary">Tambah User</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-start align-middle table-bordered table-hover mb-0">
                                    <thead>
                                        <tr class="text-dark">
                                            <th scope="col">id user</th>
                                            <th scope="col">Asal Instansi</th>
                                            <th scope="col">Nama Depan</th>
                                            <th scope="col">Nama Belakang</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Password</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($crUser as $crU)
                                            <tr>
                                                <td>{{$crU->id}}</td>
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
