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

    .text-brandDark {
        color: #737373;
    }

    .text-brandRed {
        color: #E83338;
    }

    .text-brandGrayText {
        color: #525252;
    }

    .bg-brandLightGray {
        background-color: #F6F6F6;
    }

    .bg-brandRed {
        background-color: #D32F2F;
    }
</style>


<!-- Main Content -->
<main class="container mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <!-- Top Section: Image & Sidebar Forms -->
    <div class="grid grid-cols-1 lg:grid-cols-12 lg:gap-10 gap-0">
        <!-- Left Column: Product Info -->
        <div class="lg:col-span-8">
            <!-- Product Image -->
            <div class="bg-gray-100 rounded-lg overflow-hidden mb-8 h-64 md:h-96 flex items-center justify-center">
                <img src="images/ready-mix.png" alt="Bull Strong Tile Adhesive Bags" class="object-cover w-full h-full">
            </div>

            <!-- tabinations  -->
            <div class="max-w-4xl mx-auto">
                <!-- Tabs -->
                <div class="flex flex-wrap border-b border-gray-100">
                    <button class="tab-btn px-4 py-2 text-md font-semibold border-b-2 border-brandRed text-brandRed" onclick="showTab('gold')">
                        <img src="images/adhesive-variation/gold.jpg" alt="product" class="w-20 rounded-lg h-20 shadow-lg border border-100 mb-2" onclick="showTab('gold')">
                        Gold</button>
                    <button class="tab-btn px-4 py-2 text-md font-semibold text-gray-600" onclick="showTab('silver')">
                        <img src="images/adhesive-variation/silver.jpg" alt="product" class="w-20 rounded-lg h-20 shadow-lg border border-100 mb-2" onclick="showTab('silver')">Silver</button>
                    <button class="tab-btn px-4 py-2 text-md font-semibold text-gray-600" onclick="showTab('diamond')">
                        <img src="images/adhesive-variation/diamond.jpg" alt="product" class="w-20 rounded-lg h-20 shadow-lg border border-100 mb-2">Diamond</button>
                    <button class="tab-btn px-4 py-2 text-md font-semibold text-gray-600" onclick="showTab('platinum')">
                        <img src="images/adhesive-variation/platinum.jpg" alt="product" class="w-20 rounded-lg h-20 shadow-lg border border-100 mb-2">Platinum</button>
                    <button class="tab-btn px-4 py-2 text-md font-semibold text-gray-600" onclick="showTab('premium')">
                        <img src="images/adhesive-variation/premium-platinum.jpg" alt="product" class="w-20 rounded-lg h-20 shadow-lg border border-100 mb-2">Premium Platinum</button>
                </div>

                <!-- Tab Content -->
                <div class="md:py-6 pt-6">
                    <!-- gold  -->
                    <div id="gold" class="tab-content">
                        <h3 class="text-3xl md:text-4xl font-bold mb-2">Bull Strong <span class="text-brandRed">GOLD Tile Adhesive</span></h3>
                        <p class="text-brandGrayText mb-6 text-sm md:text-base">High-quality adhesive for fixing ceramic and vitrified tiles on walls and floors.</p>

                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-6 h-1 bg-[#b01620]"></div>
                            <h2 class="text-2xl font-semibold">Benefits</h2>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-3 gap-x-6 text-sm text-brandDark font-medium mb-12">
                            <div class="flex items-center gap-2"><i class="fa-regular fa-circle-check text-[#b01620]"></i> Strong bonding for ceramic & vitrified tiles</div>
                            <div class="flex items-center gap-2"><i class="fa-regular fa-circle-check text-[#b01620]"></i> Smooth application</div>
                            <div class="flex items-center gap-2"><i class="fa-regular fa-circle-check text-[#b01620]"></i> Suitable for wall & floor tiles</div>
                            <div class="flex items-center gap-2"><i class="fa-regular fa-circle-check text-[#b01620]"></i> Interior and exterior applications</div>
                        </div>

                        <!-- Section: Product Features -->
                        <div class="mb-12">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="w-6 h-1 bg-[#b01620]"></div>
                                <h2 class="text-2xl font-semibold">Product Features</h2>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2 p-4 text-md rounded-lg text-brandGrayText bg-[#F3F3F3]">
                                <div class="flex gap-3 p-2">
                                    <i class="fa-regular fa-circle-check text-[#b01620] mt-1"></i>
                                    <p>Thin-set polymer adhesive</p>
                                </div>
                                <div class="flex gap-3 p-2">
                                    <i class="fa-regular fa-circle-check text-[#b01620] mt-1"></i>
                                    <p>Smooth and creamy consistency</p>
                                </div>
                                <div class="flex gap-3 p-2">
                                    <i class="fa-regular fa-circle-check text-[#b01620] mt-1"></i>
                                    <p>Enhanced bonding strength</p>
                                </div>
                                <div class="flex gap-3 p-2">
                                    <i class="fa-regular fa-circle-check text-[#b01620] mt-1"></i>
                                    <p>Suitable for multiple substrates</p>
                                </div>
                                <div class="flex gap-3 p-2">
                                    <i class="fa-regular fa-circle-check text-[#b01620] mt-1"></i>
                                    <p>Ideal for residential and commercial tiling</p>
                                </div>

                            </div>
                        </div>

                        <!-- Section: Technical Specifications -->
                        <div class="mb-12">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="w-6 h-1 bg-[#b01620]"></div>
                                <h2 class="text-2xl font-semibold">Technical Specifications</h2>
                            </div>
                            <div class="table-container overflow-x-auto border border-gray-200 rounded-lg">
                                <table class="w-full text-md text-left">
                                    <thead class="bg-[#1F2937] text-white">
                                        <tr>
                                            <th class="px-6 py-4 font-medium">Parameter</th>
                                            <th class="px-6 py-4 font-medium">Specification</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-[#F9F9F9]">
                                        <tr class="bg-brandLightGray">
                                            <td class="px-6 py-4 font-medium text-brandDark">Tile Type</td>
                                            <td class="px-6 py-4 text-brandGrayText">Ceramic & Vitrified</td>
                                        </tr>
                                        <tr class="bg-[#F3F3F3]">
                                            <td class="px-6 py-4 font-medium text-brandDark">Application Area</td>
                                            <td class="px-6 py-4 text-brandGrayText">Floor & Wall</td>
                                        </tr>
                                        <tr class="bg-brandLightGray">
                                            <td class="px-6 py-4 font-medium text-brandDark">Coverage</td>
                                            <td class="px-6 py-4 text-brandGrayText">~3.5 kg / sq.m</td>
                                        </tr>
                                        <tr class="bg-[#F3F3F3]">
                                            <td class="px-6 py-4 font-medium text-brandDark">Bed Thickness</td>
                                            <td class="px-6 py-4 text-brandGrayText">3 mm</td>
                                        </tr>
                                        <tr class="bg-brandLightGray">
                                            <td class="px-6 py-4 font-medium text-brandDark">Open Time</td>
                                            <td class="px-6 py-4 text-brandGrayText">20 minutes</td>
                                        </tr>
                                        <tr class="bg-[#F3F3F3]">
                                            <td class="px-6 py-4 font-medium text-brandDark">Pot Life</td>
                                            <td class="px-6 py-4 text-brandGrayText">2 hours</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Section: Usage Method -->
                        <div class="mb-12">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="w-6 h-1 bg-[#b01620]"></div>
                                <h2 class="text-2xl font-semibold">Usage Method</h2>
                            </div>
                            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                                <div class="bg-brandLightGray border border-gray-200 rounded-lg md:p-6 p-3 text-center flex flex-col items-center justify-center">
                                    <div class="w-10 h-10 rounded-full bg-brandRed text-white flex items-center justify-center font-bold mb-3 shadow-md">1</div>
                                    <h3 class="font-bold text-md mb-1">Surface Preparation</h3>
                                    <p class="text-sm text-brandGrayText"> Ensure surface is clean, dust-free, and structurally sound.</p>
                                </div>
                                <div class="bg-brandLightGray border border-gray-200 rounded-lg md:p-6 p-3 text-center flex flex-col items-center justify-center">
                                    <div class="w-10 h-10 rounded-full bg-brandRed text-white flex items-center justify-center font-bold mb-3 shadow-md">2</div>
                                    <h3 class="font-bold text-md mb-1">Mixing</h3>
                                    <p class="text-sm text-brandGrayText">Add powder into water and mix to obtain a smooth lump-free paste.</p>
                                </div>
                                <div class="bg-brandLightGray border border-gray-200 rounded-lg md:p-6 p-3 text-center flex flex-col items-center justify-center">
                                    <div class="w-10 h-10 rounded-full bg-brandRed text-white flex items-center justify-center font-bold mb-3 shadow-md">3</div>
                                    <h3 class="font-bold text-md mb-1">Adhesive Application</h3>
                                    <p class="text-sm text-brandGrayText">Spread adhesive with a notched trowel.</p>
                                </div>
                                <div class="bg-brandLightGray border border-gray-200 rounded-lg md:p-6 p-3 text-center flex flex-col items-center justify-center">
                                    <div class="w-10 h-10 rounded-full bg-brandRed text-white flex items-center justify-center font-bold mb-3 shadow-md">4</div>
                                    <h3 class="font-bold text-md mb-1">Tile Installation</h3>
                                    <p class="text-sm text-brandGrayText">Place tile firmly and press to ensure full contact.</p>
                                </div>
                                <div class="bg-brandLightGray border border-gray-200 rounded-lg md:p-6 p-3 text-center flex flex-col items-center justify-center">
                                    <div class="w-10 h-10 rounded-full bg-brandRed text-white flex items-center justify-center font-bold mb-3 shadow-md">5</div>
                                    <h3 class="font-bold text-md mb-1">Alignment</h3>
                                    <p class="text-sm text-brandGrayText">Adjust tiles before adhesive sets.</p>
                                </div>
                                <div class="bg-brandLightGray border border-gray-200 rounded-lg md:p-6 p-3 text-center flex flex-col items-center justify-center">
                                    <div class="w-10 h-10 rounded-full bg-brandRed text-white flex items-center justify-center font-bold mb-3 shadow-md">6</div>
                                    <h3 class="font-bold text-md mb-1">Grouting</h3>
                                    <p class="text-sm text-brandGrayText">Allow adhesive to cure for 24 hours before grouting.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- silver -->
                    <div id="silver" class="tab-content hidden">
                        <h3 class="text-3xl md:text-4xl font-bold mb-2">Bull Strong <span class="text-brandRed">SILVER Tile Adhesive</span></h3>
                        <p class="text-brandGrayText mb-6 text-sm md:text-base">Standard grade cementitious polymer tile adhesive for fixing small and medium ceramic tiles in interior floor areas.</p>

                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-6 h-1 bg-[#b01620]"></div>
                            <h2 class="text-2xl font-semibold">Benefits</h2>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-3 gap-x-6 text-sm text-brandDark font-medium mb-12">
                            <div class="flex items-center gap-2"><i class="fa-regular fa-circle-check text-[#b01620]"></i> Strong bonding for ceramic tiles</div>
                            <div class="flex items-center gap-2"><i class="fa-regular fa-circle-check text-[#b01620]"></i> Smooth & creamy consistency</div>
                            <div class="flex items-center gap-2"><i class="fa-regular fa-circle-check text-[#b01620]"></i> Easy to mix and apply</div>
                            <div class="flex items-center gap-2"><i class="fa-regular fa-circle-check text-[#b01620]"></i> Cost-effective installation solution</div>
                            <div class="flex items-center gap-2"><i class="fa-regular fa-circle-check text-[#b01620]"></i> Ideal for interior flooring</div>
                        </div>

                        <!-- Section: Product Features -->
                        <div class="mb-12">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="w-6 h-1 bg-[#b01620]"></div>
                                <h2 class="text-2xl font-semibold">Product Features</h2>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2 p-4 text-md rounded-lg text-brandGrayText bg-[#F3F3F3]">
                                <div class="flex gap-3 p-2">
                                    <i class="fa-regular fa-circle-check text-[#b01620] mt-1"></i>
                                    <p>Polymer modified cementitious adhesive</p>
                                </div>
                                <div class="flex gap-3 p-2">
                                    <i class="fa-regular fa-circle-check text-[#b01620] mt-1"></i>
                                    <p>Designed for thin-bed tile installation</p>
                                </div>
                                <div class="flex gap-3 p-2">
                                    <i class="fa-regular fa-circle-check text-[#b01620] mt-1"></i>
                                    <p>Easy workability and smooth spreading</p>
                                </div>
                                <div class="flex gap-3 p-2">
                                    <i class="fa-regular fa-circle-check text-[#b01620] mt-1"></i>
                                    <p>Reduces tile hollow sound issues</p>
                                </div>
                                <div class="flex gap-3 p-2">
                                    <i class="fa-regular fa-circle-check text-[#b01620] mt-1"></i>
                                    <p>Improves tile fixing strength compared to mortar</p>
                                </div>

                            </div>
                        </div>

                        <!-- Section: Technical Specifications -->
                        <div class="mb-12">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="w-6 h-1 bg-[#b01620]"></div>
                                <h2 class="text-2xl font-semibold">Technical Specifications</h2>
                            </div>
                            <div class="table-container overflow-x-auto border border-gray-200 rounded-lg">
                                <table class="w-full text-md text-left">
                                    <thead class="bg-[#1F2937] text-white">
                                        <tr>
                                            <th class="px-6 py-4 font-medium">Parameter</th>
                                            <th class="px-6 py-4 font-medium">Specification</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-[#F9F9F9]">
                                        <tr class="bg-brandLightGray">
                                            <td class="px-6 py-4 font-medium text-brandDark">Product Type</td>
                                            <td class="px-6 py-4 text-brandGrayText">Polymer Modified Cementitious Adhesive</td>
                                        </tr>
                                        <tr class="bg-[#F3F3F3]">
                                            <td class="px-6 py-4 font-medium text-brandDark">Tile Type</td>
                                            <td class="px-6 py-4 text-brandGrayText">Ceramic Tiles</td>
                                        </tr>
                                        <tr class="bg-brandLightGray">
                                            <td class="px-6 py-4 font-medium text-brandDark">Application Area</td>
                                            <td class="px-6 py-4 text-brandGrayText">Interior Floors</td>
                                        </tr>
                                        <tr class="bg-[#F3F3F3]">
                                            <td class="px-6 py-4 font-medium text-brandDark">Mixing Ratio</td>
                                            <td class="px-6 py-4 text-brandGrayText">6–7 L water per 25 kg</td>
                                        </tr>
                                        <tr class="bg-brandLightGray">
                                            <td class="px-6 py-4 font-medium text-brandDark">Open Time</td>
                                            <td class="px-6 py-4 text-brandGrayText">15–20 minutes</td>
                                        </tr>
                                        <tr class="bg-[#F3F3F3]">
                                            <td class="px-6 py-4 font-medium text-brandDark">Adjustability Time</td>
                                            <td class="px-6 py-4 text-brandGrayText">10 minutes</td>
                                        </tr>
                                        <tr class="bg-brandLightGray">
                                            <td class="px-6 py-4 font-medium text-brandDark">Coverage</td>
                                            <td class="px-6 py-4 text-brandGrayText">~3.5 kg / sq.m (3mm bed)</td>
                                        </tr>
                                        <tr class="bg-[#F3F3F3]">
                                            <td class="px-6 py-4 font-medium text-brandDark">Initial Setting</td>
                                            <td class="px-6 py-4 text-brandGrayText">24 hours</td>
                                        </tr>
                                        <tr class="bg-brandLightGray">
                                            <td class="px-6 py-4 font-medium text-brandDark">Full Cure</td>
                                            <td class="px-6 py-4 text-brandGrayText">48–72 hours</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Section: Usage Method -->
                        <div class="mb-12">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="w-6 h-1 bg-[#b01620]"></div>
                                <h2 class="text-2xl font-semibold">Usage Method</h2>
                            </div>
                            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                                <div class="bg-brandLightGray border border-gray-200 rounded-lg md:p-6 p-3 text-center flex flex-col items-center justify-center">
                                    <div class="w-10 h-10 rounded-full bg-brandRed text-white flex items-center justify-center font-bold mb-3 shadow-md">1</div>
                                    <h3 class="font-bold text-md mb-1">Surface Preparation</h3>
                                    <p class="text-sm text-brandGrayText"> Ensure surface is clean, dust-free, and structurally sound.</p>
                                </div>
                                <div class="bg-brandLightGray border border-gray-200 rounded-lg md:p-6 p-3 text-center flex flex-col items-center justify-center">
                                    <div class="w-10 h-10 rounded-full bg-brandRed text-white flex items-center justify-center font-bold mb-3 shadow-md">2</div>
                                    <h3 class="font-bold text-md mb-1">Mixing</h3>
                                    <p class="text-sm text-brandGrayText">Add powder into water and mix to obtain a smooth lump-free paste.</p>
                                </div>
                                <div class="bg-brandLightGray border border-gray-200 rounded-lg md:p-6 p-3 text-center flex flex-col items-center justify-center">
                                    <div class="w-10 h-10 rounded-full bg-brandRed text-white flex items-center justify-center font-bold mb-3 shadow-md">3</div>
                                    <h3 class="font-bold text-md mb-1">Adhesive Application</h3>
                                    <p class="text-sm text-brandGrayText">Spread adhesive with a notched trowel.</p>
                                </div>
                                <div class="bg-brandLightGray border border-gray-200 rounded-lg md:p-6 p-3 text-center flex flex-col items-center justify-center">
                                    <div class="w-10 h-10 rounded-full bg-brandRed text-white flex items-center justify-center font-bold mb-3 shadow-md">4</div>
                                    <h3 class="font-bold text-md mb-1">Tile Installation</h3>
                                    <p class="text-sm text-brandGrayText">Place tile firmly and press to ensure full contact.</p>
                                </div>
                                <div class="bg-brandLightGray border border-gray-200 rounded-lg md:p-6 p-3 text-center flex flex-col items-center justify-center">
                                    <div class="w-10 h-10 rounded-full bg-brandRed text-white flex items-center justify-center font-bold mb-3 shadow-md">5</div>
                                    <h3 class="font-bold text-md mb-1">Alignment</h3>
                                    <p class="text-sm text-brandGrayText">Adjust tiles before adhesive sets.</p>
                                </div>
                                <div class="bg-brandLightGray border border-gray-200 rounded-lg md:p-6 p-3 text-center flex flex-col items-center justify-center">
                                    <div class="w-10 h-10 rounded-full bg-brandRed text-white flex items-center justify-center font-bold mb-3 shadow-md">6</div>
                                    <h3 class="font-bold text-md mb-1">Grouting</h3>
                                    <p class="text-sm text-brandGrayText">Allow adhesive to cure for 24 hours before grouting.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- diamond -->
                    <div id="diamond" class="tab-content hidden">
                        <h3 class="text-3xl md:text-4xl font-bold mb-2">Bull Strong <span class="text-brandRed">DIAMOND Tile Adhesive</span></h3>
                        <p class="text-brandGrayText mb-6 text-sm md:text-base">High-performance polymer & white cement based adhesive designed for medium and large format tiles.</p>

                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-6 h-1 bg-[#b01620]"></div>
                            <h2 class="text-2xl font-semibold">Benefits</h2>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-3 gap-x-6 text-sm text-brandDark font-medium mb-12">
                            <div class="flex items-center gap-2"><i class="fa-regular fa-circle-check text-[#b01620]"></i> High bonding strength</div>
                            <div class="flex items-center gap-2"><i class="fa-regular fa-circle-check text-[#b01620]"></i> Ideal for larger tiles</div>
                            <div class="flex items-center gap-2"><i class="fa-regular fa-circle-check text-[#b01620]"></i> Suitable for interior & exterior</div>
                            <div class="flex items-center gap-2"><i class="fa-regular fa-circle-check text-[#b01620]"></i> Dual application for wall & floor</div>

                        </div>

                        <!-- Section: Product Features -->
                        <div class="mb-12">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="w-6 h-1 bg-[#b01620]"></div>
                                <h2 class="text-2xl font-semibold">Product Features</h2>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2 p-4 text-md rounded-lg text-brandGrayText bg-[#F3F3F3]">
                                <div class="flex gap-3 p-2">
                                    <i class="fa-regular fa-circle-check text-[#b01620] mt-1"></i>
                                    <p>High strength polymer technology</p>
                                </div>
                                <div class="flex gap-3 p-2">
                                    <i class="fa-regular fa-circle-check text-[#b01620] mt-1"></i>
                                    <p>Supports medium & large format tiles</p>
                                </div>
                                <div class="flex gap-3 p-2">
                                    <i class="fa-regular fa-circle-check text-[#b01620] mt-1"></i>
                                    <p>Excellent workability</p>
                                </div>
                                <div class="flex gap-3 p-2">
                                    <i class="fa-regular fa-circle-check text-[#b01620] mt-1"></i>
                                    <p>Long lasting performance</p>
                                </div>

                            </div>
                        </div>

                        <!-- Section: Technical Specifications -->
                        <div class="mb-12">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="w-6 h-1 bg-[#b01620]"></div>
                                <h2 class="text-2xl font-semibold">Technical Specifications</h2>
                            </div>
                            <div class="table-container overflow-x-auto border border-gray-200 rounded-lg">
                                <table class="w-full text-md text-left">
                                    <thead class="bg-[#1F2937] text-white">
                                        <tr>
                                            <th class="px-6 py-4 font-medium">Parameter</th>
                                            <th class="px-6 py-4 font-medium">Specification</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-[#F9F9F9]">
                                        <tr class="bg-brandLightGray">
                                            <td class="px-6 py-4 font-medium text-brandDark">Tile Type</td>
                                            <td class="px-6 py-4 text-brandGrayText">Ceramic, Vitrified, Stone</td>
                                        </tr>
                                        <tr class="bg-[#F3F3F3]">
                                            <td class="px-6 py-4 font-medium text-brandDark">Application Area</td>
                                            <td class="px-6 py-4 text-brandGrayText">Wall & Floor</td>
                                        </tr>

                                        <tr class="bg-brandLightGray">
                                            <td class="px-6 py-4 font-medium text-brandDark">Coverage</td>
                                            <td class="px-6 py-4 text-brandGrayText">~3.5 kg / sq.m</td>
                                        </tr>
                                        <tr class="bg-brandLightGray">
                                            <td class="px-6 py-4 font-medium text-brandDark">Bed Thickness</td>
                                            <td class="px-6 py-4 text-brandGrayText">3 mm</td>
                                        </tr>
                                        <tr class="bg-brandLightGray">
                                            <td class="px-6 py-4 font-medium text-brandDark">Open Time</td>
                                            <td class="px-6 py-4 text-brandGrayText"> 20 minutes</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- platinum -->
                    <div id="platinum" class="tab-content hidden">
                        <h3 class="text-3xl md:text-4xl font-bold mb-2">Bull Strong <span class="text-brandRed">PLATINUM Tile Adhesive</span></h3>
                        <p class="text-brandGrayText mb-6 text-sm md:text-base">Heavy-duty adhesive for fixing large format ceramic, vitrified tiles, marble and stones.</p>

                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-6 h-1 bg-[#b01620]"></div>
                            <h2 class="text-2xl font-semibold">Key Benefits Highlights</h2>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-3 gap-x-6 text-sm text-brandDark font-medium mb-12">
                            <div class="flex items-center gap-2"><i class="fa-regular fa-circle-check text-[#b01620]"></i> High bond strength</div>
                            <div class="flex items-center gap-2"><i class="fa-regular fa-circle-check text-[#b01620]"></i> Suitable for heavy tiles</div>
                            <div class="flex items-center gap-2"><i class="fa-regular fa-circle-check text-[#b01620]"></i> Reliable for demanding installations</div>
                            <div class="flex items-center gap-2"><i class="fa-regular fa-circle-check text-[#b01620]"></i> Suitable for interior and exterior areas</div>
                        </div>

                        <!-- Section: Product Features -->
                        <div class="mb-12">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="w-6 h-1 bg-[#b01620]"></div>
                                <h2 class="text-2xl font-semibold">Product Features</h2>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2 p-4 text-md rounded-lg text-brandGrayText bg-[#F3F3F3]">
                                <div class="flex gap-3 p-2">
                                    <i class="fa-regular fa-circle-check text-[#b01620] mt-1"></i>
                                    <p>Dry-set high performance adhesive</p>
                                </div>
                                <div class="flex gap-3 p-2">
                                    <i class="fa-regular fa-circle-check text-[#b01620] mt-1"></i>
                                    <p>Ideal for large tiles and stones</p>
                                </div>
                                <div class="flex gap-3 p-2">
                                    <i class="fa-regular fa-circle-check text-[#b01620] mt-1"></i>
                                    <p>Excellent adhesion on multiple substrates</p>
                                </div>
                                <div class="flex gap-3 p-2">
                                    <i class="fa-regular fa-circle-check text-[#b01620] mt-1"></i>
                                    <p>Long-term durability</p>
                                </div>
                            </div>
                        </div>

                        <!-- Section: Technical Specifications -->
                        <div class="mb-12">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="w-6 h-1 bg-[#b01620]"></div>
                                <h2 class="text-2xl font-semibold">Technical Specifications</h2>
                            </div>
                            <div class="table-container overflow-x-auto border border-gray-200 rounded-lg">
                                <table class="w-full text-md text-left">
                                    <thead class="bg-[#1F2937] text-white">
                                        <tr>
                                            <th class="px-6 py-4 font-medium">Parameter</th>
                                            <th class="px-6 py-4 font-medium">Specification</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-[#F9F9F9]">
                                        <tr class="bg-[#F3F3F3]">
                                            <td class="px-6 py-4 font-medium text-brandDark">Tile Type</td>
                                            <td class="px-6 py-4 text-brandGrayText">Ceramic, Vitrified, Marble</td>
                                        </tr>
                                        <tr class="bg-brandLightGray">
                                            <td class="px-6 py-4 font-medium text-brandDark">Application</td>
                                            <td class="px-6 py-4 text-brandGrayText">Interior & Exterior</td>
                                        </tr>

                                        <tr class="bg-[#F3F3F3]">
                                            <td class="px-6 py-4 font-medium text-brandDark">Coverage</td>
                                            <td class="px-6 py-4 text-brandGrayText">~3.5 kg / sq.m</td>
                                        </tr>
                                        <tr class="bg-brandLightGray">
                                            <td class="px-6 py-4 font-medium text-brandDark">Bed Thickness</td>
                                            <td class="px-6 py-4 text-brandGrayText">3 mm</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- premium -->
                    <div id="premium" class="tab-content hidden">
                        <h3 class="text-3xl md:text-4xl font-bold mb-2">Bull Strong <span class="text-brandRed">PREMIUM PLATINUM Tile Adhesive</span></h3>
                        <p class="text-brandGrayText mb-6 text-sm md:text-base">Premium grade adhesive designed for large format tiles, mosaic tiles, and natural stones.</p>

                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-6 h-1 bg-[#b01620]"></div>
                            <h2 class="text-2xl font-semibold">Key Benefits Highlights</h2>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-3 gap-x-6 text-sm text-brandDark font-medium mb-12">
                            <div class="flex items-center gap-2"><i class="fa-regular fa-circle-check text-[#b01620]"></i> Maximum bonding strength</div>
                            <div class="flex items-center gap-2"><i class="fa-regular fa-circle-check text-[#b01620]"></i> Suitable for large format tiles</div>
                            <div class="flex items-center gap-2"><i class="fa-regular fa-circle-check text-[#b01620]"></i> Ideal for high-end projects</div>
                            <div class="flex items-center gap-2"><i class="fa-regular fa-circle-check text-[#b01620]"></i> Compatible with multiple substrates</div>
                        </div>

                        <!-- Section: Product Features -->
                        <div class="mb-12">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="w-6 h-1 bg-[#b01620]"></div>
                                <h2 class="text-2xl font-semibold">Product Features</h2>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2 p-4 text-md rounded-lg text-brandGrayText bg-[#F3F3F3]">
                                <div class="flex gap-3 p-2">
                                    <i class="fa-regular fa-circle-check text-[#b01620] mt-1"></i>
                                    <p>Premium thin-set adhesive technology</p>
                                </div>
                                <div class="flex gap-3 p-2">
                                    <i class="fa-regular fa-circle-check text-[#b01620] mt-1"></i>
                                    <p>Excellent flexibility and strength</p>
                                </div>
                                <div class="flex gap-3 p-2">
                                    <i class="fa-regular fa-circle-check text-[#b01620] mt-1"></i>
                                    <p>Designed for modern architectural installations</p>
                                </div>
                                <div class="flex gap-3 p-2">
                                    <i class="fa-regular fa-circle-check text-[#b01620] mt-1"></i>
                                    <p>Suitable for both interior and exterior applications</p>
                                </div>

                            </div>
                        </div>

                        <!-- Section: Technical Specifications -->
                        <div class="mb-12">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="w-6 h-1 bg-[#b01620]"></div>
                                <h2 class="text-2xl font-semibold">Technical Specifications</h2>
                            </div>
                            <div class="table-container overflow-x-auto border border-gray-200 rounded-lg">
                                <table class="w-full text-md text-left">
                                    <thead class="bg-[#1F2937] text-white">
                                        <tr>
                                            <th class="px-6 py-4 font-medium">Parameter</th>
                                            <th class="px-6 py-4 font-medium">Specification</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-[#F9F9F9]">
                                        <tr class="bg-[#F3F3F3]">
                                            <td class="px-6 py-4 font-medium text-brandDark">Tile Type</td>
                                            <td class="px-6 py-4 text-brandGrayText">All Tiles & Stones</td>
                                        </tr>
                                        <tr class="bg-brandLightGray">
                                            <td class="px-6 py-4 font-medium text-brandDark">Application</td>
                                            <td class="px-6 py-4 text-brandGrayText">Wall & Floor</td>
                                        </tr>
                                        <tr class="bg-[#F3F3F3]">
                                            <td class="px-6 py-4 font-medium text-brandDark">Coverage</td>
                                            <td class="px-6 py-4 text-brandGrayText">~3.5 kg / sq.m</td>
                                        </tr>
                                        <tr class="bg-brandLightGray">
                                            <td class="px-6 py-4 font-medium text-brandDark">Bed Thickness</td>
                                            <td class="px-6 py-4 text-brandGrayText">3 mm</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
        <!-- Right Column: Forms -->
        <div class="lg:col-span-4">
            <div class="sticky top-[100px] space-y-6">
                <!-- Coverage Calculator Box -->
                <div class="bg-[#FEF4F4] rounded-lg p-6 border border-red-100 shadow-sm">
                    <div class="flex items-center gap-2 mb-4 text-brandRed font-bold text-[#F90606]">
                        <i class="fa-solid fa-calculator"></i>
                        <h3>COVERAGE CALCULATOR</h3>
                    </div>
                    <form class="space-y-4">
                        <div>
                            <label class="block text-xs font-medium text-brandDark mb-1 uppercase">Total Area (sq. meters)</label>
                            <input type="number" placeholder="e.g. 100" class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:border-brandRed">
                        </div>
                        <div>
                            <label class="block text-xs font-medium text-brandDark mb-1 uppercase">Tile Size</label>
                            <select class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:border-brandRed bg-white">
                                <option>Select your tile size</option>
                                <option>Small (up to 30x30cm)</option>
                                <option>600x600 mm</option>
                            </select>
                        </div>
                        <div class="pt-2">
                            <button type="button" class="w-full bg-white border border-gray-300 text-brandDark font-medium rounded px-4 py-2 text-sm flex justify-between items-center hover:bg-gray-50 transition">
                                <span class="text-brandGrayText">Estimated req. (40kg)</span>
                                <!-- <i class="fa-solid fa-location-dot text-brandRed"></i> -->
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Request a Quote Box -->
                <div class="bg-white rounded-lg p-6 border-2 border-[#F90606] shadow-sm">
                    <h3 class="font-bold text-xl mb-2">Request a Quote</h3>
                    <p class="text-xs text-brandDark mb-5">High-volume industrial pricing available.
                        Responses within 24 hours.</p>
                    <form class="space-y-4">
                        <div>
                            <label class="block text-xs font-medium text-brandDark mb-1 uppercase">Full Name</label>
                            <input type="text" class="w-full bg-gray-50 border border-gray-200 rounded px-3 py-2 text-sm focus:outline-none focus:border-brandRed">
                        </div>
                        <div class="grid grid-cols-2 gap-3">
                            <div>
                                <label class="block text-xs font-medium text-brandDark mb-1 uppercase">Phone Number</label>
                                <input type="tel" class="w-full bg-gray-50 border border-gray-200 rounded px-3 py-2 text-sm focus:outline-none focus:border-brandRed" maxlength="11" minlength="10">
                            </div>
                            <div>
                                <label class="block text-xs font-medium text-brandDark mb-1 uppercase">City / Location</label>
                                <input type="text" class="w-full bg-gray-50 border border-gray-200 rounded px-3 py-2 text-sm focus:outline-none focus:border-brandRed">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-medium text-brandDark mb-1 uppercase">
                                Project Type
                            </label>

                            <select class="w-full bg-gray-50 border border-gray-200 rounded px-3 py-2 text-sm focus:outline-none focus:border-brandRed">
                                <option value="">Select Project Type</option>
                                <option value="residential">Residential Project</option>
                                <option value="commercial">Commercial Project</option>
                                <option value="contractor">Contractor Requirement</option>
                                <option value="dealer">Dealer / Distributor</option>
                                <option value="Repair">Repair / Renovation</option>
                            </select>
                        </div>

                        <!-- Product Required -->
                        <div>
                            <label class="block text-xs font-medium text-brandDark mb-1 uppercase">
                                Product
                            </label>

                            <select class="w-full bg-gray-50 border border-gray-200 rounded px-3 py-2 text-sm focus:outline-none focus:border-brandRed">
                                <option value="tile-adhesive">Tile Adhesive</option>
                                <option value="sbr-latex" selected>SBR Latex</option>
                                <option value="tile-cleaner">Tile Cleaner</option>
                                <option value="epoxy-grout">Epoxy Grout</option>
                                <option value="aac-block">Bull Strong AAC Block</option>
                                <option value="rmp">RMP</option>
                                <option value="tile-grout">Bull Strong Tile Grout</option>
                            </select>
                        </div>
                        <!-- Quantity Required -->
                        <div>
                            <label class="block text-xs font-medium text-brandDark mb-1 uppercase">Quantity</label>
                            <input type="tel" class="w-full bg-gray-50 border border-gray-200 rounded px-3 py-2 text-sm focus:outline-none focus:border-brandRed">
                        </div>
                        <!-- <div>
                            <label class="block text-xs font-medium text-brandDark mb-1 uppercase">
                                Quantity 
                            </label>
                            <select class="w-full bg-gray-50 border border-gray-200 rounded px-3 py-2 text-sm focus:outline-none focus:border-brandRed">
                                <option value="">Select Quantity</option>
                                <option>10 – 50 Kg</option>
                                <option>50 – 100 Kg</option>
                                <option>100 – 500 Kg</option>
                                <option>500+ Kg</option>
                            </select>
                        </div> -->

                        <!-- Project Details -->
                        <div class="mt-4">
                            <label class="block text-xs font-medium text-brandDark mb-1 uppercase">
                                Project Details / Message
                            </label>
                            <textarea rows="4"
                                class="w-full bg-gray-50 border border-gray-200 rounded px-3 py-2 text-sm focus:outline-none focus:border-brandRed"
                                placeholder="Enter your project details or message..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-brandRed-btn text-white font-medium rounded-lg px-4 py-2 mt-2 hover:bg-red-800 transition flex items-center justify-center gap-2">
                            Get Quote <i class="fa-solid fa-arrow-right text-sm"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Section: Key Features / Documents -->
        <div class="lg:col-span-8 mb-12 lg:mt-0 mt-6">
            <div class="flex items-center gap-3 mb-2">
                <div class="w-6 h-1 bg-[#b01620]"></div>
                <h2 class="text-2xl font-semibold">Download Documents</h2>
            </div>
            <p class="mb-3">Download detailed product information and technical specifications.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <a href="#" class="flex items-center gap-4 p-4 border border-gray-200 rounded-lg hover:shadow-md transition">
                    <i class="fa-regular fa-file-pdf text-3xl text-brandRed"></i>
                    <div>
                        <h4 class="font-bold text-sm text-[#1F2937]">Technical Data Sheet (TDS)</h4>
                        <p class="text-xs text-brandGrayText">PDF • 1.2 MB</p>
                    </div>
                </a>
                <a href="#" class="flex items-center gap-4 p-4 border border-gray-200 rounded-lg hover:shadow-md transition">
                    <i class="fa-regular fa-file-pdf text-3xl text-brandRed"></i>
                    <div>
                        <h4 class="font-bold text-sm text-[#1F2937]">Product Brochure</h4>
                        <p class="text-xs text-brandGrayText">PDF • 2.5 MB</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Section: Related Products (NOW A RESPONSIVE SLIDER) -->
    <div class="lg:mt-6 mt-3 mb-8">
        <div class="flex items-center gap-3 mb-8">
            <div class="w-6 h-1 bg-brandRed"></div>
            <h2 class="text-2xl font-semibold">Related Products</h2>
        </div>

        <!-- 2. SWIPER HTML STRUCTURE -->
        <div class="swiper relatedProductsSwiper">
            <div class="swiper-wrapper pb-12"> <!-- Added padding bottom to make room for pagination dots -->

                <!-- Slide 1 -->
                <div class="swiper-slide h-auto">
                    <div class="border border-gray-100 rounded-lg flex flex-col shadow-lg transition bg-white h-full">
                        <img src="images/product-image/aac-wc.png" alt="Tile Adhesive" class="w-full mb-4">
                        <h3 class="font-bold text-lg mb-1 px-3">Tile Adhesive</h3>
                        <p class="text-xs text-brandGrayText mb-4 flex-grow px-3">Specially formulated adhesive that ensures a stronger, longer-lasting bond for tiles—works on floors, walls, and wet areas without the mess of traditional cement.</p>
                        <a href="adhesive.php" class="bg-[#262626] text-white text-xs mx-3 mb-3 font-medium py-2 px-4 rounded self-start hover:bg-gray-800 transition">VIEW PRODUCT <i class="fa-solid fa-caret-right ml-1"></i></a>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide h-auto">
                    <div class="border border-gray-100 rounded-lg flex flex-col shadow-lg transition bg-white h-full">
                        <img src="images/product-image/tile-cleaner-tc.png" alt="Tile Cleaner" class="w-full mb-4">
                        <h3 class="font-bold text-lg mb-1 px-3">Tile Cleaner</h3>
                        <p class="text-xs text-brandGrayText mb-4 flex-grow px-3">Effective tile cleaning solution that removes cement stains, dirt, and grime—restores shine and freshness to tiled surfaces effortlessly.</p>
                        <a href="tile-cleaner.php" class="bg-[#262626] text-white text-xs mx-3 mb-3 font-medium py-2 px-4 rounded self-start hover:bg-gray-800 transition">VIEW PRODUCT <i class="fa-solid fa-caret-right ml-1"></i></a>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide h-auto">
                    <div class="border border-gray-200 rounded-lg flex flex-col shadow-lg transition bg-white h-full">
                        <img src="images/product-image/tile-grout-tc.png" alt="Tile Grout" class="w-full mb-4">
                        <h3 class="font-bold text-lg mb-1 px-3">Tile Grout</h3>
                        <p class="text-xs text-brandGrayText mb-4 flex-grow px-3">A flexible and crack-resistant filler for tile joints—prevents water seepage, resists fungal growth, and maintains a clean tiled appearance.</p>
                        <a href="tile-grout.php" class="bg-[#262626] text-white text-xs mx-3 mb-3 font-medium py-2 px-4 rounded self-start hover:bg-gray-800 transition">VIEW PRODUCT <i class="fa-solid fa-caret-right ml-1"></i></a>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="swiper-slide h-auto">
                    <div class="border border-gray-200 rounded-lg flex flex-col shadow-lg transition bg-white h-full">
                        <img src="images/product-image/epoxy-grout-tc.png" alt="Epoxy Grout" class="w-full mb-4">
                        <h3 class="font-bold text-lg mb-1 px-3">Epoxy Grout</h3>
                        <p class="text-xs text-brandGrayText mb-4 flex-grow px-3">A premium joint filler for tiles that's resistant to stains, water, and chemicals—perfect for bathrooms, kitchens, and industrial spaces.</p>
                        <a href="epoxy-grout.php" class="bg-[#262626] text-white text-xs mx-3 mb-3 font-medium py-2 px-4 rounded self-start hover:bg-gray-800 transition">VIEW PRODUCT <i class="fa-solid fa-caret-right ml-1"></i></a>
                    </div>
                </div>

                <!-- Slide 5 -->
                <div class="swiper-slide h-auto">
                    <div class="border border-gray-200 rounded-lg flex flex-col shadow-lg transition bg-white h-full">
                        <img src="images/product-image/sbr-latex-tc.png" alt="SBR Latex" class="w-full mb-4">
                        <h3 class="font-bold text-lg mb-1 px-3">SBR Latex</h3>
                        <p class="text-xs text-brandGrayText mb-4 flex-grow px-3">A multipurpose bonding agent that strengthens cement mixes—ideal for waterproofing, crack repairs, and bonding old to new concrete surfaces.</p>
                        <a href="sbr-latex.php" class="bg-[#262626] text-white text-xs mx-3 mb-3 font-medium py-2 px-4 rounded self-start hover:bg-gray-800 transition">VIEW PRODUCT <i class="fa-solid fa-caret-right ml-1"></i></a>
                    </div>
                </div>

                <!-- Slide 6 -->
                <div class="swiper-slide h-auto">
                    <div class="border border-gray-200 rounded-lg flex flex-col shadow-lg transition bg-white h-full">
                        <img src="images/product-image/ready-mix-wc.png" alt="Ready Mix" class="w-full mb-4">
                        <h3 class="font-bold text-lg mb-1 px-3">Ready Mix</h3>
                        <p class="text-xs text-brandGrayText mb-4 flex-grow px-3">Pre-blended plaster for internal and external walls—saves labor, reduces material errors, and delivers a uniform and smooth finish.</p>
                        <a href="ready-mix-plaster.php" class="bg-[#262626] text-white text-xs mx-3 mb-3 font-medium py-2 px-4 rounded self-start hover:bg-gray-800 transition">VIEW PRODUCT <i class="fa-solid fa-caret-right ml-1"></i></a>
                    </div>
                </div>

                <!-- Slide 7 -->
                <div class="swiper-slide h-auto">
                    <div class="border border-gray-200 rounded-lg flex flex-col shadow-lg transition bg-white h-full">
                        <img src="images/product-image/plast-putty-wc.png" alt="Plast Putty" class="w-full mb-4">
                        <h3 class="font-bold text-lg mb-1 px-3">Plast Putty</h3>
                        <p class="text-xs text-brandGrayText mb-4 flex-grow px-3">A white cement-based putty that fills cracks and levels surfaces—giving walls a silky-smooth finish and enhancing the final paint effect.</p>
                        <a href="#" class="bg-[#262626] text-white text-xs mx-3 mb-3 font-medium py-2 px-4 rounded self-start hover:bg-gray-800 transition">VIEW PRODUCT <i class="fa-solid fa-caret-right ml-1"></i></a>
                    </div>
                </div>

                <!-- Slide 8 -->
                <div class="swiper-slide h-auto">
                    <div class="border border-gray-200 rounded-lg flex flex-col shadow-lg transition bg-white h-full">
                        <img src="images/product-image/acrylic-distemper-wc.png" alt="Acrylic Distemper" class="w-full mb-4">
                        <h3 class="font-bold text-lg mb-1 px-3">Acrylic Distemper</h3>
                        <p class="text-xs text-brandGrayText mb-4 flex-grow px-3">An affordable water-based wall paint that delivers a clean, matte look—suitable for interior walls and perfect for budget-friendly makeovers.</p>
                        <a href="#" class="bg-[#262626] text-white text-xs mx-3 mb-3 font-medium py-2 px-4 rounded self-start hover:bg-gray-800 transition">VIEW PRODUCT <i class="fa-solid fa-caret-right ml-1"></i></a>
                    </div>
                </div>
                <!-- Slide 9 -->
                <div class="swiper-slide h-auto">
                    <div class="border border-gray-200 rounded-lg flex flex-col shadow-lg transition bg-white h-full">
                        <img src="images/product-image/acrylic-texture-wc.png" alt="Acrylic Texture" class="w-full mb-4">
                        <h3 class="font-bold text-lg mb-1 px-3">Acrylic Texture</h3>
                        <p class="text-xs text-brandGrayText mb-4 flex-grow px-3">Decorative finish that adds patterns and depth to walls—resistant to cracks and stains, ideal for creating visually appealing surfaces.</p>
                        <a href="#" class="bg-[#262626] text-white text-xs mx-3 mb-3 font-medium py-2 px-4 rounded self-start hover:bg-gray-800 transition">VIEW PRODUCT <i class="fa-solid fa-caret-right ml-1"></i></a>
                    </div>
                </div>

            </div>
            <!-- Pagination Dots -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</main>
<!-- Call to Action Banner -->
<section class="text-white py-16 relative overflow-hidden bg-cover bg-center"
    style="background-image: url('images/cts-bg.jpg');">

    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-black/70"></div>

    <div class="max-w-4xl mx-auto px-4 relative z-10 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">
            Need help choosing the right tile adhesive?
        </h2>

        <p class="text-gray-300 mb-8 max-w-2xl mx-auto">
            Our technical experts can recommend the best adhesive based on tile size, substrate, and project conditions.
        </p>

        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="#" class="bg-white text-brandDark font-medium px-8 py-3 rounded hover:bg-gray-100 transition">
                Talk to a Bull Strong Expert
            </a>

            <a href="#" class="bg-brandRed text-white font-medium px-8 py-3 rounded hover:bg-red-700 transition">
                Download Product Catalog
            </a>
        </div>
    </div>

</section>


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

<script>
    function showTab(tabId) {

        document.querySelectorAll(".tab-content").forEach(tab => {
            tab.classList.add("hidden");
        });

        document.getElementById(tabId).classList.remove("hidden");

        document.querySelectorAll(".tab-btn").forEach(btn => {
            btn.classList.remove("border-brandRed", "text-brandRed");
            btn.classList.add("text-gray-600");
        });

        event.target.classList.add("border-brandRed", "text-brandRed");
    }
</script>


<?php
$content = ob_get_contents();
$active = 'Product';
ob_end_clean();
require_once("master.php");
?>