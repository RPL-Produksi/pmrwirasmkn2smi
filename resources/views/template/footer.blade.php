<footer class="mt-auto bg-gray-950 w-full">
    <div class="mt-auto w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 lg:pt-20 mx-auto">
        <div class="grid grid-cols-2 gap-6 items-center">
            <div class="col-span-full md:col-span-1">
                <div class="grid grid-cols-2 gap-x-2 gap-y-6">
                    <div class="col-span-2">
                        <a href="https://bpkpd.sukabumikota.go.id" aria-label="BPKPD">
                            <div class="flex flex-col items-center px-4">
                                <div class="flex items-center justify-between gap-5">
                                    <img src="{{ asset('assets/img/logo_smea.png') }}" alt=""
                                        class="w-20 opacity-85">
                                    <img src="{{ asset('assets/img/logo_pmr.png') }}" alt=""
                                        class="w-20 opacity-85">
                                    <img src="{{ asset('assets/img/logo_glora.png') }}" alt=""
                                        class="w-20 opacity-85">
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
                    class="w-full h-64 sm:h-80 md:h-96 rounded-md border-0" style="border:0;" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <div class="mt-5 sm:mt-12 grid gap-y-2 sm:gap-y-0 sm:flex sm:justify-between sm:items-center">
            <div class="flex justify-center items-center">
                <p class="text-sm text-gray-400">© {{ now()->year }} PMR Wira. All rights reserved.</p>
            </div>
            <div class="flex justify-center items-center gap-x-4">
                <a class="size-10 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-white hover:bg-white/10 focus:outline-none focus:bg-white/10 disabled:opacity-50 disabled:pointer-events-none"
                    href="mailto:pmrwirasmkn2sukabumi@gmail.com">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                    </svg>
                </a>
                <a class="size-10 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-white hover:bg-white/10 focus:outline-none focus:bg-white/10 disabled:opacity-50 disabled:pointer-events-none"
                    href="https://www.instagram.com/pmrwirasmkn2smi_/" target="_blank">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                        <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                    </svg>
                </a>
                <a class="size-10 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-white hover:bg-white/10 focus:outline-none focus:bg-white/10 disabled:opacity-50 disabled:pointer-events-none"
                    href="https://www.youtube.com/@PMRWiraSMKNegeri2Sukabumi" target="_blank">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path
                            d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17">
                        </path>
                        <path d="m10 15 5-3-5-3z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>
