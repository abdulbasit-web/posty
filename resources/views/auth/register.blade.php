@extends('layouts.app')

@section('content')
  <div class="flex justify-center">
    <div class="bg-white p-6 w-4/12 rounded-lg">
      <h1 class="text-center text-3xl mb-6">Register here</h1>
      <form action="{{ route('register') }}" method="POST" autocomplete="on">
        @csrf

        <div class="mb-4">
          <label for="name" class="sr-only">Name</label>
          <input type="text" name="name" id="name" placeholder="Your Name"
            class="bg-gray-100 w-full border-2 rounded-lg p-4  focus:outline-none focus:ring focus:border-blue-300 @error('name') border-red-500 @enderror"
            value="{{ old('name') }}">

          @error('name')
            <small class="text-red-500 text-sm">{{ $message }}</small>
          @enderror
        </div>

        <div class="mb-4">
          <label for="username" class="sr-only">Username</label>
          <input type="text" name="username" id="username" placeholder="Your Username"
            class="bg-gray-100 w-full border-2 rounded-lg p-4  focus:outline-none focus:ring focus:border-blue-300 @error('username') border-red-500 @enderror"
            value="{{ old('username') }}">

          @error('username')
            <small class="text-red-500 text-sm">{{ $message }}</small>
          @enderror
        </div>

        <div class="mb-4">
          <label for="email" class="sr-only">Email</label>
          <input type="email" name="email" id="email" placeholder="Your email"
            class="bg-gray-100 w-full border rounded-lg p-4 focus:outline-none focus:ring focus:border-blue-300 @error('email') border-red-500 @enderror"
            value=" {{ old('email') }}">

          @error('email')
            <small class="text-red-500 text-sm">{{ $message }}</small>
          @enderror
        </div>

        <div class="mb-4">
          <label for="password" class="sr-only">Password</label>
          <input type="password" name="password" id="password" placeholder="Choose a password"
            class="bg-gray-100 w-full border rounded-lg p-4 focus:outline-none focus:ring focus:border-blue-300 @error('password') border-red-500 @enderror">

          @error('password')
            <small class="text-red-500 text-sm">{{ $message }}</small>
          @enderror
        </div>

        <div class="mb-4">
          <label for="password_confirmation" class="sr-only">Password again</label>
          <input type="password" name="password_confirmation" id="password_confirmation"
            placeholder="Repeat your password"
            class="bg-gray-100 w-full border border-gray-200 rounded-lg p-4 focus:outline-none focus:ring focus:border-blue-300">
        </div>

        <div>
          <button type="submit" class="bg-blue-500 w-full font-medium px-4 py-3 rounded text-white">Register</button>
        </div>

      </form>
    </div>
  </div>
@endsection
