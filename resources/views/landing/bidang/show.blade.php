@extends('layouts.app')
@push('css')
    {{-- This css only for this page --}}
@endpush

@section('content')
    @include('template.navbar')

    <section class="bg-gradient-to-r from-sky-600 via-cyan-600 to-teal-500 text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Daftar Anggota {{ $bidang->name }}</h1>
            <p class="text-lg md:text-xl max-w-2xl mx-auto">
                Kenali lebih dekat para anggota bidang PMR Wira SMKN 2 Sukabumi.
                Mereka adalah bagian penting yang berperan dalam menjaga kekompakan,
                semangat kemanusiaan, dan membawa nama baik organisasi melalui prestasi.
            </p>
        </div>
    </section>

    <div class="container mx-auto px-6 mt-10">
        <section class="container mx-auto px-6 py-16">
            <div class="flex items-center justify-between">
                <h2 class="text-3xl font-bold text-center mb-10">Daftar Anggota {{ $bidang->name }}</h2>
                <a href="{{ route('bidang.dokumentasi', $bidang->slug) }}"
                    class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-yellow-600 text-white hover:bg-yellow-700 focus:outline-hidden focus:bg-yellow-700 disabled:opacity-50 disabled:pointer-events-none transition-all duration-300 ease-in-out"
                    target="_blank">
                    <i class="fa-regular fa-images"></i>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">

                @foreach ($bidang->anggota as $item)
                    <div class="bg-white rounded-xl shadow-md p-4 text-center">
                        <img src="{{ asset('storage/' . $item->image) }}"
                            class="w-32 h-32 object-cover rounded-full mx-auto mb-4" alt="Anggota">
                        <h3 class="text-lg font-semibold">{{ $item->name }}</h3>
                        <p class="text-sm text-gray-600">{{ $item->role }}</p>
                    </div>
                @endforeach

            </div>
        </section>
    </div>

    @include('template.footer')
@endsection

@push('js')
    {{-- This js only for this page --}}
@endpush
