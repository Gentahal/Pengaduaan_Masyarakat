@extends('layouts.nav')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="col-12">
        <div class="card top-selling overflow-auto">
            <div class="card-body pb-0">
                <h2 class="card-title">List Laporan <span>| All</span></h2>
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">Foto</th>
                            <th scope="col">Jenis</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pengaduan as $item)
                        <tr>
                            <th scope="row"><img class="col-md-3 img-fluid"
                                    src="{{ asset('/storage/images/bukti/'.$item->foto) }}" alt=""></th>
                            <td>{{ $item->judul_pengaduan }}</td>
                            <td><span class="badge bg-warning">{{ $item->status }}</span></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div><!-- End Top Selling -->
</div>

@endsection
