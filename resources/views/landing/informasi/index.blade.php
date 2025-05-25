@extends('layouts.app')
@push('css')
    {{-- This css only for this page --}}
@endpush

@section('content')
    @include('template.navbar')

    <section class="bg-gradient-to-r from-red-600 to-yellow-500 text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Pusat Informasi</h1>
            <p class="text-lg md:text-xl max-w-2xl mx-auto">
                Temukan semua informasi penting terkait PMR Wira SMK Negeri 2 Sukabumi di sini. Mulai dari kontak, cara
                bergabung, hingga pengumuman terbaru.
            </p>
        </div>
    </section>

    {{-- Konten Utama Halaman Informasi --}}
    <div class="py-12 md:py-20 bg-gray-50">
        <div class="container mx-auto px-6">

            @include('landing.informasi.section.kontak')

            @include('landing.informasi.section.bergabung')

            @include('landing.informasi.section.pengumuman')

        </div>
    </div>

    @include('template.footer')
@endsection

@push('js')
    {{-- This js only for this page --}}
@endpush
