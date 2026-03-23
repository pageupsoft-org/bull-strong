<?php
ob_start();
?>
<section class="relative h-[320px] flex items-center justify-center text-white">

    <img src="images/banner.jpg" class="absolute inset-0 w-full h-full object-cover">

    <div class="absolute inset-0 bg-black/60"></div>

    <div class="relative text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-3">Our Product Range</h1>
        <p class="text-gray-200">Explore Tile and Wall Construction Solutions</p>
    </div>

</section>

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 space-y-20">

        <!-- TILE PRODUCTS -->

        <div>

            <div class="flex items-center justify-between mb-10">
                <h2 class="text-3xl font-bold text-brandDark">
                  Tile Care Product
                </h2>

                <button onclick="toggleSection('tileProducts')"
                    class="text-sm font-semibold text-brandRed border border-brandRed px-5 py-2 rounded-full hover:bg-brandRed hover:text-white transition">
                    Hide
                </button>
            </div>


            <div id="tileProducts" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- product card -->
                <div class="group bg-white rounded-2xl shadow-md hover:shadow-2xl transition duration-500 overflow-hidden border border-gray-100">
                    <!-- Image Section -->
                    <div class="relative bg-gray-50 flex items-center justify-center h-72 overflow-hidden">
                        <img src="images/tile-cleaner.png"
                            class="h-60 object-contain transition duration-500 group-hover:scale-110">

                        <!-- subtle gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/5 to-transparent"></div>
                    </div>

                    <!-- Content -->
                    <div class="p-7">

                        <h3 class="text-2xl font-bold text-gray-900 mb-3">
                            Tile Cleaner
                        </h3>

                        <p class="text-gray-600 text-sm leading-relaxed mb-6">
                            High-adhesion water-based primer designed for exterior surfaces and
                            professional tile cleaning applications.
                        </p>

                        <!-- CTA -->
                        <a href="#"
                            class="inline-flex items-center gap-2 text-brandRed font-semibold text-sm group-hover:gap-3 transition-all">

                            View Product

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="group bg-white rounded-2xl shadow-md hover:shadow-2xl transition duration-500 overflow-hidden border border-gray-100">
                    <!-- Image Section -->
                    <div class="relative bg-gray-50 flex items-center justify-center h-72 overflow-hidden">
                        <img src="images/tile-cleaner.png"
                            class="h-60 object-contain transition duration-500 group-hover:scale-110">

                        <!-- subtle gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/5 to-transparent"></div>
                    </div>

                    <!-- Content -->
                    <div class="p-7">

                        <h3 class="text-2xl font-bold text-gray-900 mb-3">
                            Tile Cleaner
                        </h3>

                        <p class="text-gray-600 text-sm leading-relaxed mb-6">
                            High-adhesion water-based primer designed for exterior surfaces and
                            professional tile cleaning applications.
                        </p>

                        <!-- CTA -->
                        <a href="#"
                            class="inline-flex items-center gap-2 text-brandRed font-semibold text-sm group-hover:gap-3 transition-all">

                            View Product

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="group bg-white rounded-2xl shadow-md hover:shadow-2xl transition duration-500 overflow-hidden border border-gray-100">
                    <!-- Image Section -->
                    <div class="relative bg-gray-50 flex items-center justify-center h-72 overflow-hidden">
                        <img src="images/tile-cleaner.png"
                            class="h-60 object-contain transition duration-500 group-hover:scale-110">

                        <!-- subtle gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/5 to-transparent"></div>
                    </div>

                    <!-- Content -->
                    <div class="p-7">

                        <h3 class="text-2xl font-bold text-gray-900 mb-3">
                            Tile Cleaner
                        </h3>

                        <p class="text-gray-600 text-sm leading-relaxed mb-6">
                            High-adhesion water-based primer designed for exterior surfaces and
                            professional tile cleaning applications.
                        </p>

                        <!-- CTA -->
                        <a href="#"
                            class="inline-flex items-center gap-2 text-brandRed font-semibold text-sm group-hover:gap-3 transition-all">

                            View Product

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="group bg-white rounded-2xl shadow-md hover:shadow-2xl transition duration-500 overflow-hidden border border-gray-100">
                    <!-- Image Section -->
                    <div class="relative bg-gray-50 flex items-center justify-center h-72 overflow-hidden">
                        <img src="images/tile-cleaner.png"
                            class="h-60 object-contain transition duration-500 group-hover:scale-110">

                        <!-- subtle gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/5 to-transparent"></div>
                    </div>

                    <!-- Content -->
                    <div class="p-7">

                        <h3 class="text-2xl font-bold text-gray-900 mb-3">
                            Tile Cleaner
                        </h3>

                        <p class="text-gray-600 text-sm leading-relaxed mb-6">
                            High-adhesion water-based primer designed for exterior surfaces and
                            professional tile cleaning applications.
                        </p>

                        <!-- CTA -->
                        <a href="#"
                            class="inline-flex items-center gap-2 text-brandRed font-semibold text-sm group-hover:gap-3 transition-all">

                            View Product

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>



        <!-- WALL PRODUCTS -->

        <div id="wallcardlist">

            <div class="flex items-center justify-between mb-10">

                <h2 class="text-3xl font-bold text-brandDark">
                    Wall Products
                </h2>

                <button onclick="toggleSection('wallProducts')"
                    class="text-sm font-semibold text-brandRed border border-brandRed px-5 py-2 rounded-full hover:bg-brandRed hover:text-white transition">
                    Hide
                </button>

            </div>


            <div id="wallProducts" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
 <!-- product card -->
                <div class="group bg-white rounded-2xl shadow-md hover:shadow-2xl transition duration-500 overflow-hidden border border-gray-100">
                    <!-- Image Section -->
                    <div class="relative bg-gray-50 flex items-center justify-center h-72 overflow-hidden">
                        <img src="images/tile-cleaner.png"
                            class="h-60 object-contain transition duration-500 group-hover:scale-110">

                        <!-- subtle gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/5 to-transparent"></div>
                    </div>

                    <!-- Content -->
                    <div class="p-7">

                        <h3 class="text-2xl font-bold text-gray-900 mb-3">
                            Tile Cleaner
                        </h3>

                        <p class="text-gray-600 text-sm leading-relaxed mb-6">
                            High-adhesion water-based primer designed for exterior surfaces and
                            professional tile cleaning applications.
                        </p>

                        <!-- CTA -->
                        <a href="#"
                            class="inline-flex items-center gap-2 text-brandRed font-semibold text-sm group-hover:gap-3 transition-all">

                            View Product

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="group bg-white rounded-2xl shadow-md hover:shadow-2xl transition duration-500 overflow-hidden border border-gray-100">
                    <!-- Image Section -->
                    <div class="relative bg-gray-50 flex items-center justify-center h-72 overflow-hidden">
                        <img src="images/tile-cleaner.png"
                            class="h-60 object-contain transition duration-500 group-hover:scale-110">

                        <!-- subtle gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/5 to-transparent"></div>
                    </div>

                    <!-- Content -->
                    <div class="p-7">

                        <h3 class="text-2xl font-bold text-gray-900 mb-3">
                            Tile Cleaner
                        </h3>

                        <p class="text-gray-600 text-sm leading-relaxed mb-6">
                            High-adhesion water-based primer designed for exterior surfaces and
                            professional tile cleaning applications.
                        </p>

                        <!-- CTA -->
                        <a href="#"
                            class="inline-flex items-center gap-2 text-brandRed font-semibold text-sm group-hover:gap-3 transition-all">

                            View Product

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="group bg-white rounded-2xl shadow-md hover:shadow-2xl transition duration-500 overflow-hidden border border-gray-100">
                    <!-- Image Section -->
                    <div class="relative bg-gray-50 flex items-center justify-center h-72 overflow-hidden">
                        <img src="images/tile-cleaner.png"
                            class="h-60 object-contain transition duration-500 group-hover:scale-110">

                        <!-- subtle gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/5 to-transparent"></div>
                    </div>

                    <!-- Content -->
                    <div class="p-7">

                        <h3 class="text-2xl font-bold text-gray-900 mb-3">
                            Tile Cleaner
                        </h3>

                        <p class="text-gray-600 text-sm leading-relaxed mb-6">
                            High-adhesion water-based primer designed for exterior surfaces and
                            professional tile cleaning applications.
                        </p>

                        <!-- CTA -->
                        <a href="#"
                            class="inline-flex items-center gap-2 text-brandRed font-semibold text-sm group-hover:gap-3 transition-all">

                            View Product

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="group bg-white rounded-2xl shadow-md hover:shadow-2xl transition duration-500 overflow-hidden border border-gray-100">
                    <!-- Image Section -->
                    <div class="relative bg-gray-50 flex items-center justify-center h-72 overflow-hidden">
                        <img src="images/tile-cleaner.png"
                            class="h-60 object-contain transition duration-500 group-hover:scale-110">

                        <!-- subtle gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/5 to-transparent"></div>
                    </div>

                    <!-- Content -->
                    <div class="p-7">

                        <h3 class="text-2xl font-bold text-gray-900 mb-3">
                            Tile Cleaner
                        </h3>

                        <p class="text-gray-600 text-sm leading-relaxed mb-6">
                            High-adhesion water-based primer designed for exterior surfaces and
                            professional tile cleaning applications.
                        </p>

                        <!-- CTA -->
                        <a href="#"
                            class="inline-flex items-center gap-2 text-brandRed font-semibold text-sm group-hover:gap-3 transition-all">

                            View Product

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

        </div>


    </div>

</section>

<script>
    function toggleSection(id) {

        const section = document.getElementById(id);

        if (section.style.display === "none") {
            section.style.display = "grid";
        } else {
            section.style.display = "none";
        }

    }
</script>


<?php
$content = ob_get_contents();
$active = 'Product List';
ob_end_clean();
require_once("master.php");
?>