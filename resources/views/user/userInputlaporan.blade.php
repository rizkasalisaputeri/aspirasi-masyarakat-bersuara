@extends('layouts.navbarUser')

@section('content')
</div>
</div>
</div>
</div>
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 0px;">
<div class="row py-5">
    <div class="col-12 pt-lg-5 mt-lg-5 text-center">
        <h1 class="display-4 text-white animated zoomIn">Buat Laporan</h1>
    </div>
</div>
</div>
</div>
                    <div class="col-sm-120 col-xl-60">
                        <div class="bg-light rounded h-100 p-4">
                            <form action="/store" method="post">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="datetime-local" class="form-control" id="tanggal"
                                    placeholder="Tanggal Laporan" name="tanggal">
                                <label for="tanggal">Tanggal</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="judul_laporan" class="form-control" id="judul_laporan"
                                    placeholder="judul_laporan" name="judul_laporan">
                                <label for="judul_laporan">Judul Laporan</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select"  name="instansi_id" aria-label="Default select example">
                                    @foreach ($instansi as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>

                                    @endforeach
                                  </select>

                                <label for="kategori_laporan">Instansi yang dituju</label>

                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control"
                                    id="rangkuman" style="height: 150px;" name="rangkuman"></textarea>
                                <label for="rangkuman">Rangkuman Isi Laporan</label>
                            </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select"  name="kategori_id" aria-label="Default select example">
                                        @foreach ($kategori as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                        @endforeach
                                    </select>

                                    <label for="kategori_laporan">Kategori Laporan</label>

                                </div>
                            <div class="mb-3">
                                <label for="file" class="form-label">Upload Laporan</label>
                                <input class="form-control" type="file" id="file" name="file">
                            </div>
                            <input type="submit" class="btn btn-primary" value="Submit">
                            </form>
                    </div>
@endsection
