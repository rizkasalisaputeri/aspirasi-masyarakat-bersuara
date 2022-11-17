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
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>05 Mei 2022</td>
                                            <td>Laporan Proposal</td>
                                            <td>Laporan Pembangunan Bank Sampah Daerah Suterejo</td>
                                            <td>Sudah ditangani</td>
                                            <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                        </tr>
                                        <tr>
                                            <td>28 Maret 2022</td>
                                            <td>Laporan Anggaran</td>
                                            <td>Laporan Pengajuan Dana Kerusakan Bangunan Sekolah Dasar</td>
                                            <td>Sudah ditangani</td>
                                            <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                        </tr>
                                        <tr>
                                            <td>20 Februari 2021</td>
                                            <td>Laporan Anggaran</td>
                                            <td>Laporan Pengajuan Bantuan Dana untuk UMKM Terdampak Covid-19</td>
                                            <td>Sudah ditangani</td>
                                            <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                        </tr>
                                        <tr>
                                            <td>14 Januari 2021</td>
                                            <td>Laporan Proposal</td>
                                            <td>Laporan Perencanaan Pembangunan Toilet Umum</td>
                                            <td>Sudah ditangani</td>
                                            <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                        </tr>
                                        <tr>
                                            <td>24 Juni 2020</td>
                                            <td>Laporan Proposal</td>
                                            <td>Laporan Pembangunan Jembatan</td>
                                            <td>Sudah ditangani</td>
                                            <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    @endsection
