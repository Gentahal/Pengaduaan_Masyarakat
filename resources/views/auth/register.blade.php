@extends('layouts.user')
@section('css')
<style>
    body {
        background: #1d7a4a;
    }

    .btn-purple {
        background: #1d7a4a;
        width: 100%;
        color: #fff;
    }

</style>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <h2 class="text-center text-white mb-0 mt-5">Lapor</h2>
            <P class="text-center text-white mb-5">Pusat Lapor</P>
            <div class="card mt-5">
                <div class="card-body">
                    <h2 class="text-center mb-5">FORM DAFTAR</h2>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="number" name="nik" placeholder="NIK" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Nama Lengkap" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="username" placeholder="Username" class="form-control">
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group ">
                                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confrim Password" required autocomplete="new-password">
                        </div>
                        <div class="form-group">
                            <input type="number" name="telepone" placeholder="No. Telp" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-purple">{{ __('Register') }}</button>
                    </form>
                </div>
            </div>
            {{-- @if (Session::has('pesan')) --}}
            {{-- <div class="alert alert-danger mt-2"> --}}
                {{-- {{ Session::get('pesan') }} --}}
            {{-- </div> --}}
            {{-- @endif --}}
            <a href="/" class="btn btn-warning text-white mt-3" style="width: 100%">Kembali ke
                Halaman Utama</a>
        </div>
    </div>
</div>
@endsection
