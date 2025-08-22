@extends('layouts.app')
@push('css')
    {{-- This css only for this page --}}
@endpush

@section('content')
    @include('template.navbar')

    <section class="bg-gradient-to-r from-blue-500 via-purple-500 to-indigo-600 text-white py-20 relative">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Detail Prestasi
            </h1>
            <p class="text-lg md:text-xl max-w-2xl mx-auto opacity-90">
                Melihat lebih dekat pencapaian luar biasa yang telah diraih oleh anggota PMR Wira SMKN 2 Sukabumi.
            </p>
        </div>
    </section>


    <section class="bg-gray-50 py-16">
        <div class="container mx-auto px-6">
            <a href="{{ route('prestasi.index') }}"
                class="inline-flex items-center gap-x-2 text-lg text-red-600 font-semibold hover:text-red-700 transition mb-6">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
                </svg>
                Kembali
            </a>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">
                <div id="hs-carousel-{{ $prestasi->id }}" class="relative group"
                    data-hs-carousel='{"loadingClasses": "opacity-0","isAutoPlay": false}'>
                    <div class="hs-carousel relative overflow-hidden w-full h-[420px] rounded-2xl bg-gray-100 shadow-xl">
                        <div class="hs-carousel-body absolute inset-0 flex transition-transform duration-700">
                            @foreach ($prestasi->attachments as $attachment)
                                <div class="hs-carousel-slide w-full flex-shrink-0">
                                    <img src="{{ asset('storage/' . $attachment->storage_path) }}"
                                        class="w-full h-[420px] object-cover rounded-2xl transform group-hover:scale-105 transition duration-500"
                                        alt="Gambar {{ $prestasi->event }}">
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <button type="button"
                        class="hs-carousel-prev absolute top-1/2 -translate-y-1/2 left-4 z-10 inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/90 shadow hover:bg-white transition">
                        <svg class="w-5 h-5 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button type="button"
                        class="hs-carousel-next absolute top-1/2 -translate-y-1/2 right-4 z-10 inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/90 shadow hover:bg-white transition">
                        <svg class="w-5 h-5 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>

                    <div class="flex justify-center mt-3 space-x-2">
                        @foreach ($prestasi->attachments as $i => $attachment)
                            <span
                                class="hs-carousel-pagination block w-2 h-2 rounded-full bg-gray-300 hs-carousel-active:bg-blue-500"></span>
                        @endforeach
                    </div>
                </div>

                <div class="bg-white p-8 rounded-2xl border border-gray-200 shadow-md hover:shadow-xl transition">
                    <h1 class="text-3xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                        🏆 {{ $prestasi->event }}
                    </h1>
                    <div class="prose max-w-none text-gray-700 mb-6">
                        {!! $prestasi->description ?? '<p>Tidak ada deskripsi</p>' !!}
                    </div>
                    <p class="text-sm text-gray-500 flex items-center gap-1">
                        📅 Dibuat: <span class="font-medium">{{ $prestasi->created_at->format('d M Y') }}</span>
                    </p>
                </div>
            </div>
        </div>
    </section>


    @include('template.footer')
@endsection

@push('js')
    {{-- This js only for this page --}}
@endpush
