@extends('layouts.app')
@push('css')
    {{-- This css only for this page --}}
    <link rel="stylesheet" href="{{ asset('extensions/lightbox2/css/lightbox.min.css') }}">
@endpush

@section('content')
    @include('template.navbar')

    <section class="bg-gradient-to-r from-purple-700 via-pink-600 to-fuchsia-500 text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Dokumentasi {{ $bidang->name }}</h1>
            <p class="text-lg md:text-xl max-w-2xl mx-auto">
                Setiap momen berharga tercipta dari kerja sama dan semangat kebersamaan.
                Inilah rangkaian dokumentasi kegiatan {{ $bidang->name }} PMR Wira SMKN 2 Sukabumi,
                yang menjadi saksi perjuangan, prestasi, dan kebersamaan para anggotanya.
            </p>
        </div>
    </section>

    <div class="container mx-auto px-6">
        <section class="container mx-auto px-6 py-16">
            <a href="{{ route('bidang.show', $bidang->slug) }}"
                class="inline-flex items-center gap-x-2 text-lg text-red-600 font-semibold hover:text-red-700 transition mb-6">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
                </svg>
                Kembali
            </a>
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                @forelse ($bidang->attachments as $item)
                    <a href="{{ asset('storage/' . $item->storage_path) }}" data-lightbox="image-{{ $item->id }}">
                        <img class="w-full size-40 object-cover" src="{{ asset('storage/' . $item->storage_path) }}">
                    </a>
                @empty
                    <p class="text-center col-span-4">Tidak ada dokumentasi yang tersedia.</p>
                @endforelse
            </div>
        </section>
    </div>

    @include('template.footer')
@endsection

@push('js')
    {{-- This js only for this page --}}
    <script src="{{ asset('extensions/lightbox2/js/lightbox-plus-jquery.min.js') }}"></script>
    <script src="{{ asset('extensions/lightbox2/js/lightbox.min.js') }}"></script>
@endpush
