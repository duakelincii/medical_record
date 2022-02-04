@extends('auth.log-master')

@section('konten')
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="card-body">

                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-2">Halaman Lupa Password</h1>
                                    <p class="mb-4">Silahkan Masukan Email Anda Untuk Mereset Password Anda </p>
                                </div>
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                     </div>
                                    @endif
                                    <div class="form-group">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    </div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                                </form>
                                <hr>
                                <a href="{{route('login')}}" class="btn btn-warning btn-user btn-block">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
