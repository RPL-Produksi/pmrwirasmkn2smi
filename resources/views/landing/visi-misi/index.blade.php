@extends('layouts.app')
@push('css')
    {{-- This css only for this page --}}
@endpush

@section('content')
    @include('template.navbar')

    <section id="visimisi" class="bg-[#f0f4f8] py-16">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    Visi & Misi <span class="text-red-600">Ketua Umum</span> <span class="text-yellow-500">PMR Wira</span>
                </h2>
                <p class="text-md md:text-lg max-w-3xl mx-auto text-gray-700 leading-relaxed">
                    Dipimpin dengan semangat dan dedikasi, berikut adalah visi dan misi yang diusung oleh Ketua Umum PMR
                    Wira SMK Negeri 2 Sukabumi saat ini.
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-xl p-8 md:p-12 max-w-3xl mx-auto text-center">
                <div
                    class="w-44 h-44 md:w-48 md:h-48 rounded-full overflow-hidden border-4 border-yellow-400 shadow-md mx-auto mb-6">
                    <img src="{{ asset('storage/' . $vm->image) }}" alt="Foto Ketua Umum PMR Wira"
                        class="w-full h-full object-cover">
                </div>
                <h3 class="text-2xl md:text-3xl font-bold text-red-600 mb-1">{{ $vm->nama_ketua }}</h3>
                <p class="text-gray-600 italic mb-8 text-sm md:text-base">Ketua Umum PMR Wira SMK Negeri 2 Sukabumi Periode
                    {{ $vm->periode }}</p>

                <div class="text-left">
                    <h4 class="text-xl font-semibold text-gray-800 border-b-2 border-yellow-400 inline-block mb-4">Visi</h4>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        "{{ $vm->visi }}"
                    </p>

                    <h4 class="text-xl font-semibold text-gray-800 border-b-2 border-yellow-400 inline-block mb-4">Misi</h4>
                    <ul class="list-disc pl-5 space-y-2 text-gray-700 leading-relaxed">
                        @foreach ($vm->misi as $misi)
                            <li>{{ $misi['value'] }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>


    @include('template.footer')
@endsection

@push('js')
    {{-- This js only for this page --}}
@endpush
