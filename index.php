<?php
ob_start();
?>

  <header class="relative h-screen flex items-center justify-center">
        <div class="absolute inset-0 z-0">
            <img src="images/hero-image.png" alt="Construction Site" class="w-full h-full object-cover" />
            <!-- <div class="absolute inset-0 bg-black/60 mix-blend-multiply"></div> -->
        </div>

        <div class="relative z-10 text-center px-4 max-w-5xl mx-auto reveal fade-up hidden">
            <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 uppercase tracking-tight drop-shadow-lg">
                Barsaat Ho Ya <span class="text-brand-red">Dhoop</span>
            </h1>
            <p class="text-xl md:text-3xl font-light text-gray-200 mb-10 drop-shadow-md">
                Emulsion banaye walls ko <span
                    class="font-bold text-white border-b-4 border-brand-red pb-1">bulletproof!</span>
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#products"
                    class="bg-brand-red hover:bg-brand-darkred text-white px-8 py-4 rounded-lg font-bold text-lg transition transform hover:-translate-y-1 shadow-xl shadow-red-500/40">Explore
                    Products</a>
                <a href="#contact"
                    class="bg-transparent border-2 border-white hover:bg-white hover:text-brand-dark text-white px-8 py-4 rounded-lg font-bold text-lg transition transform hover:-translate-y-1">Find
                    a Dealer</a>
            </div>
        </div>
    </header>

    <section id="stats" class="relative z-20 -mt-20 md:-mt-24 px-4 max-w-6xl mx-auto reveal fade-up">
        <div
            class="bg-white/30 backdrop-blur-xl rounded-2xl shadow-[0_10px_40px_rgba(0,0,0,0.15)] p-8 flex flex-col md:flex-row justify-between items-center text-center divide-y md:divide-y-0 md:divide-x divide-gray-300/50 border border-white/60">

            <div class="flex-1 py-6 md:py-2 w-full">
                <div class="text-4xl mb-3 text-gray-700">
                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" class="w-12 mx-auto"
                        alt="Dealers">
                </div>
                <div class="text-4xl md:text-5xl font-semibold text-gray-900 mb-1 counter" data-target="122">0</div>
                <div class="text-sm text-gray-800 font-semibold">Happy Dealers</div>
            </div>

            <div class="flex-1 py-6 md:py-2 w-full">
                <div class="text-4xl mb-3 text-blue-500">
                    <img src="https://cdn-icons-png.flaticon.com/512/6009/6009864.png" class="w-12 mx-auto"
                        alt="Clients">
                </div>
                <div class="text-4xl md:text-5xl font-semibold text-gray-900 mb-1 counter" data-target="4226">0</div>
                <div class="text-sm text-gray-800 font-semibold">Happy Client's</div>
            </div>

            <div class="flex-1 py-6 md:py-2 w-full">
                <div class="text-4xl mb-3 text-yellow-500">
                    <img src="https://cdn-icons-png.flaticon.com/512/3112/3112946.png" class="w-12 mx-auto"
                        alt="Awards">
                </div>
                <div class="text-4xl md:text-5xl font-semibold text-gray-900 mb-1 counter" data-target="14">0</div>
                <div class="text-sm text-gray-800 font-semibold">Awards Win</div>
            </div>

            <div class="flex-1 py-6 md:py-2 w-full">
                <div class="text-4xl mb-3 text-brand-red">
                    <img src="https://cdn-icons-png.flaticon.com/512/1182/1182691.png" class="w-12 mx-auto"
                        alt="Rating">
                </div>
                <div class="text-4xl md:text-5xl font-semibold text-gray-900 mb-1 counter" data-target="3500">0</div>
                <div class="text-sm text-gray-800 font-semibold">Positive Rating</div>
            </div>

        </div>
    </section>

    <section id="about" class="py-16 md:pt-24 pb-40 mt-20 overflow-hidden bg-[#fbfbfb]">
        <div class="container mx-auto px-6 md:px-12 xl:px-24">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

                <div class="flex flex-col items-start gap-6">
                    <span
                        class="inline-block px-5 py-2 text-sm font-semibold rounded-full bg-gradient-to-r from-[#6E6E6E] to-[#3C3C3C] text-white tracking-wide uppercase">
                        About Us
                    </span>
                    <h2 class="text-4xl md:text-5xl font-normal text-[#171717] leading-tight">
                        A Legacy Of Quality
                        <span class="block text-5xl md:text-6xl font-bold text-orange-[#171717] mt-1">Since 1978</span>
                    </h2>
                    <p class="text-lg text-[#222222] leading-relaxed max-w-xl">
                        With over four decades of experience, we have established ourselves as industry leaders
                        committed to excellence. Our journey began with a simple mission: to deliver unparalleled
                        quality and service to our clients.
                    </p>
                    <p class="text-lg text-[#222222] leading-relaxed max-w-xl">
                        Today, we continue to uphold these values, combining traditional craftsmanship with modern
                        innovation to exceed expectations in everything we do.
                    </p>
                    <a href="#"
                        class="inline-flex items-center gap-2 px-8 py-3 bg-gradient-to-l from-[#6E6E6E] to-[#3C3C3C] text-white font-semibold rounded-md shadow-md hover:bg-gray-800 transition duration-300">
                        READ MORE →
                    </a>
                </div>

                <div class="overlapping-container flex-col md:flex-row gap-8 md:gap-0 mt-12 md:mt-0">

                    <div class="text-overlay flex flex-col items-center md:items-start">
                        <span class="text-7xl md:text-8xl font-bold text-brand-red leading-none">
                            48+
                        </span>
                        <p class="text-xl md:text-lg font-medium text-[#222222] mt-2 tracking-tight">
                            YEAR OF ESTABLISHMENT
                        </p>
                    </div>
                    <div class="relative w-full h-[500px] md:h-[600px] md:pl-20">

                        <div class="absolute top-0 right-0 w-[65%] h-[85%] rounded-3xl overflow-hidden shadow-lg">
                            <img src="images/about-1.png" alt="Marble Quarry" class="w-full h-full object-cover">
                        </div>

                        <div class="absolute bottom-[-15%] left-[0%] w-[60%] h-[45%] rounded-2xl overflow-hidden z-20">
                            <img src="images/about-2.png" alt="Construction Logo Sign"
                                class="w-full h-full object-cover">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="products" class="py-24 bg-material">
        <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-12 relative">

            <div class="text-center mb-16 reveal fade-up">
                <span
                    class="bg-[#ED3136] text-white px-5 py-2 rounded-full text-xs font-bold tracking-widest uppercase inline-block mb-4">
                    Our Materials
                </span>
                <h2 class="text-4xl md:text-5xl font-semibold text-white mb-4">Engineered For Performance</h2>
                <p class="text-white text-lg font-light max-w-2xl mx-auto">
                    Discover our specialized range of high-performance construction chemicals and materials designed for
                    longevity.
                </p>
            </div>

            <div class="flex justify-between items-center mb-6 reveal fade-up delay-100">
                <h3 class="text-2xl md:text-3xl font-medium text-white">Tile Care Product</h3>
                <a href="#"
                    class="border border-white text-white px-6 py-2 rounded-lg font-semibold transition flex items-center gap-2">
                    View All <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <div class="relative reveal fade-up delay-200">

                <button id="prev-prod"
                    class="absolute -left-5 md:-left-6 top-[40%] -translate-y-1/2 z-20 w-12 h-12 rounded-full bg-[#ED3136] text-white shadow-xl flex items-center justify-center hover:bg-brand-darkred transition">
                    <i class="fa-solid fa-arrow-left"></i>
                </button>
                <button id="next-prod"
                    class="absolute -right-5 md:-right-6 top-[40%] -translate-y-1/2 z-20 w-12 h-12 rounded-full bg-[#ED3136] text-white shadow-xl flex items-center justify-center hover:bg-brand-darkred transition">
                    <i class="fa-solid fa-arrow-right"></i>
                </button>

                <div id="product-track"
                    class="flex gap-6 overflow-x-auto snap-x snap-mandatory no-scrollbar pb-8 px-2 pt-2">

                    <div
                        class="w-full md:w-[calc(50%-12px)] lg:w-[calc(25%-18px)] flex-shrink-0 snap-center bg-white shadow-[0_4px_20px_rgba(0,0,0,0.06)] border border-gray-100 flex flex-col group">
                        <div
                            class="h-64 bg-white flex items-center justify-center border-b border-gray-50 relative overflow-hidden">
                            <img src="images/tile-care-product-1.png" alt=""
                                class="max-h-full object-contain mix-blend-multiply group-hover:scale-105 transition-transform duration-500 w-full h-full">
                        </div>
                        <div class="p-6 flex-1 flex flex-col">
                            <h4 class="text-xl font-bold text-gray-900 mb-2">Tile Adhesive</h4>
                            <p class="text-gray-500 text-sm mb-6 flex-1">High-adhesion water-based primer for exterior
                                walls.</p>
                            <a href="#"
                                class="bg-brand-buttondark text-white px-5 py-3 text-sm font-bold flex items-center justify-between w-max gap-3 hover:bg-brand-red transition rounded-lg">
                                VIEW PRODUCT <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div
                        class="w-full md:w-[calc(50%-12px)] lg:w-[calc(25%-18px)] flex-shrink-0 snap-center bg-white shadow-[0_4px_20px_rgba(0,0,0,0.06)] border border-gray-100 flex flex-col group">
                        <div
                            class="h-64 bg-white flex items-center justify-center border-b border-gray-50 relative overflow-hidden">
                            <img src="images/tile-care-product-2.png" alt="Tile Cleaner"
                                class="max-h-full object-contain mix-blend-multiply group-hover:scale-105 transition-transform duration-500 w-full h-full">
                        </div>
                        <div class="p-6 flex-1 flex flex-col">
                            <h4 class="text-xl font-bold text-gray-900 mb-2">Tile Cleaner</h4>
                            <p class="text-gray-500 text-sm mb-6 flex-1">High-adhesion water-based primer for exterior
                                walls.</p>
                            <a href="#"
                                class="bg-brand-buttondark text-white px-5 py-3 text-sm font-bold flex items-center justify-between w-max gap-3 hover:bg-brand-red transition rounded-lg">
                                VIEW PRODUCT <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div
                        class="w-full md:w-[calc(50%-12px)] lg:w-[calc(25%-18px)] flex-shrink-0 snap-center bg-white shadow-[0_4px_20px_rgba(0,0,0,0.06)] border border-gray-100 flex flex-col group">
                        <div
                            class="h-64 bg-white flex items-center justify-center border-b border-gray-50 relative overflow-hidden">
                            <img src="images/tile-care-product-3.png" alt="Tile Grout"
                                class="max-h-full object-contain mix-blend-multiply group-hover:scale-105 transition-transform duration-500 w-full h-full">
                        </div>
                        <div class="p-6 flex-1 flex flex-col">
                            <h4 class="text-xl font-bold text-gray-900 mb-2">Tile Grout</h4>
                            <p class="text-gray-500 text-sm mb-6 flex-1">High-adhesion water-based primer for exterior
                                walls.</p>
                            <a href="#"
                                class="bg-brand-buttondark text-white px-5 py-3 text-sm font-bold flex items-center justify-between w-max gap-3 hover:bg-brand-red transition rounded-lg">
                                VIEW PRODUCT <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div
                        class="w-full md:w-[calc(50%-12px)] lg:w-[calc(25%-18px)] flex-shrink-0 snap-center bg-white shadow-[0_4px_20px_rgba(0,0,0,0.06)] border border-gray-100 flex flex-col group">
                        <div
                            class="h-64 bg-white flex items-center justify-center border-b border-gray-50 relative overflow-hidden">
                            <img src="images/tile-care-product-4.png" alt="Epoxy Grout"
                                class="max-h-full object-contain mix-blend-multiply group-hover:scale-105 transition-transform duration-500 w-full h-full">
                        </div>
                        <div class="p-6 flex-1 flex flex-col">
                            <h4 class="text-xl font-bold text-gray-900 mb-2">Epoxy Grout</h4>
                            <p class="text-gray-500 text-sm mb-6 flex-1">High-adhesion water-based primer for exterior
                                walls.</p>
                            <a href="#"
                                class="bg-brand-buttondark text-white px-5 py-3 text-sm font-bold flex items-center justify-between w-max gap-3 hover:bg-brand-red transition rounded-lg">
                                VIEW PRODUCT <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div
                        class="w-full md:w-[calc(50%-12px)] lg:w-[calc(25%-18px)] flex-shrink-0 snap-center bg-white shadow-[0_4px_20px_rgba(0,0,0,0.06)] border border-gray-100 flex flex-col group">
                        <div
                            class="h-64 bg-white flex items-center justify-center border-b border-gray-50 relative overflow-hidden">
                            <img src="images/tile-care-product-1.png" alt="Wall Putty"
                                class="max-h-full object-contain mix-blend-multiply group-hover:scale-105 transition-transform duration-500 w-full h-full">
                        </div>
                        <div class="p-6 flex-1 flex flex-col">
                            <h4 class="text-xl font-bold text-gray-900 mb-2">Wall Putty</h4>
                            <p class="text-gray-500 text-sm mb-6 flex-1">High-adhesion water-based primer for exterior
                                walls.</p>
                            <a href="#"
                                class="bg-brand-buttondark text-white px-5 py-3 text-sm font-bold flex items-center justify-between w-max gap-3 hover:bg-brand-red transition rounded-lg">
                                VIEW PRODUCT <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            <div class="w-full h-full flex justify-center">
                <img src="images/why-builder.png" alt="" class="w-full h-auto object-cover rounded-md shadow-sm">
            </div>

            <div>
                <div class="mb-4">
                        <span
                        class="inline-block px-5 py-2 text-sm font-semibold rounded-full bg-gradient-to-r from-[#6E6E6E] to-[#3C3C3C] text-white tracking-wide uppercase mb-5">
                        About Us
                    </span>
                    <h2 class="text-2xl md:text-3xl font-normal text-gray-800">Why Builders & Professionals</h2>
                    <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mt-1">Prefer Bull Strong</h3>
                </div>

                <p class="text-gray-500 mb-8 text-sm md:text-base leading-relaxed">
                    Lorem Ipsum Dolor Sit Amet Consectetur Adipiscing Elit Ut Et Massa Mi. Aliquam In Hendrerit Urna.
                    Pellentesque Sit Amet Sapien.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                    <div
                        class="flex items-center p-4 bg-[#fbebec] border border-red-200 rounded-lg hover:bg-red-50 transition-colors duration-200 cursor-default">
                        <div
                            class="flex-shrink-0 w-10 h-10 flex items-center justify-center rounded-full border-2 border-red-500 bg-white text-red-500 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                            </svg>
                        </div>
                        <p class="text-sm font-medium text-gray-800 leading-snug">High bonding strength<br>for tiles &
                            walls</p>
                    </div>

                    <div
                        class="flex items-center p-4 bg-[#fbebec] border border-red-200 rounded-lg hover:bg-red-50 transition-colors duration-200 cursor-default">
                        <div
                            class="flex-shrink-0 w-10 h-10 flex items-center justify-center rounded-full border-2 border-red-500 bg-white text-red-500 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 5.25v2.5a.75.75 0 0 1-.75.75H12a.75.75 0 0 0-.75.75v3.25H9.75v-2.5a.75.75 0 0 1 .75-.75h6.25a.75.75 0 0 0 .75-.75v-2.5A.75.75 0 0 0 16.75 4h-4a2.25 2.25 0 0 0-2.25 2.25v7.5A2.25 2.25 0 0 1 8.25 16h-4A2.25 2.25 0 0 1 2 13.75v-1.5A2.25 2.25 0 0 1 4.25 10h4" />
                            </svg>
                        </div>
                        <p class="text-sm font-medium text-gray-800 leading-snug">Easy application – no<br>curing
                            required</p>
                    </div>

                    <div
                        class="flex items-center p-4 bg-[#fbebec] border border-red-200 rounded-lg hover:bg-red-50 transition-colors duration-200 cursor-default">
                        <div
                            class="flex-shrink-0 w-10 h-10 flex items-center justify-center rounded-full border-2 border-red-500 bg-white text-red-500 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div>
                        <p class="text-sm font-medium text-gray-800 leading-snug">Saves time, labor,<br>& cost</p>
                    </div>

                    <div
                        class="flex items-center p-4 bg-[#fbebec] border border-red-200 rounded-lg hover:bg-red-50 transition-colors duration-200 cursor-default">
                        <div
                            class="flex-shrink-0 w-10 h-10 flex items-center justify-center rounded-full border-2 border-red-500 bg-white text-red-500 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                            </svg>
                        </div>
                        <p class="text-sm font-medium text-gray-800 leading-snug">Weather-resistant &<br>crack-proof</p>
                    </div>

                    <div
                        class="flex items-center p-4 bg-[#fbebec] border border-red-200 rounded-lg hover:bg-red-50 transition-colors duration-200 cursor-default">
                        <div
                            class="flex-shrink-0 w-10 h-10 flex items-center justify-center rounded-full border-2 border-red-500 bg-white text-red-500 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <p class="text-sm font-medium text-gray-800 leading-snug">Eco-friendly & low-<br>maintenance</p>
                    </div>

                    <div
                        class="flex items-center p-4 bg-[#fbebec] border border-red-200 rounded-lg hover:bg-red-50 transition-colors duration-200 cursor-default">
                        <div
                            class="flex-shrink-0 w-10 h-10 flex items-center justify-center rounded-full border-2 border-red-500 bg-white text-red-500 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <p class="text-sm font-medium text-gray-800 leading-snug">Eco-friendly & low-<br>maintenance</p>
                    </div>

                </div>
            </div>

        </div>
    </section>


    <!-- Work  -->
    <div class="bg-[#262626] antialiased">

        <div class="w-full overflow-hidden">

            <section class="w-full py-16">

                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-8">
                      <span
                    class="bg-[#ED3136] text-white px-5 py-2 rounded-full text-xs font-bold tracking-widest uppercase inline-block mb-4">
                    Photos
                </span>
                    <h2 id="reference-element" class="text-2xl md:text-3xl font-normal text-white">
                        Real Work. Real Results.
                    </h2>
                    <p class="text-3xl md:text-4xl font-bold text-white mt-1">With Bull Strong</p>
                </div>

                <div class="w-full relative">
                    <div class="swiper mySwiper w-full cursor-grab active:cursor-grabbing pb-12 initial-state">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="w-full aspect-square rounded-2xl overflow-hidden shadow-sm">
                                    <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=800&auto=format&fit=crop"
                                        class="w-full h-full object-cover" alt="Construction" />
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="w-full aspect-square rounded-2xl overflow-hidden shadow-sm bg-[#1e2330]">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="w-full aspect-square rounded-2xl overflow-hidden shadow-sm">
                                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=800&auto=format&fit=crop"
                                        class="w-full h-full object-cover" alt="Coding" />
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="w-full aspect-square rounded-2xl overflow-hidden shadow-sm bg-gray-200">
                                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=800&auto=format&fit=crop"
                                        class="w-full h-full object-cover" alt="Interior space" />
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="w-full aspect-square rounded-2xl overflow-hidden shadow-sm">
                                    <img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?q=80&w=800&auto=format&fit=crop"
                                        class="w-full h-full object-cover" alt="Cement work" />
                                </div>
                            </div>

                        </div>

                        <div id="pagination-container" class="custom-pagination mt-4 hidden"></div>
                    </div>
                </div>

            </section>
        </div>
    </div>

    <!-- Work video -->
    <section class="w-full py-16 md:py-24 relative">

        <div class="max-w-3xl mx-auto px-4 sm:px-6 text-center mb-10 md:mb-14">
               <span
                        class="inline-block px-5 py-2 text-sm font-semibold rounded-full bg-gradient-to-r from-[#6E6E6E] to-[#3C3C3C] text-white tracking-wide uppercase mb-5">
                        Videos
                    </span>
            <h2 class="text-3xl md:text-4xl lg:text-[40px] font-bold text-gray-900 mb-4 tracking-tight">
                Strength You Can See
            </h2>
            <p class="text-gray-500 text-sm md:text-base leading-relaxed px-4">
                Real Applications Of Bull Strong Products Delivering Durability<br class="hidden md:block" /> And
                Performance On Site.
            </p>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full h-0 overflow-hidden">
            <div id="video-start-guide"></div>
        </div>

        <div class="w-full relative">
            <div class="swiper my-video-slider w-full cursor-grab active:cursor-grabbing initial-state-video">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="relative w-full aspect-[9/16] rounded-xl overflow-hidden bg-gray-200 shadow-sm">

                            <video src="YOUR_VIDEO_LINK_HERE.mp4"
                                class="absolute inset-0 w-full h-full object-cover z-0" autoplay loop muted playsinline
                                poster="https://images.unsplash.com/photo-1589939705384-5185137a7f0f?q=80&w=600&auto=format&fit=crop">
                            </video>

                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent z-10 pointer-events-none">
                            </div>
                            <div
                                class="absolute bottom-4 left-4 flex items-center text-white text-[15px] font-semibold gap-1.5 z-20">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 opacity-90">
                                    <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                    <path fill-rule="evenodd"
                                        d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>820</span>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="relative w-full aspect-[9/16] rounded-xl overflow-hidden bg-gray-200 shadow-sm">
                            <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=600&auto=format&fit=crop"
                                class="absolute inset-0 w-full h-full object-cover z-0" alt="Video">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent z-10 pointer-events-none">
                            </div>
                            <div
                                class="absolute bottom-4 left-4 flex items-center text-white text-[15px] font-semibold gap-1.5 z-20">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 opacity-90">
                                    <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                    <path fill-rule="evenodd"
                                        d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>1.2k</span>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="relative w-full aspect-[9/16] rounded-xl overflow-hidden bg-gray-200 shadow-sm">
                            <img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?q=80&w=600&auto=format&fit=crop"
                                class="absolute inset-0 w-full h-full object-cover z-0" alt="Video">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent z-10 pointer-events-none">
                            </div>
                            <div
                                class="absolute bottom-4 left-4 flex items-center text-white text-[15px] font-semibold gap-1.5 z-20">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 opacity-90">
                                    <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                    <path fill-rule="evenodd"
                                        d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>945</span>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="relative w-full aspect-[9/16] rounded-xl overflow-hidden bg-gray-200 shadow-sm">
                            <img src="https://images.unsplash.com/photo-1504307651254-35680f356fce?q=80&w=600&auto=format&fit=crop"
                                class="absolute inset-0 w-full h-full object-cover z-0" alt="Video">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent z-10 pointer-events-none">
                            </div>
                            <div
                                class="absolute bottom-4 left-4 flex items-center text-white text-[15px] font-semibold gap-1.5 z-20">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 opacity-90">
                                    <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                    <path fill-rule="evenodd"
                                        d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>3.4k</span>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="relative w-full aspect-[9/16] rounded-xl overflow-hidden bg-gray-200 shadow-sm">
                            <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?q=80&w=600&auto=format&fit=crop"
                                class="absolute inset-0 w-full h-full object-cover z-0" alt="Video">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent z-10 pointer-events-none">
                            </div>
                            <div
                                class="absolute bottom-4 left-4 flex items-center text-white text-[15px] font-semibold gap-1.5 z-20">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 opacity-90">
                                    <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                    <path fill-rule="evenodd"
                                        d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>612</span>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="relative w-full aspect-[9/16] rounded-xl overflow-hidden bg-gray-200 shadow-sm">
                            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=600&auto=format&fit=crop"
                                class="absolute inset-0 w-full h-full object-cover z-0" alt="Video">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent z-10 pointer-events-none">
                            </div>
                            <div
                                class="absolute bottom-4 left-4 flex items-center text-white text-[15px] font-semibold gap-1.5 z-20">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 opacity-90">
                                    <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                    <path fill-rule="evenodd"
                                        d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>500</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <div class="bg-[#fdf5f5] flex items-center justify-center font-sans">

        <section class="w-full pb-16 pt-20 max-w-7xl mx-auto" id="testimonial-section">

            <h2 class="text-4xl font-bold text-center theme-red mb-5">Testimonials</h2>

            <div class="relative w-full px-8 md:px-12">

                <button id="prevBtn" aria-label="Previous testimonial"
                    class="absolute left-[35px] top-1/2 -translate-y-1/2 z-10 w-10 h-10 flex items-center justify-center bg-theme-red hover-bg-theme-red text-white rounded-full shadow-md transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-offset-2">
                    <i class="fas fa-arrow-left"></i>
                </button>

                <button id="nextBtn" aria-label="Next testimonial"
                    class="absolute right-[35px] top-1/2 -translate-y-1/2 z-10 w-10 h-10 flex items-center justify-center bg-theme-red hover-bg-theme-red text-white rounded-full shadow-md transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-offset-2">
                    <i class="fas fa-arrow-right"></i>
                </button>

                <div class="overflow-hidden w-full py-4">
                    <div id="slider-track" class="slider-track">

                        <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-3">
                            <div
                                class="bg-white border border-gray-400 rounded-lg p-8 relative shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 h-full flex flex-col justify-between">
                                <i class="fas fa-quote-right absolute top-4 right-4 theme-red text-3xl"></i>
                                <p class="text-gray-800 text-sm text-center mt-6 mb-6 leading-relaxed font-medium">
                                    "Working with [Your Name/Company] was an absolute pleasure! Their creativity,
                                    attention to detail, and professionalism exceeded our expectations. They understood
                                    our vision perfectly and delivered a design that truly represents our brand. We
                                    highly recommend their services to anyone looking for top-notch design work!"
                                </p>
                                <div class="text-center mt-auto">
                                    <h4 class="font-bold text-black text-lg">Amit Sharma</h4>
                                    <p class="text-gray-500 text-xs mt-1 italic">xyzxyzxyzxyz</p>
                                </div>
                            </div>
                        </div>

                        <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-3">
                            <div
                                class="bg-white border border-gray-400 rounded-lg p-8 relative shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 h-full flex flex-col justify-between">
                                <i class="fas fa-quote-right absolute top-4 right-4 theme-red text-3xl"></i>
                                <p class="text-gray-800 text-sm text-center mt-6 mb-6 leading-relaxed font-medium">
                                    "Working with [Your Name/Company] was an absolute pleasure! Their creativity,
                                    attention to detail, and professionalism exceeded our expectations. They understood
                                    our vision perfectly and delivered a design that truly represents our brand. We
                                    highly recommend their services to anyone looking for top-notch design work!"
                                </p>
                                <div class="text-center mt-auto">
                                    <h4 class="font-bold text-black text-lg">Amit Sharma</h4>
                                    <p class="text-gray-500 text-xs mt-1 italic">xyzxyzxyzxyz</p>
                                </div>
                            </div>
                        </div>

                        <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-3">
                            <div
                                class="bg-white border border-gray-400 rounded-lg p-8 relative shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 h-full flex flex-col justify-between">
                                <i class="fas fa-quote-right absolute top-4 right-4 theme-red text-3xl"></i>
                                <p class="text-gray-800 text-sm text-center mt-6 mb-6 leading-relaxed font-medium">
                                    "Working with [Your Name/Company] was an absolute pleasure! Their creativity,
                                    attention to detail, and professionalism exceeded our expectations. They understood
                                    our vision perfectly and delivered a design that truly represents our brand. We
                                    highly recommend their services to anyone looking for top-notch design work!"
                                </p>
                                <div class="text-center mt-auto">
                                    <h4 class="font-bold text-black text-lg">Amit Sharma</h4>
                                    <p class="text-gray-500 text-xs mt-1 italic">xyzxyzxyzxyz</p>
                                </div>
                            </div>
                        </div>

                        <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-3">
                            <div
                                class="bg-white border border-gray-400 rounded-lg p-8 relative shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 h-full flex flex-col justify-between">
                                <i class="fas fa-quote-right absolute top-4 right-4 theme-red text-3xl"></i>
                                <p class="text-gray-800 text-sm text-center mt-6 mb-6 leading-relaxed font-medium">
                                    "Working with [Your Name/Company] was an absolute pleasure! Their creativity,
                                    attention to detail, and professionalism exceeded our expectations. They understood
                                    our vision perfectly and delivered a design that truly represents our brand. We
                                    highly recommend their services to anyone looking for top-notch design work!"
                                </p>
                                <div class="text-center mt-auto">
                                    <h4 class="font-bold text-black text-lg">Amit Sharma</h4>
                                    <p class="text-gray-500 text-xs mt-1 italic">xyzxyzxyzxyz</p>
                                </div>
                            </div>
                        </div>

                        <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-3">
                            <div
                                class="bg-white border border-gray-400 rounded-lg p-8 relative shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 h-full flex flex-col justify-between">
                                <i class="fas fa-quote-right absolute top-4 right-4 theme-red text-3xl"></i>
                                <p class="text-gray-800 text-sm text-center mt-6 mb-6 leading-relaxed font-medium">
                                    "Working with [Your Name/Company] was an absolute pleasure! Their creativity,
                                    attention to detail, and professionalism exceeded our expectations. They understood
                                    our vision perfectly and delivered a design that truly represents our brand. We
                                    highly recommend their services to anyone looking for top-notch design work!"
                                </p>
                                <div class="text-center mt-auto">
                                    <h4 class="font-bold text-black text-lg">Amit Sharma</h4>
                                    <p class="text-gray-500 text-xs mt-1 italic">xyzxyzxyzxyz</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>


    <section id="contact" class="relative py-24 flex items-center justify-center">
        <div class="absolute inset-0 z-0">
            <img src="images/cta-footer.png"
                alt="Architecture" class="w-full h-full object-cover filter grayscale" />
            <div class="absolute inset-0 bg-black/30 mix-blend-multiply"></div>
        </div>

        <div class="relative z-10 text-center px-4 max-w-6xl mx-auto reveal zoom-in">
            <h2 class="text-4xl md:text-6xl font-semibold text-white mb-6">Ready to Build Something Stronger?</h2>
            <p class="text-xl text-white/90 mb-10 max-w-3xl mx-auto">Get in touch with our industrial specialists to discuss your project
                requirements and material specifications.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#"
                    class="bg-white text-[#ED3136] px-8 py-4 rounded-lg font-semibold text-lg transition transform hover:-translate-y-1 shadow-[0_0_20px_rgba(255,255,255,0.4)]">Contact
                    Us </a>
                <a href="#"
                    class="bg-gradient-to-r from-[#ED3136] to-[#B32125] border-2 border-[#ff6363] text-white px-8 py-4 rounded-lg font-semibold text-lg transition transform hover:-translate-y-1">
                Download Product Catalog</a>
            </div>
        </div>
    </section>

<?php
$content = ob_get_contents();
$active = 'home';
ob_end_clean();
require_once("master.php");
?>
