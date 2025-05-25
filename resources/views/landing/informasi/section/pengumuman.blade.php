<section id="pengumuman" class="mb-16">
    <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">
        Pengumuman
    </h2>
    <div class="grid md:grid-cols-1 gap-6">
        @forelse ($pengumuman as $item)
            @php
                $warna = match ($item->kategori) {
                    'penting' => [
                        'bg' => 'bg-yellow-100',
                        'border' => 'border-yellow-500',
                        'text' => 'text-yellow-700',
                    ],
                    'rutin' => ['bg' => 'bg-blue-100', 'border' => 'border-blue-500', 'text' => 'text-blue-700'],
                    default => ['bg' => 'bg-gray-100', 'border' => 'border-gray-500', 'text' => 'text-gray-700'],
                };
            @endphp
            <div
                class="{{ $warna['bg'] }} border-l-4 {{ $warna['border'] }} {{ $warna['text'] }} p-6 rounded-lg shadow">
                <h4 class="font-bold text-xl mb-2">{{ $item->judul }}</h4>

                @if ($item->tanggal)
                    <p class="mb-1"><span class="font-semibold">Tanggal:</span>
                        {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}</p>
                @endif

                @if ($item->waktu)
                    <p class="mb-1"><span class="font-semibold">Waktu:</span> {{ $item->waktu }}</p>
                @endif

                @if ($item->tempat)
                    <p class="mb-3"><span class="font-semibold">Tempat:</span> {{ $item->tempat }}</p>
                @endif

                <div>{!! $item->isi !!}</div>
            </div>
        @empty
            <div class="bg-gray-100 p-6 rounded-lg shadow text-center">
                <p class="text-gray-600 text-lg">Saat ini belum ada pengumuman</p>
            </div>
        @endforelse
    </div>
</section>
