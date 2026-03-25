<?php
ob_start();
?>

<div class="bg-gray-50 font-sans text-gray-800 antialiased">

    <!-- Header Section -->
    <header class="bg-white py-12 px-4 sm:px-6 lg:px-8 text-center">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl md:text-5xl text-bulldark tracking-tight mb-2">
                Contact <span class="text-[#c81e1e]">Bull Strong</span>
            </h1>
            <p class="text-xl md:text-2xl font-bold text-gray-600 mb-6 italic">
                "Tiles & Wall se Pakki Dosti!"
            </p>
            <p class="text-gray-600 max-w-2xl mx-auto lg:text-lg text-md">
                Have questions about our products, dealership opportunities, or project requirements?
                Our team is ready to assist you with the right solutions for your construction needs.
            </p>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="container mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

            <!-- Left Column: Contact Information -->
            <div class="space-y-8 lg:order-1 order-2">

                <!-- Company Info Card -->
                <div class="bg-white p-8 rounded-xl shadow-md border-l-4 border-[#c81e1e]">
                    <h2 class="text-2xl font-bold text-[#1a1a1a] mb-1">Bull Strong</h2>
                    <p class="text-sm font-semibold text-[#c81e1e] uppercase tracking-wider mb-4">Tile Segment | Wall Segment</p>
                    <p class="text-gray-600 mb-1">Manufactured by: <strong>Wal Care Industries</strong></p>
                    <p class="text-xs text-gray-500 bg-gray-100 inline-block px-2 py-1 rounded">(An ISO 9001:2015 Certified Company)</p>
                </div>

                <!-- Contact Details Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- Address -->
                    <div class="bg-white p-6 rounded-xl shadow-md flex items-start space-x-4">
                        <div class="bg-red-50 p-3 rounded-full text-[#c81e1e]">
                            <i class="fa-solid fa-location-dot text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-[#1a1a1a] mb-1">Address</h3>
                            <p class="text-sm text-gray-600">
                                Wal Care Industries<br>
                                445, Lordganj<br>
                                Jabalpur – 482002<br>
                                Madhya Pradesh, India
                            </p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="bg-white p-6 rounded-xl shadow-md flex items-start space-x-4">
                        <div class="bg-red-50 p-3 rounded-full text-[#c81e1e]">
                            <i class="fa-solid fa-envelope text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-[#1a1a1a] mb-1">Email Us</h3>
                            <p class="text-sm text-gray-600">General Inquiry:</p>
                            <a href="mailto:walcareindustries@gmail.com" class="text-sm text-[#1a1a1a] font-semibold hover:underline break-all">walcareindustries@gmail.com</a>
                        </div>
                    </div>
                </div>

                <!-- Phone Details -->
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <h3 class="font-bold text-[#1a1a1a] mb-4 flex items-center">
                        <i class="fa-solid fa-phone-volume text-[#c81e1e] mr-3"></i> Call Us
                    </h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center border-b border-gray-100 pb-3">
                            <div>
                                <p class="font-semibold text-gray-800">Director</p>
                                <p class="text-sm text-gray-500">Abhishek Agrawal</p>
                            </div>
                            <div class="text-right">
                                <a href="tel:8889900911" class="block text-[#1a1a1a] font-bold hover:text-red-700">88899 00911</a>
                                <a href="tel:9425410894" class="block text-[#1a1a1a] font-bold hover:text-red-700">94254 10894</a>
                            </div>
                        </div>
                        <div class="flex justify-between items-center pt-1">
                            <div>
                                <p class="font-semibold text-gray-800">Customer Care</p>
                                <p class="text-sm text-gray-500">Support & Queries</p>
                            </div>
                            <div class="text-right">
                                <a href="tel:9575801201" class="block text-[#c81e1e] font-bold hover:text-red-700">95758 01201</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Right Column: Contact Form -->
            <div class="bg-white p-8 rounded-xl shadow-lg border-t-4 border-[#c81e1e] lg:order-2 order-1">
                <h2 class="text-2xl font-bold text-bulldark mb-2">Have a Question or Requirement?</h2>
                <p class="text-sm text-gray-500 mb-6">Fill out the form and our team will get back to you shortly.</p>

                <form action="#" method="POST" class="space-y-5">
                    <!-- Name & Phone Row -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Full Name *</label>
                            <input type="text" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#c81e1e] focus:border-[#c81e1e] outline-none transition-colors" placeholder="John Doe">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number *</label>
                            <input type="tel" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#c81e1e] focus:border-[#c81e1e] outline-none transition-colors" placeholder="+91 00000 00000">
                        </div>
                    </div>

                    <!-- Email & City Row -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                            <input type="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#c81e1e] focus:border-[#c81e1e] outline-none transition-colors" placeholder="you@example.com">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">City / Location *</label>
                            <input type="text" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#c81e1e] focus:border-[#c81e1e] outline-none transition-colors" placeholder="e.g. Jabalpur">
                        </div>
                    </div>

                    <!-- Inquiry Type -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Inquiry Type *</label>
                        <select required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#c81e1e] focus:border-[#c81e1e] outline-none transition-colors bg-white">
                            <option value="" disabled selected>Select an option</option>
                            <option value="product">Product Information</option>
                            <option value="distributor">Distributor Inquiry</option>
                            <option value="project">Project Requirement</option>
                            <option value="technical">Technical Support</option>
                        </select>
                    </div>

                    <!-- Message -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Message *</label>
                        <textarea rows="4" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#c81e1e] focus:border-[#c81e1e] outline-none transition-colors resize-none" placeholder="How can we help you?"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full bg-[#c81e1e] hover:bg-red-700 text-white font-bold py-3 px-6 rounded-lg transition-colors duration-300 shadow-md flex justify-center items-center">
                        <span>Submit Inquiry</span>
                        <i class="fa-solid fa-paper-plane ml-2"></i>
                    </button>
                </form>
            </div>

        </div>
    </main>

    <!-- Map Section -->
    <section class="w-full mt-8">
        <!-- <div class="bg-bulldark text-white py-4 text-center px-4">
            <h2 class="text-xl font-bold flex justify-center items-center">
                <i class="fa-solid fa-map-location-dot text-[#c81e1e] mr-2"></i> Find Us in Jabalpur
            </h2>
            <p class="text-sm text-gray-300 mt-1">Visit our factory and office location</p>
        </div> -->
        <!-- Embedded Google Map -->
        <div class="w-full h-96 bg-gray-300 relative">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3668.046944686481!2d79.92750627585521!3d23.16851171086202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3981ae1a043285c5%3A0x6336a19c5c79de92!2sLordganj%2C%20Jabalpur%2C%20Madhya%20Pradesh%20482002!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin"
                width="100%"
                height="100%"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                class="absolute inset-0">
            </iframe>
        </div>
    </section>
</div>


<?php
$content = ob_get_contents();
$active = 'Contact Us';
ob_end_clean();
require_once("master.php");
?>