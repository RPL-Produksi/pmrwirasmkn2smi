@extends('layouts.app')
@push('css')
    {{-- This js only for this page --}}
@endpush

@section('content')
    @include('template.navbar')

    <section class="relative min-h-screen bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('assets/img/foto_bersama.jpg') }}');">

        <!-- overlay hitam -->
        <div class="absolute inset-0 bg-black/60 z-10"></div>

        <!-- konten utama -->
        <div class="relative z-20 flex flex-col justify-center items-center text-white min-h-screen text-center px-6">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">PMR Wira SMK Negeri 2 Sukabumi</h1>
            <p class="text-lg md:text-xl font-light max-w-2xl mx-auto mb-6">
                PMR Wira SMK Negeri 2 Sukabumi merupakan organisasi siswa yang aktif, terstruktur, dan berorientasi pada
                pengembangan karakter, kedisiplinan, serta kerja sama tim.
            </p>
            <a href="#"
                class="relative inline-block text-white font-bold text-sm uppercase px-8 py-4 rounded-[3.3px] overflow-hidden transition-all duration-300 ease-[cubic-bezier(0.694,0,0.335,1)] group bg-[oklch(57.7%_0.245_27.325)] hover:bg-[oklch(68.1%_0.162_75.834)]">
                Get Started
            </a>
        </div>
    </section>



    @include('template.footer')
@endsection

@push('js')
    {{-- This js only for this page --}}
@endpush
