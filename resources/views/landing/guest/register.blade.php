@extends('layouts.app')
@push('css')
    {{-- This css only for this page --}}
@endpush

@section('content')
    <div class="max-w-md mx-auto mt-10 bg-white p-8 rounded-xl shadow">
        <h2 class="text-2xl font-bold text-center mb-6">Register</h2>

        <form action="{{ route('register') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" name="name" id="name"
                    class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary/50"
                    required>
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email"
                    class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary/50"
                    required>
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password"
                    class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary/50"
                    required>
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi
                    Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary/50"
                    required>
            </div>

            <button type="submit"
                class="w-full bg-primary text-white py-2 px-4 rounded-lg hover:bg-primary/90 transition">Register</button>
        </form>

        <p class="text-sm text-center mt-4">Sudah punya akun? <a href="{{ route('login') }}"
                class="text-primary hover:underline">Login di sini</a></p>
    </div>
@endsection

@push('js')
    {{-- This js only for this page --}}
@endpush
