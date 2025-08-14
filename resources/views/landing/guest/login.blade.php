@extends('layouts.app')
@push('css')
    {{-- This css only for this page --}}
@endpush

@section('content')
    <div class="max-w-md mx-auto mt-10 bg-white p-8 rounded-xl shadow">
        <h2 class="text-2xl font-bold text-center mb-6">Login</h2>

        @if (session('error'))
            <div class="text-red-600 text-sm mb-4">{{ session('error') }}</div>
        @endif

        <form action="{{ route('login') }}" method="POST" class="space-y-4">
            @csrf

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

            <button type="submit"
                class="w-full bg-primary text-white py-2 px-4 rounded-lg hover:bg-primary/90 transition">Login</button>
        </form>

        <p class="text-sm text-center mt-4">Belum punya akun? <a href="{{ route('register') }}"
                class="text-primary hover:underline">Daftar di sini</a></p>
    </div>
@endsection

@push('js')
    {{-- This js only for this page --}}
@endpush
