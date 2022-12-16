@extends('layouts.navbarUser')

@section('content')
</div>
<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="w-100" src="img/carousel-1.jpg" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">Selamat Datang!</h1>
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">Anda telah berhasil login silahkan buat laporan</h5>
                    <a href="buatLaporan" class="btn btn-outline-light py-md-3 px-md-5 animated slideInCenter">Buat Laporan</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Navbar & Carousel End -->
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Laporan</p>
                                <h6 class="mb-0">{{ $totalPelaporan }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Laporan Belum Diproses</p>
                                <h6 class="mb-0">1{{ $belum }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Laporan Diproses</p>
                                <h6 class="mb-0">{{ $diproses }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Laporan Selesai</p>
                                <h6 class="mb-0">{{ $selesai }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Laporan Saya</h6>
                        <a href="/laporanSaya">Show All</a>
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
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dtlaporan as $laporan)
                                    <tr>
                                        <td>{{$laporan->id}}</td>
                                        <td>{{$laporan->judul_laporan}}</td>
                                        <td>{{$laporan->rangkuman}}</td>
                                        <td>{{$laporan->kategori_laporan->nama}}</td>
                                        <td>{{$laporan->instansi->nama}}</td>
                                        <td>{{$laporan->tanggal}}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->
@endsection
