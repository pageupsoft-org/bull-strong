<?php
ob_start();
?>
<section class="relative xl:h-[650px] lg:h-[450px] md:h-[300px] flex items-center justify-center text-white md:block hidden">
    <img src="images/product-image/product-list-banner.jpg" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/10"></div>
    <!-- <div class="relative text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-3">Our Product Range</h1>
        <p class="text-gray-200">Explore Tile and Wall Construction Solutions</p>
    </div> -->
</section>
<section class="relative h-[350px] sm:h-[500px] flex items-center justify-center text-white md:hidden block">
    <img src="images/product-image/product-list-mob.jpg" class="absolute inset-0 w-full h-full">
    <div class="absolute inset-0 bg-black/10"></div>
</section>

<section class="lg:py-20 md:py-10 py-6 bg-gray-50">
    <div class="container mx-auto px-4 space-y-20">
        <!-- TILE PRODUCTS -->
        <div>
            <div class="flex items-center justify-between mb-10">
                <h2 class="text-3xl font-bold text-brandDark">
                    Tile Care Product
                </h2>

                <button onclick="toggleSection('tileProducts')"
                    class="text-sm font-semibold text-brandRed border border-brandRed px-5 py-2 rounded-full hover:bg-brandRed hover:text-red-700 transition">
                    Hide
                </button>
            </div>

            <div id="tileProducts" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- product card -->
                <div class="group bg-white rounded-2xl shadow-md hover:shadow-2xl transition duration-500 overflow-hidden border border-gray-100">
                    <!-- Image Section -->
                    <div class="relative bg-gray-50 h-72 overflow-hidden">
                        <img src="images/product-image/tile-adhesive-tc.png" alt="Tile Adhesive"
                            class="transition duration-500 group-hover:scale-110 w-full">
                    </div>

                    <!-- Content -->
                    <div class="p-4">
                        <h3 class="md:text-xl text-lg font-semibold text-gray-900 mb-3">
                            Tile Adhesive
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">Specially formulated adhesive that ensures a stronger, longer-lasting bond for tiles—works on floors, walls, and wet areas without the mess of traditional cement. </p>

                        <!-- CTA -->
                        <a href="adhesive.php"
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
                    <div class="relative bg-gray-50 h-72 overflow-hidden">
                        <img src="images/product-image/tile-cleaner-tc.png" alt="Tile Cleaner"
                            class="transition duration-500 group-hover:scale-110 w-full">
                    </div>

                    <!-- Content -->
                    <div class="p-4">

                        <h3 class="md:text-xl text-lg font-semibold text-gray-900 mb-3">
                            Tile Cleaner
                        </h3>

                        <p class="text-gray-600 text-sm leading-relaxed mb-6">Effective tile cleaning solution that removes cement stains, dirt, and grime—restores shine and freshness to tiled surfaces effortlessly. </p>

                        <!-- CTA -->
                        <a href="tile-cleaner.php"
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
                    <div class="relative bg-gray-50 h-72 overflow-hidden">
                        <img src="images/product-image/tile-grout-tc.png" alt="Tile Grout"
                            class="transition duration-500 group-hover:scale-110 w-full">
                    </div>

                    <!-- Content -->
                    <div class="p-4">

                        <h3 class="md:text-xl text-lg font-semibold text-gray-900 mb-3">
                            Tile Grout
                        </h3>

                        <p class="text-gray-600 text-sm leading-relaxed mb-6">A flexible and crack-resistant filler for tile joints—prevents water seepage, resists fungal growth, and maintains a clean tiled appearance. </p>

                        <!-- CTA -->
                        <a href="tile-grout.php"
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
                    <div class="relative bg-gray-50 h-72 overflow-hidden">
                        <img src="images/product-image/epoxy-grout-tc.png" alt="Epoxy Grout"
                            class="transition duration-500 group-hover:scale-110 w-full">
                    </div>

                    <!-- Content -->
                    <div class="p-4">

                        <h3 class="md:text-xl text-lg font-semibold text-gray-900 mb-3">
                            Epoxy Grout
                        </h3>

                        <p class="text-gray-600 text-sm leading-relaxed mb-6">A premium joint filler for tiles that's resistant to stains, water, and chemicals—perfect for bathrooms, kitchens, and industrial spaces. </p>

                        <!-- CTA -->
                        <a href="epoxy-grout.php"
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
                    <div class="relative bg-gray-50 h-72 overflow-hidden">
                        <img src="images/product-image/sbr-latex-tc.png" alt="SBR Latex"
                            class="transition duration-500 group-hover:scale-110 w-full">
                    </div>

                    <!-- Content -->
                    <div class="p-4">

                        <h3 class="md:text-xl text-lg font-semibold text-gray-900 mb-3">
                            SBR Latex
                        </h3>

                        <p class="text-gray-600 text-sm leading-relaxed mb-6">A multipurpose bonding agent that strengthens cement mixes—ideal for waterproofing, crack repairs, and bonding old to new concrete surfaces. </p>

                        <!-- CTA -->
                        <a href="sbr-latex.php"
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
                    class="text-sm font-semibold text-brandRed border border-brandRed px-5 py-2 rounded-full hover:bg-brandRed hover:text-red-700 transition">
                    Hide
                </button>
            </div>

            <div id="wallProducts" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- product card -->
                <div class="group bg-white rounded-2xl shadow-md hover:shadow-2xl transition duration-500 overflow-hidden border border-gray-100">
                    <!-- Image Section -->
                    <div class="relative bg-gray-50 h-72 overflow-hidden">
                        <img src="images/product-image/aac-wc.png" alt="AAC (Block/Construction material)"
                            class="transition duration-500 group-hover:scale-110 w-full">

                        <!-- subtle gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/5 to-transparent"></div>
                    </div>

                    <!-- Content -->
                    <div class="p-4">

                        <h3 class="md:text-xl text-lg font-semibold text-gray-900 mb-3">
                            AAC (Block/Construction material)
                        </h3>

                        <p class="text-gray-600 text-sm leading-relaxed mb-6">A ready-mix mortar that provides excellent bonding strength for AAC blocks—minimizes wastage, reduces time, and improves wall stability. </p>

                        <!-- CTA -->
                        <a href="aac-block-adhesive.php"
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
                    <div class="relative bg-gray-50 h-72 overflow-hidden">
                        <img src="images/product-image/acrylic-distemper-wc.png" alt="Acrylic Distemper"
                            class="transition duration-500 group-hover:scale-110 w-full">
                    </div>

                    <!-- Content -->
                    <div class="p-4">

                        <h3 class="md:text-xl text-lg font-semibold text-gray-900 mb-3">
                            Acrylic Distemper
                        </h3>

                        <p class="text-gray-600 text-sm leading-relaxed mb-6">An affordable water-based wall paint that delivers a clean, matte look—suitable for interior walls and perfect for budget-friendly makeovers. </p>

                        <!-- CTA -->
                        <!-- <a href="#"
                            class="inline-flex items-center gap-2 text-brandRed font-semibold text-sm group-hover:gap-3 transition-all">
                            View Product
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a> -->
                    </div>
                </div>
                <div class="group bg-white rounded-2xl shadow-md hover:shadow-2xl transition duration-500 overflow-hidden border border-gray-100">
                    <!-- Image Section -->
                    <div class="relative bg-gray-50 h-72 overflow-hidden">
                        <img src="images/product-image/acrylic-texture-wc.png" alt="Acrylic Texture"
                            class="transition duration-500 group-hover:scale-110 w-full">
                    </div>

                    <!-- Content -->
                    <div class="p-4">

                        <h3 class="md:text-xl text-lg font-semibold text-gray-900 mb-3">
                            Acrylic Texture
                        </h3>

                        <p class="text-gray-600 text-sm leading-relaxed mb-6">Decorative finish that adds patterns and depth to walls—resistant to cracks and stains, ideal for creating visually appealing surfaces.
                        </p>

                        <!-- CTA -->
                        <!-- <a href="#"
                            class="inline-flex items-center gap-2 text-brandRed font-semibold text-sm group-hover:gap-3 transition-all">

                            View Product

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a> -->
                    </div>
                </div>
                <div class="group bg-white rounded-2xl shadow-md hover:shadow-2xl transition duration-500 overflow-hidden border border-gray-100">
                    <!-- Image Section -->
                    <div class="relative bg-gray-50 h-72 overflow-hidden">
                        <img src="images/product-image/exterior-emulsion-wc.png" alt="Exterior Emulsion"
                            class="transition duration-500 group-hover:scale-110 w-full">
                    </div>

                    <!-- Content -->
                    <div class="p-4">

                        <h3 class="md:text-xl text-lg font-semibold text-gray-900 mb-3">
                            Exterior Emulsion
                        </h3>

                        <p class="text-gray-600 text-sm leading-relaxed mb-6">A high-performance paint designed to protect exterior walls from harsh weather, UV rays, and fading—leaving your walls vibrant and durable for years. </p>

                        <!-- CTA -->
                        <!-- <a href="#"
                            class="inline-flex items-center gap-2 text-brandRed font-semibold text-sm group-hover:gap-3 transition-all">

                            View Product

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a> -->
                    </div>
                </div>
                <div class="group bg-white rounded-2xl shadow-md hover:shadow-2xl transition duration-500 overflow-hidden border border-gray-100">
                    <!-- Image Section -->
                    <div class="relative bg-gray-50 h-72 overflow-hidden">
                        <img src="images/product-image/plast-putty-wc.png" alt="Plast Putty"
                            class="transition duration-500 group-hover:scale-110 w-full">
                    </div>

                    <!-- Content -->
                    <div class="p-4">

                        <h3 class="md:text-xl text-lg font-semibold text-gray-900 mb-3">
                            Plast Putty
                        </h3>

                        <p class="text-gray-600 text-sm leading-relaxed mb-6">A white cement-based putty that fills cracks and levels surfaces—giving walls a silky-smooth finish and enhancing the final paint effect. </p>

                        <!-- CTA -->
                        <!-- <a href=""
                            class="inline-flex items-center gap-2 text-brandRed font-semibold text-sm group-hover:gap-3 transition-all">

                            View Product

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a> -->
                    </div>
                </div>
                <div class="group bg-white rounded-2xl shadow-md hover:shadow-2xl transition duration-500 overflow-hidden border border-gray-100">
                    <!-- Image Section -->
                    <div class="relative bg-gray-50 h-72 overflow-hidden">
                        <img src="images/product-image/primer-wc.png" alt="Primer"
                            class="transition duration-500 group-hover:scale-110 w-full">
                    </div>

                    <!-- Content -->
                    <div class="p-4">

                        <h3 class="md:text-xl text-lg font-semibold text-gray-900 mb-3">
                            Primer
                        </h3>

                        <p class="text-gray-600 text-sm leading-relaxed mb-6">A preparatory coating that improves paint adhesion, covers imperfections, and ensures a smoother, longer-lasting paint finish on all wall types. </p>

                        <!-- CTA -->
                        <!-- <a href=""
                            class="inline-flex items-center gap-2 text-brandRed font-semibold text-sm group-hover:gap-3 transition-all">

                            View Product

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a> -->
                    </div>
                </div>
                <div class="group bg-white rounded-2xl shadow-md hover:shadow-2xl transition duration-500 overflow-hidden border border-gray-100">
                    <!-- Image Section -->
                    <div class="relative bg-gray-50 h-72 overflow-hidden">
                        <img src="images/product-image/ready-mix-wc.png" alt="Ready Mix"
                            class="transition duration-500 group-hover:scale-110 w-full">
                    </div>

                    <!-- Content -->
                    <div class="p-4">
                        <h3 class="md:text-xl text-lg font-semibold text-gray-900 mb-3">
                            Ready Mix
                        </h3>

                        <p class="text-gray-600 text-sm leading-relaxed mb-6">Pre-blended plaster for internal and external walls—saves labor, reduces material errors, and delivers a uniform and smooth finish. </p>

                        <!-- CTA -->
                        <a href="ready-mix-plaster.php" class="inline-flex items-center gap-2 text-brandRed font-semibold text-sm group-hover:gap-3 transition-all">
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