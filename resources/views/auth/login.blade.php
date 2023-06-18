@extends('layouts.app')

@section('content')

<div class="w-full grid grid-cols-2">
    <div class="relative h-screen col-span-1">
        <img src="{{ asset('images/bg-auth.png') }}" alt="bg-auth" class="object-cover w-full h-full bg-gray-700" />
        <h1 class="absolute text-white text-7xl font-semibold top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">WIZZER
        </h1>
    </div>
    <div class="h-screen col-span-1">
        <div class="w-full h-screen flex flex-col items-center justify-center gap-4">

            <h1 class="text-5xl font-semibold">LOGIN</h1>
            <div class="w-96">

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                        <div class="col-md-6">
                            <input id="email" type="email" placeholder="Your Email"
                                class="w-full border border-black rounded-lg p-2 form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback text-base text-red-700 !font-normal" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" placeholder="Your Password"
                                class="w-full border border-black rounded-lg p-2 form-control @error('password') is-invalid @enderror"
                                name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback text-base text-red-700 !font-normal" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <div class="w-full text-end">
                            @if (Route::has('password.request'))
                            <a class="text-xs" href="{{ route('passwordRequest') }}">
                                Forgot Password?
                            </a>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check flex items-center gap-1">
                                <input class="form-check-input w-4 h-4" type="checkbox" name="remember" id="remember" {{
                                    old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label -translate-y-[2px]" for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit"
                                class="btn btn-primary w-full px-4 py-2 bg-black hover:bg-gray-900 rounded-md text-white">
                                Login
                            </button>
                        </div>
                        <p class="text-sm pt-1">Belum punya akun?
                            <a href="{{ route('register') }}" class=" text-teal-700">Sign Up</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection