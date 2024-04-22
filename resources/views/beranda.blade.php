@extends('layout')
@section('content')
    <div class="container-xxl py-5 mt-5">
        <div class="container">
            <div class="row g-4 align-items-end mb-4">
                <div class="col-lg-6 wow fadeInUp my-auto" data-wow-delay="0.3s">
                    <h1 class="mb-5">Selamat Datang di Website Portofolio Bayu</h1>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td> : Bayu Anugrah Ramadan</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td> : bayuanugrahramada8n@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>No. HP</td>
                                    <td> : 0813 9222 2761</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp my-auto" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" src="{{ asset('foto/me.jpg') }}" width="100%"
                        style="height: 600px;object-fit:cover">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s"
        style="background-color: #a01626 !important">
        <div class="container py-5">
            <center>
                <h1 class="text-white mb-3">Portofolio</h1>
            </center>
            <div class="row g-3" id="portofolio">
                @foreach ($portofolio as $row)
                    <div class="col-md-4">
                        <div class="card bg-white">
                            <div class="card-body">
                                <img src="{{ asset('foto/' . $row->foto) }}" width="100%"
                                    style="height: 300px;object-fit:cover" style="border-radius:10px">
                                </span>
                                <h5 class="mt-3">{{ $row->judul }}</h5>
                                <span class="text-dark">
                                    <i class="fa fa-tag"></i> {{ tanggal($row->tanggal) }}
                                    <p class="mt-2 text-dark">
                                        {{ strip_tags($row->deskripsiportofolio) }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
