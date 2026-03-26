<?php
ob_start();
?>

<div class="relative w-full overflow-hidden shadow-lg group bg-black">
    <div id="slider" class="flex transition-transform duration-700 ease-[cubic-bezier(0.4,0,0.2,1)]">

        <div class="min-w-full relative xl:h-[600px] lg:h-[450px] md:h-[350px] h-auto">
            <img src="images/distributors/mob-banner-1.jpg" alt="Banner 1 Mobile" class="w-full h-full md:hidden">
            <img src="images/distributors/home-banner-1.jpg" alt="Banner 1 Desktop" class="w-full h-full hidden md:block">
        </div>

        <div class="min-w-full relative xl:h-[600px] lg:h-[450px] md:h-[350px] h-auto">
            <img src="images/distributors/mob-banner-2.jpg" alt="Banner 2 Mobile" class="w-full h-full md:hidden">
            <img src="images/distributors/home-banner-2.jpg" alt="Banner 2 Desktop" class="w-full h-full hidden md:block">
        </div>

    </div>

    <button id="prev" class="absolute left-2 md:left-6 top-1/2 -translate-y-1/2 z-30 bg-white/10 hover:bg-red-600 p-2 md:p-3 rounded-full text-white backdrop-blur-md opacity-100 md:opacity-0 md:group-hover:opacity-100 transition-all duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="md:w-6 md:h-6" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
            <path d="m15 18-6-6 6-6" />
        </svg>
    </button>

    <button id="next" class="absolute right-2 md:right-6 top-1/2 -translate-y-1/2 z-30 bg-white/10 hover:bg-red-600 p-2 md:p-3 rounded-full text-white backdrop-blur-md opacity-100 md:opacity-0 md:group-hover:opacity-100 transition-all duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="md:w-6 md:h-6" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
            <path d="m9 18 6-6-6-6" />
        </svg>
    </button>

    <div class="absolute bottom-6 md:bottom-10 left-1/2 -translate-x-1/2 flex space-x-2 md:space-x-4 z-30">
        <button class="dot-container relative w-10 md:w-16 h-1 bg-white/20 overflow-hidden rounded-full" data-index="0">
            <div class="progress-bar absolute top-0 left-0 h-full bg-red-600 w-0"></div>
        </button>
        <button class="dot-container relative w-10 md:w-16 h-1 bg-white/20 overflow-hidden rounded-full" data-index="1">
            <div class="progress-bar absolute top-0 left-0 h-full bg-red-600 w-0"></div>
        </button>
    </div>
</div>

<section class="lg:py-20 md:py-10 py-8 bg-gray-50">
    <div class="container mx-auto px-4">

        <div class="text-center mb-16">
            <span
                class="inline-block mb-5 px-5 py-2 text-sm font-semibold rounded-full bg-gradient-to-r from-[#6E6E6E] to-[#3C3C3C] text-white tracking-wide uppercase">
                Partner
            </span>

            <h2 class="text-3xl md:text-4xl lg:text-5xl font-medium text-gray-900 mb-16 text-center">
                Why Partner with <span class="text-red-600">Bullstrong?</span>
            </h2>
        </div>

        <div class="flex flex-wrap justify-center gap-8">

            <div class="group bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 relative overflow-hidden w-full md:w-[calc(50%-1rem)] lg:w-[calc(33.333%-1.5rem)]">
                <div class="absolute bottom-0 left-0 w-full h-1 bg-red-600 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                <div class="w-14 h-14 bg-red-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-red-600 transition-colors duration-300">
                    <svg class="w-8 h-8 text-red-600 group-hover:text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">High-Demand Products</h3>
                <p class="text-gray-600 leading-relaxed text-sm">Trusted by professionals across India</p>
            </div>

            <div class="group bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 relative overflow-hidden w-full md:w-[calc(50%-1rem)] lg:w-[calc(33.333%-1.5rem)]">
                <div class="absolute bottom-0 left-0 w-full h-1 bg-red-600 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                <div class="w-14 h-14 bg-red-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-red-600 transition-colors duration-300">
                    <svg class="w-8 h-8 text-red-600 group-hover:text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Strong Dealer Support</h3>
                <p class="text-gray-600 leading-relaxed text-sm">Training, marketing, and on-ground assistance</p>
            </div>

            <div class="group bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 relative overflow-hidden w-full md:w-[calc(50%-1rem)] lg:w-[calc(33.333%-1.5rem)]">
                <div class="absolute bottom-0 left-0 w-full h-1 bg-red-600 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                <div class="w-14 h-14 bg-red-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-red-600 transition-colors duration-300">
                    <svg class="w-8 h-8 text-red-600 group-hover:text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2"></path>
                        <circle cx="12" cy="12" r="9"></circle>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Attractive Margins</h3>
                <p class="text-gray-600 leading-relaxed text-sm">Competitive pricing & good profit structure</p>
            </div>

            <div class="group bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 relative overflow-hidden w-full md:w-[calc(50%-1rem)] lg:w-[calc(33.333%-1.5rem)]">
                <div class="absolute bottom-0 left-0 w-full h-1 bg-red-600 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                <div class="w-14 h-14 bg-red-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-red-600 transition-colors duration-300">
                    <svg class="w-8 h-8 text-red-600 group-hover:text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Fast-Moving Inventory</h3>
                <p class="text-gray-600 leading-relaxed text-sm">Backed by active marketing and brand recall</p>
            </div>

            <div class="group bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 relative overflow-hidden w-full md:w-[calc(50%-1rem)] lg:w-[calc(33.333%-1.5rem)]">
                <div class="absolute bottom-0 left-0 w-full h-1 bg-red-600 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                <div class="w-14 h-14 bg-red-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-red-600 transition-colors duration-300">
                    <svg class="w-8 h-8 text-red-600 group-hover:text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Assured Region-wise Exclusivity</h3>
                <p class="text-gray-600 leading-relaxed text-sm">Limited slots available</p>
            </div>

        </div>
    </div>
</section>

<section class="lg:py-16 md:py-10 py-8 bg-white" id="product">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <span
            class="inline-block mb-5 px-5 py-2 text-sm font-semibold rounded-full bg-gradient-to-r from-[#6E6E6E] to-[#3C3C3C] text-white tracking-wide uppercase">
            Benefits
        </span>

        <h2 class="text-3xl md:text-4xl lg:text-5xl font-medium text-gray-900 mb-16 text-center">
            Benefits Over <span class="text-red-600">Traditional Products</span>
        </h2>
    </div>

    <div class="max-w-6xl overflow-hidden rounded-2xl shadow-xl border border-gray-200 bg-white container mx-auto">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-900 text-white">
                        <th class="p-5 font-semibold uppercase text-sm tracking-wider">Feature</th>
                        <th class="p-5 font-semibold uppercase text-sm tracking-wider">Cement</th>
                        <th class="p-5 font-semibold uppercase text-sm tracking-wider bg-red-600 text-center">Bull Strong Adhesive</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="p-5 font-medium text-gray-700">Bonding Strength</td>
                        <td class="p-5 text-gray-500">Low</td>
                        <td class="p-5 text-center font-bold text-green-600 bg-red-50/50">✅ High</td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="p-5 font-medium text-gray-700">Curing Required</td>
                        <td class="p-5 text-gray-500">Yes</td>
                        <td class="p-5 text-center font-bold text-red-600 bg-red-50/50">❌ No</td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="p-5 font-medium text-gray-700">Crack Resistance</td>
                        <td class="p-5 text-gray-500">Low</td>
                        <td class="p-5 text-center font-bold text-green-600 bg-red-50/50">✅ Yes</td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="p-5 font-medium text-gray-700">Finish Quality</td>
                        <td class="p-5 text-gray-500">Uneven</td>
                        <td class="p-5 text-center font-bold text-green-600 bg-red-50/50">✅ Smooth & Consistent</td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="p-5 font-medium text-gray-700">Time & Labour</td>
                        <td class="p-5 text-gray-500">❌ No</td>
                        <td class="p-5 text-center font-bold text-green-600 bg-red-50/50">✅ Yes</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- <div class="mt-10 text-center">
        <button class="bg-red-600 hover:bg-red-700 text-white px-8 py-4 rounded-full font-bold text-lg shadow-lg hover:shadow-red-200 transition-all transform hover:-translate-y-1">
            Switch to smarter construction with Bull Strong
        </button>
    </div> -->
    </div>
</section>

<section class="lg:py-20 md:py-10 py-8 bg-gray-50" id="contactus">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-center gap-12">
            <div class="w-full lg:w-1/2 lg:order-1 order-2">
                <div class="relative">
                    <div class="absolute -top-4 -left-4 w-24 h-24 bg-red-100 rounded-full -z-10"></div>
                    <img src="images/distributors/contact-us.png" alt="contact" class="rounded-2xl shadow-2xl w-full object-cover">
                    <div class="absolute -bottom-4 -right-4 w-32 h-32 bg-gray-100 rounded-full -z-10"></div>
                </div>
            </div>

            <div class="w-full lg:w-1/2 lg:order-2 order-1">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-medium text-gray-900 mb-10">
                    Get a <span class="text-red-600 italic">FREE</span> Product
                    <span class="md:text-2xl text-3xl font-medium text-gray-600">Sample or Expert Consultation</span>
                </h2>
                <form action="send-mail.php" method="post" class="space-y-5 bg-white p-8 rounded-3xl border border-gray-100 shadow-xl">
                    <input type="hidden" name="form_type" value="distributor">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex flex-col gap-1">
                            <label for="fullname" class="text-xs font-bold uppercase tracking-wider text-gray-500 ml-1">Full Name</label>
                            <input type="text" id="fullname" name="fullname" required
                                class="w-full border-b-2 border-gray-200 bg-gray-50/50 py-3 px-3 rounded-t-lg outline-none focus:border-red-600 focus:bg-white transition-all"
                                placeholder="Enter your name">
                        </div>

                        <div class="flex flex-col gap-1">
                            <label for="phone" class="text-xs font-bold uppercase tracking-wider text-gray-500 ml-1">Phone Number</label>
                            <input type="tel" id="phone" name="phone" required
                                class="w-full border-b-2 border-gray-200 bg-gray-50/50 py-3 px-3 rounded-t-lg outline-none focus:border-red-600 focus:bg-white transition-all"
                                placeholder="+91 ..." maxlength="11" minlength="10">
                        </div>
                    </div>

                    <div class="flex flex-col gap-1">
                        <label for="city" class="text-xs font-bold uppercase tracking-wider text-gray-500 ml-1">City / Location</label>
                        <input type="text" id="city" name="city" required
                            class="w-full border-b-2 border-gray-200 bg-gray-50/50 py-3 px-3 rounded-t-lg outline-none focus:border-red-600 focus:bg-white transition-all"
                            placeholder="Enter your city">
                    </div>

                    <div class="py-2">
                        <span class="text-xs font-bold uppercase tracking-wider text-gray-500 block mb-3 ml-1">I am a:</span>
                        <div class="flex flex-wrap gap-4">
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="radio" name="user_type" value="Contractor" class="accent-red-600 w-4 h-4">
                                <span class="text-gray-700 font-medium group-hover:text-red-600 transition-colors">Contractor</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="radio" name="user_type" value="Builder" class="accent-red-600 w-4 h-4">
                                <span class="text-gray-700 font-medium group-hover:text-red-600 transition-colors">Builder</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="radio" name="user_type" value="Architect" class="accent-red-600 w-4 h-4">
                                <span class="text-gray-700 font-medium group-hover:text-red-600 transition-colors">Architect</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="radio" name="user_type" value="Homeowner" class="accent-red-600 w-4 h-4">
                                <span class="text-gray-700 font-medium group-hover:text-red-600 transition-colors">Homeowner</span>
                            </label>
                        </div>
                    </div>

                    <div class="flex flex-col gap-1">
                        <label for="interest" class="text-xs font-bold uppercase tracking-wider text-gray-500 ml-1">Interest</label>
                        <select id="interest" name="interest"
                            class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-red-600 outline-none transition-all cursor-pointer">
                            <option value="Wall Care">Wall Care</option>
                            <option value="Tile Care">Tile Care</option>
                        </select>
                    </div>

                    <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-4 rounded-xl shadow-lg hover:shadow-red-200 transition-all active:scale-[0.98] mt-4">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>


<section class="lg:py-20 md:py-10 py-8 bg-white">
    <div class="max-w-3xl mx-auto px-4">
        <h2 class="text-3xl font-semibold text-center mb-12">Frequently Asked <span class="text-red-600">Questions</span></h2>

        <div class="space-y-4">
            <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm">
                <button class="faq-btn w-full flex items-center justify-between p-6 text-left hover:bg-gray-50 transition-colors group">
                    <span class="font-semibold text-gray-900">Why should I replace cement with Bull Strong tile adhesive?</span>
                    <svg class="w-5 h-5 text-gray-500 group-hover:text-red-600 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-white">
                    <div class="px-6 pb-6 text-gray-600">
                        Bull Strong adhesive offers better bonding, no curing time, and long-lasting durability. It reduces the weight on the structure compared to heavy cement mortar.
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm">
                <button class="faq-btn w-full flex items-center justify-between p-6 text-left hover:bg-gray-50 transition-colors group">
                    <span class="font-semibold text-gray-900">Is your product available across India?</span>
                    <svg class="w-5 h-5 text-gray-500 group-hover:text-red-600 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-white">
                    <div class="px-6 pb-6 text-gray-600">
                        Yes, we deliver PAN India and have dealer support in major cities.
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm">
                <button class="faq-btn w-full flex items-center justify-between p-6 text-left hover:bg-gray-50 transition-colors group">
                    <span class="font-semibold text-gray-900">Do you offer expert consultation for large projects?</span>
                    <svg class="w-5 h-5 text-gray-500 group-hover:text-red-600 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-white">
                    <div class="px-6 pb-6 text-gray-600">
                        Absolutely. Our technical team is ready to assist you with on-site evaluations and product recommendations.
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    const slider = document.getElementById('slider');
    const slides = slider.children;
    const nextBtn = document.getElementById('next');
    const prevBtn = document.getElementById('prev');
    const dots = document.querySelectorAll('.dot-container');
    const progressBars = document.querySelectorAll('.progress-bar');

    let currentIndex = 0;
    let slideInterval;
    const duration = 5000; // 5 seconds per slide
    let startTime;
    let elapsed = 0;

    function updateSlider() {
        slider.style.transform = `translateX(-${currentIndex * 100}%)`;
        resetProgressBars();
        startProgress();
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        updateSlider();
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        updateSlider();
    }

    // Progress Bar Logic
    function resetProgressBars() {
        progressBars.forEach(bar => bar.style.width = '0%');
    }

    function startProgress() {
        cancelAnimationFrame(slideInterval);
        startTime = performance.now();

        function animate() {
            const now = performance.now();
            const progress = ((now - startTime) / duration) * 100;

            if (progress < 100) {
                progressBars[currentIndex].style.width = `${progress}%`;
                slideInterval = requestAnimationFrame(animate);
            } else {
                progressBars[currentIndex].style.width = '100%';
                nextSlide();
            }
        }
        slideInterval = requestAnimationFrame(animate);
    }

    // Manual Controls
    nextBtn.addEventListener('click', () => {
        nextSlide();
    });

    prevBtn.addEventListener('click', () => {
        prevSlide();
    });

    dots.forEach((dot, i) => {
        dot.addEventListener('click', () => {
            currentIndex = i;
            updateSlider();
        });
    });

    // Pause on Hover
    slider.parentElement.addEventListener('mouseenter', () => {
        cancelAnimationFrame(slideInterval);
    });

    slider.parentElement.addEventListener('mouseleave', () => {
        // Resume from where it left off would be complex, 
        // so we restart the current slide timer for simplicity.
        startProgress();
    });

    // Start the very first slide
    updateSlider();

    // Keep your existing JS, just add these touch listeners at the end
    let touchStartX = 0;
    let touchEndX = 0;

    slider.addEventListener('touchstart', e => {
        touchStartX = e.changedTouches[0].screenX;
        cancelAnimationFrame(slideInterval); // Pause progress on touch
    }, {
        passive: true
    });

    slider.addEventListener('touchend', e => {
        touchEndX = e.changedTouches[0].screenX;
        handleGesture();
        startProgress(); // Resume progress
    }, {
        passive: true
    });

    function handleGesture() {
        if (touchStartX - touchEndX > 50) {
            nextSlide(); // Swiped Left
        }
        if (touchEndX - touchStartX > 50) {
            prevSlide(); // Swiped Right
        }
    }

    document.querySelectorAll('.faq-btn').forEach(button => {
        button.addEventListener('click', () => {
            const accordionContent = button.nextElementSibling;
            const icon = button.querySelector('svg');

            // Close other open items (Optional: remove this part if you want multiple open at once)
            document.querySelectorAll('.faq-content').forEach(otherContent => {
                if (otherContent !== accordionContent) {
                    otherContent.style.maxHeight = null;
                    otherContent.previousElementSibling.querySelector('svg').classList.remove('rotate-180');
                }
            });

            // Toggle current item
            icon.classList.toggle('rotate-180');

            if (accordionContent.style.maxHeight) {
                accordionContent.style.maxHeight = null;
            } else {
                // scrollHeight provides the actual height of the content inside
                accordionContent.style.maxHeight = accordionContent.scrollHeight + "px";
            }
        });
    });
</script>

<?php
$content = ob_get_contents();
$active = 'Become Distributor';
ob_end_clean();
require_once("master.php");
?>