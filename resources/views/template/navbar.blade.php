<header
    class="fixed top-0 left-0 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full bg-gray-100 shadow-xl backdrop-blur-sm border-b border-gray-800">
    <nav
        class="relative max-w-[85rem] w-full mx-auto md:flex md:items-center md:justify-between md:gap-3 py-2 px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center gap-x-1">
            <a class="flex items-center justify-between gap-x-1 lg:gap-x-3" href="{{ route('home') }}" aria-label="Brand">
                <img class="max-h-20" src="{{ asset('assets/img/logo_pmr.png') }}" alt="Logo PMR" />
                <div
                    class="ms-2 items-center text-nowrap tracking-wider font-semibold bg-clip-text bg-gradient-to-tl from-yellow-600 to-red-600 text-transparent">
                    <div class="text-md hidden lg:flex font-bold ">
                        PMR Wira
                        <br> SMK Negeri 2 Sukabumi
                    </div>
                    <div class="flex text-md lg:hidden leading-5 font-bold">
                        PMR Wira
                    </div>
                </div>
            </a>

            <button type="button"
                class="hs-collapse-toggle md:hidden relative size-9 flex justify-center items-center font-medium text-sm rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none"
                id="hs-header-base-collapse" aria-expanded="false" aria-controls="hs-header-base"
                aria-label="Toggle navigation" data-hs-collapse="#hs-header-base">
                <svg class="hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" x2="21" y1="6" y2="6" />
                    <line x1="3" x2="21" y1="12" y2="12" />
                    <line x1="3" x2="21" y1="18" y2="18" />
                </svg>
                <svg class="hs-collapse-open:block shrink-0 hidden size-4" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6 6 18" />
                    <path d="m6 6 12 12" />
                </svg>
                <span class="sr-only">Toggle navigation</span>
            </button>
        </div>

        <div id="hs-header-base"
            class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block "
            aria-labelledby="hs-header-base-collapse">
            <div
                class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
                <div class="py-2 md:py-0  flex flex-col md:flex-row md:items-center gap-0.5 md:gap-1">
                    <div class="grow">
                        <div class="flex flex-col md:flex-row md:justify-end md:items-center gap-0.5 md:gap-1">
                            <a class="p-2 flex items-center text-sm bg-gray-100 text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 hover:text-yellow-600 transition-all duration-300"
                                href="{{ route('home') }}" aria-current="page">
                                <i class="fa-regular fa-house shrink-0 size-4 me-3 md:me-2 block md:hidden"></i>
                                Beranda
                            </a>

                            <div
                                class="hs-dropdown [--strategy:static] md:[--strategy:absolute] [--adaptive:none] [--is-collapse:true] md:[--is-collapse:false] ">
                                <button id="hs-header-base-mega-menu-fullwidth" type="button"
                                    class="hs-dropdown-toggle w-full p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 hover:text-yellow-600 transition-all duration-300"
                                    aria-haspopup="menu" aria-expanded="false" aria-label="Mega Menu">
                                    <i class="fa-regular fa-user shrink-0 size-4 me-3 md:me-2 block md:hidden"></i>
                                    Profil
                                    <svg class="hs-dropdown-open:-rotate-180 md:hs-dropdown-open:rotate-0 duration-300 shrink-0 size-4 ms-auto md:ms-1"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                </button>

                                <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative w-full min-w-60 hidden z-10 top-full start-0 before:absolute before:-top-5 before:start-0 before:w-full before:h-5"
                                    role="menu" aria-orientation="vertical"
                                    aria-labelledby="hs-header-base-mega-menu-fullwidth">
                                    <div class="md:mx-6 lg:mx-8 md:bg-white md:rounded-lg md:shadow-md">
                                        <div
                                            class="py-1 md:p-2 md:grid md:grid-cols-2 lg:grid-cols-3 gap-4 mt-0 md:mt-3">
                                            <div class="flex flex-col">
                                                <a class="p-3 flex gap-x-4 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 rounded-lg"
                                                    href="{{ route('profil.index') }}#sejarah">
                                                    <i
                                                        class="fa-regular fa-clock-rotate-left shrink-0 size-4 mt-1 text-gray-800"></i>
                                                    <div class="grow">
                                                        <p class="font-medium text-sm text-gray-800">
                                                            Sejarah</p>
                                                    </div>
                                                </a>

                                                <a class="p-3 flex gap-x-4 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 rounded-lg "
                                                    href="{{ route('profil.index') }}#lambang">
                                                    <i
                                                        class="fa-regular fa-nfc-symbol shrink-0 size-4 mt-1 text-gray-800"></i>
                                                    <div class="grow">
                                                        <p class="font-medium text-sm text-gray-800">
                                                            Lambang</p>
                                                    </div>
                                                </a>

                                                <a class="p-3 flex gap-x-4 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 rounded-lg "
                                                    href="{{ route('profil.index') }}#struktur">
                                                    <i
                                                        class="fa-regular fa-table-tree shrink-0 size-4 mt-1 text-gray-800"></i>
                                                    <div class="grow">
                                                        <p class="font-medium text-sm text-gray-800">
                                                            Struktur Organisasi</p>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="flex flex-col">
                                                <a class="p-3 flex gap-x-4 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 rounded-lg"
                                                    href="{{ route('visi-misi.index') }}">
                                                    <i
                                                        class="fa-regular fa-rectangles-mixed shrink-0 size-4 mt-1 text-gray-800"></i>
                                                    <div class="grow">
                                                        <p class="font-medium text-sm text-gray-80">
                                                            Visi Misi</p>
                                                    </div>
                                                </a>

                                                <a class="p-3 flex gap-x-4 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 rounded-lg"
                                                    href="{{ route('informasi.index') }}">
                                                    <i
                                                        class="fa-regular fa-circle-info shrink-0 size-4 mt-1 text-gray-800"></i>
                                                    <div class="grow">
                                                        <p class="font-medium text-sm text-gray-800">
                                                            Informasi</p>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="mt-2 md:mt-0 flex flex-col">
                                                <span
                                                    class="ms-2.5 mb-2 font-semibold text-xs uppercase text-gray-800 ">GLORA
                                                    SMK Negeri 2 Sukabumi</span>

                                                <a class="p-3 flex gap-x-5 items-center rounded-xl hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 hover:text-yellow-600"
                                                    href="#">
                                                    <img class="size-32 rounded-lg"
                                                        src="{{ asset('assets/img/logo_glora.png') }}" alt="Avatar">
                                                    <div class="grow">
                                                        <p class="text-sm text-gray-800">
                                                            Glora (Gebyar Lomba PMR) SMK Negeri 2 Sukabumi adalah ajang
                                                            kompetisi dan silaturahmi antar PMR yang bertujuan mengasah
                                                            keterampilan, pengetahuan, dan semangat kemanusiaan generasi
                                                            muda.
                                                        </p>
                                                        <p
                                                            class="mt-3 inline-flex items-center gap-x-1 text-sm text-yellow-600 decoration-2 group-hover:underline group-focus:underline font-medium">
                                                            Selengkapnya
                                                            <svg class="shrink-0 size-4"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="m9 18 6-6-6-6" />
                                                            </svg>
                                                        </p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 hover:text-yellow-600 transition-all duration-300"
                                href="{{ route('purnawira.index') }}">
                                <i class="fa-regular fa-users shrink-0 size-4 me-3 md:me-2 block md:hidden"></i>
                                Purnawira
                            </a>

                            <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 hover:text-yellow-600 transition-all duration-300"
                                href="{{ route('informasi.index') }}#pengumuman">
                                <i class="fa-regular fa-bullhorn shrink-0 size-4 me-3 md:me-2 block md:hidden"></i>
                                Pengumuman
                            </a>

                            <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 hover:text-yellow-600 transition-all duration-300"
                                href="{{ route('filamentblog.post.index') }}" target="_blank">
                                <i class="fa-regular fa-newspaper shrink-0 size-4 me-3 md:me-2 block md:hidden"></i>
                                Blog
                            </a>
                        </div>
                    </div>

                    <div class="my-2 md:my-0 md:mx-2">
                        <div class="w-full h-px md:w-px md:h-4 bg-gray-100 md:bg-gray-300 "></div>
                    </div>

                    <div class=" flex flex-wrap items-center gap-x-1.5">
                        <a class="py-2 px-2.5 flex justify-center items-center font-medium text-sm rounded-lg bg-yellow-600 text-white hover:bg-yellow-700 w-full md:w-auto transition-all duration-300"
                            href="{{ route('filament.admin.auth.login') }}">
                            Login
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
