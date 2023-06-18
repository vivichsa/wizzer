@extends('layouts.app')

@section('content')

<div class="w-full grid grid-cols-2">
    <div class="relative h-screen col-span-1">
        <img
        src="{{ asset('images/bg-auth.png') }}"
        alt="bg-auth"
        class="object-cover w-full h-full bg-gray-700"
        />
        <h1 class="absolute text-white text-7xl font-semibold top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">WIZZER</h1>
    </div>
    <div class="h-screen col-span-1">
    <div class="w-full h-screen flex flex-col items-center justify-center gap-4">

                    <h1 class="text-5xl font-semibold">REGISTER</h1>
                    <div class="w-96">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="Your Name" class="w-full border border-black rounded-lg p-2 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback text-base text-red-700 !font-normal" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Your Email" class="w-full border border-black rounded-lg p-2  form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback text-base text-red-700 !font-normal" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Your Password" class="w-full border border-black rounded-lg p-2 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback text-base text-red-700 !font-normal" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" placeholder="Confirm Your Password" class="w-full border border-black rounded-lg p-2 form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary w-full px-4 py-2 bg-black hover:bg-gray-900 rounded-md text-white">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
    </div>
  </div>
@endsection

