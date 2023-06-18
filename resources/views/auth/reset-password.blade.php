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

      <h1 class="text-5xl font-semibold">Reset Password</h1>
      <div class="w-96">

        <form method="POST" action="{{ route('resetPassword.store') }}">
          @csrf
          <div class="row mb-3">
            <input type="hidden" name="email" value="{{ $email }}">
            <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>
            <div class="col-md-6">
              <input id="password" type="password" placeholder="Your Password"
                class="w-full border border-black rounded-lg p-2 form-control @error('password') is-invalid @enderror"
                name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>

              @error('password')
              <span class="invalid-feedback text-base text-red-700 !font-normal" role="alert">
                {{ $message }}
              </span>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label for="new_password" class="col-md-4 col-form-label text-md-end">New Password</label>
            <div class="col-md-6">
              <input id="new_password" type="password" placeholder="Your New Password"
                class="w-full border border-black rounded-lg p-2 form-control @error('new_password') is-invalid @enderror"
                name="new_password" value="{{ old('new_password') }}" required autocomplete="new_password" autofocus>

              @error('new_password')
              <span class="invalid-feedback text-base text-red-700 !font-normal" role="alert">
                {{ $message }}
              </span>
              @enderror
            </div>
          </div>

          <div class="row mb-0">
            <div class="col-md-8 offset-md-4">
              <button type="submit"
                class="btn btn-primary w-full px-4 py-2 bg-black hover:bg-gray-900 rounded-md text-white">
                Reset Password
              </button>
            </div>
            <p class="text-sm pt-1">
              <a href="{{ route('login') }}" class=" text-teal-700">Kembali</a>
            </p>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection