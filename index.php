<?php
ob_start();
?>

<header class="relative h-screen flex items-center justify-center hidden">
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
<!-- hero section banner  -->
<section class="relative overflow-hidden">

    <!-- Desktop Slider -->
    <div id="desktopSlider" class="hidden md:block relative">
        <div class="slides flex transition-transform duration-700 ease-in-out">
            <img src="images/banners/01.png" class="w-full flex-shrink-0">
            <img src="images/banners/02.png" class="w-full flex-shrink-0">
            <img src="images/banners/03.png" class="w-full flex-shrink-0">
            <img src="images/banners/04.png" class="w-full flex-shrink-0">
        </div>

        <button id="desktopPrev"
            class="absolute right-20 top-[95%] -translate-y-1/2 bg-white p-2 h-10 w-10 rounded-full shadow">
            ❮
        </button>

        <button id="desktopNext"
            class="absolute right-5 top-[95%] -translate-y-1/2 bg-white p-2 h-10 w-10 rounded-full shadow">
            ❯
        </button>
    </div>


    <!-- Mobile Slider -->
    <div id="mobileSlider" class="block md:hidden relative">
        <div class="slides flex transition-transform duration-700 ease-in-out">
            <img src="images/banners/mobile-banner-1.png" class="w-full flex-shrink-0">
            <img src="images/banners/mobile-banner-2.png" class="w-full flex-shrink-0">
            <img src="images/banners/mobile-banner-3.png" class="w-full flex-shrink-0">
            <img src="images/banners/mobile-banner-4.png" class="w-full flex-shrink-0">
        </div>

        <button id="mobilePrev"
            class="absolute left-3 top-1/2 -translate-y-1/2 bg-white p-2 rounded-full shadow">
            ❮
        </button>

        <button id="mobileNext"
            class="absolute right-3 top-1/2 -translate-y-1/2 bg-white p-2 rounded-full shadow">
            ❯
        </button>
    </div>

</section>


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
<!-- about -->
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
                        <img src="images/about-banner-home.png" alt="Construction Logo Sign"
                            class="w-full h-full object-cover">
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- products -->
<section id="products" class="py-24 bg-material">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-12 relative">

        <!-- Main Section Header -->
        <div class="text-center mb-16 reveal fade-up">
            <span class="bg-[#ED3136] text-white px-5 py-2 rounded-full text-xs font-bold tracking-widest uppercase inline-block mb-4">
                Our Materials
            </span>
            <h2 class="text-4xl md:text-5xl font-semibold text-white mb-4">Engineered For Performance</h2>
            <p class="text-white text-lg font-light max-w-2xl mx-auto">
                Discover our specialized range of high-performance construction chemicals and materials designed for longevity.
            </p>
        </div>

        <!-- SLIDER 1: TILE CARE PRODUCTS -->

        <div class="flex justify-between items-center mb-6 reveal fade-up delay-100">
            <h3 class="text-2xl md:text-3xl font-medium text-white">Tile Care Product</h3>
            <a href="product-list.php" class="border border-white text-white px-6 py-2 rounded-lg font-semibold transition flex items-center gap-2">
                View All <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>

        <div class="relative reveal fade-up delay-200">
            <button id="prev-prod" class="absolute -left-5 md:-left-6 top-[40%] -translate-y-1/2 z-20 w-12 h-12 rounded-full bg-[#ED3136] text-white shadow-xl flex items-center justify-center hover:bg-brand-darkred transition">
                <i class="fa-solid fa-arrow-left"></i>
            </button>
            <button id="next-prod" class="absolute -right-5 md:-right-6 top-[40%] -translate-y-1/2 z-20 w-12 h-12 rounded-full bg-[#ED3136] text-white shadow-xl flex items-center justify-center hover:bg-brand-darkred transition">
                <i class="fa-solid fa-arrow-right"></i>
            </button>

            <div id="product-track" class="flex gap-6 overflow-x-auto snap-x snap-mandatory no-scrollbar pb-8 px-2 pt-2">
                <!-- Product Card 1 -->
                <div class="w-full md:w-[calc(50%-12px)] lg:w-[calc(25%-18px)] flex-shrink-0 snap-center bg-white shadow-[0_4px_20px_rgba(0,0,0,0.06)] border border-gray-100 flex flex-col group">
                    <div class="h-64 bg-white flex items-center justify-center border-b border-gray-50 relative overflow-hidden">
                        <img src="images/product-image/tile-adhesive-tc.png" alt="" class="max-h-full object-contain mix-blend-multiply group-hover:scale-105 transition-transform duration-500 w-full h-full">
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <h4 class="text-xl font-bold text-gray-900 mb-2">Tile Adhesive</h4>
                        <p class="text-gray-500 text-sm mb-6 flex-1">Specially formulated adhesive that ensures a stronger, longer-lasting bond for tiles—works on floors, walls, and wet areas without the mess of traditional cement.</p>
                        <a href="#" class="bg-brand-buttondark text-white px-5 py-3 text-sm font-bold flex items-center justify-between w-max gap-3 hover:bg-brand-red transition rounded-lg">
                            VIEW PRODUCT <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="w-full md:w-[calc(50%-12px)] lg:w-[calc(25%-18px)] flex-shrink-0 snap-center bg-white shadow-[0_4px_20px_rgba(0,0,0,0.06)] border border-gray-100 flex flex-col group">
                    <div class="h-64 bg-white flex items-center justify-center border-b border-gray-50 relative overflow-hidden">
                        <img src="images/product-image/tile-cleaner-tc.png" alt="Tile Cleaner" class="max-h-full object-contain mix-blend-multiply group-hover:scale-105 transition-transform duration-500 w-full h-full">
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <h4 class="text-xl font-bold text-gray-900 mb-2">Tile Cleaner</h4>
                        <p class="text-gray-500 text-sm mb-6 flex-1"> Effective tile cleaning solution that removes cement stains, dirt, and grime—restores shine and freshness to tiled surfaces effortlessly.</p>
                        <a href="#" class="bg-brand-buttondark text-white px-5 py-3 text-sm font-bold flex items-center justify-between w-max gap-3 hover:bg-brand-red transition rounded-lg">
                            VIEW PRODUCT <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div class="w-full md:w-[calc(50%-12px)] lg:w-[calc(25%-18px)] flex-shrink-0 snap-center bg-white shadow-[0_4px_20px_rgba(0,0,0,0.06)] border border-gray-100 flex flex-col group">
                    <div class="h-64 bg-white flex items-center justify-center border-b border-gray-50 relative overflow-hidden">
                        <img src="images/product-image/tile-grout-tc.png" alt="Tile Grout" class="max-h-full object-contain mix-blend-multiply group-hover:scale-105 transition-transform duration-500 w-full h-full">
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <h4 class="text-xl font-bold text-gray-900 mb-2">Tile Grout</h4>
                        <p class="text-gray-500 text-sm mb-6 flex-1">A flexible and crack-resistant filler for tile joints—prevents water seepage, resists fungal growth, and maintains a clean tiled appearance.</p>
                        <a href="#" class="bg-brand-buttondark text-white px-5 py-3 text-sm font-bold flex items-center justify-between w-max gap-3 hover:bg-brand-red transition rounded-lg">
                            VIEW PRODUCT <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Product Card 4 -->
                <div class="w-full md:w-[calc(50%-12px)] lg:w-[calc(25%-18px)] flex-shrink-0 snap-center bg-white shadow-[0_4px_20px_rgba(0,0,0,0.06)] border border-gray-100 flex flex-col group">
                    <div class="h-64 bg-white flex items-center justify-center border-b border-gray-50 relative overflow-hidden">
                        <img src="images/product-image/epoxy-grout-tc.png" alt="Epoxy Grout" class="max-h-full object-contain mix-blend-multiply group-hover:scale-105 transition-transform duration-500 w-full h-full">
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <h4 class="text-xl font-bold text-gray-900 mb-2">Epoxy Grout</h4>
                        <p class="text-gray-500 text-sm mb-6 flex-1">A premium joint filler for tiles that's resistant to stains, water, and chemicals—perfect for bathrooms, kitchens, and industrial spaces.</p>
                        <a href="#" class="bg-brand-buttondark text-white px-5 py-3 text-sm font-bold flex items-center justify-between w-max gap-3 hover:bg-brand-red transition rounded-lg">
                            VIEW PRODUCT <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Product Card 5 -->
                <div class="w-full md:w-[calc(50%-12px)] lg:w-[calc(25%-18px)] flex-shrink-0 snap-center bg-white shadow-[0_4px_20px_rgba(0,0,0,0.06)] border border-gray-100 flex flex-col group">
                    <div class="h-64 bg-white flex items-center justify-center border-b border-gray-50 relative overflow-hidden">
                        <img src="images/product-image/sbr-latex-tc.png" alt="Tile Grout" class="max-h-full object-contain mix-blend-multiply group-hover:scale-105 transition-transform duration-500 w-full h-full">
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <h4 class="text-xl font-bold text-gray-900 mb-2">SBR Latex</h4>
                        <p class="text-gray-500 text-sm mb-6 flex-1"> A multipurpose bonding agent that strengthens cement mixes—ideal for waterproofing, crack repairs, and bonding old to new concrete surfaces.</p>
                        <a href="#" class="bg-brand-buttondark text-white px-5 py-3 text-sm font-bold flex items-center justify-between w-max gap-3 hover:bg-brand-red transition rounded-lg">
                            VIEW PRODUCT <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- SLIDER 2: WALL CARE PRODUCTS -->

        <div class="flex justify-between items-center mt-20 mb-6 reveal fade-up delay-100">
            <h3 class="text-2xl md:text-3xl font-medium text-white">Wall Care Product</h3>
            <a href="product-list.php#wallcardlist" class="border border-white text-white px-6 py-2 rounded-lg font-semibold transition flex items-center gap-2">
                View All <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>

        <div class="relative reveal fade-up delay-200">
            <!-- Updated IDs: prev-prod-2, next-prod-2 -->
            <button id="prev-prod-2" class="absolute -left-5 md:-left-6 top-[40%] -translate-y-1/2 z-20 w-12 h-12 rounded-full bg-[#ED3136] text-white shadow-xl flex items-center justify-center hover:bg-brand-darkred transition">
                <i class="fa-solid fa-arrow-left"></i>
            </button>
            <button id="next-prod-2" class="absolute -right-5 md:-right-6 top-[40%] -translate-y-1/2 z-20 w-12 h-12 rounded-full bg-[#ED3136] text-white shadow-xl flex items-center justify-center hover:bg-brand-darkred transition">
                <i class="fa-solid fa-arrow-right"></i>
            </button>

            <!-- Updated ID: product-track-2 -->
            <div id="product-track-2" class="flex gap-6 overflow-x-auto snap-x snap-mandatory no-scrollbar pb-8 px-2 pt-2">
                <!-- Product Card 1 -->
                <div class="w-full md:w-[calc(50%-12px)] lg:w-[calc(25%-18px)] flex-shrink-0 snap-center bg-white shadow-[0_4px_20px_rgba(0,0,0,0.06)] border border-gray-100 flex flex-col group">
                    <div class="h-64 bg-white flex items-center justify-center border-b border-gray-50 relative overflow-hidden">
                        <img src="images/product-image/aac-wc.png" alt="AAC (Block/Construction material)" class="max-h-full object-contain mix-blend-multiply group-hover:scale-105 transition-transform duration-500 w-full h-full">
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <h4 class="text-xl font-bold text-gray-900 mb-2">AAC (Block/Construction material)</h4>
                        <p class="text-gray-500 text-sm mb-6 flex-1">A ready-mix mortar that provides excellent bonding strength for AAC blocks—minimizes wastage, reduces time, and improves wall stability.</p>
                        <a href="#" class="bg-brand-buttondark text-white px-5 py-3 text-sm font-bold flex items-center justify-between w-max gap-3 hover:bg-brand-red transition rounded-lg">
                            VIEW PRODUCT <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="w-full md:w-[calc(50%-12px)] lg:w-[calc(25%-18px)] flex-shrink-0 snap-center bg-white shadow-[0_4px_20px_rgba(0,0,0,0.06)] border border-gray-100 flex flex-col group">
                    <div class="h-64 bg-white flex items-center justify-center border-b border-gray-50 relative overflow-hidden">
                        <img src="images/product-image/acrylic-distemper-wc.png" alt="Acrylic Distemper" class="max-h-full object-contain mix-blend-multiply group-hover:scale-105 transition-transform duration-500 w-full h-full">
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <h4 class="text-xl font-bold text-gray-900 mb-2">Acrylic Distemper</h4>
                        <p class="text-gray-500 text-sm mb-6 flex-1">An affordable water-based wall paint that delivers a clean, matte look—suitable for interior walls and perfect for budget-friendly makeovers.</p>
                        <a href="#" class="bg-brand-buttondark text-white px-5 py-3 text-sm font-bold flex items-center justify-between w-max gap-3 hover:bg-brand-red transition rounded-lg">
                            VIEW PRODUCT <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div class="w-full md:w-[calc(50%-12px)] lg:w-[calc(25%-18px)] flex-shrink-0 snap-center bg-white shadow-[0_4px_20px_rgba(0,0,0,0.06)] border border-gray-100 flex flex-col group">
                    <div class="h-64 bg-white flex items-center justify-center border-b border-gray-50 relative overflow-hidden">
                        <img src="images/product-image/acrylic-texture-wc.png" alt="Acrylic Texture" class="max-h-full object-contain mix-blend-multiply group-hover:scale-105 transition-transform duration-500 w-full h-full">
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <h4 class="text-xl font-bold text-gray-900 mb-2">Acrylic Texture</h4>
                        <p class="text-gray-500 text-sm mb-6 flex-1">Decorative finish that adds patterns and depth to walls—resistant to cracks and stains, ideal for creating visually appealing surfaces.</p>
                        <a href="#" class="bg-brand-buttondark text-white px-5 py-3 text-sm font-bold flex items-center justify-between w-max gap-3 hover:bg-brand-red transition rounded-lg">
                            VIEW PRODUCT <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Product Card 4 -->
                <div class="w-full md:w-[calc(50%-12px)] lg:w-[calc(25%-18px)] flex-shrink-0 snap-center bg-white shadow-[0_4px_20px_rgba(0,0,0,0.06)] border border-gray-100 flex flex-col group">
                    <div class="h-64 bg-white flex items-center justify-center border-b border-gray-50 relative overflow-hidden">
                        <img src="images/product-image/exterior-emulsion-wc.png" alt="Exterior Emulsion" class="max-h-full object-contain mix-blend-multiply group-hover:scale-105 transition-transform duration-500 w-full h-full">
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <h4 class="text-xl font-bold text-gray-900 mb-2">Exterior Emulsion</h4>
                        <p class="text-gray-500 text-sm mb-6 flex-1">A high-performance paint designed to protect exterior walls from harsh weather, UV rays, and fading—leaving your walls vibrant and durable for years.</p>
                        <a href="#" class="bg-brand-buttondark text-white px-5 py-3 text-sm font-bold flex items-center justify-between w-max gap-3 hover:bg-brand-red transition rounded-lg">
                            VIEW PRODUCT <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- Product Card 5 -->
                <div class="w-full md:w-[calc(50%-12px)] lg:w-[calc(25%-18px)] flex-shrink-0 snap-center bg-white shadow-[0_4px_20px_rgba(0,0,0,0.06)] border border-gray-100 flex flex-col group">
                    <div class="h-64 bg-white flex items-center justify-center border-b border-gray-50 relative overflow-hidden">
                        <img src="images/product-image/plast-putty-wc.png" alt="Plast Putty" class="max-h-full object-contain mix-blend-multiply group-hover:scale-105 transition-transform duration-500 w-full h-full">
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <h4 class="text-xl font-bold text-gray-900 mb-2">Plast Putty</h4>
                        <p class="text-gray-500 text-sm mb-6 flex-1">A white cement-based putty that fills cracks and levels surfaces—giving walls a silky-smooth finish and enhancing the final paint effect.</p>
                        <a href="#" class="bg-brand-buttondark text-white px-5 py-3 text-sm font-bold flex items-center justify-between w-max gap-3 hover:bg-brand-red transition rounded-lg">
                            VIEW PRODUCT <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- Product Card 6 -->
                <div class="w-full md:w-[calc(50%-12px)] lg:w-[calc(25%-18px)] flex-shrink-0 snap-center bg-white shadow-[0_4px_20px_rgba(0,0,0,0.06)] border border-gray-100 flex flex-col group">
                    <div class="h-64 bg-white flex items-center justify-center border-b border-gray-50 relative overflow-hidden">
                        <img src="images/product-image/primer-wc.png" alt="Wall Primer" class="max-h-full object-contain mix-blend-multiply group-hover:scale-105 transition-transform duration-500 w-full h-full">
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <h4 class="text-xl font-bold text-gray-900 mb-2">Primer</h4>
                        <p class="text-gray-500 text-sm mb-6 flex-1">A preparatory coating that improves paint adhesion, covers imperfections, and ensures a smoother, longer-lasting paint finish on all wall types.</p>
                        <a href="#" class="bg-brand-buttondark text-white px-5 py-3 text-sm font-bold flex items-center justify-between w-max gap-3 hover:bg-brand-red transition rounded-lg">
                            VIEW PRODUCT <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- Product Card 7 -->
                <div class="w-full md:w-[calc(50%-12px)] lg:w-[calc(25%-18px)] flex-shrink-0 snap-center bg-white shadow-[0_4px_20px_rgba(0,0,0,0.06)] border border-gray-100 flex flex-col group">
                    <div class="h-64 bg-white flex items-center justify-center border-b border-gray-50 relative overflow-hidden">
                        <img src="images/product-image/ready-mix-wc.png" alt="Ready Mix" class="max-h-full object-contain mix-blend-multiply group-hover:scale-105 transition-transform duration-500 w-full h-full">
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <h4 class="text-xl font-bold text-gray-900 mb-2">Ready Mix</h4>
                        <p class="text-gray-500 text-sm mb-6 flex-1"> Pre-blended plaster for internal and external walls—saves labor, reduces material errors, and delivers a uniform and smooth finish.</p>
                        <a href="#" class="bg-brand-buttondark text-white px-5 py-3 text-sm font-bold flex items-center justify-between w-max gap-3 hover:bg-brand-red transition rounded-lg">
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


<!-- Testimonials -->
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
                                “I’ve used many brands in the past, but Bull Strong’s wall putty gives a smoother finish and needs less sanding. My clients noticed the difference.”
                            </p>
                            <div class="text-center mt-auto">
                                <h4 class="font-bold text-black text-lg">Ramesh Mehta</h4>
                                <p class="text-gray-500 text-xs mt-1 italic">Site Contractor, Pune</p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-3">
                        <div
                            class="bg-white border border-gray-400 rounded-lg p-8 relative shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 h-full flex flex-col justify-between">
                            <i class="fas fa-quote-right absolute top-4 right-4 theme-red text-3xl"></i>
                            <p class="text-gray-800 text-sm text-center mt-6 mb-6 leading-relaxed font-medium">
                                “Our walls were damp and flaky until we tried Bull Strong Primer and Putty. It made the paint last longer and look better. Great value for money!”
                            </p>
                            <div class="text-center mt-auto">
                                <h4 class="font-bold text-black text-lg">Priya Shah</h4>
                                <p class="text-gray-500 text-xs mt-1 italic">Homeowner, Ahmedabad</p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-3">
                        <div
                            class="bg-white border border-gray-400 rounded-lg p-8 relative shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 h-full flex flex-col justify-between">
                            <i class="fas fa-quote-right absolute top-4 right-4 theme-red text-3xl"></i>
                            <p class="text-gray-800 text-sm text-center mt-6 mb-6 leading-relaxed font-medium">
                              “The tile adhesive from Bull Strong has excellent grip. We didn’t need to reapply or wait too long for the setting. Time-saving and solid bond.”
                            </p>
                            <div class="text-center mt-auto">
                                <h4 class="font-bold text-black text-lg">Amit Sharma</h4>
                                <p class="text-gray-500 text-xs mt-1 italic">Tile Mason, Lucknow</p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-3">
                        <div
                            class="bg-white border border-gray-400 rounded-lg p-8 relative shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 h-full flex flex-col justify-between">
                            <i class="fas fa-quote-right absolute top-4 right-4 theme-red text-3xl"></i>
                            <p class="text-gray-800 text-sm text-center mt-6 mb-6 leading-relaxed font-medium">
                               “My customers keep coming back for Bull Strong products. Quality is consistent, packaging is professional, and margins are decent. <br> Win-win for us.”
                            </p>
                            <div class="text-center mt-auto">
                                <h4 class="font-bold text-black text-lg">Ankit Jain</h4>
                                <p class="text-gray-500 text-xs mt-1 italic">Dealer, Indore</p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-3">
                        <div
                            class="bg-white border border-gray-400 rounded-lg p-8 relative shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 h-full flex flex-col justify-between">
                            <i class="fas fa-quote-right absolute top-4 right-4 theme-red text-3xl"></i>
                            <p class="text-gray-800 text-sm text-center mt-6 mb-6 leading-relaxed font-medium">
                               “Bull Strong’s SBR Latex worked wonders on our waterproofing site. It reduced cracks and leakage issues after the first coat itself.”
                            </p>
                            <div class="text-center mt-auto">
                                <h4 class="font-bold text-black text-lg">Vinod Yadav</h4>
                                <p class="text-gray-500 text-xs mt-1 italic">Civil Contractor, Mumbai</p>
                            </div>
                        </div>
                    </div>
                     <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-3">
                        <div
                            class="bg-white border border-gray-400 rounded-lg p-8 relative shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 h-full flex flex-col justify-between">
                            <i class="fas fa-quote-right absolute top-4 right-4 theme-red text-3xl"></i>
                            <p class="text-gray-800 text-sm text-center mt-6 mb-6 leading-relaxed font-medium">
                              “We recommend Bull Strong’s texture finish to all our clients. It’s easy to work with, and the final look is always elegant and sharp.”
                            </p>
                            <div class="text-center mt-auto">
                                <h4 class="font-bold text-black text-lg">Sneha Rao</h4>
                                <p class="text-gray-500 text-xs mt-1 italic">Interior Designer, Bengaluru</p>
                            </div>
                        </div>
                    </div>
                     <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-3">
                        <div
                            class="bg-white border border-gray-400 rounded-lg p-8 relative shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 h-full flex flex-col justify-between">
                            <i class="fas fa-quote-right absolute top-4 right-4 theme-red text-3xl"></i>
                            <p class="text-gray-800 text-sm text-center mt-6 mb-6 leading-relaxed font-medium">
                            “The tile cleaner really works on tough grout and soap stains. We used it in a client’s bathroom and kitchen – spotless results.”
                            </p>
                            <div class="text-center mt-auto">
                                <h4 class="font-bold text-black text-lg">Akash Verma</h4>
                                <p class="text-gray-500 text-xs mt-1 italic"> Contractor, Delhi</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>

<!-- Call to Action button -->
<section class="text-white py-16 relative overflow-hidden bg-cover bg-center"
    style="background-image: url('images/cts-bg.jpg');">

    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-black/70"></div>
    <div class="max-w-4xl mx-auto px-4 relative z-10 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Build Something Stronger?</h2>
        <p class="text-gray-300 mb-8 max-w-2xl mx-auto">Get in touch with our industrial specialists to discuss your project
            requirements and material specifications.</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="contact-us.php" class="bg-white text-[#ed3136] font-medium px-8 py-3 rounded hover:bg-gray-100 transition">Contact Us </a>
            <a href="#" class="bg-[#D32F2F] text-white font-medium px-8 py-3 rounded hover:bg-red-700 transition">Download Product Catalog</a>
        </div>
    </div>
</section>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        // --- Slider 1: Tile Care Products ---
        const track1 = document.getElementById('product-track');
        const prev1 = document.getElementById('prev-prod');
        const next1 = document.getElementById('next-prod');

        if (track1 && prev1 && next1) {
            const getScrollAmount = () => {
                const card = track1.querySelector('div');
                return card ? card.offsetWidth + 24 : 0;
            };

            next1.addEventListener('click', () => {
                track1.scrollBy({
                    left: getScrollAmount(),
                    behavior: 'smooth'
                });
            });

            prev1.addEventListener('click', () => {
                track1.scrollBy({
                    left: -getScrollAmount(),
                    behavior: 'smooth'
                });
            });
        }

        // --- Slider 2: Wall Care Products ---
        const track2 = document.getElementById('product-track-2');
        const prev2 = document.getElementById('prev-prod-2');
        const next2 = document.getElementById('next-prod-2');

        if (track2 && prev2 && next2) {
            const getScrollAmount = () => {
                const card = track2.querySelector('div');
                return card ? card.offsetWidth + 24 : 0;
            };

            next2.addEventListener('click', () => {
                track2.scrollBy({
                    left: getScrollAmount(),
                    behavior: 'smooth'
                });
            });

            prev2.addEventListener('click', () => {
                track2.scrollBy({
                    left: -getScrollAmount(),
                    behavior: 'smooth'
                });
            });
        }
    });
</script>
<script>
    function createInfiniteSlider(sliderId, prevBtn, nextBtn) {

        const slider = document.querySelector(`#${sliderId} .slides`);
        const slides = slider.querySelectorAll("img");

        let index = 1;
        const firstClone = slides[0].cloneNode(true);
        const lastClone = slides[slides.length - 1].cloneNode(true);

        firstClone.id = "first-clone";
        lastClone.id = "last-clone";

        slider.appendChild(firstClone);
        slider.prepend(lastClone);

        const allSlides = slider.querySelectorAll("img");

        slider.style.transform = `translateX(-${index * 100}%)`;

        function moveSlide() {
            slider.style.transition = "transform 0.7s ease";
            slider.style.transform = `translateX(-${index * 100}%)`;
        }

        document.getElementById(nextBtn).addEventListener("click", () => {
            if (index >= allSlides.length - 1) return;
            index++;
            moveSlide();
        });

        document.getElementById(prevBtn).addEventListener("click", () => {
            if (index <= 0) return;
            index--;
            moveSlide();
        });

        slider.addEventListener("transitionend", () => {

            if (allSlides[index].id === "first-clone") {
                slider.style.transition = "none";
                index = 1;
                slider.style.transform = `translateX(-${index * 100}%)`;
            }

            if (allSlides[index].id === "last-clone") {
                slider.style.transition = "none";
                index = allSlides.length - 2;
                slider.style.transform = `translateX(-${index * 100}%)`;
            }

        });

        // Auto slide
        setInterval(() => {
            index++;
            moveSlide();
        }, 5000);

    }

    createInfiniteSlider("desktopSlider", "desktopPrev", "desktopNext");
    createInfiniteSlider("mobileSlider", "mobilePrev", "mobileNext");
</script>


<?php
$content = ob_get_contents();
$active = 'home';
ob_end_clean();
require_once("master.php");
?>