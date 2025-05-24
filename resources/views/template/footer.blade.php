<footer class="mt-auto bg-gray-950 w-full">
    <div class="mt-auto w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 lg:pt-20 mx-auto">
        <div class="grid grid-cols-2 gap-6 items-center">
            <div class="col-span-full md:col-span-1">
                <div class="grid grid-cols-2 gap-x-2 gap-y-6">
                    <div class="col-span-2">
                        <a href="{{ config('app.url') }}" aria-label="BPKPD">
                            <div class="flex flex-col items-center px-4">
                                <div class="flex items-center justify-between gap-5">
                                    <img src="{{ asset('assets/img/logo_pmi.png') }}" alt=""
                                        class="w-20 opacity-85">
                                    <img src="{{ asset('assets/img/logo_smea.png') }}" alt=""
                                        class="w-20 opacity-85">
                                    <img src="{{ asset('assets/img/logo_pmr.png') }}" alt=""
                                        class="w-20 opacity-85">
                                    {{-- <img src="{{ asset('assets/img/logo_glora.png') }}" alt=""
                                        class="w-32 opacity-85"> --}}
                                </div>
                                <p class="text-lg text-center text-white font-semibold pt-4">PMR Wira</p>
                                <h1 class="text-3xl text-center text-white font-semibold">
                                    Palang Merah Remaja Wira
                                </h1>
                                <h2 class="text-base text-center text-white font-semibold">
                                    SMK Negeri 2 Sukabumi
                                </h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-span-2 md:col-span-1">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1190.8164493963677!2d106.92556944318528!3d-6.935034222557623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6848182063ba19%3A0xcc6bd9bbe54d5cb7!2sSMKN%202%20Sukabumi!5e1!3m2!1sid!2sid!4v1748064037421!5m2!1sid!2sid"
                    class="w-full h-64 sm:h-80 md:h-96 rounded-md border-0" style="border:0;" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <div class="mt-5 sm:mt-12 grid gap-y-2 sm:gap-y-0 sm:flex sm:justify-between sm:items-center">
            <div class="flex justify-center items-center">
                <p class="text-sm text-gray-400">© {{ now()->year }} RPL Produksi. All rights reserved.</p>
            </div>
            <div class="flex justify-center items-center gap-x-4">
                <a class="size-10 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-white hover:bg-white/10 focus:outline-none focus:bg-white/10 disabled:opacity-50 disabled:pointer-events-none"
                    href="mailto:pmrwirasmkn2sukabumi@gmail.com">
                    <i class="fa-regular fa-envelope shrink-0 size-4"></i>
                </a>
                <a class="size-10 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-white hover:bg-white/10 focus:outline-none focus:bg-white/10 disabled:opacity-50 disabled:pointer-events-none"
                    href="https://www.instagram.com/pmrwirasmkn2smi_/" target="_blank">
                    <i class="fa-brands fa-instagram shrink-0 size-4"></i>
                </a>
                <a class="size-10 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-white hover:bg-white/10 focus:outline-none focus:bg-white/10 disabled:opacity-50 disabled:pointer-events-none"
                    href="https://www.tiktok.com/@pmrwirasmkn2smi_" target="_blank">
                    <i class="fa-brands fa-tiktok shrink-0 size-4"></i>
                </a>
                <a class="size-10 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-white hover:bg-white/10 focus:outline-none focus:bg-white/10 disabled:opacity-50 disabled:pointer-events-none"
                    href="https://www.youtube.com/@PMRWiraSMKNegeri2Sukabumi" target="_blank">
                    <i class="fa-brands fa-youtube shrink-0 size-4"></i>
                </a>
            </div>
        </div>
    </div>
</footer>
