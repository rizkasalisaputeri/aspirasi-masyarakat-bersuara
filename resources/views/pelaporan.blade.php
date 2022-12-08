@extends('layouts.navbarWeb')

@section('content')
</div>
</div>
</div>
</div>
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
<div class="row py-5">
    <div class="col-12 pt-lg-5 mt-lg-5 text-center">
        <h1 class="display-4 text-white animated zoomIn">Pelaporan</h1>
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


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Pelaporan</h5>
                        <h1 class="mb-0">Laporan Proposal</h1>
                    </div>
                    <p class="mb-4">Untuk Proposal, Seseorang bisa mendaftarkan diri baik secara individu
                        maupun kelompok untuk mengirimkan suatu proposal baik dalam
                        bidang transportasi, lingkungan hidup, urbanisme, hak sosial, kesehatan, edukasi,
                        maupun kebudayaan.</p>
                    <div class="row g-0 mb-3">
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>

            <div class="row g-5 mt-3">
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h1 class="mb-0">Laporan Anggaran</h1>
                    </div>
                    <p class="mb-4">Mekanisme input partisipasi warga yang
                        mempunyai pengaruh langsung pada keputusan anggaran. Keuntungan penggunaan
                        input warga dalam operasional kota dapat membantu pemerintah dalam menjalankan
                        tanggungjawabnya untuk memberikan arahan kebijakan jangka panjang. Dalam fitur
                        ini pengguna dapat melihat rencana anggaran ataupun dana yang terpakai maka dapat
                        diketahui transparansi dana keluar masuk oleh daerah kepada rakyat.</p>
                    <div class="row g-0 mb-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

@endsection
