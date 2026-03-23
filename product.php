<?php
ob_start();
?>
<style>
    .table-container::-webkit-scrollbar {
        height: 6px;
    }

    .table-container::-webkit-scrollbar-thumb {
        background: #cbd5e1;
        border-radius: 4px;
    }

    /* Custom Swiper Pagination Color to match brand */
    .swiper-pagination-bullet-active {
        background-color: #C82027 !important;
    }
</style>


<!-- Navbar -->
<nav class="border-b border-gray-200 sticky top-0 bg-white z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-20">
        <div class="flex-shrink-0 flex items-center gap-2">
            <i class="fa-solid fa-hippo text-3xl text-brandRed"></i>
            <span class="font-bold text-xl uppercase tracking-wider">Bull<br>Strong</span>
        </div>

        <div class="hidden md:flex space-x-8 items-center font-medium text-sm text-brandGrayText">
            <a href="#" class="hover:text-brandRed transition">About</a>
            <a href="#" class="hover:text-brandRed transition flex items-center gap-1">Products <i class="fa-solid fa-chevron-down text-xs"></i></a>
            <a href="#" class="hover:text-brandRed transition">Blog</a>
            <a href="#" class="hover:text-brandRed transition">Become Distributor</a>
        </div>

        <div class="hidden md:block">
            <a href="#" class="bg-brandRed text-white px-6 py-2 rounded font-medium hover:bg-red-800 transition">Contact</a>
        </div>

        <div class="md:hidden flex items-center">
            <button class="text-brandDark hover:text-brandRed">
                <i class="fa-solid fa-bars text-2xl"></i>
            </button>
        </div>
    </div>
</nav>

<!-- Main Content -->
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

    <!-- Top Section: Image & Sidebar Forms -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">

        <!-- Left Column: Product Info -->
        <div class="lg:col-span-8">
            <!-- Product Image -->
            <div class="bg-gray-100 rounded-lg overflow-hidden mb-8 h-64 md:h-96 flex items-center justify-center">
                <img src="https://placehold.co/800x400/eeeeee/999999?text=Product+Packaging+Image" alt="Bull Strong Tile Adhesive Bags" class="object-cover w-full h-full">
            </div>

            <!-- Product Title & Quick Specs -->
            <h1 class="text-3xl md:text-4xl font-bold mb-2">Bull Strong <span class="text-brandRed">Tile Adhesive</span></h1>
            <p class="text-brandGrayText mb-6 text-sm md:text-base">Type 2 (Class T High performance polymer modified adhesive) for industrial environments.</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-3 gap-x-6 text-sm text-brandDark font-medium mb-12">
                <div class="flex items-center gap-2"><i class="fa-regular fa-circle-check text-brandRed"></i> Fast & Economical</div>
                <div class="flex items-center gap-2"><i class="fa-regular fa-circle-check text-brandRed"></i> Great Workability & Skin Curing</div>
                <div class="flex items-center gap-2"><i class="fa-regular fa-circle-check text-brandRed"></i> High Bond Strength</div>
                <div class="flex items-center gap-2"><i class="fa-regular fa-circle-check text-brandRed"></i> High Shear Strength</div>
                <div class="flex items-center gap-2"><i class="fa-regular fa-circle-check text-brandRed"></i> Easy Application</div>
                <div class="flex items-center gap-2"><i class="fa-regular fa-circle-check text-brandRed"></i> Prolonged Adhesion & Hold</div>
            </div>

            <!-- Section: Product Features -->
            <div class="mb-12">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-6 h-1 bg-brandRed"></div>
                    <h2 class="text-2xl font-semibold">Product Features</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-brandGrayText bg-white">
                    <div class="flex gap-3 p-4 border border-gray-100 rounded shadow-sm">
                        <i class="fa-solid fa-shield-halved text-brandRed mt-1"></i>
                        <p>Factory prepared for consistent quality and ratio.</p>
                    </div>
                    <div class="flex gap-3 p-4 border border-gray-100 rounded shadow-sm">
                        <i class="fa-solid fa-layer-group text-brandRed mt-1"></i>
                        <p>Excellent adhesion on various masonry substrates.</p>
                    </div>
                    <div class="flex gap-3 p-4 border border-gray-100 rounded shadow-sm">
                        <i class="fa-solid fa-droplet text-brandRed mt-1"></i>
                        <p>Less powder formulation; fine weather mixing point ratio.</p>
                    </div>
                    <div class="flex gap-3 p-4 border border-gray-100 rounded shadow-sm">
                        <i class="fa-solid fa-hammer text-brandRed mt-1"></i>
                        <p>High productivity - high application speeds up project timelines.</p>
                    </div>
                    <div class="flex gap-3 p-4 border border-gray-100 rounded shadow-sm">
                        <i class="fa-solid fa-clock-rotate-left text-brandRed mt-1"></i>
                        <p>Minimal shrinkage properties for the end product.</p>
                    </div>
                    <div class="flex gap-3 p-4 border border-gray-100 rounded shadow-sm">
                        <i class="fa-solid fa-water text-brandRed mt-1"></i>
                        <p>Water resistant and slip resistant basic properties.</p>
                    </div>
                    <div class="flex gap-3 p-4 border border-gray-100 rounded shadow-sm">
                        <i class="fa-solid fa-leaf text-brandRed mt-1"></i>
                        <p>Eco friendly and sustainable manufacturing process.</p>
                    </div>
                </div>
            </div>

            <!-- Section: Technical Specifications -->
            <div class="mb-12">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-6 h-1 bg-brandRed"></div>
                    <h2 class="text-2xl font-semibold">Technical Specifications</h2>
                </div>
                <div class="table-container overflow-x-auto border border-gray-200 rounded-lg">
                    <table class="w-full text-sm text-left">
                        <thead class="bg-brandDark text-white">
                            <tr>
                                <th class="px-6 py-4 font-medium">Property</th>
                                <th class="px-6 py-4 font-medium">Specification</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr class="bg-brandLightGray">
                                <td class="px-6 py-4 font-medium text-brandDark">Product Type</td>
                                <td class="px-6 py-4 text-brandGrayText">Ready-Mix Cement/Plaster</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 font-medium text-brandDark">Application</td>
                                <td class="px-6 py-4 text-brandGrayText">Interior & Exterior Walls</td>
                            </tr>
                            <tr class="bg-brandLightGray">
                                <td class="px-6 py-4 font-medium text-brandDark">Suitable Areas</td>
                                <td class="px-6 py-4 text-brandGrayText">RCC, Brickwork, AAC Blocks, Stone Masonry</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 font-medium text-brandDark">Mixing</td>
                                <td class="px-6 py-4 text-brandGrayText">7-8 Liters of water per 40kg bag</td>
                            </tr>
                            <tr class="bg-brandLightGray">
                                <td class="px-6 py-4 font-medium text-brandDark">Reaction</td>
                                <td class="px-6 py-4 text-brandGrayText">Moisture Cured and air drying</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 font-medium text-brandDark">Color</td>
                                <td class="px-6 py-4 text-brandGrayText">Greyish Powder</td>
                            </tr>
                            <tr class="bg-brandLightGray">
                                <td class="px-6 py-4 font-medium text-brandDark">Packaging</td>
                                <td class="px-6 py-4 text-brandGrayText">20 kg packaged in BOPP Bag</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Section: Performance Comparison -->
            <div class="mb-12">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-6 h-1 bg-brandRed"></div>
                    <h2 class="text-2xl font-semibold">Performance Comparison</h2>
                </div>
                <div class="table-container overflow-x-auto border border-gray-200 rounded-lg">
                    <table class="w-full text-sm text-left">
                        <thead class="bg-brandDark text-white">
                            <tr>
                                <th class="px-6 py-4 font-medium">Features</th>
                                <th class="px-6 py-4 font-medium">Conventional Site Mix</th>
                                <th class="px-6 py-4 font-medium">Bull Strong T&P</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr class="bg-brandLightGray">
                                <td class="px-6 py-4 font-medium text-brandDark">Surface Smoothness</td>
                                <td class="px-6 py-4 text-brandGrayText">Rough & Irregular</td>
                                <td class="px-6 py-4 text-green-600 font-medium">Superior & Compact</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 font-medium text-brandDark">Crack Resistance</td>
                                <td class="px-6 py-4 text-brandGrayText">Highly Prone</td>
                                <td class="px-6 py-4 text-green-600 font-medium">Minimal/ Nil</td>
                            </tr>
                            <tr class="bg-brandLightGray">
                                <td class="px-6 py-4 font-medium text-brandDark">Mix Consistency</td>
                                <td class="px-6 py-4 text-brandGrayText">Varies per labor</td>
                                <td class="px-6 py-4 text-green-600 font-medium">Unwavering Quality</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 font-medium text-brandDark">Adhesive Strength</td>
                                <td class="px-6 py-4 text-brandGrayText">Average</td>
                                <td class="px-6 py-4 text-green-600 font-medium">Very High Bond</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Section: Usage Method -->
            <div class="mb-12">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-6 h-1 bg-brandRed"></div>
                    <h2 class="text-2xl font-semibold">Usage Method</h2>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <div class="bg-brandLightGray border border-gray-200 rounded-lg p-6 text-center flex flex-col items-center justify-center">
                        <div class="w-10 h-10 rounded-full bg-brandRed text-white flex items-center justify-center font-bold mb-3 shadow-md">1</div>
                        <h3 class="font-bold text-sm mb-1">Mixing</h3>
                        <p class="text-xs text-brandGrayText">4 parts to 1 part water</p>
                    </div>
                    <div class="bg-brandLightGray border border-gray-200 rounded-lg p-6 text-center flex flex-col items-center justify-center">
                        <div class="w-10 h-10 rounded-full bg-brandRed text-white flex items-center justify-center font-bold mb-3 shadow-md">2</div>
                        <h3 class="font-bold text-sm mb-1">Resting</h3>
                        <p class="text-xs text-brandGrayText">Rest for 5 mins</p>
                    </div>
                    <div class="bg-brandLightGray border border-gray-200 rounded-lg p-6 text-center flex flex-col items-center justify-center">
                        <div class="w-10 h-10 rounded-full bg-brandRed text-white flex items-center justify-center font-bold mb-3 shadow-md">3</div>
                        <h3 class="font-bold text-sm mb-1">Surface Prep</h3>
                        <p class="text-xs text-brandGrayText">Clean surface area</p>
                    </div>
                    <div class="bg-brandLightGray border border-gray-200 rounded-lg p-6 text-center flex flex-col items-center justify-center">
                        <div class="w-10 h-10 rounded-full bg-brandRed text-white flex items-center justify-center font-bold mb-3 shadow-md">4</div>
                        <h3 class="font-bold text-sm mb-1">Application</h3>
                        <p class="text-xs text-brandGrayText">Apply in smooth strokes</p>
                    </div>
                    <div class="bg-brandLightGray border border-gray-200 rounded-lg p-6 text-center flex flex-col items-center justify-center">
                        <div class="w-10 h-10 rounded-full bg-brandRed text-white flex items-center justify-center font-bold mb-3 shadow-md">5</div>
                        <h3 class="font-bold text-sm mb-1">Finishing</h3>
                        <p class="text-xs text-brandGrayText">Level with trowel</p>
                    </div>
                    <div class="bg-brandLightGray border border-gray-200 rounded-lg p-6 text-center flex flex-col items-center justify-center">
                        <div class="w-10 h-10 rounded-full bg-brandRed text-white flex items-center justify-center font-bold mb-3 shadow-md">6</div>
                        <h3 class="font-bold text-sm mb-1">Curing</h3>
                        <p class="text-xs text-brandGrayText">Let set undisturbed for 24h</p>
                    </div>
                </div>
            </div>

            <!-- Section: Key Features / Documents -->
            <div class="mb-12">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-6 h-1 bg-brandRed"></div>
                    <h2 class="text-2xl font-semibold">Key Features</h2>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <a href="#" class="flex items-center gap-4 p-4 border border-gray-200 rounded-lg hover:shadow-md transition">
                        <i class="fa-regular fa-file-pdf text-3xl text-brandRed"></i>
                        <div>
                            <h4 class="font-bold text-sm">Technical Data Sheet</h4>
                            <p class="text-xs text-brandGrayText">PDF • 1.2 MB</p>
                        </div>
                    </a>
                    <a href="#" class="flex items-center gap-4 p-4 border border-gray-200 rounded-lg hover:shadow-md transition">
                        <i class="fa-regular fa-file-pdf text-3xl text-brandRed"></i>
                        <div>
                            <h4 class="font-bold text-sm">Material Brochure</h4>
                            <p class="text-xs text-brandGrayText">PDF • 2.5 MB</p>
                        </div>
                    </a>
                </div>
            </div>

        </div>

        <!-- Right Column: Forms -->
        <div class="lg:col-span-4 space-y-6">
            <!-- Coverage Calculator Box -->
            <div class="bg-red-50 rounded-lg p-6 border border-red-100 shadow-sm">
                <div class="flex items-center gap-2 mb-4 text-brandRed font-bold">
                    <i class="fa-solid fa-calculator"></i>
                    <h3>COVERAGE CALCULATOR</h3>
                </div>
                <form class="space-y-4">
                    <div>
                        <label class="block text-xs font-medium text-brandDark mb-1">Total area size (sq.ft)</label>
                        <input type="number" placeholder="e.g. 100" class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:border-brandRed">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-brandDark mb-1">Tile Size</label>
                        <select class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:border-brandRed bg-white">
                            <option>Select your tile size</option>
                            <option>300x300 mm</option>
                            <option>600x600 mm</option>
                        </select>
                    </div>
                    <div class="pt-2">
                        <button type="button" class="w-full bg-white border border-gray-300 text-brandDark font-medium rounded px-4 py-2 text-sm flex justify-between items-center hover:bg-gray-50 transition">
                            <span class="text-brandGrayText">Select your area</span>
                            <i class="fa-solid fa-location-dot text-brandRed"></i>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Request a Quote Box -->
            <div class="bg-white rounded-lg p-6 border-2 border-red-100 shadow-sm">
                <h3 class="font-bold text-xl mb-2">Request a Quote</h3>
                <p class="text-xs text-brandGrayText mb-5">Fill the details below for bulk pricing quotations. Our specialists will call you shortly.</p>
                <form class="space-y-4">
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <label class="block text-xs font-medium text-brandDark mb-1">First Name</label>
                            <input type="text" class="w-full bg-gray-50 border border-gray-200 rounded px-3 py-2 text-sm focus:outline-none focus:border-brandRed">
                        </div>
                        <div>
                            <label class="block text-xs font-medium text-brandDark mb-1">Last Name</label>
                            <input type="text" class="w-full bg-gray-50 border border-gray-200 rounded px-3 py-2 text-sm focus:outline-none focus:border-brandRed">
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-brandDark mb-1">Mobile Number</label>
                        <input type="tel" class="w-full bg-gray-50 border border-gray-200 rounded px-3 py-2 text-sm focus:outline-none focus:border-brandRed">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-brandDark mb-1">Business Name (Optional)</label>
                        <input type="text" class="w-full bg-gray-50 border border-gray-200 rounded px-3 py-2 text-sm focus:outline-none focus:border-brandRed">
                    </div>
                    <button type="submit" class="w-full bg-brandRed text-white font-medium rounded px-4 py-2 mt-2 hover:bg-red-800 transition flex items-center justify-center gap-2">
                        Get Quote <i class="fa-solid fa-arrow-right text-sm"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Section: Related Products (NOW A RESPONSIVE SLIDER) -->
    <div class="mt-16 mb-8">
        <div class="flex items-center gap-3 mb-8">
            <div class="w-6 h-1 bg-brandRed"></div>
            <h2 class="text-2xl font-semibold">Related Products</h2>
        </div>

        <!-- 2. SWIPER HTML STRUCTURE -->
        <div class="swiper relatedProductsSwiper">
            <div class="swiper-wrapper pb-12"> <!-- Added padding bottom to make room for pagination dots -->

                <!-- Slide 1 -->
                <div class="swiper-slide h-auto">
                    <div class="border border-gray-200 rounded-lg p-4 flex flex-col hover:shadow-lg transition bg-white h-full">
                        <img src="https://placehold.co/400x300/eeeeee/999999?text=Tile+Adhesive" alt="Tile Adhesive" class="w-full h-40 object-contain mb-4">
                        <h3 class="font-bold text-lg mb-1">Tile Adhesive</h3>
                        <p class="text-xs text-brandGrayText mb-4 flex-grow">High dispersion semi-liquid paste for interior walls.</p>
                        <a href="#" class="bg-brandDark text-white text-xs font-medium py-2 px-4 rounded self-start hover:bg-gray-800 transition">VIEW PRODUCT <i class="fa-solid fa-caret-right ml-1"></i></a>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide h-auto">
                    <div class="border border-gray-200 rounded-lg p-4 flex flex-col hover:shadow-lg transition bg-white h-full">
                        <img src="https://placehold.co/400x300/eeeeee/999999?text=Tile+Cleaner" alt="Tile Cleaner" class="w-full h-40 object-contain mb-4">
                        <h3 class="font-bold text-lg mb-1">Tile Cleaner</h3>
                        <p class="text-xs text-brandGrayText mb-4 flex-grow">Advanced stain removal formulation for external walls.</p>
                        <a href="#" class="bg-brandDark text-white text-xs font-medium py-2 px-4 rounded self-start hover:bg-gray-800 transition">VIEW PRODUCT <i class="fa-solid fa-caret-right ml-1"></i></a>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide h-auto">
                    <div class="border border-gray-200 rounded-lg p-4 flex flex-col hover:shadow-lg transition bg-white h-full">
                        <img src="https://placehold.co/400x300/eeeeee/999999?text=Tile+Grout" alt="Tile Grout" class="w-full h-40 object-contain mb-4">
                        <h3 class="font-bold text-lg mb-1">Tile Grout</h3>
                        <p class="text-xs text-brandGrayText mb-4 flex-grow">High adhesion joint formulation for internal walls.</p>
                        <a href="#" class="bg-brandDark text-white text-xs font-medium py-2 px-4 rounded self-start hover:bg-gray-800 transition">VIEW PRODUCT <i class="fa-solid fa-caret-right ml-1"></i></a>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="swiper-slide h-auto">
                    <div class="border border-gray-200 rounded-lg p-4 flex flex-col hover:shadow-lg transition bg-white h-full">
                        <img src="https://placehold.co/400x300/eeeeee/999999?text=Epoxy+Grout" alt="Epoxy Grout" class="w-full h-40 object-contain mb-4">
                        <h3 class="font-bold text-lg mb-1">Epoxy Grout</h3>
                        <p class="text-xs text-brandGrayText mb-4 flex-grow">High adhesion semi-liquid paste for interior walls.</p>
                        <a href="#" class="bg-brandDark text-white text-xs font-medium py-2 px-4 rounded self-start hover:bg-gray-800 transition">VIEW PRODUCT <i class="fa-solid fa-caret-right ml-1"></i></a>
                    </div>
                </div>

                <!-- Slide 5 (Duplicate for slider effect) -->
                <div class="swiper-slide h-auto">
                    <div class="border border-gray-200 rounded-lg p-4 flex flex-col hover:shadow-lg transition bg-white h-full">
                        <img src="https://placehold.co/400x300/eeeeee/999999?text=Waterproofing" alt="Waterproofing" class="w-full h-40 object-contain mb-4">
                        <h3 class="font-bold text-lg mb-1">Waterproofing</h3>
                        <p class="text-xs text-brandGrayText mb-4 flex-grow">Heavy-duty water resistance for wet areas.</p>
                        <a href="#" class="bg-brandDark text-white text-xs font-medium py-2 px-4 rounded self-start hover:bg-gray-800 transition">VIEW PRODUCT <i class="fa-solid fa-caret-right ml-1"></i></a>
                    </div>
                </div>

                <!-- Slide 6 (Duplicate for slider effect) -->
                <div class="swiper-slide h-auto">
                    <div class="border border-gray-200 rounded-lg p-4 flex flex-col hover:shadow-lg transition bg-white h-full">
                        <img src="https://placehold.co/400x300/eeeeee/999999?text=Wall+Putty" alt="Wall Putty" class="w-full h-40 object-contain mb-4">
                        <h3 class="font-bold text-lg mb-1">Wall Putty</h3>
                        <p class="text-xs text-brandGrayText mb-4 flex-grow">Smooth finish white cement-based putty.</p>
                        <a href="#" class="bg-brandDark text-white text-xs font-medium py-2 px-4 rounded self-start hover:bg-gray-800 transition">VIEW PRODUCT <i class="fa-solid fa-caret-right ml-1"></i></a>
                    </div>
                </div>

            </div>
            <!-- Pagination Dots -->
            <div class="swiper-pagination"></div>
        </div>
    </div>

</main>

<!-- Call to Action Banner -->
<section class="bg-brandDark text-white py-16 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-cover bg-center" style="background-image: url('https://placehold.co/1920x400/000000/333333?text=Industrial+Background');"></div>
    <div class="max-w-4xl mx-auto px-4 relative z-10 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Build Something Stronger?</h2>
        <p class="text-gray-300 mb-8 max-w-2xl mx-auto">Get in touch with our industrial specialists to discuss your project requirements and material specifications.</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="#" class="bg-white text-brandDark font-medium px-8 py-3 rounded hover:bg-gray-100 transition">Contact Us</a>
            <a href="#" class="bg-brandRed text-white font-medium px-8 py-3 rounded hover:bg-red-700 transition">Download Product Catalog</a>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-[#151d2a] text-gray-300 py-12 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <div>
            <div class="flex items-center gap-2 mb-4">
                <i class="fa-solid fa-hippo text-3xl text-brandRed"></i>
                <span class="font-bold text-xl uppercase tracking-wider text-white">Bull<br>Strong</span>
            </div>
        </div>
        <div>
            <h4 class="text-white font-bold mb-4">Quick Links</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="#" class="hover:text-brandRed transition">Home</a></li>
                <li><a href="#" class="hover:text-brandRed transition">Products</a></li>
                <li><a href="#" class="hover:text-brandRed transition">About</a></li>
                <li><a href="#" class="hover:text-brandRed transition">Contact</a></li>
            </ul>
        </div>
        <div>
            <h4 class="text-white font-bold mb-4">Contact Info</h4>
            <ul class="space-y-3 text-sm">
                <li class="flex items-start gap-2">
                    <i class="fa-solid fa-envelope mt-1 text-brandRed"></i>
                    <span>info@bullstrong.com</span>
                </li>
                <li class="flex items-start gap-2">
                    <i class="fa-solid fa-phone mt-1 text-brandRed"></i>
                    <span>+91 99999 99999</span>
                </li>
            </ul>
        </div>
        <div>
            <h4 class="text-white font-bold mb-4">Follow Us</h4>
            <div class="flex gap-4">
                <a href="#" class="text-gray-400 hover:text-white transition"><i class="fa-brands fa-facebook text-xl"></i></a>
                <a href="#" class="text-gray-400 hover:text-white transition"><i class="fa-brands fa-instagram text-xl"></i></a>
                <a href="#" class="text-gray-400 hover:text-white transition"><i class="fa-brands fa-youtube text-xl"></i></a>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-12 pt-6 border-t border-gray-800 text-center text-xs text-gray-500 flex flex-col sm:flex-row justify-between items-center gap-4">
        <p>&copy; 2026 Design & Developed by Bull Strong Services Pvt. Ltd. • All rights reserved.</p>
        <div class="w-8 h-8 rounded-full bg-brandRed text-white flex items-center justify-center cursor-pointer hover:bg-red-700" onclick="window.scrollTo(0,0)">
            <i class="fa-solid fa-arrow-up"></i>
        </div>
    </div>
</footer>

<!-- 3. ADD SWIPER JS & INITIALIZE -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var swiper = new Swiper(".relatedProductsSwiper", {
            slidesPerView: 1, // 1 slide on mobile
            spaceBetween: 24, // Gap between slides
            loop: true, // Infinite loop
            autoplay: {
                delay: 3000, // Wait 3 seconds between slides
                disableOnInteraction: false, // Keep playing after user swipes
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2, // 2 slides on tablets
                },
                1024: {
                    slidesPerView: 4, // 4 slides on desktop
                },
            },
        });
    });
</script>

<?php
$content = ob_get_contents();
$active = 'Product';
ob_end_clean();
require_once("master.php");
?>