<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bull Strong | Construction Materials</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            red: '#ed3136',
                            darkred: '#c81e1e',
                            dark: '#1a1a1a',
                            light: '#f4f4f5',
                            graydark: '#3f3f46',
                            buttondark: '#2a2a2a'
                        }
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="font-sans text-gray-800 bg-white overflow-x-hidden">

    <nav id="navbar" class="fixed w-full z-50 transition-all duration-300 bg-white shadow-md py-2">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <a class="flex-shrink-0 flex items-center cursor-pointer" href="index.php">
                    <img src="images/logo-bull-strong.png" alt="">
                </a>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="about.php" class="text-gray-700 hover:text-brand-red font-semibold transition">About</a>

                    <div class="relative group py-6">
                        <button
                            class="text-gray-700 group-hover:text-brand-red font-semibold transition flex items-center gap-1">
                            Products <i class="fa-solid fa-chevron-down text-xs"></i>
                        </button>
                        <div
                            class="absolute top-full left-0 w-48 bg-white shadow-xl rounded-b-lg border-t-2 border-brand-red opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top translate-y-2 group-hover:translate-y-0">
                            <a href="#"
                                class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-brand-red">Wall
                                Putty</a>
                            <a href="#"
                                class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-brand-red">Emulsions</a>
                            <a href="#"
                                class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-brand-red">Tile
                                Adhesives</a>
                        </div>
                    </div>

                    <a href="#blog" class="text-gray-700 hover:text-brand-red font-semibold transition">Blog</a>
                    <a href="#" class="text-gray-700 hover:text-brand-red font-semibold transition">Become
                        Distributor</a>
                    <a href="#contact"
                        class="bg-brand-red hover:bg-brand-darkred text-white px-6 py-2.5 rounded-lg font-bold transition transform hover:scale-105 shadow-lg shadow-red-500/30">Contact
                        Us</a>
                </div>

                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-gray-700 hover:text-brand-red focus:outline-none">
                        <i class="fa-solid fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <div id="mobile-menu" class="hidden md:hidden bg-white border-t absolute w-full shadow-xl">
            <div class="px-4 pt-2 pb-6 space-y-1">
                <a href="#"
                    class="block px-3 py-3 text-base font-semibold text-gray-700 hover:bg-gray-50 hover:text-brand-red rounded-md">Home</a>
                <a href="#about"
                    class="block px-3 py-3 text-base font-semibold text-gray-700 hover:bg-gray-50 hover:text-brand-red rounded-md">About</a>
                <a href="#products"
                    class="block px-3 py-3 text-base font-semibold text-gray-700 hover:bg-gray-50 hover:text-brand-red rounded-md">Products</a>
                <a href="#blog"
                    class="block px-3 py-3 text-base font-semibold text-gray-700 hover:bg-gray-50 hover:text-brand-red rounded-md">Blog</a>
                <a href="#"
                    class="block px-3 py-3 text-base font-semibold text-gray-700 hover:bg-gray-50 hover:text-brand-red rounded-md">Become
                    Distributor</a>
                <a href="#contact"
                    class="block px-3 py-3 text-center text-white bg-brand-red hover:bg-brand-darkred rounded-md font-bold mt-4">Contact
                    Us</a>
            </div>
        </div>
    </nav>

    <?php echo $content; ?>

    <footer class="bg-brand-dark text-gray-400 pt-20 pb-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">

                <div>
                    <img src="images/white-logo.png" class="w-[150px]" alt="">
                </div>

                <div>
                    <h4 class="text-white font-bold mb-6 text-lg uppercase tracking-wider">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="index.php" class="hover:text-brand-red transition">Home</a></li>
                        <li><a href="about.php" class="hover:text-brand-red transition">About</a></li>
                        <li><a href="#" class="hover:text-brand-red transition">Product</a></li>
                        <li><a href="#" class="hover:text-brand-red transition">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-6 text-lg uppercase tracking-wider">Contact Info</h4>
                    <ul class="space-y-4">
                        <li class="flex gap-3">
                            <i class="fa-solid fa-location-dot mt-1 text-white"></i>
                            <span>123 Industrial Area, Phase 4, <br>New Delhi, India 110020</span>
                        </li>
                        <li class="flex gap-3 items-center">
                            <i class="fa-solid fa-phone text-white"></i>
                            <span>+91 1800-123-4567 (Toll Free)</span>
                        </li>
                        <li class="flex gap-3 items-center">
                            <i class="fa-solid fa-envelope text-white"></i>
                            <span>info@bullstrong.in</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-6 text-lg uppercase tracking-wider">Follow Us</h4>
                    <div class="flex gap-4">
                        <a href="#"
                            class="w-10 h-10 rounded-lg bg-white text-black flex items-center justify-center hover:bg-[#ed3136] hover:text-white transition"><i
                                class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"
                            class="w-10 h-10 rounded-lg bg-white text-black flex items-center justify-center hover:bg-[#ed3136] hover:text-white transition"><i
                                class="fa-brands fa-twitter"></i></a>
                        <a href="#"
                            class="w-10 h-10 rounded-lg bg-white text-black flex items-center justify-center hover:bg-[#ed3136] hover:text-white transition"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="#"
                            class="w-10 h-10 rounded-lg bg-white text-black flex items-center justify-center hover:bg-[#ed3136] hover:text-white transition"><i
                                class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center text-sm">
                <p>&copy; 2024 Bull Strong Industries. All rights reserved.</p>
                <div class="flex gap-4 mt-4 md:mt-0">
                    <a href="#" class="hover:text-white transition">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>


    <!-- Work -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const referenceElement = document.getElementById('reference-element');
            const paginationContainer = document.getElementById('pagination-container');
            let swiperInstance;

            function getLeftOffset() {
                // Added a quick safety check in case the reference element is missing
                return referenceElement ? referenceElement.getBoundingClientRect().left : 0;
            }

            function initSwiper() {
                const offset = getLeftOffset();
                if (paginationContainer) {
                    paginationContainer.style.paddingLeft = `${offset}px`;
                }

                swiperInstance = new Swiper('.mySwiper', {
                    // Changed to TRUE for infinite circular looping
                    loop: true,

                    slidesOffsetBefore: offset,
                    slidesOffsetAfter: 20,
                    speed: 800,

                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false,
                    },

                    pagination: {
                        el: '.custom-pagination',
                        clickable: true,
                    },

                    breakpoints: {
                        0: { slidesPerView: 1.2, spaceBetween: 16 },
                        640: { slidesPerView: 2.2, spaceBetween: 20 },
                        1024: { slidesPerView: 3.5, spaceBetween: 24 },
                        1280: { slidesPerView: 4.5, spaceBetween: 32 },
                    },

                    // Remove the initial-state class once the slider starts doing anything
                    on: {
                        sliderFirstMove: function () {
                            const swiperEl = document.querySelector('.mySwiper');
                            if (swiperEl) swiperEl.classList.remove('initial-state');
                        },
                        slideChangeTransitionStart: function () {
                            const swiperEl = document.querySelector('.mySwiper');
                            if (swiperEl) swiperEl.classList.remove('initial-state');
                        }
                    }
                });

                // --- NEW CODE: Scroll Observer ---

                // 1. Immediately stop autoplay on load so it waits for the user to scroll
                swiperInstance.autoplay.stop();

                // 2. Set up the Intersection Observer
                const sliderElement = document.querySelector('.mySwiper');

                if (sliderElement) {
                    const observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            // If the user scrolls and the slider is on screen
                            if (entry.isIntersecting) {
                                swiperInstance.autoplay.start();
                            } else {
                                // Pause it when they scroll past to save browser resources
                                swiperInstance.autoplay.stop();
                            }
                        });
                    }, {
                        threshold: 0.2 // 0.2 means it triggers when 20% of the slider is visible
                    });

                    // Start watching the slider
                    observer.observe(sliderElement);
                }
            }

            initSwiper();

            window.addEventListener('resize', () => {
                if (swiperInstance) {
                    const newOffset = getLeftOffset();
                    swiperInstance.params.slidesOffsetBefore = newOffset;
                    if (paginationContainer) {
                        paginationContainer.style.paddingLeft = `${newOffset}px`;
                    }
                    swiperInstance.update();
                }
            });
        });
    </script>


    <!-- Work video -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            let videoSwiperInstance;

            // Function to dynamically measure the left margin of your site's container
            function getStartOffset() {
                const guide = document.getElementById('video-start-guide');
                if (guide) {
                    return guide.getBoundingClientRect().left;
                }
                return 0; // fallback
            }

            function initVideoSwiper() {
                const startOffset = getStartOffset();

                videoSwiperInstance = new Swiper('.my-video-slider', {
                    loop: true,
                    grabCursor: true,

                    // Apply the calculated distance to push the first slide inward
                    slidesOffsetBefore: startOffset,

                    // --- NEW: Slows down the actual sliding animation (1000ms = 1 second) ---
                    speed: 1000,

                    // Configure autoplay to pause longer so users can watch the video
                    autoplay: {
                        // --- UPDATED: Pauses for 4.5 seconds (4500ms) before moving to the next slide ---
                        delay: 4500,
                        disableOnInteraction: false,
                    },

                    breakpoints: {
                        0: { slidesPerView: 1.5, spaceBetween: 16 },
                        640: { slidesPerView: 2.5, spaceBetween: 16 },
                        1024: { slidesPerView: 4, spaceBetween: 24 },
                        1280: { slidesPerView: 5, spaceBetween: 24 }
                    },

                    // When the slider starts moving, we remove the 'initial-state-video' class
                    // so the clones magically appear, creating a perfect infinite loop.
                    on: {
                        sliderFirstMove: function () {
                            const swiperEl = document.querySelector('.my-video-slider');
                            if (swiperEl) swiperEl.classList.remove('initial-state-video');
                        },
                        slideChangeTransitionStart: function () {
                            const swiperEl = document.querySelector('.my-video-slider');
                            if (swiperEl) swiperEl.classList.remove('initial-state-video');
                        }
                    }
                });

                // IMMEDIATELY STOP autoplay on load (so it waits for the scroll)
                videoSwiperInstance.autoplay.stop();

                // ---------------------------------------------------------
                // Intersection Observer to start slider on scroll
                // ---------------------------------------------------------
                const sliderElement = document.querySelector('.my-video-slider');

                if (sliderElement) {
                    const observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            // If the slider comes into the viewport (even 20% of it)
                            if (entry.isIntersecting) {
                                videoSwiperInstance.autoplay.start();
                            } else {
                                // Optional but recommended: Pause it again if the user scrolls past it to save CPU
                                videoSwiperInstance.autoplay.stop();
                            }
                        });
                    }, {
                        threshold: 0.2 // Triggers when 20% of the slider is visible on screen
                    });

                    // Tell the observer to watch our slider
                    observer.observe(sliderElement);
                }
            }

            // Initialize on load
            initVideoSwiper();

            // Ensure the alignment updates perfectly if the user resizes their browser window
            window.addEventListener('resize', () => {
                if (videoSwiperInstance) {
                    const newOffset = getStartOffset();
                    videoSwiperInstance.params.slidesOffsetBefore = newOffset;
                    videoSwiperInstance.update();
                }
            });

        });
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', () => {

            // --- Mobile Menu Toggle ---
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');
            const icon = btn.querySelector('i');

            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
                if (menu.classList.contains('hidden')) {
                    icon.classList.remove('fa-xmark');
                    icon.classList.add('fa-bars');
                } else {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-xmark');
                }
            });

            // --- Sticky Navbar ---
            const navbar = document.getElementById('navbar');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    navbar.classList.add('py-0');
                    navbar.classList.remove('py-2');
                } else {
                    navbar.classList.add('py-2');
                    navbar.classList.remove('py-0');
                }
            });

            // --- Product Slider Controls ---
            const sliderTrack = document.getElementById('product-track');
            const prevProdBtn = document.getElementById('prev-prod');
            const nextProdBtn = document.getElementById('next-prod');

            const scrollAmount = () => {
                const card = sliderTrack.querySelector('div');
                return card.offsetWidth + 24;
            };

            if (prevProdBtn && nextProdBtn && sliderTrack) {
                prevProdBtn.addEventListener('click', () => {
                    sliderTrack.scrollBy({ left: -scrollAmount(), behavior: 'smooth' });
                });
                nextProdBtn.addEventListener('click', () => {
                    sliderTrack.scrollBy({ left: scrollAmount(), behavior: 'smooth' });
                });
            }

            // --- Number Counter Animation ---
            const statsSection = document.getElementById('stats');
            const counters = document.querySelectorAll('.counter');

            if (statsSection && counters.length > 0) {
                const animateCounters = () => {
                    counters.forEach(counter => {
                        const target = +counter.getAttribute('data-target');
                        const speed = 50;

                        const updateCount = () => {
                            const count = +counter.innerText;
                            const inc = target / speed;

                            if (count < target) {
                                counter.innerText = Math.ceil(count + inc);
                                setTimeout(updateCount, 30);
                            } else {
                                counter.innerText = target;
                                if (target === 3500 || target === 4226) {
                                    counter.innerText = target + '+';
                                }
                            }
                        };
                        updateCount();
                    });
                };

                const counterObserver = new IntersectionObserver((entries, observer) => {
                    const [entry] = entries;
                    if (entry.isIntersecting) {
                        animateCounters();
                        observer.unobserve(statsSection);
                    }
                }, { threshold: 0.5 });

                counterObserver.observe(statsSection);
            }

            // --- Scroll Animations (Intersection Observer) ---
            const revealElements = document.querySelectorAll('.reveal');

            const revealOptions = {
                threshold: 0.15,
                rootMargin: "0px 0px -50px 0px"
            };

            const revealOnScroll = new IntersectionObserver(function (entries, observer) {
                entries.forEach(entry => {
                    if (!entry.isIntersecting) return;
                    entry.target.classList.add('active');
                    observer.unobserve(entry.target);
                });
            }, revealOptions);

            revealElements.forEach(el => {
                revealOnScroll.observe(el);
            });

        });
    </script>

    <!-- testimonial -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const track = document.getElementById('slider-track');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const sliderSection = document.getElementById('testimonial-section');

            let isTransitioning = false;
            let autoSlideInterval;
            const autoSlideDelay = 4000; // 4 seconds

            // Function to get the dynamic width of a single card
            function getCardWidth() {
                return track.firstElementChild.offsetWidth;
            }

            // Move to the next slide
            function slideNext() {
                if (isTransitioning) return;
                isTransitioning = true;
                const cardWidth = getCardWidth();

                // Apply transition and move track
                track.style.transition = 'transform 0.5s ease-in-out';
                track.style.transform = `translateX(-${cardWidth}px)`;

                // Wait for transition to end
                track.addEventListener('transitionend', function onNextEnd() {
                    track.removeEventListener('transitionend', onNextEnd);

                    // DOM Manipulation: Move the first card to the end
                    track.appendChild(track.firstElementChild);

                    // Instantly reset the transform to maintain seamless visual loop
                    track.style.transition = 'none';
                    track.style.transform = 'translateX(0)';

                    // Allow next click
                    isTransitioning = false;
                });
            }

            // Move to the previous slide
            function slidePrev() {
                if (isTransitioning) return;
                isTransitioning = true;
                const cardWidth = getCardWidth();

                // DOM Manipulation: Move the last card to the front instantly
                track.prepend(track.lastElementChild);

                // Offset the track back instantly so it visually stays in the same place
                track.style.transition = 'none';
                track.style.transform = `translateX(-${cardWidth}px)`;

                // Force a browser reflow so the instant change registers before animating
                track.offsetHeight;

                // Animate to 0 (sliding the newly prepended card into view)
                track.style.transition = 'transform 0.5s ease-in-out';
                track.style.transform = 'translateX(0)';

                // Cleanup
                track.addEventListener('transitionend', function onPrevEnd() {
                    track.removeEventListener('transitionend', onPrevEnd);
                    isTransitioning = false;
                });
            }

            // Auto-slide functionality
            function startAutoSlide() {
                autoSlideInterval = setInterval(slideNext, autoSlideDelay);
            }

            function stopAutoSlide() {
                clearInterval(autoSlideInterval);
            }

            // Event Listeners for Buttons
            nextBtn.addEventListener('click', () => {
                slideNext();
                stopAutoSlide();
                startAutoSlide(); // Reset timer on manual click
            });

            prevBtn.addEventListener('click', () => {
                slidePrev();
                stopAutoSlide();
                startAutoSlide(); // Reset timer on manual click
            });

            // Pause auto-slide on hover
            sliderSection.addEventListener('mouseenter', stopAutoSlide);
            sliderSection.addEventListener('mouseleave', startAutoSlide);

            // Handle window resize gracefully
            window.addEventListener('resize', () => {
                track.style.transition = 'none';
                track.style.transform = 'translateX(0)';
            });

            // Initialize auto-sliding
            startAutoSlide();
        });
    </script>
</body>

</html>