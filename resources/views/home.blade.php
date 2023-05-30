@extends('layouts.nav')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')

<body>
    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">Selamat Datang di Pengaduan Masyarakat</h1>
            <p class="lead">Laporkan masalah dan keluhan Anda kepada kami.</p>
            <hr class="my-4">
            <p>Anda dapat mengajukan pengaduan tentang berbagai masalah yang Anda hadapi dalam masyarakat.</p>
            <div class="card bg-info">
                <div class="card-header">
                    <h5>{{ __('ISI LAPORAN DISINI') }}</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        </select>
                        <div class="form-group">
                            <label for="judul">Judul Laporan</label>
                            <input type="text" class="form-control" id="judul" name="judul_pengaduan" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="pengaduan" rows="5" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="lampiran">lampiran</label>
                            <input type="file" class="form-control-file" id="lampiran" name="foto">
                        </div>
                        <button type="submit" class="btn btn-warning">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection
