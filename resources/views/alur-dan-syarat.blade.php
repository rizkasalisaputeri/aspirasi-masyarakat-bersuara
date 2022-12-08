@extends('layouts.navbarWeb')

@section('content')
</div>
</div>
</div>
</div>
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
<div class="row py-5">
    <div class="col-12 pt-lg-5 mt-lg-5 text-center">
        <h1 class="display-4 text-white animated zoomIn">Alur dan Syarat</h1>
    </div>
</div>
</div>
</div>

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4>Alur Pelaporan</h4>
                            <p class="mb-0">1.	Buat dan kirim surat pengaduan online pada web Masyarakat Bersuara. </p>
                            <p class="mb-0">2.	Surat pengaduan dianalisis sesuai masalah, kemudian diberikan saran untuk diteruskan ke Badan sesuai bidang permasalahan.</p>
                            <p class="mb-0">3.	Materi dikoreksi dan redaksi hasil analisis permasalahan disempurnakan. </p>
                            <p class="mb-0">4.	Hasil analisis permasalahan disetujui. </p>
                            <p class="mb-0">5.	Nota dinas dan surat web dibuat. </p>
                            <p class="mb-0">6.	Paraf hasil analisis diberikan dan dikoreksi. Kemudian dibuatkan Salinan untuk diteruskan. </p>
                            <p class="mb-0">7.	Salinan disahkan oleh Deputi dan diteruskan ke pimpinan DPRD. </p>
                            <p class="mb-0">8.	Pimpinan DPRD menerima hasil analisis. </p>
                            <p class="mb-0">9.	PU membuat dokumentasi dan jawaban untuk pengadu. </p>
                                </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/feature.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4>Syarat Pelaporan</h4>
                            <p class="mb-0">Beberapa hal yang harus di perhatikan agar pengaduan Anda dapat diproses lebih lanjut :</p>
                            <p class="mb-0">1. Laporan  memuat identitas dan alamat pengiirm yang jelas dan lengkap</p>
                            <p class="mb-0">2. Laporan memuat maksud dan tujuan yang jelas</p>
                            <p class="mb-0">3. Substansi permasalahan yang disampaikan jelas</p>
                            <p class="mb-0">4. Masalah yang disampaikan memerlukan penyelesaian atau respon</p>
                            <p class="mb-0">5. Data pendukung disampaikan secara lengkap dan akurat</p>
                            <p class="mb-0">6. Ditambahkan dengan tanda tangan pengadu/cap jempol pengadu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->
@endsection
