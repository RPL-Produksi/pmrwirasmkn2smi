@extends('layouts.app')
@push('css')
    {{-- This css only for this page --}}
@endpush

@section('content')
    @include('template.navbar')

    <section class="bg-gradient-to-r from-red-500 via-pink-500 to-purple-600 text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Bangga Berprestasi, Bersama PMR Wira</h1>
            <p class="text-lg md:text-xl max-w-2xl mx-auto">
                Kami percaya setiap langkah kecil adalah awal dari pencapaian besar.
                Mari rayakan bersama setiap kemenangan dan prestasi anggota PMR Wira SMKN 2 Sukabumi.
            </p>
        </div>
    </section>

    <section class="bg-gray-50 py-12">
        <div class="container mx-auto px-6">
            {{-- <h1 class="text-3xl font-bold text-gray-800 mb-8">Prestasi</h1> --}}

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @forelse ($prestasis as $item)
                    <div
                        class="group bg-white rounded-2xl shadow-md hover:shadow-xl transition duration-300 overflow-hidden border border-gray-100">
                        <div class="relative">
                            @if ($item->attachments->first())
                                <img src="{{ asset('storage/' . $item->attachments->first()->storage_path) }}"
                                    class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300"
                                    alt="">
                                <span
                                    class="absolute top-3 left-3 bg-gradient-to-r from-red-500 to-yellow-400 text-white text-xs font-semibold px-3 py-1 rounded-full shadow">
                                    Prestasi
                                </span>
                            @else
                                <div class="h-56 bg-gray-200 flex items-center justify-center text-gray-500">
                                    No Image
                                </div>
                            @endif
                        </div>

                        <div class="p-5">
                            <h2 class="font-bold text-xl text-gray-800 mb-2 group-hover:text-red-600 transition">
                                {{ $item->event }}
                            </h2>
                            <p class="text-sm text-gray-600 line-clamp-3">
                                {!! Str::limit(strip_tags($item->description), 150) !!}
                            </p>

                            <div class="mt-4 flex justify-between items-center">
                                <a href="{{ route('prestasi.show', $item->slug) }}"
                                    class="text-red-600 font-semibold hover:text-red-700 transition text-sm">
                                    Lihat Detail →
                                </a>
                                <span class="text-xs text-gray-400">
                                    {{ $item->created_at->format('d M Y') }}
                                </span>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full">
                        <div class="bg-gray-100 rounded-[8px] p-[30px] shadow-inner text-center">
                            <p class="text-gray-600 text-lg">Belum data prestasi.</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    @include('template.footer')
@endsection

@push('js')
    {{-- This js only for this page --}}
@endpush
