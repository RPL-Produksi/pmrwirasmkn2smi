<section id="struktur">
    <div class="container mx-auto px-6 py-12">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Struktur Organisasi <span class="text-red-600">PMR</span>
                <span class="text-yellow-500">Wira</span> <br>SMK Negeri 2 Sukabumi
            </h2>
            <p class="text-md md:text-lg max-w-3xl mx-auto">
                Berikut adalah susunan kepengurusan PMR Wira SMK Negeri 2 Sukabumi.
            </p>
        </div>

        <div class="mb-12 text-center">
            <h3
                class="text-[1.75rem] font-bold text-gray-800 mb-[25px] pb-[10px] border-b-2 border-[#FFC107] inline-block">
                Pengurus Inti</h3>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-4xl mx-auto mb-16">
            @foreach ($inti as $item)
                <div class="bg-white rounded-[8px] p-[20px] shadow-[0_4px_12px_rgba(0,0,0,0.08)] mb-[20px] text-center">
                    <h4 class="text-[#DC2626] text-[1.1rem] font-semibold mb-2">{{ $item->name }}</h4>
                    <p class="text-[1rem] text-gray-700">{{ $item->holder_name }}</p>
                </div>
            @endforeach
        </div>

        <div class="mb-12 text-center">
            <h3
                class="text-[1.75rem] font-bold text-gray-800 mb-[25px] pb-[10px] border-b-2 border-[#FFC107] inline-block">
                Pengurus Unit</h3>
        </div>
        <div class="max-w-5xl mx-auto">
            @foreach ($sortedUnits as $unitName => $unitMembers)
                <div class="mb-8">
                    <h4 class="text-xl font-semibold text-gray-700 mb-4 text-center md:text-left">{{ $unitName }}
                    </h4>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        @foreach ($unitMembers as $member)
                            <div
                                class="bg-white rounded-[8px] p-[20px] shadow-[0_4px_12px_rgba(0,0,0,0.08)] mb-[20px] text-center">
                                <h5>{{ $member->name }}</h5>
                                <p class="position-name">{{ $member->holder_name }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
