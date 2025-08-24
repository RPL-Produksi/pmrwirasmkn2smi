@extends('layouts.app')
@push('css')
    {{-- This css only for this page --}}
@endpush

@section('content')
    @include('template.navbar')

    {{-- Hero Section --}}
    <section class="bg-gradient-to-r from-emerald-600 via-green-700 to-lime-600 text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Bidang PMR Wira SMKN 2 Sukabumi</h1>
            <p class="text-lg md:text-xl max-w-2xl mx-auto">
                Setiap bidang di PMR Wira memiliki peran penting dalam membentuk keterampilan, kekompakan,
                dan semangat kemanusiaan. Inilah mereka yang selalu siap beraksi dan berprestasi!
            </p>
        </div>
    </section>

    <section class="bg-gray-50 py-12">
        <div class="container mx-auto px-6">

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach ($bidangs as $item)
                    <a href="{{ route('bidang.show', $item->slug) }}">
                        <div
                            class="group bg-white rounded-2xl shadow-md hover:shadow-xl transition duration-300 overflow-hidden border border-gray-100">
                            <div class="relative">
                                <img src="{{ 'storage/' . $item->cover }}"
                                    class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300">
                                <span
                                    class="absolute top-3 left-3 bg-gradient-to-r from-red-600 to-orange-500 text-white text-xs font-semibold px-3 py-1 rounded-full shadow">
                                    {{ $item->name }}
                                </span>
                            </div>
                            <div class="p-5">
                                <h2 class="font-bold text-xl text-gray-800 mb-2">{{ $item->name }}</h2>
                                <p class="text-sm text-gray-600 line-clamp-3">
                                    {{ $item->description }}
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    @include('template.footer')
@endsection

@push('js')
    {{-- This js only for this page --}}
@endpush
